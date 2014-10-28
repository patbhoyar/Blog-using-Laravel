@extends('master')
<?php $pageTitle = "New Author"; ?>

@section('content')


<div id="articleNameContainer">
    <form action="{{ URL::to('author') }}" method="post">
        <input type="text" placeholder="Author Name" id="newAuthorNameText" name="newAuthorNameText"/>
        <input type="submit" value="Create Author" id="newAuthorSubmit"/>
    </form>
</div>

@stop


