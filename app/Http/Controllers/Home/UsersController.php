<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
  public function edit()
  {
    return view('home.users.edit');
  }

  public function password_edit()
  {
    return view('home.users.password_edit');
  }


}
