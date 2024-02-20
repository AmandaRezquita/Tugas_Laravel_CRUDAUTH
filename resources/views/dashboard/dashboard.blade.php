@extends('layouts.mainDahs')


@section('content')
   
<h1>
Hi, {{ auth()->user()->name }}
</h1>
@endsection
