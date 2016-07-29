@extends('frontend.master')
@section('description','Homepage')
@section('content')
<div class='main wrap cf'>
            <div class='row'>
                <div class='col-8 main-content'>
                    <div id='post-425' class='post-425 page type-page status-publish page-content'>
                        <div class='row cf highlights-box'>
                            <div class='column half'>
                                <section class='highlights'>
                                    <span class='cat-title larger cat-14'><a href='#'>{!! $postSukienInHome[0]->catename !!}</a></span>
                                    <article>
                                        <a class='image-link' href='#'>
                                            <img class='image wp-post-image no-display appear' width='351' height='185' title='' alt=''src='{!! asset('resources/upload/'.$postSukienInHome[0]->image) !!}' />
                                            <span class='post-format-icon gallery'><i class='fa fa-picture-o'></i></span>
                                        </a>
                                        <div class='meta'>
                                            <time itemprop='datePublished' datetime='{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $postSukienInHome[0]->created_at)->format('M d, Y') }}'>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $postSukienInHome[0]->created_at)->format('M d, Y') }} </time>
                                            <!--<span class='comments'>

                                            </span> !-->

                                        </div><!-- End .meta !-->
                                        <h2 itemprop='name'>
                                            <a title='' href='#'>{!! $postSukienInHome[0]->name !!}</a>
                                        </h2>
                                        <div class='excerpt'>
                                            <p>{!! $postSukienInHome[0]->intro !!}</p>
                                        </div>
                                    </article>

                                    <ul class='block posts-list thumb'>
                                        @foreach($postSukienInHome as $key=>$item)
                                            @if($key != 0)
                                                <li>
                                                    <a href='#'>
                                                        <img class='image wp-post-image no-display appear' width='110' height='96' title='' alt=''src='{!! asset('resources/upload/'.$item->image) !!}' />
                                                    </a>
                                                    <div class='content'>
                                                        <time itemprop='datePublished' datetime='{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('M d, Y') }}'>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('M d, Y') }} </time>
                                                        <a title='{!! $item->name !!}' href="#">{!! $item->name !!}</a>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                        
                                    </ul>

                                </section>
                            </div><!-- End .column half !-->
                            <div class='column half'>
                                <section class='highlights'>
                                    <span class='cat-title larger cat-14'><a href='#'>{!! $postXahoiInHome[0]->catename !!}</a></span>
                                    <article>
                                        <a class='image-link' href='#'>
                                            <img class='image wp-post-image no-display appear' width='351' height='185' title='' alt=''src='{!! asset('resources/upload/'.$postXahoiInHome[0]->image) !!}' />
                                            <span class='post-format-icon gallery'><i class='fa fa-picture-o'></i></span>
                                        </a>
                                        <div class='meta'>
                                            <time itemprop='datePublished' datetime='{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $postXahoiInHome[0]->created_at)->format('M d, Y') }}'>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $postXahoiInHome[0]->created_at)->format('M d, Y') }} </time>
                                            <!--<span class='comments'>

                                            </span> !-->

                                        </div><!-- End .meta !-->
                                        <h2 itemprop='name'>
                                            <a title='' href='#'>{!! $postXahoiInHome[0]->name !!}</a>
                                        </h2>
                                        <div class='excerpt'>
                                            <p>{!! $postXahoiInHome[0]->intro !!}</p>
                                        </div>
                                    </article>

                                    <ul class='block posts-list thumb'>
                                        @foreach($postXahoiInHome as $key=>$item)
                                            @if($key != 0)
                                                <li>
                                                    <a href='#'>
                                                        <img class='image wp-post-image no-display appear' width='110' height='96' title='' alt=''src='{!! asset('resources/upload/'.$item->image) !!}' />
                                                    </a>
                                                    <div class='content'>
                                                        <time itemprop='datePublished' datetime='{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('M d, Y') }}'>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('M d, Y') }} </time>
                                                        <a title='{!! $item->name !!}' href="#">{!! $item->name !!}</a>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                        
                                    </ul>

                                </section>
                            </div><!-- End .column half !-->
                        </div><!-- End .row cf highlights-box !-->

                        <section class='news-focus'>
                            <div class='section-head heading cat-16'>
                                <a title='' href='#'>{!! $postThegioiInHome[0]->catename !!}</a>
                                <ul class='subcats'>
                                    <li><a data-id='0' class='active' href='#'>All</a></li>
                                    <li><a data-id='1' href='#'>Fashion</a></li>
                                    <li><a data-id='14' href='#'>Vogue</a></li>
                                </ul>
                            </div><!-- End .section-head heading cat-16 !-->
                            <div class='row news-0 highlights'>
                                <div class='column half blocks'>
                                    <article>
                                        <a class='image-link' href='#'>
                                            <img class='image wp-post-image no-display appear' width='351' height='185' title='' alt=''src='{!! asset('resources/upload/'.$postThegioiInHome[0]->image) !!}' />
                                        </a>
                                        <div class='meta'>
                                            <time itemprop='datePublished' datetime='{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $postThegioiInHome[0]->created_at)->format('M d, Y') }}'>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $postThegioiInHome[0]->created_at)->format('M d, Y') }} </time>
                                            <!--<span class='comments'>

                                            </span> !-->

                                        </div><!-- End .meta !-->
                                        <h2 itemprop='name'>
                                            <a title='' href='#'>{!! $postThegioiInHome[0]->name !!}</a>
                                        </h2>
                                        <div class='excerpt'>
                                            <p>{!! $postThegioiInHome[0]->intro !!}</p>
                                        </div>
                                    </article>
                                </div><!-- End .column half blocks !-->

                                <ul class='column half block posts-list thumb'>
                                    @foreach($postThegioiInHome as $key=>$item)
                                            @if($key != 0)
                                                <li>
                                                    <a href='#'>
                                                        <img class='image wp-post-image no-display appear' width='110' height='96' title='' alt=''src='{!! asset('resources/upload/'.$item->image) !!}' />
                                                    </a>
                                                    <div class='content'>
                                                        <time itemprop='datePublished' datetime='{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('M d, Y') }}'>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('M d, Y') }} </time>
                                                        <a title='{!! $item->name !!}' href="#">{!! $item->name !!}</a>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                    

                                </ul>

                            </div><!-- End .row news-0 highlights !-->


                        </section><!-- End .news-focus !-->

                        <section class='news-focus'>
                            <div class='section-head heading cat-16'>
                                <a title='' href='#'>{!! $postThethaoInHome[0]->catename !!}</a>
                                <ul class='subcats'>
                                    <li><a data-id='0' class='active' href='#'>All</a></li>
                                    <li><a data-id='1' href='#'>Fashion</a></li>
                                    <li><a data-id='14' href='#'>Vogue</a></li>
                                </ul>
                            </div><!-- End .section-head heading cat-16 !-->
                            <div class='row news-0 highlights'>
                                <div class='column half blocks'>
                                    <article>
                                        <a class='image-link' href='#'>
                                            <img class='image wp-post-image no-display appear' width='351' height='185' title='' alt=''src='{!! asset('resources/upload/'.$postThethaoInHome[0]->image) !!}' />
                                        </a>
                                        <div class='meta'>
                                            <time itemprop='datePublished' datetime='{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $postThethaoInHome[0]->created_at)->format('M d, Y') }}'>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $postThethaoInHome[0]->created_at)->format('M d, Y') }} </time>
                                            <!--<span class='comments'>

                                            </span> !-->

                                        </div><!-- End .meta !-->
                                        <h2 itemprop='name'>
                                            <a title='' href='#'>{!! $postThethaoInHome[0]->name !!}</a>
                                        </h2>
                                        <div class='excerpt'>
                                            <p>{!! $postThethaoInHome[0]->intro !!}</p>
                                        </div>
                                    </article>
                                </div><!-- End .column half blocks !-->

                                <ul class='column half block posts-list thumb'>
                                    @foreach($postThethaoInHome as $key=>$item)
                                        @if($key != 0)
                                            <li>
                                                <a href='#'>
                                                    <img class='image wp-post-image no-display appear' width='110' height='96' title='' alt=''src='{!! asset('resources/upload/'.$item->image) !!}' />
                                                </a>
                                                <div class='content'>
                                                    <time itemprop='datePublished' datetime='{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('M d, Y') }}'>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('M d, Y') }} </time>
                                                    <a title='{!! $item->name !!}' href="#">{!! $item->name !!}</a>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                    

                                </ul>

                            </div><!-- End .row news-0 highlights !-->


                        </section><!-- End .news-focus !-->
                        <div class="row cf builder">
                            <div class="column builder one-1">
                                <div class="adwrap-widget">
                                           
                                </div>
                            </div>             
                    
                        </div>
                        <div class="row cf highlights-box three-col">
                            <div class="column one-third">
                                <section class="highlights">
                                    <div class="section-head cat-text-19">
                                        <a href="http://theme-sphere.com/smart-mag/category/world-news/movies/">{!! $postGiaoducInHome[0]->catename !!}</a>
                                    </div>
                                    <article itemtype="http://schema.org/Article" itemscope="">
                                        <a class="image-link" itemprop="url" title="Become a Professional DJ With Jane" href="#">
                                            <img width="214" height="140" itemprop="image" title="Become a Professional DJ With Jane" alt="5138037389_cd13e45211_b" class="image wp-post-image no-display appear" src="{!! asset('resources/upload/'.$postGiaoducInHome[0]->image) !!}">
                                        </a>
                                        <div class="meta">
                                            <time itemprop="datePublished" datetime="2014-12-16T16:55:33+00:00">Dec 16, 2014 </time>
                                            <span class="comments">
                                                <a href="http://theme-sphere.com/smart-mag/maecenas-mollis-arcu-in-massa-rhoncus/#comments"><i class="fa fa-comments-o"></i>
                                                0</a>
                                            </span>
                                        </div>
                                        <h2 itemprop="name headline">
                                            <a title="Become a Professional DJ With Jane" href="#">{!! $postGiaoducInHome[0]->name !!}</a>
                                        </h2>
                                    </article>
                                    <ul class="block posts">
                                        @foreach($postGiaoducInHome as $key=>$item)
                                            @if($key != 0)
                                                <li>
                                                    <i class="fa fa-angle-right"></i>
                                                    <a class="title" title="{!! $item->name !!}" href="#">
                                                    {!! $item->name !!}               
                                                    </a>
                                                </li>
                                            @endif


                                        @endforeach
                                        
                                    </ul>
                                </section>
                            </div>
                            <div class="column one-third">
                                <section class="highlights">
                                    <div class="section-head cat-text-19">
                                        <a href="http://theme-sphere.com/smart-mag/category/world-news/movies/">{!! $postKinhdoanhInHome[0]->catename !!}</a>
                                    </div>
                                    <article itemtype="http://schema.org/Article" itemscope="">
                                        <a class="image-link" itemprop="url" title="Become a Professional DJ With Jane" href="#">
                                            <img width="214" height="140" itemprop="image" title="Become a Professional DJ With Jane" alt="5138037389_cd13e45211_b" class="image wp-post-image no-display appear" src="{!! asset('resources/upload/'.$postKinhdoanhInHome[0]->image) !!}">
                                        </a>
                                        <div class="meta">
                                            <time itemprop="datePublished" datetime="2014-12-16T16:55:33+00:00">Dec 16, 2014 </time>
                                            <span class="comments">
                                                <a href="http://theme-sphere.com/smart-mag/maecenas-mollis-arcu-in-massa-rhoncus/#comments"><i class="fa fa-comments-o"></i>
                                                0</a>
                                            </span>
                                        </div>
                                        <h2 itemprop="name headline">
                                            <a title="Become a Professional DJ With Jane" href="#">{!! $postKinhdoanhInHome[0]->name !!}</a>
                                        </h2>
                                    </article>
                                    <ul class="block posts">
                                        @foreach($postKinhdoanhInHome as $key=>$item)
                                            @if($key != 0)
                                                <li>
                                                    <i class="fa fa-angle-right"></i>
                                                    <a class="title" title="{!! $item->name !!}" href="#">
                                                    {!! $item->name !!}               
                                                    </a>
                                                </li>
                                            @endif


                                        @endforeach
                                        
                                    </ul>
                                </section>
                            </div>
                            <div class="column one-third">
                                <section class="highlights">
                                    <div class="section-head cat-text-19">
                                        <a href="http://theme-sphere.com/smart-mag/category/world-news/movies/">{!! $postVanhoaInHome[0]->catename !!}</a>
                                    </div>
                                    <article itemtype="http://schema.org/Article" itemscope="">
                                        <a class="image-link" itemprop="url" title="Become a Professional DJ With Jane" href="#">
                                            <img width="214" height="140" itemprop="image" title="Become a Professional DJ With Jane" alt="5138037389_cd13e45211_b" class="image wp-post-image no-display appear" src="{!! asset('resources/upload/'.$postVanhoaInHome[0]->image) !!}">
                                        </a>
                                        <div class="meta">
                                            <time itemprop="datePublished" datetime="2014-12-16T16:55:33+00:00">Dec 16, 2014 </time>
                                            <span class="comments">
                                                <a href="http://theme-sphere.com/smart-mag/maecenas-mollis-arcu-in-massa-rhoncus/#comments"><i class="fa fa-comments-o"></i>
                                                0</a>
                                            </span>
                                        </div>
                                        <h2 itemprop="name headline">
                                            <a title="Become a Professional DJ With Jane" href="#">{!! $postVanhoaInHome[0]->name !!}</a>
                                        </h2>
                                    </article>
                                    <ul class="block posts">
                                        @foreach($postVanhoaInHome as $key=>$item)
                                            @if($key != 0)
                                                <li>
                                                    <i class="fa fa-angle-right"></i>
                                                    <a class="title" title="{!! $item->name !!}" href="#">
                                                    {!! $item->name !!}               
                                                    </a>
                                                </li>
                                            @endif


                                        @endforeach
                                        
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </div><!-- End .post-425 page type-page status-publish page-content #post-425 !-->
                </div><!-- End .col-8 main-content !-->

            <aside class='col-4 sidebar'>
                <ul>
                    <li id='bunyad-tabbed-recent-widget-10' class='widget tabbed'>
                        <ul class='tabs-list'>
                            <li class='active'>
                                <a href='#' data-tab='1'>Popular</a>
                            </li>
                            <li class=''>
                                <a href='#' data-tab='2'>Recent</a>
                            </li>
                            <li class=''>
                                <a href='#' data-tab='3'>Top Reviews</a>
                            </li>
                        </ul>
                        <div class='tabs-data'>
                            <ul class='tab-posts active posts-list' id='recent-tab-1'>
                                <li>
                                    <a href='#'><img width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' class='attachment-post-thumbnail wp-post-image' alt='' title='' /></a>
                                    <div class="content">
                                        <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                        <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                    </div>
                                </li>
                                <li>
                                    <a href='#'><img width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' class='attachment-post-thumbnail wp-post-image' alt='' title='' /></a>
                                    <div class="content">
                                        <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                        <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                    </div>
                                </li>
                                <li>
                                    <a href='#'><img width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' class='attachment-post-thumbnail wp-post-image' alt='' title='' /></a>
                                    <div class="content">
                                        <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                        <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                    </div>
                                </li>
                            </ul>
                            <ul class='tab-posts  posts-list' id='recent-tab-2'>
                                <li>
                                    <a href='#'><img width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' class='attachment-post-thumbnail wp-post-image' alt='' title='' /></a>
                                    <div class="content">
                                        <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                        <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                    </div>
                                </li>
                                <li>
                                    <a href='#'><img width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' class='attachment-post-thumbnail wp-post-image' alt='' title='' /></a>
                                    <div class="content">
                                        <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                        <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                    </div>
                                </li>
                                <li>
                                    <a href='#'><img width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' class='attachment-post-thumbnail wp-post-image' alt='' title='' /></a>
                                    <div class="content">
                                        <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                        <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                    </div>
                                </li>
                            </ul>
                            <ul class='tab-posts  posts-list' id='recent-tab-3'>
                                <li>
                                    <a href='#'><img width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' class='attachment-post-thumbnail wp-post-image' alt='' title='' /></a>
                                    <div class="content">
                                        <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                        <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                    </div>
                                </li>
                                <li>
                                    <a href='#'><img width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' class='attachment-post-thumbnail wp-post-image' alt='' title='' /></a>
                                    <div class="content">
                                        <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                        <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                    </div>
                                </li>
                                <li>
                                    <a href='#'><img width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' class='attachment-post-thumbnail wp-post-image' alt='' title='' /></a>
                                    <div class="content">
                                        <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                        <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- End #bunyad-tabbed-recent-widget-10 .widget tabbed !-->
                    <li id='text-10' class='widget widget_text'>
                        <h3 class="widgettitle">Latest Galleries</h3>
                        <div class='textwidget'>
                            <section class='gallery-block'>
                                <div class='flexslider slider'>
                                    <ul class='slides'>
                                        <li>
                                            <a class='image-link' href='' title=''>
                                                <span class='image'>
                                                    <img width='351' height='185' src='images/5181279108_7c98889c6f_b-351x185.jpg' class='attachment-main-block wp-post-image' alt='' title='' />
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class='image-link' href='' title=''>
                                                <span class='image'>
                                                    <img width='351' height='185' src='images/10674399254_eb68aaa18b_k-351x185.jpg' class='attachment-main-block wp-post-image' alt='' title='' />
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- End .flexslider slider !-->
                            </section><!-- End .gallery-block !-->
                        </div><!-- End .textwidget !-->
                    </li><!-- End #text10 .widget widget_text !-->
                    <li id='bunyad-latest-reviews-widget-2' class='widget latest-reviews'>
                        <h3 class="widgettitle">Latest Reviews</h3>
                        <ul class='posts-list'>
                            <li>
                                <a href='#'>
                                    <img class='image wp-post-image no-display appear' width='110' height='96' title='' alt=''src='images/9882288604_ada2a9069a_k-110x96.jpg' />
                                </a>
                                <div class='content'>
                                    <time datetime='2013-12-21T18:05:28+00:00'>Dec 21, 2013 </time>
                                    <a title="Frankenstein Fails to Scare Cinemas" href="#">Frankenstein Fails to Scare CinemasdfdsfCinemasdfdsfCinemasdfdsfCinemasdfdsfCinemasdfdsfCinemasdfdsf</a>
                                </div>
                            </li>
                            <li>
                                <a href='#'>
                                    <img class='image wp-post-image no-display appear' width='110' height='96' title='' alt=''src='images/9882288604_ada2a9069a_k-110x96.jpg' />
                                </a>
                                <div class='content'>
                                    <time datetime='2013-12-21T18:05:28+00:00'>Dec 21, 2013 </time>
                                    <a title="Frankenstein Fails to Scare Cinemas" href="#">Frankenstein Fails to Scare CinemasdfdsfCinemasdfdsfCinemasdfdsfCinemasdfdsfCinemasdfdsfCinemasdfdsf</a>
                                </div>
                            </li>
                            <li>
                                <a href='#'>
                                    <img class='image wp-post-image no-display appear' width='110' height='96' title='' alt=''src='images/9882288604_ada2a9069a_k-110x96.jpg' />
                                </a>
                                <div class='content'>
                                    <time datetime='2013-12-21T18:05:28+00:00'>Dec 21, 2013 </time>
                                    <a title="Frankenstein Fails to Scare Cinemas" href="#">Frankenstein Fails to Scare CinemasdfdsfCinemasdfdsfCinemasdfdsfCinemasdfdsfCinemasdfdsfCinemasdfdsf</a>
                                </div>
                            </li>
                        </ul>
                    </li><!-- End .widget latest-reviews #bunyad-latest-reviews-widget-2 !-->
                </ul>
            </aside> <!-- End .col-4 sidebar !-->

            </div><!-- End .row !-->
        </div><!-- End .main wrap cf !-->

          @endsection