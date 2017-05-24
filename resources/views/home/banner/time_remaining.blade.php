<!-- Time remaining -->
<div class="time-remaining row">
    <div class="col-sm-12">
        <h6 class="title"> Thời gian đăng ký còn </h6>
        <div class="d-inline-flex">
            <!-- Days -->
            <div class="time-block col">
                <div class="timer" id="timer-day">07</div>
                <div>{{ trans('string.day') }}</div>
            </div>
            <!-- Hours -->
            <div class="time-block col">
                <div class="timer" id="timer-hour">13</div>
                <div>{{ trans('string.hour') }}</div>
            </div>
            <!-- Minutes -->
            <div class="time-block col">
                <div class="timer" id="timer-min">22</div>
                <div>{{ trans('string.min') }}</div>
            </div>
            <!-- Seconds -->
            <div class="time-block col">
                <div class="timer" id="timer-sec">15</div>
                <div>{{ trans('string.sec') }}</div>
            </div>
        </div>
    </div>
</div>
