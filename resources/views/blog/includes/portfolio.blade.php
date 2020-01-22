<!-- ##### Portfolio Area Start ##### -->
<section class="alazea-portfolio-area 
    @if (Route::currentRouteName() === 'home')
        section-padding-100-0
    @else
        portfolio-page section-padding-0-100
    @endif
    ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>PORTFOLIO</h2>
                    <p>We devote all of our experience and efforts for creation</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="alazea-portfolio-filter">
                    <div class="portfolio-filter">
                        <button class="btn active" data-filter="*">All</button>
                        @foreach($projectCategories as $cat)
                            <button class="btn" data-filter="{{ $cat->filter }}">{{ $cat->title }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row alazea-portfolio">

            <!-- Single Portfolio Area -->
            @if($projects->count()) 
            @foreach($projects as $project)
            <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item design home-design wow fadeInUp" data-wow-delay="100ms">
                <!-- Portfolio Thumbnail -->
                <div class="portfolio-thumbnail bg-img" style="background-image: url( {{ $project->image }} );"></div>
                <!-- Portfolio Hover Text -->
                <div class="portfolio-hover-overlay">
                    <a href="{{ route('project', $project->slug) }}" class="portfolio-img d-flex align-items-center justify-content-center" title="{{ $project->header }}">
                        <div class="port-hover-text">
                            <h3>{{ $project->header }}</h3>
                            <h5>{{ $project->title }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</section>
<!-- ##### Portfolio Area End ##### -->