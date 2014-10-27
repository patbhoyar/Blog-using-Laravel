@extends('master')
<?php $pageTitle = "New Article"; ?>

@section('content')


<div id="articleNameContainer">
    <form action="{{ URL::to('article') }}" method="post">
        <input type="text" placeholder="Article Title" id="newArticleTitleText" name="newArticleTitleText"/>
        <textarea name="newArticleBodyText" id="newArticleBodyText"></textarea>
        <div>Authored By: </div>
        <select name="newSelectAuthor" id="newSelectAuthor">
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Create Article" id="newArticleSubmit"/>
    </form>
</div>

@stop