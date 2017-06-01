<nav class="navbar navbar-toggleable-sm container hidden-sm-up">
    <div class="wrapper row">
        <a href="{{ route('home') }}" class="col-12">
            <div class="title row align-items-center justify-content-center">
                <div class="mobile-logo">
                    <img class="logo" src="/images/mobile_logo.png"/>
                </div>
                <span class="pl-1 pr-2">:</span>
                <div>Nhân Tướng Trong Quản Trị</div>
            </div>
            <div class="slogan row  text-center">
                <div class="col">Nhìn đúng người, dùng đúng việc</div>
            </div>
        </a>
    </div>
</nav>

<script>
    let navbarBtn = $('#navbar-btn');
    let navbarMenu = $('#navbar-menu');
    navbarBtn.on('click', function (e) {
        navbarMenu.toggleClass('show');
    });
</script>
