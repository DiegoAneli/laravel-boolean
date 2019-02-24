<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class StudentsController extends Controller
{
  public function index()
  {
    $students = config('students');

    return view('static_pages.students', compact('students'));

  }

}
