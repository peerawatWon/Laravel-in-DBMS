<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitat;
use App\Models\Community;

class HabitatController extends Controller
{

    public function index(){
        $habitats =  Habitat::all();

       return view('habitat.habitatIndex',['habitats' => $habitats]);

    }

    public function create(){
        $communitys = Community::all();
       return view('habitat.habitatCreate',['communitys' => $communitys]);
    }

    public function save(){
        $habitat = new habitat;
        $habitat->address = $_GET['address'];
        $habitat->nearTheCoast = $_GET['nearTheCoast'];
        $habitat->communityId =(int)$_GET['communityId'];
        $habitat->save();
        return redirect('/habitat/index');
    }

    public function edit($id){
        $habitat = Habitat::find($id);
        $communitys = Community::all();
        return view('habitat.habitatEdit',['habitat' => $habitat],['communitys' => $communitys]);
    }

    public function search(){
        $key=$_GET['key'];
        $habitat = Habitat::where('address','LIKE','%'.$key.'%')->get();
        return view('habitat.habitatIndex',['habitats' => $habitat]);
    }

    public function update(){
        $id = $_GET['habitatId'];
        $habitat = Habitat::find($id);
        $habitat->address = $_GET['address'];
        $habitat->nearTheCoast = $_GET['nearTheCoast'];
        $habitat->communityId =(int)$_GET['communityId'];
        $habitat->update();
        return redirect('/habitat/index');
    }

    public function delete($id){
        $habitat = Habitat::find($id);
        $habitat->delete();
        return redirect('/habitat/index');
    }

}
