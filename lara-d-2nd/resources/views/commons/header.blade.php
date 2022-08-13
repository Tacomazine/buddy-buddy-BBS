@if( Auth::check() )
    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><i class="fas fa-home fa-2x"></i></a>
                <div class="collapse navbar-collapse justify-content-end" id="HeaderNavBar">
                    <ul class="navbar-nav">
                        <li class="nav-item nav-link">
                            <a class="btn btn-primary" href="#"><i class="fas fa-pencil-alt"></i>投稿する</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="far fa-smile fa-3x" title="マイページ"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endif