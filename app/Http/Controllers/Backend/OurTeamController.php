<?php

namespace App\Http\Controllers\Backend;

use App\Alert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\OurTeam;
use App\Service\ImageService;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    protected ImageService $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $ourTeams = OurTeam::positioned()->get();

        return view('our-team.index', compact('ourTeams'));
    }

    public function create()
    {
        return $this->showForm(new OurTeam());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'designation' => 'nullable|max:100',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'linkedin_link' => 'nullable',
        ]);

        $ourTeam = OurTeam::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'linkedin_link' => $request->linkedin_link,
            'position' => OurTeam::getNextPosition(),
        ]);

        if ($request->hasFile('photo')) {
            $ourTeam->photo = $this->imageService->swapImage($ourTeam->photo, $request->file('photo'));
            $ourTeam->save();
        }

        Alert::message('Team member added.')->send();

        return redirect()->route('backend.our-team.index');
    }

    public function edit(OurTeam $ourTeam)
    {
        return $this->showForm($ourTeam);
    }

    public function update(Request $request, OurTeam $ourTeam)
    {
        $request->validate([
            'name' => 'required|max:100',
            'designation' => 'nullable|max:100',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'linkedin_link' => 'nullable',
        ]);

        $ourTeam->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'linkedin_link' => $request->linkedin_link,
            'position' => OurTeam::getNextPosition(),
        ]);

        if ($request->hasFile('photo')) {
            $ourTeam->photo = $this->imageService->swapImage($ourTeam->photo, $request->file('photo'));
            $ourTeam->save();
        }

        Alert::message('Team member details Updated.')->send();

        return redirect()->route('backend.our-team.index');
    }

    private function showForm(OurTeam $ourTeam)
    {
        $updateMode = false;
        if ($ourTeam->exists) {
            $updateMode = true;
        }

        return view('our-team.form', compact('ourTeam', 'updateMode'));
    }
}
