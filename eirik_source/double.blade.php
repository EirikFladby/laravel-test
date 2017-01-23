@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>This page shows you your number multiplied by 2. Go ahead, try it!</h1>
            
            <hr>
            <h3> Enter a number: </h3>
           <!-- go to /double/result when form is filled and submitted-->
            <form method="POST" action="/double/result">
                <div class="form-group">
                    <textarea autocomplete=off name="body" class="form-control" placeholder='If decimal is used remember to use "." instead of ","'></textarea>
                </div>
                <!-- creating button-->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@stop