<?php

namespace App\Http\Controllers\Backend;

use App\Catalogue;
use App\Http\Controllers\Controller;
use App\Alert\Facades\Alert;

class CatalogueController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::latest()->get();
        return view('catalogue.index', compact('catalogues'));
    }

    public function create()
    {
        return $this->showForm();
    }

    public function edit(Catalogue $catalogue)
    {
        return $this->showForm($catalogue);
    }

    public function destroy(Catalogue $catalogue)
    {
        // do not delete file on soft delete
        // if (Storage::exists($catalogue->file_path)) {
        //     Storage::delete($catalogue->file_path);
        // }
        $catalogue->delete();
        Alert::message('Product has been restored.')->send();
        return redirect()->route('backend.catalogues.index');
    }

    public function showForm(Catalogue $catalogue = null)
    {
        $updateMode = false;
        if (!$catalogue) {
            $catalogue = new Catalogue();
            $updateMode = true;
        }

        return view('catalogue.form', [
            'updateMode' => $updateMode,
            'catalogue' => $catalogue
        ]);
    }
}
