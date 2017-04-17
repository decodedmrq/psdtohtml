@extends('admin.layouts.desktop')
@section('content')
    <div class="card">
        <div class="card-title"></div>
        <div class="card-block">
            <h5>Welcome {{auth()->user()->username}} to Hoc Nhan Tuong management.</h5>
        </div>
    </div>
@endsection