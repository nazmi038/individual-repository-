@extends('app')
@section('title', 'Services')
@section('content')
 <h1>Services</h1>
 <ul>
 @foreach($services as $service)
 <li>{{ $service }} </li>
 @endforeach
 </ul>
@endsection