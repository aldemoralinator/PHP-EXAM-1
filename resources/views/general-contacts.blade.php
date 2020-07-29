@extends('layouts.home')

@section('home-css')
<link rel="stylesheet" href="/css/dashboard.css" />
<link rel="stylesheet" href="/css/components.project-list.css" />
@endsection

@section('home-layout')
<div class="main-content__contacts-container">
    <div class="contacts-container__title">GENERAL CONTACTS</div><br/>
    <div class="contact-list">
        @include('components._general-contact-list')
    </div>
</div>
@endsection