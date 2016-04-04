@extends('app')

@section('content')
    <h1>Create a New {{ucwords($type)}}</h1>
    <?php if(isset($subTypes)): ?>
        <div class="row">
            <div class="col-md-12">
                <p>What kind of {{ $type }}?</p>
                <ul>
                    @foreach($subTypes as $subType)
                        <li>
                            <a href="{{ action('ItemTaxonomyController@create', [$subType]) }}">
                                {{ucwords($subType)}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    <?php else: ?>

    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['action' => ['ItemTaxonomyController@store']]) !!}
                {!! Form::hidden( 'item_type', $type ) !!}
                @include('items/_attributesForm')
            {!! Form::close() !!}

        </div>
    </div>

    <?php endif; ?>

@stop