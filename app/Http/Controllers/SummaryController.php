<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SummaryController extends Controller
{
    public function index(){

        $summary = DB::table('subdistrict')->join('community', 'subdistrict.subdistrictId', '=', 'community.subdistrictId')
        ->join('habitat', 'habitat.communityId', '=', 'community.communityId')->join('listhabitat', 'habitat.habitatId', '=', 'listhabitat.habitatId')
        ->selectRaw('count(listhabitat.listhabitatId) as countPerson, subdistrict.name')
        ->groupBy('subdistrict.name')
        ->get();

        return view('summary.index', ['summary' => $summary]);

    }

}
