<footer id="footer" class="footer">
    <div class="container footer-container">
        <div class="row">
            <div class="col-sm-4">
                <h5>{{ trans('fixed_data.company') }}</h5>
                <div>
                    {{ trans('fixed_data.address') }}
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row align-items-center h-100">
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm">{{ trans('fixed_data.work_opportunity') }}</div>
                            <div class="col-sm">{{ trans('fixed_data.privacy_policy') }}</div>
                            <div class="col-sm">{{ trans('fixed_data.term_of_service') }}</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="d-flex align-items-center">
                            <div class="col-sm pr-0">
                                <a class="fa fa-facebook-square fa-2x" href="https://facebook.com"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
@yield('after-footer')
