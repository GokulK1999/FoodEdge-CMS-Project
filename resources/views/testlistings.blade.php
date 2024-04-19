<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!--
{{-- <h1><?php echo $heading; ?></h1>
<?php foreach($listings as $listing): ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description']; ?></p>
    <?php endforeach;?> --}}
-->


@unless(count($listings)==0)
<h1 class = "fa-solid">{{$heading}}</h1>
@foreach($listings as $listing)
    <h2>{{$listing['title']}}</h2>
    <p>{{$listing['description']}}</p>
@endforeach
@php
    $test = "abcdefg"
@endphp
{{$test}}
@endunless
