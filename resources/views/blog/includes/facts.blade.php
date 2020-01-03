<!-- ##### Cool Facts Area Start ##### -->
<section class="cool-facts-area bg-img section-padding-100-0" style="background-image: url(img/bg-img/cool-facts.png);">
        <div class="container">
            <div class="row">

                @foreach ($facts as $fact)
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="{{ $fact->image }}" alt="">
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">{{ $fact->count }}</span></h2>
                            <h6>{{ $fact->title }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <!-- Side Image -->
        <div class="side-img wow fadeInUp" data-wow-delay="500ms">
            <img src="img/core-img/pot.png" alt="">
        </div>
    </section>
    <!-- ##### Cool Facts Area End ##### -->