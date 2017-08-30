<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonsController extends Controller
{
  
  public function person_edit()
  {
    return view('home.Persons.person_edit');
  }

  public function address_edit()
  {
    return view('home.Persons.address_edit');
  }

  public function bank_edit()
  {
    return view('home.Persons.bank_edit');
  }


}
