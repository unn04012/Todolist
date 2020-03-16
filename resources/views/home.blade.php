@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @if(Session::has('message'))
                      <div class="alert alert-danger">
                          {{Session::get('message')}}
                      </div>
                  @else
                      You are logged in!
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
