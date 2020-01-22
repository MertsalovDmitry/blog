<!-- ##### Team Area Start ##### -->
<section class="team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR TEAM</h2>
                        <p>A team of dedicated experienced professionals.</p>
                    </div>
                </div>
            </div>

            <div class="row">

            @foreach ($members as $member)
                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member text-center mb-100">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="{{ $member->image }}" alt="">
                            <!-- Social Info -->
                            <div class="team-member-social-info">
                                <a target="_blank" href="{{ $member->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a target="_blank" href="{{ $member->vk }}"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                <a target="_blank" href="{{ $member->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a target="_blank" href="{{ $member->telegram }}"><i class="fa fa-telegram" aria-hidden="true"></i></a>                                                               
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info mt-30">
                            <h5>{{ $member->name }}</h5>
                            <p>{{ $member->position }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>
    <!-- ##### Team Area End ##### -->