@extends('layouts.master')

@section('header')
    <h1 class="text-center">Create a new cat</h1>
@endsection
@section('content')
    <form action="" method="post">
        <p class="lead">Name of cat</p>
        <input type="text" class="form-control" name="cat_name" placeholder="Name of cat">
        <p class="lead">Date of birth</p>
        <input type="date" class="form-control" name="cat_date" placeholder="mm/dd/yyyy">
        <p class="lead">Breed</p>
        <select name="cat_breed"  class="form-control">
            @foreach($breeds as $list_breed)
                <option value="{{ $list_breed['id'] }}">{{ $list_breed['name'] }}</option>
            @endforeach
        </select>
        <input type="submit" class="form-control btn btn-primary" name="cat_create" value="Create a new cat">
    </form>
@endsection