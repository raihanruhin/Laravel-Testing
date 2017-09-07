<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudViewController extends Controller
{
    //
    public function index(){
      $users = \ DB::select('select * from student');
      return view('stud_view',['users'=>$users]);
   }
}
