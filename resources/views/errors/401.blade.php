@extends('layouts.plain')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">{{ $exception->getMessage() }}</h4>
                <p>Sie verfügen nicht über die notwendige Berechtigung diese Seite anzuzeigen.</p>
                <hr>
                <p class="mb-0 clearfix"><a href="{{ url()->previous() }}" class="btn btn-primary float-right">zurück</a></p>
            </div>
        </div>
    </div>
@endsection