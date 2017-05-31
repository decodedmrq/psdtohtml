<!-- Time remaining -->
<div class="time-remaining row">
    <div class="col-md-12">
        <h6 class="title"> Thời gian đăng ký chỉ còn </h6>
        <div class="d-inline-flex">
            <!-- Days -->
            <div class="time-block col">
                <div class="timer" id="timer-day">{{ make_string_time($timeRemaining->d) }}</div>
                <div>{{ trans('string.day') }}</div>
            </div>
            <!-- Hours -->
            <div class="time-block col">
                <div class="timer" id="timer-hour">{{ make_string_time($timeRemaining->h) }}</div>
                <div>{{ trans('string.hour') }}</div>
            </div>
            <!-- Minutes -->
            <div class="time-block col">
                <div class="timer" id="timer-min">{{ make_string_time($timeRemaining->m) }}</div>
                <div>{{ trans('string.min') }}</div>
            </div>
            <!-- Seconds -->
            <div class="time-block col">
                <div class="timer" id="timer-sec">{{ make_string_time($timeRemaining->s) }}</div>
                <div>{{ trans('string.sec') }}</div>
            </div>
        </div>
    </div>
</div>
