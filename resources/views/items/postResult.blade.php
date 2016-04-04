@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Model self-validated</h1>
            <p>The model data has been validated and would have persisted the following attributes:</p>
            <ul>
                @foreach($item->getAttributes() as $key => $value)
                    <li><strong>{{ $key }}:</strong> {{ $value }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@stop