@extends('layouts.app')
@section('content')
    <h1>WELCOME TO THE INSERT ADDRESS PAGE</h1>
    <form action="{{route('insert')}}" method="post">
        @csrf
        <input type="text" name="address" placeholder="Your Address Here">
        <input type="submit" value="Add">
    </form>
@endsection