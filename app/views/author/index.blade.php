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
    <span class="authorPics">
        <?php
            $pic = Util::getDataURI('images/'.$author['picPath']);
        ?>
        <a href="http://localhost:8888/projects/Blog/public/index.php/author/{{$author['id']}}">
            <img src="{{ $pic }}" alt=""/>
        </a>
    </span>
</div>

@endforeach


@stop
