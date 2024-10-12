@extends('layouts.main')
@section('content')
    <form action="{{route('person.store')}}" method="POST">
        @csrf
        <h3>{{$title}}</h3>

        <p>Login</p><input type="text" name="login">
        <p>E-mail</p><input type="email" name="email">
        <p>Password</p><input type="password" name="password">

        <input type="submit" value="Send">
    </form>
@endsection
