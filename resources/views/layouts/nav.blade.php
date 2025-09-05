<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/letter-e.png') }}" height="32px">彰化縣學校數位教學入口網</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <!--
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">All Products</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                        <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                    </ul>
                </li>
                -->
            </ul>
            
            <a class="btn btn-outline-dark" href="{{ route('sso') }}">
                <?php $x=1; ?>
                @if($x==2)<i class="bi bi-emoji-smile me-1"></i>@endif
                OpenID 登入                
            </a>
        </div>
    </div>
</nav>