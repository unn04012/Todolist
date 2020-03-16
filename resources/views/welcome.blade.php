@extends('layouts.app')

{{-- 1 --}}
@section('title')
    웰컴 페이지
@endsection
@section('content')
<style media="screen">
  .col-md-4{
    margin-left : 100px;
    color : red;
  }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-header">라라벨 Todo 사이트</div> {{-- 2 --}}

              <div class="form-group row">
                    <div class="col-md-4">
                            총 가입자 수 : {{ $total['user'] }}</p> {{-- 3 --}}
                            프로젝트  수 : {{ $total['project'] }}</p>
                            Task     수 : {{ $total['task'] }}</p>
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
