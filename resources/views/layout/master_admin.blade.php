@extends('layout.navbar_template')

@section('menu1-main')
<a
    class="navbar-link text-font-roboto {{(request()->is('admin/home*')) ? 'active' : ''}}"
    href="/home">
    HOME
</a>
@endsection

@section('menu2-main')
<a
    class="navbar-link text-font-roboto {{(request()->is('admin/event*')) ? 'active' : ''}}"
    href="">
    EVENT
</a>
@endsection

@section('menu3-main')
<a
    class="navbar-link text-font-roboto {{(request()->is('admin/order-history*')) ? 'active' : ''}}"
    href="">
    ADD EVENTS
</a>
@endsection

@section('menu1-side')
<a
    class="navbar-link text-font-roboto {{(request()->is('admin/profile*')) ? 'active' : ''}}"
    href="">
    PROFILE
</a>
@endsection

@section('menu2-side')
<form
    action="/logout"
    method="POST"
    style="display: contents">
    @csrf
    <button
        type="submit"
        class="btn rounded-pill btn-outline-light text-font-roboto text-color-white">
        SIGN OUT
    </button>
</form>
@endsection

@section('body')

@yield('content')

@endsection
