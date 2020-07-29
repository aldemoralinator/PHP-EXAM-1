@extends('layouts.home')

@section('home-css')
<link rel="stylesheet" href="/css/dashboard.css" />
<link rel="stylesheet" href="/css/components.project-list.css" />
@endsection

@section('home-layout')
<div class="main-content__contacts-container">
    <div class="contacts-container__title"> PERSONAL CONTACTS <br/ > {{ Auth::user()->email }}</div><br/>
    <div class="contact-list">
        @include('components._personal-contact-list')
    </div>
</div>
@endsection