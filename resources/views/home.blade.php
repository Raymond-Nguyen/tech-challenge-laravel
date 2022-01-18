@extends('layouts.layout')

<!-- Inside the head div of the layouts page -->
@section('head')
<title>TechChallenge | Home</title>
<link rel="stylesheet" href="/css/index.css">
<script src="/js/homepage.js"></script>

@endsection

<!-- Contact Link, will be swapped out to "home" in the Contact page -->
@section('link')
<li class="contact-link"><a href="/contact">contact</a></li>
@endsection


@section('content')

<!-- 110 -->

<body>
  <section>
    <h1 id="loading">Loading...</h1>
    <ul id="contentList" class="contentList"></ul>
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