@extends('layouts.layout')

<!-- Inside the head div of the layouts page -->
@section('head')
<title>TechChallenge | Contact</title>
<link rel="stylesheet" href="/css/contact.css">

@endsection

<!-- Contact Link, will be swapped out to "home" in the Contact page -->
@section('link')
<li class="home-link"><a href="/home">home</a></li>
@endsection

<?php
$res = file_get_contents("https://api.mwi.dev/content/contact");
$data = json_decode($res);

$array = $data->data[0];


// ANCHOR: TITLE
$title = $array->title;
// Gets everything until the first token/character (second argument)
$firstWord = strtok($title, " ");
// Explodes and puts each string separated by a space into an array
$secondWord = explode(" ", $title);

// ANCHOR: Content
$content = $array->content;
$sentence = explode(". ", $content);
?>

@if(session('message'))
<p class="message">{{session('message')}}</p>
@endif

@section('content')

<div class="background-gray"></div>

<body>
  <div class="sections">
    <section class="left-content">
      <div>
        <h1><span class="heading-underline">{{$firstWord}}</span> {{$secondWord[1]}}</h1>
        <p>{{$sentence[0]}}.</p><br>
        <p>{{$sentence[1]}}. {{$sentence[2]}}</p>
      </div>
    </section>
    <section class="right-content">
      <div class="content">
        <h2>Heading Two</h2>
        <form action="/contact" method="POST">
          @csrf
          <div>
            <input type="text" id="first-name" name="first-name" placeholder="First Name">
            <input type="text" id="last-name" name="last-name" placeholder="Last Name">
          </div>
          <div>
            <input type="text" id="title" name="title" placeholder="Title">
            <input type="email" id="email" name='email' placeholder="Email" required>
          </div>
          <div>
            <textarea name="message" id="textarea" cols="30" rows="10" placeholder="Message"></textarea>
          </div>
          <div>
            <button>Submit</button>
          </div>


        </form>
      </div>
    </section>
  </div>
</body>

@endsection