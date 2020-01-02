<!-- ##### Testimonial Area Start ##### -->
<section class="testimonial-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonials-slides owl-carousel">

                @foreach ($testimonials as $testimonial)
                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="testimonial-thumb">
                                    <img src="{{ $testimonial->image }}" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="testimonial-content">
                                    <!-- Section Heading -->
                                    <div class="section-heading">
                                        <h2>{{ $testimonial->header }}</h2>
                                        <p>{{ $testimonial->title }}</p>
                                    </div>
                                    <p>“{{ $testimonial->message }}”</p>
                                    <div class="testimonial-author-info">
                                        <h6>{{ $testimonial->user_name }}</h6>
                                        <p>{{ $testimonial->user_position }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach                   

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Testimonial Area End ##### -->