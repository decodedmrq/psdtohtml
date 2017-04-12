@if (session('message'))
    <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <ul>
            <li>
                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
                <span>{{session('message')}}</span>
            </li>
        </ul>
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif