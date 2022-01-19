@extends('layouts.layout')

@section('head')
<title>TechChallenge | Learn More</title>
<link rel="stylesheet" href="/css/index.css">

@endsection

@section('link')
<li class="contact-link"><a href="/contact">contact</a></li>
@endsection

<!-- Figured out that I could do this with PHP. -->
<?php

// ANCHOR: Don't need this stuff now that I'm using my own local database.

// $res = file_get_contents("https://api.mwi.dev/content/home");
// $data = json_decode($res);

// $page = $data->data[$slug - 1];

?>

@section('content')

<body>
  <section id="contentArea">
    <div>
      <div class="separator">
        <h1>{{$content->title}}</h1>
      </div>
      <p>{{$content->content}}</p>
    </div>
  </section>
  <div class="back">
    <a href="/home">
      <= Back</a>
  </div>
</body>

@endsection