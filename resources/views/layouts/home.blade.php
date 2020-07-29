@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="/css/layouts.home.css">
<link rel="stylesheet" href="/css/form.css" />

@yield('home-css')

@endsection

@section('content')

<div class="main-container">
    <div
        id="main-container__navigation-container" 
        class="main-container__navigation-container"
    >
        <div class="navigation-container__link-container">
            <a 
                href="{{ route('general_contacts') }}" 
                class="
                    {{ (request()->segment(1) == 'general-contacts') ? 'link--active' : '' }}
                    link-container__link"
                >
                GENERAL
            </a>
            <a href="{{ route('personal_contacts') }}" 
                class="
                    {{ (request()->segment(1) == 'personal-contacts') ? 'link--active' : '' }}
                    link-container__link">
                PERSONAL
            </a>
            <a 
                href="{{ route('logout') }}"
                onclick=
                    "
                        event.preventDefault(); 
                        document.getElementById('logout-form').submit();
                    " 
                class="link-container__link"
            >
                Logout
            </a>
            <form 
                id="logout-form" 
                action="{{ route('logout') }}" 
                method="POST" 
                style="display: none;"
            >
                @csrf
            </form>
        </div>
        <div 
            onclick="hideNavigation()"
            class="navigation-container__hide-navigation"
        ></div>
    </div>
    <div class="main-container__main-content" >

        @yield('home-layout')

        <div
            onclick="showNavigation()" 
            class="main-content__show-navigation"
        >
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        
    </div>
</div>

@endsection

@section('script')
<script src="/js/layouts.home.js"></script>
@endsection