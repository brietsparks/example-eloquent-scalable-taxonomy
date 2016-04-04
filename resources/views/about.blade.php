@extends('app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1>Eloquent Scalable Taxonomy</h1>
            <p>A package for building scalable single-table-inheritance model taxonomies</p>
        </div>
        <div class="col-md-6">
            <ul>
                <li><a href="{{ url('/item') }}">Demo</a></li>
                <li><a href="http://github.com/bsapaka/eloquent-scalable-taxonomy">Package Repository</a></li>
                <li><a href="http://github.com/bsapaka/example-eloquent-scalable-taxonomy">Example Project Repository</a></li>
            </ul>
            <hr/>
            <p>Eloquent Scalable Taxonomy:</p>
            <ul>
                <li>Supports any number of subclasses</li>
                <li>Supports RESTful routing</li>
                <li>Requires only:</li>
                    <ul>
                        <li>One controller</li>
                        <li>One set of routes</li>
                        <li>One set of CRUD views</li>
                    </ul>
            </ul>
            <hr/>
            <p>Working on:</p>
            <ul>
                <li>Validation kinks</li>
                <li>ValueSet limits (attribute)</li>
                <li>Cleaning up and more testing</li>
                <li>Controller, route, and view scaffolding</li>
            </ul>
        </div>

    </div>





@stop
