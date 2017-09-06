<?php

namespace App\Http\Controllers\Home\Persons;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{

  public function edit()
  {
    return view('home.Persons.address_edit');
  }


}
