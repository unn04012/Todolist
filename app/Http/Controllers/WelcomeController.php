<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __construct(){
      $this->middleware('web');
    }

    public function index(){
      $uc = 0; // User::count();
      $pc = 0; // Project::count();
      $tc = 0; // Task::count();

      $total = [
        'user' => $uc,
        'project' => $pc,
        'task' => $tc,
      ];

      return view('welcome')->with('total', $total);
    }
}
