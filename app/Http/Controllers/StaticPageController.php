<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class StaticPageController extends Controller
{
  public function privacyPolicy()
  {
    return view('static_pages.privacy');
  }

  public function workWithUs()
  {
    return view('static_pages.work_with_us');

  }
  public function faq()
  {
    return view('static_pages.faq');

  }
  public function course()
  {
    return view('static_pages.course');

  }
  public function afterCourse()
  {
    return view('static_pages.after_course');

  }
}
