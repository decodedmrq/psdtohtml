<!-- Features -->
<div class="features col-sm-12">
    <div class="features-head row text-center">
        <div class="title col-sm-12">{{ trans('string.feature.title') }}</div>
        <small class="description col-sm-12">{{ trans('string.feature.description') }}</small>
    </div>

    <div class="features-body row">
        @foreach($features as $feature)
            @include('home.feature.item', ['feature' => $feature, 'index' => $loop->index])
        @endforeach
    </div>
    <hr>
</div>
<!-- /Features -->