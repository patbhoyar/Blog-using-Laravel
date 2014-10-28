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
        <span class="authorPics">
            <a href="http://localhost:8888/projects/Blog/public/index.php/author/1">
                <img src="{{ $article['author_pic'] }}" alt=""/>
            </a>
        </span>
    </div>

    <div class="articleSyn">{{ Util::compacter($article['body']) }}</div>
</div>

@endforeach


@stop