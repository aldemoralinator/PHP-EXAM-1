@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="/css/layouts.landing.css" />
<link rel="stylesheet" href="/css/form.css" />
@endsection

@section('content')
<div class="main-container">
    <div class="main-container__intro-container">
        <div class="intro-container">
            <div class="intro-container__first">Contacts</div>
            <div class="intro-container__second">Application</div>
            <div class="intro-container__third">A Contacts Application</div>
        </div>
    </div>
    <div class="main-container__auth-container">

        @yield('landing-layout')

    </div>
</div>
@endsection


