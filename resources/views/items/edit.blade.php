@extends('app')

@section('content')
    <h1>New {{ucwords($item->item_name)}}</h1>

    <div class="row">
        <div class="col-md-12">
            {!! Form::model($item,['method' => 'PATCH', 'action' => ['ItemTaxonomyController@update', $item->item_id]]) !!}
            {!! Form::hidden( 'item_type', $item->item_type) !!}
            {!! Form::hidden( 'item_id', $item->item_id) !!}
            @include('items/_attributesForm')
            {!! Form::close() !!}

        </div>
    </div>

@stop