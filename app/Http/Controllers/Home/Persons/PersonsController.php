<?php

namespace App\Http\Controllers\Home\Persons;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonsController extends Controller
{

  public function edit()
  {
    return view('home.Persons.person_edit');
  }

  public function update(Request $request,$id)
  {
    // dd($request->all());
    $this -> post_upload($request->all());
  }

  public function post_upload($request){

    $input = $request;
    $rules = array(
      'file' => 'image|max:3000',
    );

    $validation = Validator::make($input, $rules);

    if ($validation->fails())
    {
      return Response::make($validation->errors->first(), 400);
    }

    $file = $request['file'];

    $extension = $file -> getClientOriginalExtension();
    $directory = 'public/uploads/'.sha1(time());
    $filename = sha1(time().time()).".{$extension}";

    $upload_success = $file->move($directory, $filename);

    if( $upload_success ) {
      return "{'success', 200}";
    } else {
      return "{'success', 400}";
    }
  }
}
