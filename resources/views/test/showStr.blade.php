@extends('layouts.main')
@section( 'content')
    <form action="{{route('test.test2')}}" method="POST">

        <h3>try</h3>

        <p>string</p><input type="text" name="str">

        <input type="submit" value="Send">
    </form>

@endsection
