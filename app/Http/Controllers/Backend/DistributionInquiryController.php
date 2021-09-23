<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Alert\Facades\Alert;
use App\Distribution;

class DistributionInquiryController extends Controller
{
    public function index()
    {
        $distributionInquiries = Distribution::latest()->paginate();

        return view('distribution-inquiry.index', compact('distributionInquiries'));
    }

    public function destroy(Distribution $distribution)
    {
        $distribution->delete();
        Alert::message('Record has been deleted.')->send();
        return redirect()->route('backend.distribution-inquiry.index');
    }

    public function markRead(Request $request)
    {
        Distribution::whereId($request->post('id'))->whereNull('read_at')->update(['read_at' => now()]);
        return response()->json([], 200);
    }
}
