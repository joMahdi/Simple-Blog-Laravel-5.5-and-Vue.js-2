<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ExperienceController extends Controller
{

	
    public function getExperience(){
    	$experiences = Experience::latest()->get();
    	return $experiences;
    }

     public function getExperience2($id){
    	$experiences = Experience::Find($id);
    	return $experiences;
    }

    public function addExperience(Request $request){

    	$e = new Experience;

    	$e->title = $request->title;
    	$e->content = $request->content;

    	$e->save();

    	return Response()->json(['etat' => true, 'id' => $e->id]);
    }

    public function updateExperience(Request $request){

    	$e = Experience::Find($request->id);

    	$e->title = $request->title;
    	$e->content = $request->content;

    	$e->save();

    	return Response()->json(['etat' => true]);
    }


    public function deleteExperience($id){

    	$e = Experience::Find($id);

    	$e->delete();

    	return Response()->json(['etat' => true]);
    }

}
