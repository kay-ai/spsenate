<nav class="navbar navbar-expand-md navbar-dark sp-fixed-item shadow">
    <img class="navbar-brand-logo" src="{{asset('img/shinayo2023.png')}}">
    <button id="navbarCollapse" class="navbar-toggler d-lg-none active" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="collapse navbar-collapse nav-content" id="collapsibleNavId" style="justify-content: space-between">
        <div style="width: 35px;"></div>
        <ul class="navbar-nav">
            <li class="nav-item {{$activePage == 'welcome' ? 'active' : ''}}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{$activePage == 'bio' ? 'active' : ''}}">
                <a class="nav-link" href="/bio">Bio</a>
            </li>
            <li class="nav-item {{$activePage == 'journey' ? 'active' : ''}}">
                <a class="nav-link" href="/journey">Journey So Far</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://ayedero.com/">Ayedero News</a>
            </li>
        </ul>
        <div>
            <a id="" class="btn px-3 join-us-btn shadow-sm" href="/donate" role="button">Donate</a>
        </div>
    </div>
</nav>
<!-- Nav tabs -->

@push('js-bottom')
    <script>
        $('#navbarCollapse').on('click', function () {
            $(this).toggleClass('active');
        });
    </script>
@endpush


