<!-- Partners -->
<div class="partners col-sm-12">
    <div class="partners-head text-center">
        <div class="title">{{ trans('string.partner.title') }}</div>
    </div>

    <div class="partners-body row">
        @each('home.partner.item', $partners, 'partner')
    </div>
</div>