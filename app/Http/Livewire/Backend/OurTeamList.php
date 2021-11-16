<?php

namespace App\Http\Livewire\Backend;

use App\OurTeam;
use App\Service\ImageService;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class OurTeamList extends Component
{
    use LivewireAlert;
    public $sortMode = false;

    public function render()
    {
        $ourTeams = OurTeam::positioned()->get();

        return view('livewire.backend.our-team-list', compact('ourTeams'));
    }

    public function deleteRecord(OurTeam $ourTeam)
    {
        $imageService = new ImageService();
        $imageService->unlinkImage($ourTeam->photo);
        $ourTeam->delete();
        $this->alert('success', 'Record deleted');
    }

    public function sortData($items)
    {
        foreach ($items as $item) {
            OurTeam::where('id', $item['value'])->update(['position' => $item['order']]);
        }
    }
}
