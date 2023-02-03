<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\Subdistrict;

class CommunityController extends Controller
{

    public function index(){
        $communitys =  Community::all();

       return view('community.communityIndex',['communitys' => $communitys]);

    }

    public function create(){
        $subdistircts = Subdistrict::all();
       return view('community.communityCreate',['subdistircts' => $subdistircts]);
    }

    public function save(){
        $community = new community;
        $community->name = $_GET['name'];
        $community->size = $_GET['size'];
        $community->latitude = $_GET['latitude'];
        $community->longitude = $_GET['longitude'];
        $community->type = $_GET['type'];
        $community->subdistrictId=(int)$_GET['subdistrictId'];
        $community->save();
        return redirect('/community/index');
    }

    public function edit($id){
        $community = Community::find($id);
        $subdistircts = Subdistrict::all();
        return view('community.communityEdit',['community' => $community],['subdistricts' => $subdistircts]);
    }

    public function update(){
        $id=(int)$_GET['communityId'];
        $community = Community::find($id);
        $community->name = $_GET['name'];
        $community->size = $_GET['size'];
        $community->latitude = $_GET['latitude'];
        $community->longitude = $_GET['longitude'];
        $community->type = $_GET['type'];
        $community->subdistrictId=(int)$_GET['subdistrictId'];
        $community->update();
        return redirect('/community/index');
    }

    public function search(){
        $key=$_GET['key'];
        $community = Community::where('name','LIKE','%'.$key.'%')->get();
        return view('community.communityIndex',['communitys' => $community]);
    }

    public function delete($id){
        $community = Community::find($id);
        $community->delete();
        return redirect('/community/index');
    }

}
