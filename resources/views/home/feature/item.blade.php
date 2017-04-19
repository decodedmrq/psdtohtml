<!-- Feature item -->
<div class="feature col-sm-12">
    @if($index == 0)
        <div class="bg-cyan bg-full-width" id="bg-first-feature"></div>
    @endif
    <div class="row">
        <div class="col-sm-6 {{ is_odd_number($index) ? 'push-sm-6' : '' }}">
            <div class="row {{ is_odd_number($index) ? 'justify-content-end' : '' }}">
                <div class="col-sm-7">
                    <img src="{{ $feature['image'] }}" alt="{{ $feature['name'] }}">
                </div>
            </div>
        </div>
        <div class="col-sm-6 {{ is_odd_number($index) ? 'pull-sm-6' : '' }}">
            <div class="h-100 d-flex align-items-center">
                <div>
                    <div class="title">{{ $feature['name'] }}</div>
                    <ul>
                        @foreach($feature['contents'] as $content)
                            <li>{{$content}}</li>
                        @endforeach
                    </ul>
                    {{--<p class="content">{{ $feature->content }}</p>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Feature item -->
