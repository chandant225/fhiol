<?php

namespace App\Http\Livewire;

use App\ContactUs;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ContactUsList extends Component
{
    use WithPagination;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';
    public $deleteId = null;

    public function confirmDelete($deleteId)
    {
        $this->deleteId = (int)$deleteId;
    }

    public function delete()
    {
        ContactUs::whereId($this->deleteId)->delete();
        $this->alert('success', 'Record deleted successfully');
    }

    public function cancelDelete()
    {
        $this->reset('deleteId');
    }

    public function markViewed(ContactUs $contactUs)
    {
        if (!$contactUs->viewed()) {
            $contactUs->markViewed();
        }
        $this->skipRender();
        die();
    }

    public function render()
    {
        $contactMessages = ContactUs::latest()->paginate();

        return view('livewire.contact-us-list', compact('contactMessages'));
    }
}
