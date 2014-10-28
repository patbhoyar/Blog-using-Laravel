@extends('master')

<?php

$pageTitle = "All Authors";
?>

@section('content')

@foreach($authors as $author)

<div class="articleContainer">
    <div class="articleTitle">
        {{  HTML::link('author/'.$author['id'], $author['name']) }}
    </div>
</div>

@endforeach


@stop
