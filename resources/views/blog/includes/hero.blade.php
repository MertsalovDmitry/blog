<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-post-slides owl-carousel">

    @foreach ($heroes as $hero)
        <!-- Single Hero Post -->
        <div class="single-hero-post bg-overlay">
            <!-- Post Image -->
            <div class="slide-img bg-img" style="background-image: url( {{ $hero->image }} );"></div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Content -->
                        <div class="hero-slides-content text-center">
                            <h2>{{ $hero->header }}</h2>
                            <p>{{ $hero->paragraph }}</p>
                            <div class="welcome-btn-group">
                                <a href="{{ route('about') }}" class="btn alazea-btn mr-30">GET STARTED</a>
                                <a href="{{ route('contact') }}" class="btn alazea-btn active">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</section>
<!-- ##### Hero Area End ##### -->