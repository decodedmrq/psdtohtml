<!-- Contact information -->
<div class="contact-info row">
    <h4 class="title col-sm-12">
        {{ trans('string.contact_info') }}
    </h4>

    <div class="content col-sm-12">
        <div class="row align-items-center">
            <div class="item col-sm-6">
                <div class="d-flex align-items-center">
                    <div>
                        <img src="/images/i_address.png" alt="{{ trans('fixed_data.address') }}">
                    </div>
                    <div class="col-sm">
                        {{ trans('fixed_data.address') }}
                    </div>
                </div>
            </div>

            {{--<div class="item col-sm-6">
                <div class="d-flex align-items-center">
                    <div>
                        <img src="/images/i_website.png" alt="{{ trans('fixed_data.website') }}">
                    </div>
                    <div class="col-sm">
                        {{ trans('fixed_data.website') }}
                    </div>
                </div>
            </div>--}}

            <div class="item phone-number col-sm-6">
                <div class="d-flex align-items-center">
                    <div>
                        <img src="/images/i_phone.png" alt="{{ trans('fixed_data.phone') }}">

                    </div>
                    <div class="col-sm">
                        <a href="tel:{{ trans('fixed_data.tel_phone') }}">
                            {{ trans('fixed_data.phone') }}
                        </a>
                    </div>
                </div>
            </div>

            {{--<div class="item col-sm-6">
                <div class="d-flex align-items-center">
                    <div>
                        <img src="/images/i_email.png" alt="{{ trans('fixed_data.email') }}">
                    </div>
                    <div class="col-sm">
                        {{ trans('fixed_data.email') }}
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
</div>
<!-- /Contact information -->
