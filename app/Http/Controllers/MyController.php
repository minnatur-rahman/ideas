<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
     public function index()
     {

        $users = [

         [
            'name' => 'Alex',
            'age' => 30,
         ],

         [
           'name' => 'Dan',
           'age' => 25,
         ],

         [
            'name' => 'Jhon',
            'age' => 17,
          ]

         ];

         return view(

            'dashboard',
             [
                'userList' => $users
             ]

        );
     }

}
