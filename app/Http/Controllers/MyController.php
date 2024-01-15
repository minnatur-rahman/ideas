<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class MyController extends Controller
{
     public function index()
     {

        $idea = new Idea([
            'content' => 'test',
        ]);
        $idea->save();

        dd(Idea::all());

        return view('dashboard',[
            'idea' =>Idea::all()
        ]);
     }

}
