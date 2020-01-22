<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert( [
            [
                'header' => 'THE ABEL VILLA’S GARDEN DESIGN 1',
                'slug' => 'the-abel-villas-garden-design-1',
                'title' => 'Design & constructed by Alazea.',
                'image' => 'img/bg-img/16.jpg',
                'about' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet, libero sedomin dignissim maximus, ex lorem honcus nisl, quis rhoncus dui elit in magna. Donec efficitur, senget mantis cursus, enim augue iaculis enim, eu rutrum augue diam id nunc.</p>
                            <p>Maecenas tincidunt ornare aliquet. Phasellus mattis arcu quis dolor sollicitudin sagittis. On inter donpo porta ultricies. Mauris nec urna a urna commodo rutrum sollicitudin nec neque. Sed vel justo a mi fermentum consequat. In eget luctus lectus. Aliquam malesuada nunc justo.</p>',
                'details' => '<p>Phasellus elefend odio quis dolor pretium condimentu. Morbi quis mauris ipsum rocket racoon Suspendisse auctor magna ac porta ornare. Fusce finibus nibh at lacinia lobortis.</p>
                                <ul>
                                    <li><i class="fa fa-check"></i> Vivamus starlord finibus, massa eget, suscipit metus nami at elit started</li>
                                    <li><i class="fa fa-check"></i> Cras ipsum libero, suscipit vitamin tellus vitae, feugiat ultricies purus praesent gamora.</li>
                                    <li><i class="fa fa-check"></i> Proin ex sem, ultrices drax the sit amet, facilisis destroyer et odio profession risusest.</li>
                                    <li><i class="fa fa-check"></i> Morbi maximus mauris eget groot dignissim, in laoreet justo facilisis.</li>
                                </ul>',
                'requirements' => 'Pellentesque rhoncus, sem non bibendum accumsan, nulla lacus accumsan libero, non laoreet nunc ex in metus. Nam vitae justo quis mauris lacinia ultrices. In aliquet, elit id lobortis venenatis, mauris nulla posuere felis, ut efficitur elit diam nec purus. Aenean convallis justo augue finibus mollis. Nullam diam nibh, porttitor non arcu ac, feugiat feugiat mauris.',
                'description' => '<h5>Tracking progress on a project</h5>
                                 <p class="mb-30">Lorem nam in bibendum nulla. Duis lobortis quam interdum nisl congue, ac facilisis ipsum cursus. Etiam viverra mi action sapien vestibulum, sollicitudin sodales neque pulvinar. Vivamus tincidunt iaculis ipsum ac convallis. Maecenas quam sodhe, commodo turpis vel, luctus interdum sem. In scelerisque suscipit velit moondragon. Nullam gravida risus in semper lobortis. Sed vitamin at mi eleifend feugiat. In id euismod elit. Proin ac sapien massa. Donec facilisis leo et ante dignissim posuere.</p>
                                 <h5>Master plant, Moodboards &amp; Visualisations</h5>
                                 <p class="mb-30">Quisque commodo nec lacus vel tempus. Duis tristique mi vitae cosmo suscipit vestibulum. Vivamus et turpis velit. Sed auctor sapien neque, nec commodo eros congue flash. Proin sollicitudin enim lorem, quis auctor velit molestie viverra. Fusce in velit scelerisque, luctus odio efficitur, efficitur ipsum. Quisque nec nibh sit amet enim rutrum molestie major victory. Curabitur id pretium lectus. Ut in viverra ex. In pharetra efficitur nisi et porta.</p>
                                 <h5>Finish &amp; Payment</h5>
                                 <p>Cras facilisis pellentesque tellus, yondu pretium justo sagittis ac. Sed egestas diam sit amet arcu sodales, estima pharetra sapien condimentum. Duis eget dolor placerat, gravida ipsum vel, tempus est. Pellentesque non nisl nec ante venenatis egestas maximus. Suspendisse id enim pharetra, euismod tellus id, endrerit sem.</p>',
                'client' => 'Abel Company',
                'active' => 1,
                'start' => Carbon::now(),
                'finish' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),               
            ],
            [
                'header' => 'THE ABEL VILLA’S GARDEN DESIGN 2',
                'slug' => 'the-abel-villas-garden-design-2',
                'title' => 'Design & constructed by Alazea.',
                'image' => 'img/bg-img/17.jpg',
                'about' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet, libero sedomin dignissim maximus, ex lorem honcus nisl, quis rhoncus dui elit in magna. Donec efficitur, senget mantis cursus, enim augue iaculis enim, eu rutrum augue diam id nunc.</p>
                            <p>Maecenas tincidunt ornare aliquet. Phasellus mattis arcu quis dolor sollicitudin sagittis. On inter donpo porta ultricies. Mauris nec urna a urna commodo rutrum sollicitudin nec neque. Sed vel justo a mi fermentum consequat. In eget luctus lectus. Aliquam malesuada nunc justo.</p>',
                'details' => '<p>Phasellus elefend odio quis dolor pretium condimentu. Morbi quis mauris ipsum rocket racoon Suspendisse auctor magna ac porta ornare. Fusce finibus nibh at lacinia lobortis.</p>
                                <ul>
                                    <li><i class="fa fa-check"></i> Vivamus starlord finibus, massa eget, suscipit metus nami at elit started</li>
                                    <li><i class="fa fa-check"></i> Cras ipsum libero, suscipit vitamin tellus vitae, feugiat ultricies purus praesent gamora.</li>
                                    <li><i class="fa fa-check"></i> Proin ex sem, ultrices drax the sit amet, facilisis destroyer et odio profession risusest.</li>
                                    <li><i class="fa fa-check"></i> Morbi maximus mauris eget groot dignissim, in laoreet justo facilisis.</li>
                                </ul>',
                'requirements' => 'Pellentesque rhoncus, sem non bibendum accumsan, nulla lacus accumsan libero, non laoreet nunc ex in metus. Nam vitae justo quis mauris lacinia ultrices. In aliquet, elit id lobortis venenatis, mauris nulla posuere felis, ut efficitur elit diam nec purus. Aenean convallis justo augue finibus mollis. Nullam diam nibh, porttitor non arcu ac, feugiat feugiat mauris.',
                'description' => '<h5>Tracking progress on a project</h5>
                                 <p class="mb-30">Lorem nam in bibendum nulla. Duis lobortis quam interdum nisl congue, ac facilisis ipsum cursus. Etiam viverra mi action sapien vestibulum, sollicitudin sodales neque pulvinar. Vivamus tincidunt iaculis ipsum ac convallis. Maecenas quam sodhe, commodo turpis vel, luctus interdum sem. In scelerisque suscipit velit moondragon. Nullam gravida risus in semper lobortis. Sed vitamin at mi eleifend feugiat. In id euismod elit. Proin ac sapien massa. Donec facilisis leo et ante dignissim posuere.</p>
                                 <h5>Master plant, Moodboards &amp; Visualisations</h5>
                                 <p class="mb-30">Quisque commodo nec lacus vel tempus. Duis tristique mi vitae cosmo suscipit vestibulum. Vivamus et turpis velit. Sed auctor sapien neque, nec commodo eros congue flash. Proin sollicitudin enim lorem, quis auctor velit molestie viverra. Fusce in velit scelerisque, luctus odio efficitur, efficitur ipsum. Quisque nec nibh sit amet enim rutrum molestie major victory. Curabitur id pretium lectus. Ut in viverra ex. In pharetra efficitur nisi et porta.</p>
                                 <h5>Finish &amp; Payment</h5>
                                 <p>Cras facilisis pellentesque tellus, yondu pretium justo sagittis ac. Sed egestas diam sit amet arcu sodales, estima pharetra sapien condimentum. Duis eget dolor placerat, gravida ipsum vel, tempus est. Pellentesque non nisl nec ante venenatis egestas maximus. Suspendisse id enim pharetra, euismod tellus id, endrerit sem.</p>',
                'client' => 'Abel Company',
                'active' => 1,
                'start' => Carbon::now(),
                'finish' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),               
            ],
            [
                'header' => 'THE ABEL VILLA’S GARDEN DESIGN 3',
                'slug' => 'the-abel-villas-garden-design-3',
                'title' => 'Design & constructed by Alazea.',
                'image' => 'img/bg-img/18.jpg',
                'about' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet, libero sedomin dignissim maximus, ex lorem honcus nisl, quis rhoncus dui elit in magna. Donec efficitur, senget mantis cursus, enim augue iaculis enim, eu rutrum augue diam id nunc.</p>
                            <p>Maecenas tincidunt ornare aliquet. Phasellus mattis arcu quis dolor sollicitudin sagittis. On inter donpo porta ultricies. Mauris nec urna a urna commodo rutrum sollicitudin nec neque. Sed vel justo a mi fermentum consequat. In eget luctus lectus. Aliquam malesuada nunc justo.</p>',
                'details' => '<p>Phasellus elefend odio quis dolor pretium condimentu. Morbi quis mauris ipsum rocket racoon Suspendisse auctor magna ac porta ornare. Fusce finibus nibh at lacinia lobortis.</p>
                                <ul>
                                    <li><i class="fa fa-check"></i> Vivamus starlord finibus, massa eget, suscipit metus nami at elit started</li>
                                    <li><i class="fa fa-check"></i> Cras ipsum libero, suscipit vitamin tellus vitae, feugiat ultricies purus praesent gamora.</li>
                                    <li><i class="fa fa-check"></i> Proin ex sem, ultrices drax the sit amet, facilisis destroyer et odio profession risusest.</li>
                                    <li><i class="fa fa-check"></i> Morbi maximus mauris eget groot dignissim, in laoreet justo facilisis.</li>
                                </ul>',
                'requirements' => 'Pellentesque rhoncus, sem non bibendum accumsan, nulla lacus accumsan libero, non laoreet nunc ex in metus. Nam vitae justo quis mauris lacinia ultrices. In aliquet, elit id lobortis venenatis, mauris nulla posuere felis, ut efficitur elit diam nec purus. Aenean convallis justo augue finibus mollis. Nullam diam nibh, porttitor non arcu ac, feugiat feugiat mauris.',
                'description' => '<h5>Tracking progress on a project</h5>
                                 <p class="mb-30">Lorem nam in bibendum nulla. Duis lobortis quam interdum nisl congue, ac facilisis ipsum cursus. Etiam viverra mi action sapien vestibulum, sollicitudin sodales neque pulvinar. Vivamus tincidunt iaculis ipsum ac convallis. Maecenas quam sodhe, commodo turpis vel, luctus interdum sem. In scelerisque suscipit velit moondragon. Nullam gravida risus in semper lobortis. Sed vitamin at mi eleifend feugiat. In id euismod elit. Proin ac sapien massa. Donec facilisis leo et ante dignissim posuere.</p>
                                 <h5>Master plant, Moodboards &amp; Visualisations</h5>
                                 <p class="mb-30">Quisque commodo nec lacus vel tempus. Duis tristique mi vitae cosmo suscipit vestibulum. Vivamus et turpis velit. Sed auctor sapien neque, nec commodo eros congue flash. Proin sollicitudin enim lorem, quis auctor velit molestie viverra. Fusce in velit scelerisque, luctus odio efficitur, efficitur ipsum. Quisque nec nibh sit amet enim rutrum molestie major victory. Curabitur id pretium lectus. Ut in viverra ex. In pharetra efficitur nisi et porta.</p>
                                 <h5>Finish &amp; Payment</h5>
                                 <p>Cras facilisis pellentesque tellus, yondu pretium justo sagittis ac. Sed egestas diam sit amet arcu sodales, estima pharetra sapien condimentum. Duis eget dolor placerat, gravida ipsum vel, tempus est. Pellentesque non nisl nec ante venenatis egestas maximus. Suspendisse id enim pharetra, euismod tellus id, endrerit sem.</p>',
                'client' => 'Abel Company',
                'active' => 1,
                'start' => Carbon::now(),
                'finish' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),               
            ],
            [
                'header' => 'THE ABEL VILLA’S GARDEN DESIGN 4',
                'slug' => 'the-abel-villas-garden-design-4',
                'title' => 'Design & constructed by Alazea.',
                'image' => 'img/bg-img/19.jpg',
                'about' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet, libero sedomin dignissim maximus, ex lorem honcus nisl, quis rhoncus dui elit in magna. Donec efficitur, senget mantis cursus, enim augue iaculis enim, eu rutrum augue diam id nunc.</p>
                            <p>Maecenas tincidunt ornare aliquet. Phasellus mattis arcu quis dolor sollicitudin sagittis. On inter donpo porta ultricies. Mauris nec urna a urna commodo rutrum sollicitudin nec neque. Sed vel justo a mi fermentum consequat. In eget luctus lectus. Aliquam malesuada nunc justo.</p>',
                'details' => '<p>Phasellus elefend odio quis dolor pretium condimentu. Morbi quis mauris ipsum rocket racoon Suspendisse auctor magna ac porta ornare. Fusce finibus nibh at lacinia lobortis.</p>
                                <ul>
                                    <li><i class="fa fa-check"></i> Vivamus starlord finibus, massa eget, suscipit metus nami at elit started</li>
                                    <li><i class="fa fa-check"></i> Cras ipsum libero, suscipit vitamin tellus vitae, feugiat ultricies purus praesent gamora.</li>
                                    <li><i class="fa fa-check"></i> Proin ex sem, ultrices drax the sit amet, facilisis destroyer et odio profession risusest.</li>
                                    <li><i class="fa fa-check"></i> Morbi maximus mauris eget groot dignissim, in laoreet justo facilisis.</li>
                                </ul>',
                'requirements' => 'Pellentesque rhoncus, sem non bibendum accumsan, nulla lacus accumsan libero, non laoreet nunc ex in metus. Nam vitae justo quis mauris lacinia ultrices. In aliquet, elit id lobortis venenatis, mauris nulla posuere felis, ut efficitur elit diam nec purus. Aenean convallis justo augue finibus mollis. Nullam diam nibh, porttitor non arcu ac, feugiat feugiat mauris.',
                'description' => '<h5>Tracking progress on a project</h5>
                                 <p class="mb-30">Lorem nam in bibendum nulla. Duis lobortis quam interdum nisl congue, ac facilisis ipsum cursus. Etiam viverra mi action sapien vestibulum, sollicitudin sodales neque pulvinar. Vivamus tincidunt iaculis ipsum ac convallis. Maecenas quam sodhe, commodo turpis vel, luctus interdum sem. In scelerisque suscipit velit moondragon. Nullam gravida risus in semper lobortis. Sed vitamin at mi eleifend feugiat. In id euismod elit. Proin ac sapien massa. Donec facilisis leo et ante dignissim posuere.</p>
                                 <h5>Master plant, Moodboards &amp; Visualisations</h5>
                                 <p class="mb-30">Quisque commodo nec lacus vel tempus. Duis tristique mi vitae cosmo suscipit vestibulum. Vivamus et turpis velit. Sed auctor sapien neque, nec commodo eros congue flash. Proin sollicitudin enim lorem, quis auctor velit molestie viverra. Fusce in velit scelerisque, luctus odio efficitur, efficitur ipsum. Quisque nec nibh sit amet enim rutrum molestie major victory. Curabitur id pretium lectus. Ut in viverra ex. In pharetra efficitur nisi et porta.</p>
                                 <h5>Finish &amp; Payment</h5>
                                 <p>Cras facilisis pellentesque tellus, yondu pretium justo sagittis ac. Sed egestas diam sit amet arcu sodales, estima pharetra sapien condimentum. Duis eget dolor placerat, gravida ipsum vel, tempus est. Pellentesque non nisl nec ante venenatis egestas maximus. Suspendisse id enim pharetra, euismod tellus id, endrerit sem.</p>',
                'client' => 'Abel Company',
                'active' => 1,
                'start' => Carbon::now(),
                'finish' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),               
            ],
            [
                'header' => 'THE ABEL VILLA’S GARDEN DESIGN 5',
                'slug' => 'the-abel-villas-garden-design-5',
                'title' => 'Design & constructed by Alazea.',
                'image' => 'img/bg-img/20.jpg',
                'about' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet, libero sedomin dignissim maximus, ex lorem honcus nisl, quis rhoncus dui elit in magna. Donec efficitur, senget mantis cursus, enim augue iaculis enim, eu rutrum augue diam id nunc.</p>
                            <p>Maecenas tincidunt ornare aliquet. Phasellus mattis arcu quis dolor sollicitudin sagittis. On inter donpo porta ultricies. Mauris nec urna a urna commodo rutrum sollicitudin nec neque. Sed vel justo a mi fermentum consequat. In eget luctus lectus. Aliquam malesuada nunc justo.</p>',
                'details' => '<p>Phasellus elefend odio quis dolor pretium condimentu. Morbi quis mauris ipsum rocket racoon Suspendisse auctor magna ac porta ornare. Fusce finibus nibh at lacinia lobortis.</p>
                                <ul>
                                    <li><i class="fa fa-check"></i> Vivamus starlord finibus, massa eget, suscipit metus nami at elit started</li>
                                    <li><i class="fa fa-check"></i> Cras ipsum libero, suscipit vitamin tellus vitae, feugiat ultricies purus praesent gamora.</li>
                                    <li><i class="fa fa-check"></i> Proin ex sem, ultrices drax the sit amet, facilisis destroyer et odio profession risusest.</li>
                                    <li><i class="fa fa-check"></i> Morbi maximus mauris eget groot dignissim, in laoreet justo facilisis.</li>
                                </ul>',
                'requirements' => 'Pellentesque rhoncus, sem non bibendum accumsan, nulla lacus accumsan libero, non laoreet nunc ex in metus. Nam vitae justo quis mauris lacinia ultrices. In aliquet, elit id lobortis venenatis, mauris nulla posuere felis, ut efficitur elit diam nec purus. Aenean convallis justo augue finibus mollis. Nullam diam nibh, porttitor non arcu ac, feugiat feugiat mauris.',
                'description' => '<h5>Tracking progress on a project</h5>
                                 <p class="mb-30">Lorem nam in bibendum nulla. Duis lobortis quam interdum nisl congue, ac facilisis ipsum cursus. Etiam viverra mi action sapien vestibulum, sollicitudin sodales neque pulvinar. Vivamus tincidunt iaculis ipsum ac convallis. Maecenas quam sodhe, commodo turpis vel, luctus interdum sem. In scelerisque suscipit velit moondragon. Nullam gravida risus in semper lobortis. Sed vitamin at mi eleifend feugiat. In id euismod elit. Proin ac sapien massa. Donec facilisis leo et ante dignissim posuere.</p>
                                 <h5>Master plant, Moodboards &amp; Visualisations</h5>
                                 <p class="mb-30">Quisque commodo nec lacus vel tempus. Duis tristique mi vitae cosmo suscipit vestibulum. Vivamus et turpis velit. Sed auctor sapien neque, nec commodo eros congue flash. Proin sollicitudin enim lorem, quis auctor velit molestie viverra. Fusce in velit scelerisque, luctus odio efficitur, efficitur ipsum. Quisque nec nibh sit amet enim rutrum molestie major victory. Curabitur id pretium lectus. Ut in viverra ex. In pharetra efficitur nisi et porta.</p>
                                 <h5>Finish &amp; Payment</h5>
                                 <p>Cras facilisis pellentesque tellus, yondu pretium justo sagittis ac. Sed egestas diam sit amet arcu sodales, estima pharetra sapien condimentum. Duis eget dolor placerat, gravida ipsum vel, tempus est. Pellentesque non nisl nec ante venenatis egestas maximus. Suspendisse id enim pharetra, euismod tellus id, endrerit sem.</p>',
                'client' => 'Abel Company',
                'active' => 1,
                'start' => Carbon::now(),
                'finish' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),               
            ],
            [
                'header' => 'THE ABEL VILLA’S GARDEN DESIGN 6',
                'slug' => 'the-abel-villas-garden-design-6',
                'title' => 'Design & constructed by Alazea.',
                'image' => 'img/bg-img/21.jpg',
                'about' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet, libero sedomin dignissim maximus, ex lorem honcus nisl, quis rhoncus dui elit in magna. Donec efficitur, senget mantis cursus, enim augue iaculis enim, eu rutrum augue diam id nunc.</p>
                            <p>Maecenas tincidunt ornare aliquet. Phasellus mattis arcu quis dolor sollicitudin sagittis. On inter donpo porta ultricies. Mauris nec urna a urna commodo rutrum sollicitudin nec neque. Sed vel justo a mi fermentum consequat. In eget luctus lectus. Aliquam malesuada nunc justo.</p>',
                'details' => '<p>Phasellus elefend odio quis dolor pretium condimentu. Morbi quis mauris ipsum rocket racoon Suspendisse auctor magna ac porta ornare. Fusce finibus nibh at lacinia lobortis.</p>
                                <ul>
                                    <li><i class="fa fa-check"></i> Vivamus starlord finibus, massa eget, suscipit metus nami at elit started</li>
                                    <li><i class="fa fa-check"></i> Cras ipsum libero, suscipit vitamin tellus vitae, feugiat ultricies purus praesent gamora.</li>
                                    <li><i class="fa fa-check"></i> Proin ex sem, ultrices drax the sit amet, facilisis destroyer et odio profession risusest.</li>
                                    <li><i class="fa fa-check"></i> Morbi maximus mauris eget groot dignissim, in laoreet justo facilisis.</li>
                                </ul>',
                'requirements' => 'Pellentesque rhoncus, sem non bibendum accumsan, nulla lacus accumsan libero, non laoreet nunc ex in metus. Nam vitae justo quis mauris lacinia ultrices. In aliquet, elit id lobortis venenatis, mauris nulla posuere felis, ut efficitur elit diam nec purus. Aenean convallis justo augue finibus mollis. Nullam diam nibh, porttitor non arcu ac, feugiat feugiat mauris.',
                'description' => '<h5>Tracking progress on a project</h5>
                                 <p class="mb-30">Lorem nam in bibendum nulla. Duis lobortis quam interdum nisl congue, ac facilisis ipsum cursus. Etiam viverra mi action sapien vestibulum, sollicitudin sodales neque pulvinar. Vivamus tincidunt iaculis ipsum ac convallis. Maecenas quam sodhe, commodo turpis vel, luctus interdum sem. In scelerisque suscipit velit moondragon. Nullam gravida risus in semper lobortis. Sed vitamin at mi eleifend feugiat. In id euismod elit. Proin ac sapien massa. Donec facilisis leo et ante dignissim posuere.</p>
                                 <h5>Master plant, Moodboards &amp; Visualisations</h5>
                                 <p class="mb-30">Quisque commodo nec lacus vel tempus. Duis tristique mi vitae cosmo suscipit vestibulum. Vivamus et turpis velit. Sed auctor sapien neque, nec commodo eros congue flash. Proin sollicitudin enim lorem, quis auctor velit molestie viverra. Fusce in velit scelerisque, luctus odio efficitur, efficitur ipsum. Quisque nec nibh sit amet enim rutrum molestie major victory. Curabitur id pretium lectus. Ut in viverra ex. In pharetra efficitur nisi et porta.</p>
                                 <h5>Finish &amp; Payment</h5>
                                 <p>Cras facilisis pellentesque tellus, yondu pretium justo sagittis ac. Sed egestas diam sit amet arcu sodales, estima pharetra sapien condimentum. Duis eget dolor placerat, gravida ipsum vel, tempus est. Pellentesque non nisl nec ante venenatis egestas maximus. Suspendisse id enim pharetra, euismod tellus id, endrerit sem.</p>',
                'client' => 'Abel Company',
                'active' => 1,
                'start' => Carbon::now(),
                'finish' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),               
            ],
            [
                'header' => 'THE ABEL VILLA’S GARDEN DESIGN 7',
                'slug' => 'the-abel-villas-garden-design-7',
                'title' => 'Design & constructed by Alazea.',
                'image' => 'img/bg-img/22.jpg',
                'about' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet, libero sedomin dignissim maximus, ex lorem honcus nisl, quis rhoncus dui elit in magna. Donec efficitur, senget mantis cursus, enim augue iaculis enim, eu rutrum augue diam id nunc.</p>
                            <p>Maecenas tincidunt ornare aliquet. Phasellus mattis arcu quis dolor sollicitudin sagittis. On inter donpo porta ultricies. Mauris nec urna a urna commodo rutrum sollicitudin nec neque. Sed vel justo a mi fermentum consequat. In eget luctus lectus. Aliquam malesuada nunc justo.</p>',
                'details' => '<p>Phasellus elefend odio quis dolor pretium condimentu. Morbi quis mauris ipsum rocket racoon Suspendisse auctor magna ac porta ornare. Fusce finibus nibh at lacinia lobortis.</p>
                                <ul>
                                    <li><i class="fa fa-check"></i> Vivamus starlord finibus, massa eget, suscipit metus nami at elit started</li>
                                    <li><i class="fa fa-check"></i> Cras ipsum libero, suscipit vitamin tellus vitae, feugiat ultricies purus praesent gamora.</li>
                                    <li><i class="fa fa-check"></i> Proin ex sem, ultrices drax the sit amet, facilisis destroyer et odio profession risusest.</li>
                                    <li><i class="fa fa-check"></i> Morbi maximus mauris eget groot dignissim, in laoreet justo facilisis.</li>
                                </ul>',
                'requirements' => 'Pellentesque rhoncus, sem non bibendum accumsan, nulla lacus accumsan libero, non laoreet nunc ex in metus. Nam vitae justo quis mauris lacinia ultrices. In aliquet, elit id lobortis venenatis, mauris nulla posuere felis, ut efficitur elit diam nec purus. Aenean convallis justo augue finibus mollis. Nullam diam nibh, porttitor non arcu ac, feugiat feugiat mauris.',
                'description' => '<h5>Tracking progress on a project</h5>
                                 <p class="mb-30">Lorem nam in bibendum nulla. Duis lobortis quam interdum nisl congue, ac facilisis ipsum cursus. Etiam viverra mi action sapien vestibulum, sollicitudin sodales neque pulvinar. Vivamus tincidunt iaculis ipsum ac convallis. Maecenas quam sodhe, commodo turpis vel, luctus interdum sem. In scelerisque suscipit velit moondragon. Nullam gravida risus in semper lobortis. Sed vitamin at mi eleifend feugiat. In id euismod elit. Proin ac sapien massa. Donec facilisis leo et ante dignissim posuere.</p>
                                 <h5>Master plant, Moodboards &amp; Visualisations</h5>
                                 <p class="mb-30">Quisque commodo nec lacus vel tempus. Duis tristique mi vitae cosmo suscipit vestibulum. Vivamus et turpis velit. Sed auctor sapien neque, nec commodo eros congue flash. Proin sollicitudin enim lorem, quis auctor velit molestie viverra. Fusce in velit scelerisque, luctus odio efficitur, efficitur ipsum. Quisque nec nibh sit amet enim rutrum molestie major victory. Curabitur id pretium lectus. Ut in viverra ex. In pharetra efficitur nisi et porta.</p>
                                 <h5>Finish &amp; Payment</h5>
                                 <p>Cras facilisis pellentesque tellus, yondu pretium justo sagittis ac. Sed egestas diam sit amet arcu sodales, estima pharetra sapien condimentum. Duis eget dolor placerat, gravida ipsum vel, tempus est. Pellentesque non nisl nec ante venenatis egestas maximus. Suspendisse id enim pharetra, euismod tellus id, endrerit sem.</p>',
                'client' => 'Abel Company',
                'active' => 1,
                'start' => Carbon::now(),
                'finish' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),               
            ],
            [
                'header' => 'THE ABEL VILLA’S GARDEN DESIGN 8',
                'slug' => 'the-abel-villas-garden-design-8',
                'title' => 'Design & constructed by Alazea.',
                'image' => 'img/bg-img/16.jpg',
                'about' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet, libero sedomin dignissim maximus, ex lorem honcus nisl, quis rhoncus dui elit in magna. Donec efficitur, senget mantis cursus, enim augue iaculis enim, eu rutrum augue diam id nunc.</p>
                            <p>Maecenas tincidunt ornare aliquet. Phasellus mattis arcu quis dolor sollicitudin sagittis. On inter donpo porta ultricies. Mauris nec urna a urna commodo rutrum sollicitudin nec neque. Sed vel justo a mi fermentum consequat. In eget luctus lectus. Aliquam malesuada nunc justo.</p>',
                'details' => '<p>Phasellus elefend odio quis dolor pretium condimentu. Morbi quis mauris ipsum rocket racoon Suspendisse auctor magna ac porta ornare. Fusce finibus nibh at lacinia lobortis.</p>
                                <ul>
                                    <li><i class="fa fa-check"></i> Vivamus starlord finibus, massa eget, suscipit metus nami at elit started</li>
                                    <li><i class="fa fa-check"></i> Cras ipsum libero, suscipit vitamin tellus vitae, feugiat ultricies purus praesent gamora.</li>
                                    <li><i class="fa fa-check"></i> Proin ex sem, ultrices drax the sit amet, facilisis destroyer et odio profession risusest.</li>
                                    <li><i class="fa fa-check"></i> Morbi maximus mauris eget groot dignissim, in laoreet justo facilisis.</li>
                                </ul>',
                'requirements' => 'Pellentesque rhoncus, sem non bibendum accumsan, nulla lacus accumsan libero, non laoreet nunc ex in metus. Nam vitae justo quis mauris lacinia ultrices. In aliquet, elit id lobortis venenatis, mauris nulla posuere felis, ut efficitur elit diam nec purus. Aenean convallis justo augue finibus mollis. Nullam diam nibh, porttitor non arcu ac, feugiat feugiat mauris.',
                'description' => '<h5>Tracking progress on a project</h5>
                                 <p class="mb-30">Lorem nam in bibendum nulla. Duis lobortis quam interdum nisl congue, ac facilisis ipsum cursus. Etiam viverra mi action sapien vestibulum, sollicitudin sodales neque pulvinar. Vivamus tincidunt iaculis ipsum ac convallis. Maecenas quam sodhe, commodo turpis vel, luctus interdum sem. In scelerisque suscipit velit moondragon. Nullam gravida risus in semper lobortis. Sed vitamin at mi eleifend feugiat. In id euismod elit. Proin ac sapien massa. Donec facilisis leo et ante dignissim posuere.</p>
                                 <h5>Master plant, Moodboards &amp; Visualisations</h5>
                                 <p class="mb-30">Quisque commodo nec lacus vel tempus. Duis tristique mi vitae cosmo suscipit vestibulum. Vivamus et turpis velit. Sed auctor sapien neque, nec commodo eros congue flash. Proin sollicitudin enim lorem, quis auctor velit molestie viverra. Fusce in velit scelerisque, luctus odio efficitur, efficitur ipsum. Quisque nec nibh sit amet enim rutrum molestie major victory. Curabitur id pretium lectus. Ut in viverra ex. In pharetra efficitur nisi et porta.</p>
                                 <h5>Finish &amp; Payment</h5>
                                 <p>Cras facilisis pellentesque tellus, yondu pretium justo sagittis ac. Sed egestas diam sit amet arcu sodales, estima pharetra sapien condimentum. Duis eget dolor placerat, gravida ipsum vel, tempus est. Pellentesque non nisl nec ante venenatis egestas maximus. Suspendisse id enim pharetra, euismod tellus id, endrerit sem.</p>',
                'client' => 'Abel Company',
                'active' => 1,
                'start' => Carbon::now(),
                'finish' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),               
            ],
        ]);

    }
}
