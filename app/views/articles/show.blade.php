@extends('master')
<?php $pageTitle = $article['title']; ?>

@section('content')

    <div class="articleDisplay">
        <div class="articleAuthorOnPage"> written by
            {{ HTML::link('author/'.$article['author_id'], $article['author']) }}
        </div>
        <div class="articleBody">
            {{ $article['body'] }}
        </div>
        <div class="articleImage">
            <img src="{{ Util::getDataURI('images/Sachin.jpg') }}" alt=""/>
        </div>
    </div>




@stop