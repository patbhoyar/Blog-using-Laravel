@extends('master')

<?php
$pageTitle  =   'All Articles';
?>

@section('content')

@foreach($articles as $article)

<div class="articleContainer">
    <div class="articleTitle">
        {{  HTML::link('article/'.$article['article_id'], $article['title']) }}
        <span class="articleAuthor"> by
            {{ HTML::link('author/'.$article['author_id'], $article['author']) }}
        </span>
    </div>

    <div class="articleSyn">{{ $article['body'] }}</div>
</div>

@endforeach


@stop