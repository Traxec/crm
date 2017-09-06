<?php

namespace App\Http\Controllers\Home\Persons;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BanksController extends Controller
{

  public function edit()
  {
    return view('home.Persons.bank_edit');
  }


}
