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

    <div class="articleSyn">{{ blah($article['body']) }}</div>
</div>

@endforeach


@stop

<?php

function blah($str){

    $x = 200;
    if(substr($str, $x, 1) === " "){
        return substr($str, 0, $x)." ...";
    }else{
        while(substr($str, $x, 1) !== " "){
            $x--;
        }
        return substr($str, 0, $x)." ...";
    }


}

?>