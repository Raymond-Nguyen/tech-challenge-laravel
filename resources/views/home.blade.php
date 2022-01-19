@extends('layouts.layout')

<!-- Inside the head div of the layouts page -->
@section('head')
<title>TechChallenge | Home</title>
<link rel="stylesheet" href="/css/index.css">
<script src="js/homepage.js"></script>


@endsection

<!-- Contact Link, will be swapped out to "home" in the Contact page -->
@section('link')
<li class="contact-link"><a href="/contact">contact</a></li>
@endsection


@section('content')

<?php
// Can mess with this settings as I see fit in case I want to assign more content items on a page.
$limit = 3;
$currentAmount = 1;


?>



<body>
  <section>
    <ul id="contentList" class="contentList">
      @if(count($contentItems) > 0)
      @foreach($contentItems as $contentItem)
      @if($currentAmount > $limit)
      @break
      @endif

      <li>
        <div>
          <div class="imagecontainer">
            <img src="images/Talkie.png" alt="talkieimage">
          </div>
          <h2>{{$contentItem->title}}</h2>
          <p>{{$contentItem->content}}</p>
          <div class="learnmore-div">
            <a href="/learnmore/{{$contentItem->id}}">Learn More</a>
          </div>
        </div>
      </li>
      {{$currentAmount++}}
      @endforeach
      @else
      <h2 class="no-content">Oops! There doesn't seem to be any content here.</h2>
      @endif
    </ul>
  </section>

  <section id="javascript-puzzle">
    <div>
      <h1><span class="heading-underline">Heading</span> One</h1>
      <p class="buttonText">Remove the duplicates in 2 Javascript objects (found in readme), add the results to an array
        and output the list
        of distinct names in an unordered list below this paragraph when <button onclick="puzzle()">this link</button>
        is clicked. If the
        operation ahs been
        completed already, notify the user that this has already been done.</p>
      <ul id="puzzle"></ul>
    </div>

  </section>

</body>

@endsection