<div class="sidebar sidebar-dark">
    <div class="sidebar-content">
        <a class="sidebar-brand" href="{{ route('admin.dashboard') }}">{{ config('app.name') }}</a>
        <ul class="sidebar-menu sm-condensed" data-toggle="sidebar-collapse">
            <li class="sidebar-menu-item {{ html_helper()->active('dashboard') }}">
                <a class="sidebar-menu-button" href="{{ route('admin.dashboard') }}">
                    <i class="sidebar-menu-icon material-icons">home</i> {{trans('labels.dashboard')}}
                </a>
            </li>
            <li class="sidebar-menu-item {{ html_helper()->active('test') }}">
                <a class="sidebar-menu-button" href="#">
                    <i class="sidebar-menu-icon material-icons">assignment</i> Pages
                </a>
            </li>
        </ul>
    </div>
</div>
