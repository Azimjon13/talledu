@extends('layouts.base')

@section('body')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection

@section('footer')
    @yield('footer_content')
    @yield('footer_scripts')
@endsection
