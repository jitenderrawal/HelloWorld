

<style type="text/css">
    div{
        color: #660066;
        background-color: #86D2B6;
    }

</style>

@extends('layouts.master')



@section('content')
  <h1>Make: {{{ $name }}} </h1>


    <hr/>

    <h3>Employee:</h3>

    Name: <b> {{{$empname}}} </b>

@endsection