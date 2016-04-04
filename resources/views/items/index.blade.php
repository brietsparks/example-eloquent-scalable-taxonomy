@extends('app')

@section('content')
    @if(count($subTypes) > 0)
    <div class="row">
        <div class="col-md-12">
            <h1>{{ucwords($type)}} Categories</h1>
            <ul>
                @foreach($subTypes as $subType)
                    <li>
                        <a href="{{ action('ItemTaxonomyController@index', [$subType]) }}">
                            {{ucwords($subType)}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif


    <h1>All {{ucwords($type)}}</h1>
    <a href="{{Request::url() . '/create' }}">Create a new {{ $type }}</a>
    @foreach($items->chunk(4) as $itemSet)
        <div class="row">
        @foreach($itemSet as $item)
            <li class="col-md-3">
                <h3>
                    <a href="{{ action('ItemTaxonomyController@show', [$type,$item->item_id]) }}">
                        {{ $item->item_name }}
                    </a>
                </h3>

                @include('items/_attributesDisplay')
            </li>
        @endforeach
        </div>
    @endforeach

@stop
