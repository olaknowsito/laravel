@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header" style="color: white;" >Dashboard</div>

                <div class="card-body" style="color: white;" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" style="color: white;" >
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
