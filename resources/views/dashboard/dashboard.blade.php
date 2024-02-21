@extends('layouts.mainDahs')


@section('content')
   
@if(auth()->check())
<h3>
Hi, {{ auth()->user()->name }}

</h3>
            
        @else
            <a class="nav-link" href="/login">Login</a>
        @endif
@endsection
