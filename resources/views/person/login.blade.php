@extends('layouts.main')
@section('content')
    <form action="{{route('person.auth')}}" method="POST">
        @csrf
        <h3>{{$title}}</h3>
        <p>E-mail</p><input type="email" name="email">
        <p>Password</p><input type="password" name="password">

        <input type="submit" value="Send">
    </form>
@endsection
