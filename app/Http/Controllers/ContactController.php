<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use App\Models\ContactContent;

class ContactController extends Controller
{
  public function index()
  {
    $contactContent = ContactContent::latest()->get();
    return view('contact', ['content' => $contactContent]);
  }
  public function store()
  {
    $submit = new Submission();
    $submit->first_name = request('first-name');
    $submit->last_name = request('last-name');
    $submit->title = request('title');
    $submit->email = request('email');
    $submit->message = request('message');

    $submit->save();
    return redirect('/contact')->with('message', 'Your Contact Form has been submitted!');
  }
}