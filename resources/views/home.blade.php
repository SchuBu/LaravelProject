@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-2">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif




                        You are logged in!
                    </div>
                </div>
                
                <div class="card mb-2">
                    <div class="card-header">Options</div>
                    <div class="card-body">
                        <a href="/makeAdmin">add admin role</a><br>
                        <a href="/removeAdmin">remove admin role</a>
                    </div>
                </div>

                @if(Auth::user()->hasAnyRole(['admin']))
                    <div class="card mb-2">
                        <div class="card-header">Adminoptions</div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi facere maxime nam vel vitae? Aliquid aspernatur beatae commodi illo iusto molestiae nesciunt quaerat voluptatem. Mollitia qui quisquam sunt suscipit tenetur.
                        </div>
                    </div>
                @endif
            </div>
        </div>
@endsection
