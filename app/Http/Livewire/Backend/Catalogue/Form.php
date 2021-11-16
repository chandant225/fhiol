<?php

namespace App\Http\Livewire\Backend\Catalogue;

use App\Catalogue;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Form extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $updateMode = false;
    public Catalogue $catalogue;
    public $file;

    protected function rules()
    {
        return [
            'catalogue.title' => 'required',
            'file' => 'required'
        ];
    }

    public function mount(Catalogue $catalogue = null)
    {
        if ($catalogue->exists) {
            $this->updateMode = true;
        } else {
            $catalogue = new Catalogue();
        }
        $this->catalogue = $catalogue;
    }

    public function save()
    {
        $this->validate();
        $this->catalogue->file_path = $this->file->store('catalogues');
        $this->catalogue->save();
        $this->alert('success', 'Record saved');
    }

    public function render()
    {
        return view('livewire.backend.catalogue.form');
    }
}
