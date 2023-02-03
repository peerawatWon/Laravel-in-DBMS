<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListHabitat;
use App\Models\Habitat;

class ListHabitatController extends Controller
{

    public function index(){
        $listHabitats =  ListHabitat::all();
        $Habitats = Habitat::all();
       return view('listhabitat.listhabitatIndex',['listHabitats' => $listHabitats],['habitats' => $Habitats]);

    }

    public function create(){
        $habitats = Habitat::all();
       return view('listhabitat.listhabitatCreate',['habitats' => $habitats]);
    }

    public function save(){
        $listHabitat = new ListHabitat;
        $listHabitat->fname = $_GET['fname'];
        $listHabitat->lname = $_GET['lname'];
        $listHabitat->gender = $_GET['gender'];
        $listHabitat->habitatId = (int)$_GET['habitatId'];
        $listHabitat->save();
        return redirect('/listhabitat/index');
    }

    public function edit($id){
        $listhabitat = ListHabitat::find($id);
        $habitats = Habitat::all();
        return view('listhabitat.listhabitatEdit',['habitats' => $habitats],['listhabitat' => $listhabitat]);
    }

    public function update(){
        $id=(int)$_GET['listhabitatId'];
        $listHabitat = ListHabitat::find($id);
        $listHabitat->fname = $_GET['fname'];
        $listHabitat->lname = $_GET['lname'];
        $listHabitat->gender = $_GET['gender'];
        $listHabitat->habitatId = (int)$_GET['habitatId'];
        $listHabitat->update();
        return redirect('/listhabitat/index');
    }

    public function search(){
        $key=$_GET['key'];
        $listhabitat = ListHabitat::where('fname','LIKE','%'.$key.'%')->get();
        if($listhabitat == "[]"){
            $listhabitat = ListHabitat::where('lname','LIKE','%'.$key.'%')->get();
        }
        $Habitats = Habitat::all();
        return view('listhabitat.listhabitatIndex',['listHabitats' => $listhabitat],['habitats' => $Habitats]);
    }

    public function delete($id){
        $listHabitat = ListHabitat::find($id);
        $listHabitat->delete();
        return redirect('/listhabitat/index');
    }

}
