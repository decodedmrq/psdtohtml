@extends('layouts.desktop')
@push('css')
{{ html()->style('/css/home.css') }}
@endpush
@push('js')
{{ html()->script('/js/home.js') }}
@endpush
@section('content')
@endsection
