<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
  public function index()
  {
    return view('admin.statics_pages.index');
  }
}
