@extends('blog.layouts.default')

@section('content')

    <!-- ##### Portfolio Detaila Area Start ##### -->
    <section class="portfolio-details-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>{{ $project->header }}</h2>
                        <p>{{ $project->title }}</p>
                    </div>
                </div>
            </div>

            <div class="portfolio-text mb-100">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h5>About this project</h5>
                        {!! $project->about !!}                       
                    </div>
                    <div class="col-12 col-lg-6">
                        <h5>Main idea and details</h5>
                        {!! $project->details !!}
                    </div>
                    <div class="col-12">
                        <h5>Client requirements</h5>
                        {!! $project->requirements !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Slides -->
        <div class="portfolio-slides owl-carousel mb-100">
            <!-- Single Portfolio Slide -->
            <div class="single-portfolio-slide">
                <img src="{{ asset('img/bg-img/26.jpg') }}" alt="">
            </div>
            <!-- Single Portfolio Slide -->
            <div class="single-portfolio-slide">
                <img src="{{ asset('img/bg-img/27.jpg') }}" alt="">
            </div>
            <!-- Single Portfolio Slide -->
            <div class="single-portfolio-slide">
                <img src="{{ asset('img/bg-img/28.jpg') }}" alt="">
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-8">
                {!! $project->description !!}
                </div>

                <div class="col-12 col-lg-3">
                    <div class="portfolio-details-meta">
                        <h5>Date (Start - Finish)</h5>
                        <p>{{ date('d M Y', strtotime($project->start)) }} - {{ date('d M Y', strtotime($project->finish)) }}</p>
                    </div>
                    <div class="portfolio-details-meta">
                        <h5>Client</h5>
                        {!! $project->client !!} 
                    </div>
                    <div class="portfolio-details-meta">
                        <h5>Project Type</h5>
                        <p> 
                            @foreach($project->categories as $cat) 
                                {{ $cat->title }}
                                @if($cat != $project->categories->last())
                                    ,
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Portfolio Detaila Area End ##### -->
 
@stop

    