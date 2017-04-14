@extends('layouts.desktop')
@push('css')
{{ html()->style('/css/contact.css') }}
@endpush
@push('js')
{{ html()->script('/js/contact.js') }}
@endpush
@section('content')
    <div class="container">
        <div class="contact row">
            <div class="contact-head col-sm-12">
                <div class="title text-center">{{ trans('string.about_us') }}</div>
            </div>

            <div class="contact-body col-sm-12">
                <div class="row">
                    <div class="px-4">
                        @include('contact.left')
                    </div>

                    <div class="col-sm">
                        @include('contact.main.product')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script>
    document.getElementById('navbar').className += ' always bg-navbar';
</script>
@endpush
