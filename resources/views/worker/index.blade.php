@extends('layouts.app')
@section('content')
    <div class="m-3">
        <router-link :to="{ name: 'home' }">Home</router-link>&nbsp;&nbsp;&nbsp;
        <router-link :to="{ name: 'all' }">All</router-link>&nbsp;&nbsp;&nbsp;
        <router-link :to="{ name: 'create' }">Add</router-link>&nbsp;&nbsp;&nbsp;
    </div>
    <router-view></router-view>


@endsection
