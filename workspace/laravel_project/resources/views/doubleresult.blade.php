@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>This page shows you your number multiplied by 2.</h1>
            
            <hr>
            <h2>
                Result: <strong style="color:red">{{ $variable }}</strong> <!-- retrieve value from calculateDouble method in DoubleController.-->
            </h2>
            
        </div>
    </div>
@stop