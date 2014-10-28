@extends('master')

<?php

$pageTitle = $authorName;
?>

@section('content')

@foreach($articles as $article)

<div class="articleContainer">
    <div class="articleTitle">
        {{  HTML::link('article/'.$article['id'], $article['title']) }}
    </div>

    <div class="articleSyn">{{ Util::compacter($article['body']) }}</div>
</div>

@endforeach


@stop
