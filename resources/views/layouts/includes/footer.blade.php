<footer id="footer" class="footer">
    <div class="container footer-container">
        <div class="row">
            <div class="col-sm-4 mb-3">
                <h5>{{ trans('fixed_data.company') }}</h5>
                <div>
                    {{ trans('fixed_data.address') }}
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row align-items-center h-100">
                    <div class="col-sm-9 mb-3">
                        <div class="row">
                            <div class="col-sm">
                                <a href="#">{{ trans('fixed_data.work_opportunity') }}</a>
                            </div>
                            <div class="col-sm">
                                <a href="#">{{ trans('fixed_data.privacy_policy') }}</a>
                            </div>
                            <div class="col-sm">
                                <a href="#">{{ trans('fixed_data.term_of_service') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
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
