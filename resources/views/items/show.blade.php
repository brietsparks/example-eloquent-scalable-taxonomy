@extends('app')

@section('content')
    <h3>{{ $item->item_name }}</h3>
    <p><a href={{ Request::url() . "/edit"}}>Edit {{$item->item_name}}</a></p>

    @include('items/_attributesDisplay')

@stop