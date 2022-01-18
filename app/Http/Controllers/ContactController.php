<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ContactController extends Controller
{
  public function index()
  {
    return view('contact');
  }
  public function store()
  {
    $client = new Client();

    $url = "https://api.mwi.dev/contact";
    $res = $client->request('POST', $url, [
      'headers' => [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json'
      ],
      'json' => [
        'first_name' => request('first-name'),
        'last_name' => request('last-name'),
        'title' => request('title'),
        'email' => request('email'),
        'message' => request('message')
      ]
    ]);
    echo $res->getBody();
    return redirect('/contact')->with('message', 'Your Contact Form has been submitted!');
  }
}