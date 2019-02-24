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
    $students = [

      [
          'name' => 'Alessandro Biagini',
          'age' => 24,
          'azienda' => 'Softec Spa',
          'img' => "https://www.boolean.careers/images/students/biagini.png"
      ],

      [
          'name' => 'Samuel Poma',
          'age' => 26,
          'azienda' => 'Freelance Developer',
          'img' => "https://www.boolean.careers/images/students/poma.png"
      ],

      [
          'name' => 'Davide Lecci',
          'age' => 28,
          'azienda' => 'Facile.it',
          'img' => "https://www.boolean.careers/images/students/lecci.png"
      ],

      [
          'name' => 'Loana Masetti',
          'age' => 35,
          'azienda' => 'Cayenne Web Agency',
          'img' => "https://www.boolean.careers/images/students/masetti.png"
      ],

      [
          'name' => 'Federico Losi',
          'age' => 30,
          'azienda' => 'Facile.it',
          'img' => "https://www.boolean.careers/images/students/losi.png"
      ],

      [
          'name' => 'Ervin Bani',
          'age' => 31,
          'azienda' => 'Fabbrica Digitale',
          'img' => "https://www.boolean.careers/images/students/bani.png"
      ],

      [
          'name' => 'Alessandro Lausdei',
          'age' => 27,
          'azienda' => 'One Day',
          'img' => "https://www.boolean.careers/images/students/lausdei.png"
      ],

    ];
    return view('static_pages.students', compact('students'));

  }

}
