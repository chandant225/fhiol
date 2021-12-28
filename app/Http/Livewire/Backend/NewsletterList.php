<?php

namespace App\Http\Livewire\Backend;

use App\Newsletter;
use App\Subscriber;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class NewsletterList extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $paginate = 15;
    protected $paginationTheme = 'bootstrap';

    public $receipients = [];
    public $receipient_list = [];

    public $filter = [
        'subject' => null,
        'status' => true,
        'trashed' => null,
    ];


    function mount(){
        $this->receipient_list=Subscriber::latest()->get();
    }

    public function render()
    {
        $newsletters = Newsletter::query();
        $newsletters = $this->filter($newsletters)
            ->withTrashed()
            ->latest()
            ->paginate($this->paginate);

        return view('livewire.backend.newsletter-list', [
            'newsletters' => $newsletters
        ]);
    }

    private function filter(Builder $newsletters)
    {
        if ($this->filter['subject']) {
            $newsletters = $newsletters->whereName($this->filter['subject']);
        }

        if ($this->filter['status'] != 'all') {
            if ($this->filter['status'] == 'active') {
                $newsletters = $newsletters->active(true);
            }

            if ($this->filter['status'] == 'inactive') {
                $newsletters = $newsletters->active(false);
            }
        }

        if ($this->filter['trashed'] != null) {
            $newsletters = $newsletters->onlyTrashed();
        }

        return $newsletters;
    }

    function toggleStatus($id){
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->status = !$newsletter->status;
        $newsletter->save();
        $this->alert('success','Status changed successfully');
    }

    public function search()
    {
        //
    }

    function sendEmail($newsletter_id){
        $mailLetter=Newsletter::findOrFail($newsletter_id);

        try{
            foreach($this->receipients as $receipient){
                Mail::to($receipient)
                ->queue(new \App\Mail\Newsletter($mailLetter));
            }
            $mailLetter->update(['send_count'=>$mailLetter->send_count+1]);
        }catch (\Exception $e){
            $this->alert('error','Error sending email');
        }

        $this->emit('newsletterSent');
        $this->alert('success','Email sent successfully');
    }


}
