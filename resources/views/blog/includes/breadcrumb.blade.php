    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url('/img/bg-img/24.jpg')"> 
            <h2>{{ $title }}</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home </a></li>
                            @if (Route::currentRouteName() === 'single-post')
                                <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                            @endif
                            @if (Route::currentRouteName() === 'portfolio-details')
                                <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                            @endif
                            @if (Route::currentRouteName() === 'shop-details' || Route::currentRouteName() === 'shop-cart' || Route::currentRouteName() === 'shop-checkout')
                                <li class="breadcrumb-item"><a href="{{ route('shop') }}">Shop</a></li>
                            @endif
                            <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->