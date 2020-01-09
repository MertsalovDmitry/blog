<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert( [
            [
                'image' => 'img/bg-img/35.jpg',
                'author_id' => '2',
                'title' => 'Garden designers across the country forecast ideas shaping the gardening world in 2018',
                'body' => '
                    <p>Integer luctus diam ac scerisque consectetur. Vimus ottawas euismod nec lacus sit amet. Aenean interdus midu vitae, uttah mattis augue fermentum. Donec auctor massa orci, quis condimentum odio eleifended. Orci varius natoque penatibuset magnis discount parturient montes, nascetur ridiculus mus. Ut felis lectus, sagittis in turpis sit amet, ornare interdu ligula. Proin sed dolor eu nulla fermentum fermentum. Suspendisse eget mollis diam. Nulla non mauris et eros accumsan imperdit sed ut turpis. Ut aliquam et sapien at convallis. Integer eu porttitor lacus. Curabitur id aliquam mauris.</p>
                    <div class="row mb-30">
                        <div class="col-lg-7">
                            <p>Nullam lectus elit, volutpat velo justo sit damet, tincidunt dapibus turpis. Vivamus idelit nec enim tristique blandit in sit down metunc. Maecenas accumsan nunc quis nisl porttitor varius sed luctus ligula. Aeneamana pellentesque enim eu magna vehicula suada.</p>
                            <p>Quisque suscipit elit sit ametz pellentesque scelerisque. Integer actioner cursu quam, estina portitor cant. Vestibulum luctus libero urna gamora scelerisque laoret. Quisque nect facilisis neque. Integer vitaer dapibus purus, fames turpis egestas. Nullam vulputa nisl tempus luctus.</p>
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ asset(\'img/bg-img/36.jpg\') }}" alt="">
                        </div>
                    </div>
                    <p>Mauris nisi arcu, consectetur convallis fringilla quis, posuere ac mauris. Ut in placerat lorem. Donec cursus malesuada nibhem, eget consectetur posuere sed. Suspendisse auctor nec diamet consectetur. Etiam ac maurised nisib tincidunt viverra. Sed nulla lacus, convallis vel nunc sed, fringilla venenatis neque.</p>
                    <blockquote>
                        <div class="blockquote-text">
                            <h5>“If every plant and flower were found in all places, the charm of locality would not exist. Everything varies, and that gives the interest.”</h5>
                            <h5>Richard Jefferies</h5>
                        </div>
                    </blockquote>
                    <h4>Plant the love of the holy ones within your spirit.</h4>
                    <p>Phasellus laoreet mattis ultrices. Integer ex sem, ultrices eu sem in, laoreet vehicula ligula. Phasellus quistor blandit salah convallis augue. Sed velot dictum sapient. In pulvinar libero turpis. Quisque facilisis bigbang consenti. Nullam bendumaz, massan consequat in gravida porttitor, aguet lacus condimentum mauris, id blandit quam augue eget mana. Etiam denim jeans lacus, nascetur auge bibendum vel pulvinar viverra, mattis sit amet mi. Mauris fringilla, ex vitae maximus fringilla, neque sapien maximus justo, cursus risus neque sed nibh. Donec at urna eros scelerisque non nibh sed.</p>
                    <p>Cras porta tortor quis eros volutpat, at vehicula lectus posuere. Sed faucibus euismod nibh, necta auctor nunclear elementum non. Aliquam ut nulla efficitur tortor vestibulum pharetra inget nisl. Suspendisse eleifenden metus, vitae viverra dante volutpat quisto. Curabitur tator risus, sagittis a imperdiet sed, volutpat sit amet. Integer gravida leo sit amet pulvinar vehicula.</p>',
                'slug' => 'garden-designers-across-the-country-forecast-ideas-shaping-the-gardening-world-in-2018',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'image' => 'img/bg-img/35.jpg',
                'author_id' => '3',
                'title' => 'Garden designers across the country forecast ideas shaping the gardening world in 2018 3',
                'body' => '
                    <p>Integer luctus diam ac scerisque consectetur. Vimus ottawas euismod nec lacus sit amet. Aenean interdus midu vitae, uttah mattis augue fermentum. Donec auctor massa orci, quis condimentum odio eleifended. Orci varius natoque penatibuset magnis discount parturient montes, nascetur ridiculus mus. Ut felis lectus, sagittis in turpis sit amet, ornare interdu ligula. Proin sed dolor eu nulla fermentum fermentum. Suspendisse eget mollis diam. Nulla non mauris et eros accumsan imperdit sed ut turpis. Ut aliquam et sapien at convallis. Integer eu porttitor lacus. Curabitur id aliquam mauris.</p>
                    <div class="row mb-30">
                        <div class="col-lg-7">
                            <p>Nullam lectus elit, volutpat velo justo sit damet, tincidunt dapibus turpis. Vivamus idelit nec enim tristique blandit in sit down metunc. Maecenas accumsan nunc quis nisl porttitor varius sed luctus ligula. Aeneamana pellentesque enim eu magna vehicula suada.</p>
                            <p>Quisque suscipit elit sit ametz pellentesque scelerisque. Integer actioner cursu quam, estina portitor cant. Vestibulum luctus libero urna gamora scelerisque laoret. Quisque nect facilisis neque. Integer vitaer dapibus purus, fames turpis egestas. Nullam vulputa nisl tempus luctus.</p>
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ asset(\'img/bg-img/36.jpg\') }}" alt="">
                        </div>
                    </div>
                    <p>Mauris nisi arcu, consectetur convallis fringilla quis, posuere ac mauris. Ut in placerat lorem. Donec cursus malesuada nibhem, eget consectetur posuere sed. Suspendisse auctor nec diamet consectetur. Etiam ac maurised nisib tincidunt viverra. Sed nulla lacus, convallis vel nunc sed, fringilla venenatis neque.</p>
                    <blockquote>
                        <div class="blockquote-text">
                            <h5>“If every plant and flower were found in all places, the charm of locality would not exist. Everything varies, and that gives the interest.”</h5>
                            <h5>Richard Jefferies</h5>
                        </div>
                    </blockquote>
                    <h4>Plant the love of the holy ones within your spirit.</h4>
                    <p>Phasellus laoreet mattis ultrices. Integer ex sem, ultrices eu sem in, laoreet vehicula ligula. Phasellus quistor blandit salah convallis augue. Sed velot dictum sapient. In pulvinar libero turpis. Quisque facilisis bigbang consenti. Nullam bendumaz, massan consequat in gravida porttitor, aguet lacus condimentum mauris, id blandit quam augue eget mana. Etiam denim jeans lacus, nascetur auge bibendum vel pulvinar viverra, mattis sit amet mi. Mauris fringilla, ex vitae maximus fringilla, neque sapien maximus justo, cursus risus neque sed nibh. Donec at urna eros scelerisque non nibh sed.</p>
                    <p>Cras porta tortor quis eros volutpat, at vehicula lectus posuere. Sed faucibus euismod nibh, necta auctor nunclear elementum non. Aliquam ut nulla efficitur tortor vestibulum pharetra inget nisl. Suspendisse eleifenden metus, vitae viverra dante volutpat quisto. Curabitur tator risus, sagittis a imperdiet sed, volutpat sit amet. Integer gravida leo sit amet pulvinar vehicula.</p>',
                'slug' => 'garden-designers-across-the-country-forecast-ideas-shaping-the-gardening-world-in-2018-3',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'image' => 'img/bg-img/35.jpg',
                'author_id' => '1',
                'title' => 'Garden designers across the country forecast ideas shaping the gardening world in 2018 4',
                'body' => '
                    <p>Integer luctus diam ac scerisque consectetur. Vimus ottawas euismod nec lacus sit amet. Aenean interdus midu vitae, uttah mattis augue fermentum. Donec auctor massa orci, quis condimentum odio eleifended. Orci varius natoque penatibuset magnis discount parturient montes, nascetur ridiculus mus. Ut felis lectus, sagittis in turpis sit amet, ornare interdu ligula. Proin sed dolor eu nulla fermentum fermentum. Suspendisse eget mollis diam. Nulla non mauris et eros accumsan imperdit sed ut turpis. Ut aliquam et sapien at convallis. Integer eu porttitor lacus. Curabitur id aliquam mauris.</p>
                    <div class="row mb-30">
                        <div class="col-lg-7">
                            <p>Nullam lectus elit, volutpat velo justo sit damet, tincidunt dapibus turpis. Vivamus idelit nec enim tristique blandit in sit down metunc. Maecenas accumsan nunc quis nisl porttitor varius sed luctus ligula. Aeneamana pellentesque enim eu magna vehicula suada.</p>
                            <p>Quisque suscipit elit sit ametz pellentesque scelerisque. Integer actioner cursu quam, estina portitor cant. Vestibulum luctus libero urna gamora scelerisque laoret. Quisque nect facilisis neque. Integer vitaer dapibus purus, fames turpis egestas. Nullam vulputa nisl tempus luctus.</p>
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ asset(\'img/bg-img/36.jpg\') }}" alt="">
                        </div>
                    </div>
                    <p>Mauris nisi arcu, consectetur convallis fringilla quis, posuere ac mauris. Ut in placerat lorem. Donec cursus malesuada nibhem, eget consectetur posuere sed. Suspendisse auctor nec diamet consectetur. Etiam ac maurised nisib tincidunt viverra. Sed nulla lacus, convallis vel nunc sed, fringilla venenatis neque.</p>
                    <blockquote>
                        <div class="blockquote-text">
                            <h5>“If every plant and flower were found in all places, the charm of locality would not exist. Everything varies, and that gives the interest.”</h5>
                            <h5>Richard Jefferies</h5>
                        </div>
                    </blockquote>
                    <h4>Plant the love of the holy ones within your spirit.</h4>
                    <p>Phasellus laoreet mattis ultrices. Integer ex sem, ultrices eu sem in, laoreet vehicula ligula. Phasellus quistor blandit salah convallis augue. Sed velot dictum sapient. In pulvinar libero turpis. Quisque facilisis bigbang consenti. Nullam bendumaz, massan consequat in gravida porttitor, aguet lacus condimentum mauris, id blandit quam augue eget mana. Etiam denim jeans lacus, nascetur auge bibendum vel pulvinar viverra, mattis sit amet mi. Mauris fringilla, ex vitae maximus fringilla, neque sapien maximus justo, cursus risus neque sed nibh. Donec at urna eros scelerisque non nibh sed.</p>
                    <p>Cras porta tortor quis eros volutpat, at vehicula lectus posuere. Sed faucibus euismod nibh, necta auctor nunclear elementum non. Aliquam ut nulla efficitur tortor vestibulum pharetra inget nisl. Suspendisse eleifenden metus, vitae viverra dante volutpat quisto. Curabitur tator risus, sagittis a imperdiet sed, volutpat sit amet. Integer gravida leo sit amet pulvinar vehicula.</p>',
                'slug' => 'garden-designers-across-the-country-forecast-ideas-shaping-the-gardening-world-in-2018-4',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'image' => 'img/bg-img/35.jpg',
                'author_id' => '4',
                'title' => 'Garden designers across the country forecast ideas shaping the gardening world in 2018 5',
                'body' => '
                    <p>Integer luctus diam ac scerisque consectetur. Vimus ottawas euismod nec lacus sit amet. Aenean interdus midu vitae, uttah mattis augue fermentum. Donec auctor massa orci, quis condimentum odio eleifended. Orci varius natoque penatibuset magnis discount parturient montes, nascetur ridiculus mus. Ut felis lectus, sagittis in turpis sit amet, ornare interdu ligula. Proin sed dolor eu nulla fermentum fermentum. Suspendisse eget mollis diam. Nulla non mauris et eros accumsan imperdit sed ut turpis. Ut aliquam et sapien at convallis. Integer eu porttitor lacus. Curabitur id aliquam mauris.</p>
                    <div class="row mb-30">
                        <div class="col-lg-7">
                            <p>Nullam lectus elit, volutpat velo justo sit damet, tincidunt dapibus turpis. Vivamus idelit nec enim tristique blandit in sit down metunc. Maecenas accumsan nunc quis nisl porttitor varius sed luctus ligula. Aeneamana pellentesque enim eu magna vehicula suada.</p>
                            <p>Quisque suscipit elit sit ametz pellentesque scelerisque. Integer actioner cursu quam, estina portitor cant. Vestibulum luctus libero urna gamora scelerisque laoret. Quisque nect facilisis neque. Integer vitaer dapibus purus, fames turpis egestas. Nullam vulputa nisl tempus luctus.</p>
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ asset(\'img/bg-img/36.jpg\') }}" alt="">
                        </div>
                    </div>
                    <p>Mauris nisi arcu, consectetur convallis fringilla quis, posuere ac mauris. Ut in placerat lorem. Donec cursus malesuada nibhem, eget consectetur posuere sed. Suspendisse auctor nec diamet consectetur. Etiam ac maurised nisib tincidunt viverra. Sed nulla lacus, convallis vel nunc sed, fringilla venenatis neque.</p>
                    <blockquote>
                        <div class="blockquote-text">
                            <h5>“If every plant and flower were found in all places, the charm of locality would not exist. Everything varies, and that gives the interest.”</h5>
                            <h5>Richard Jefferies</h5>
                        </div>
                    </blockquote>
                    <h4>Plant the love of the holy ones within your spirit.</h4>
                    <p>Phasellus laoreet mattis ultrices. Integer ex sem, ultrices eu sem in, laoreet vehicula ligula. Phasellus quistor blandit salah convallis augue. Sed velot dictum sapient. In pulvinar libero turpis. Quisque facilisis bigbang consenti. Nullam bendumaz, massan consequat in gravida porttitor, aguet lacus condimentum mauris, id blandit quam augue eget mana. Etiam denim jeans lacus, nascetur auge bibendum vel pulvinar viverra, mattis sit amet mi. Mauris fringilla, ex vitae maximus fringilla, neque sapien maximus justo, cursus risus neque sed nibh. Donec at urna eros scelerisque non nibh sed.</p>
                    <p>Cras porta tortor quis eros volutpat, at vehicula lectus posuere. Sed faucibus euismod nibh, necta auctor nunclear elementum non. Aliquam ut nulla efficitur tortor vestibulum pharetra inget nisl. Suspendisse eleifenden metus, vitae viverra dante volutpat quisto. Curabitur tator risus, sagittis a imperdiet sed, volutpat sit amet. Integer gravida leo sit amet pulvinar vehicula.</p>',
                'slug' => 'garden-designers-across-the-country-forecast-ideas-shaping-the-gardening-world-in-2018-5',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'image' => 'img/bg-img/35.jpg',
                'author_id' => '1',
                'title' => 'Garden designers across the country forecast ideas shaping the gardening world in 2018 6',
                'body' => '
                    <p>Integer luctus diam ac scerisque consectetur. Vimus ottawas euismod nec lacus sit amet. Aenean interdus midu vitae, uttah mattis augue fermentum. Donec auctor massa orci, quis condimentum odio eleifended. Orci varius natoque penatibuset magnis discount parturient montes, nascetur ridiculus mus. Ut felis lectus, sagittis in turpis sit amet, ornare interdu ligula. Proin sed dolor eu nulla fermentum fermentum. Suspendisse eget mollis diam. Nulla non mauris et eros accumsan imperdit sed ut turpis. Ut aliquam et sapien at convallis. Integer eu porttitor lacus. Curabitur id aliquam mauris.</p>
                    <div class="row mb-30">
                        <div class="col-lg-7">
                            <p>Nullam lectus elit, volutpat velo justo sit damet, tincidunt dapibus turpis. Vivamus idelit nec enim tristique blandit in sit down metunc. Maecenas accumsan nunc quis nisl porttitor varius sed luctus ligula. Aeneamana pellentesque enim eu magna vehicula suada.</p>
                            <p>Quisque suscipit elit sit ametz pellentesque scelerisque. Integer actioner cursu quam, estina portitor cant. Vestibulum luctus libero urna gamora scelerisque laoret. Quisque nect facilisis neque. Integer vitaer dapibus purus, fames turpis egestas. Nullam vulputa nisl tempus luctus.</p>
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ asset(\'img/bg-img/36.jpg\') }}" alt="">
                        </div>
                    </div>
                    <p>Mauris nisi arcu, consectetur convallis fringilla quis, posuere ac mauris. Ut in placerat lorem. Donec cursus malesuada nibhem, eget consectetur posuere sed. Suspendisse auctor nec diamet consectetur. Etiam ac maurised nisib tincidunt viverra. Sed nulla lacus, convallis vel nunc sed, fringilla venenatis neque.</p>
                    <blockquote>
                        <div class="blockquote-text">
                            <h5>“If every plant and flower were found in all places, the charm of locality would not exist. Everything varies, and that gives the interest.”</h5>
                            <h5>Richard Jefferies</h5>
                        </div>
                    </blockquote>
                    <h4>Plant the love of the holy ones within your spirit.</h4>
                    <p>Phasellus laoreet mattis ultrices. Integer ex sem, ultrices eu sem in, laoreet vehicula ligula. Phasellus quistor blandit salah convallis augue. Sed velot dictum sapient. In pulvinar libero turpis. Quisque facilisis bigbang consenti. Nullam bendumaz, massan consequat in gravida porttitor, aguet lacus condimentum mauris, id blandit quam augue eget mana. Etiam denim jeans lacus, nascetur auge bibendum vel pulvinar viverra, mattis sit amet mi. Mauris fringilla, ex vitae maximus fringilla, neque sapien maximus justo, cursus risus neque sed nibh. Donec at urna eros scelerisque non nibh sed.</p>
                    <p>Cras porta tortor quis eros volutpat, at vehicula lectus posuere. Sed faucibus euismod nibh, necta auctor nunclear elementum non. Aliquam ut nulla efficitur tortor vestibulum pharetra inget nisl. Suspendisse eleifenden metus, vitae viverra dante volutpat quisto. Curabitur tator risus, sagittis a imperdiet sed, volutpat sit amet. Integer gravida leo sit amet pulvinar vehicula.</p>',
                'slug' => 'garden-designers-across-the-country-forecast-ideas-shaping-the-gardening-world-in-2018-6',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'image' => 'img/bg-img/35.jpg',
                'author_id' => '4',
                'title' => 'Garden designers across the country forecast ideas shaping the gardening world in 2018 7',
                'body' => '
                    <p>Integer luctus diam ac scerisque consectetur. Vimus ottawas euismod nec lacus sit amet. Aenean interdus midu vitae, uttah mattis augue fermentum. Donec auctor massa orci, quis condimentum odio eleifended. Orci varius natoque penatibuset magnis discount parturient montes, nascetur ridiculus mus. Ut felis lectus, sagittis in turpis sit amet, ornare interdu ligula. Proin sed dolor eu nulla fermentum fermentum. Suspendisse eget mollis diam. Nulla non mauris et eros accumsan imperdit sed ut turpis. Ut aliquam et sapien at convallis. Integer eu porttitor lacus. Curabitur id aliquam mauris.</p>
                    <div class="row mb-30">
                        <div class="col-lg-7">
                            <p>Nullam lectus elit, volutpat velo justo sit damet, tincidunt dapibus turpis. Vivamus idelit nec enim tristique blandit in sit down metunc. Maecenas accumsan nunc quis nisl porttitor varius sed luctus ligula. Aeneamana pellentesque enim eu magna vehicula suada.</p>
                            <p>Quisque suscipit elit sit ametz pellentesque scelerisque. Integer actioner cursu quam, estina portitor cant. Vestibulum luctus libero urna gamora scelerisque laoret. Quisque nect facilisis neque. Integer vitaer dapibus purus, fames turpis egestas. Nullam vulputa nisl tempus luctus.</p>
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ asset(\'img/bg-img/36.jpg\') }}" alt="">
                        </div>
                    </div>
                    <p>Mauris nisi arcu, consectetur convallis fringilla quis, posuere ac mauris. Ut in placerat lorem. Donec cursus malesuada nibhem, eget consectetur posuere sed. Suspendisse auctor nec diamet consectetur. Etiam ac maurised nisib tincidunt viverra. Sed nulla lacus, convallis vel nunc sed, fringilla venenatis neque.</p>
                    <blockquote>
                        <div class="blockquote-text">
                            <h5>“If every plant and flower were found in all places, the charm of locality would not exist. Everything varies, and that gives the interest.”</h5>
                            <h5>Richard Jefferies</h5>
                        </div>
                    </blockquote>
                    <h4>Plant the love of the holy ones within your spirit.</h4>
                    <p>Phasellus laoreet mattis ultrices. Integer ex sem, ultrices eu sem in, laoreet vehicula ligula. Phasellus quistor blandit salah convallis augue. Sed velot dictum sapient. In pulvinar libero turpis. Quisque facilisis bigbang consenti. Nullam bendumaz, massan consequat in gravida porttitor, aguet lacus condimentum mauris, id blandit quam augue eget mana. Etiam denim jeans lacus, nascetur auge bibendum vel pulvinar viverra, mattis sit amet mi. Mauris fringilla, ex vitae maximus fringilla, neque sapien maximus justo, cursus risus neque sed nibh. Donec at urna eros scelerisque non nibh sed.</p>
                    <p>Cras porta tortor quis eros volutpat, at vehicula lectus posuere. Sed faucibus euismod nibh, necta auctor nunclear elementum non. Aliquam ut nulla efficitur tortor vestibulum pharetra inget nisl. Suspendisse eleifenden metus, vitae viverra dante volutpat quisto. Curabitur tator risus, sagittis a imperdiet sed, volutpat sit amet. Integer gravida leo sit amet pulvinar vehicula.</p>',
                'slug' => 'garden-designers-across-the-country-forecast-ideas-shaping-the-gardening-world-in-2018-7',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'image' => 'img/bg-img/35.jpg',
                'author_id' => '4',
                'title' => 'Garden designers across the country forecast ideas shaping the gardening world in 2018 2',
                'body' => '
                    <p>Integer luctus diam ac scerisque consectetur. Vimus ottawas euismod nec lacus sit amet. Aenean interdus midu vitae, uttah mattis augue fermentum. Donec auctor massa orci, quis condimentum odio eleifended. Orci varius natoque penatibuset magnis discount parturient montes, nascetur ridiculus mus. Ut felis lectus, sagittis in turpis sit amet, ornare interdu ligula. Proin sed dolor eu nulla fermentum fermentum. Suspendisse eget mollis diam. Nulla non mauris et eros accumsan imperdit sed ut turpis. Ut aliquam et sapien at convallis. Integer eu porttitor lacus. Curabitur id aliquam mauris.</p>
                    <div class="row mb-30">
                        <div class="col-lg-7">
                            <p>Nullam lectus elit, volutpat velo justo sit damet, tincidunt dapibus turpis. Vivamus idelit nec enim tristique blandit in sit down metunc. Maecenas accumsan nunc quis nisl porttitor varius sed luctus ligula. Aeneamana pellentesque enim eu magna vehicula suada.</p>
                            <p>Quisque suscipit elit sit ametz pellentesque scelerisque. Integer actioner cursu quam, estina portitor cant. Vestibulum luctus libero urna gamora scelerisque laoret. Quisque nect facilisis neque. Integer vitaer dapibus purus, fames turpis egestas. Nullam vulputa nisl tempus luctus.</p>
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ asset(\'img/bg-img/36.jpg\') }}" alt="">
                        </div>
                    </div>
                    <p>Mauris nisi arcu, consectetur convallis fringilla quis, posuere ac mauris. Ut in placerat lorem. Donec cursus malesuada nibhem, eget consectetur posuere sed. Suspendisse auctor nec diamet consectetur. Etiam ac maurised nisib tincidunt viverra. Sed nulla lacus, convallis vel nunc sed, fringilla venenatis neque.</p>
                    <blockquote>
                        <div class="blockquote-text">
                            <h5>“If every plant and flower were found in all places, the charm of locality would not exist. Everything varies, and that gives the interest.”</h5>
                            <h5>Richard Jefferies</h5>
                        </div>
                    </blockquote>
                    <h4>Plant the love of the holy ones within your spirit.</h4>
                    <p>Phasellus laoreet mattis ultrices. Integer ex sem, ultrices eu sem in, laoreet vehicula ligula. Phasellus quistor blandit salah convallis augue. Sed velot dictum sapient. In pulvinar libero turpis. Quisque facilisis bigbang consenti. Nullam bendumaz, massan consequat in gravida porttitor, aguet lacus condimentum mauris, id blandit quam augue eget mana. Etiam denim jeans lacus, nascetur auge bibendum vel pulvinar viverra, mattis sit amet mi. Mauris fringilla, ex vitae maximus fringilla, neque sapien maximus justo, cursus risus neque sed nibh. Donec at urna eros scelerisque non nibh sed.</p>
                    <p>Cras porta tortor quis eros volutpat, at vehicula lectus posuere. Sed faucibus euismod nibh, necta auctor nunclear elementum non. Aliquam ut nulla efficitur tortor vestibulum pharetra inget nisl. Suspendisse eleifenden metus, vitae viverra dante volutpat quisto. Curabitur tator risus, sagittis a imperdiet sed, volutpat sit amet. Integer gravida leo sit amet pulvinar vehicula.</p>',
                'slug' => 'garden-designers-across-the-country-forecast-ideas-shaping-the-gardening-world-in-2018-2',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}