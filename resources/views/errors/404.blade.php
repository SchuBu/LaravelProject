@extends('layouts.plain')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Fehler 404 - Seite nicht gefunden</h4>
                <p>Die von Ihnen aufgerufene Seite konnte nicht gefunden werden. Vielleicht haben Sie sich vertippt?</p>
                <hr>
                <p class="mb-0 clearfix"><a href="{{ url()->previous() }}" class="btn btn-primary float-right">zurück</a></p>
            </div>
        </div>
    </div>
@endsection
