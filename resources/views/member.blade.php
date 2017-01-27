@extends('layout.master')
@section('title','Halaman Member - myKopsis')
@section('content')
@foreach($members as $member)
  <li><a href="/member/{{$member->ID}}">{{ $member->Username }}</a></li>
@endforeach
@endsection
