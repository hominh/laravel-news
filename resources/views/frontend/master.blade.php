<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Laravel news - @yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="@yield('description')">
<meta name="keyword" content="@yield('keyword')">
<meta name="author" content="@yield('author')">


    <link rel='stylesheet' id='demo-switcher-css'  href='/frontend/css/demo-switcher.css' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='/frontend/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='smartmag-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto+Slab' type='text/css' media='all' />
    <link rel='stylesheet' id='smartmag-core-css'  href='/frontend/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='smartmag-responsive-css'  href='/frontend/css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='pretty-photo-css'  href='/frontend/css/prettyPhoto.css' type='text/css' media='all' />
    <link rel='stylesheet' id='smartmag-font-awesome-css'  href='/frontend/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-css-css'  href='/frontend/css/custom.css' type='text/css' media='all' />
    <script type='text/javascript' src='/frontend/js/jquery.js'></script>
    <script type='text/javascript' src='/frontend/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='/frontend/js/jquery.prettyPhoto.js'></script>
    <script type='text/javascript' src='/frontend/js/bunyad-theme.js'></script>
    <script type='text/javascript' src='/frontend/js/jquery.flexslider-min.js'></script>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="assets/ico/favicon.html">
</head>
<body>
<!-- Header Start -->
<header>
  @include('frontend/blocks/header')
  <div class="container">
    @include('frontend/blocks/nav')
    
    </div>
  </div>
</header>
<!-- Header End -->

<div id="maincontainer">
  <!-- Slider Start-->
  @include('frontend/blocks/slide')
  <!-- Slider End-->

  
  <!-- Featured Product-->
  @yield('content')

<!-- Footer -->
<footer class='main-footer'>
            <div class='wrap'>
                <ul class='widgets row cf'>
                    <li class='widget col-4 bunyad-about'>
                        <h3 class='widgettitle'>About</h3>
                        <div class='about-widget'>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </li>
                    <li class='widget col-4 popular-posts'>
                        <h3 class='widgettitle'>Popular Posts</h3>
                        <ul class='posts-list'>
                            <li>
                                <a href='#'>
                                    <img class='attachment-post-thumbnail wp-post-image no-display appear' width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' alt='' title='' />
                                </a>
                                <div class="content">
                                    <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                    <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                </div>

                            </li>
                            <li>
                                <a href='#'>
                                    <img class='attachment-post-thumbnail wp-post-image no-display appear' width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' alt='' title='' />
                                </a>
                                <div class="content">
                                    <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                    <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                </div>

                            </li>
                            <li>
                                <a href='#'>
                                    <img class='attachment-post-thumbnail wp-post-image no-display appear' width='110' height='96' src='images/9882288604_ada2a9069a_k-110x96.jpg' alt='' title='' />
                                </a>
                                <div class="content">
                                    <time datetime='2013-12-16T15:57:52+00:00'>Dec 16, 2013 </time>
                                    <a href="#" title=''>Android Toy Restyled Again for the Latest Phone</a>

                                </div>

                            </li>
                        </ul>
                    </li>
                    <li class='widget col-4 bunyad-flickr'>
                        <h3 class="widgettitle">Flickr Photos</h3>
                        <div class="flickr-widget">


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/15522706046/">
                                    <img alt="Marcus Henderson (#75B7971)" src="http://farm4.staticflickr.com/3942/15522706046_724055dc48_s.jpg" class="no-display appear">
                                </a>
                            </div>


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/15161220656/">
                                    <img alt="Tim Atlas - Lost in the Waiting (#0748)" src="http://farm4.staticflickr.com/3876/15161220656_6258b3df9a_s.jpg" class="no-display appear">
                                </a>
                            </div>


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/13965306323/">
                                    <img alt="The Beginning of a New Journey #5694" src="http://farm8.staticflickr.com/7275/13965306323_17d0a8f644_s.jpg" class="no-display appear">
                                </a>
                            </div>


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/10412001266/">
                                    <img alt="Jackie Martinez (#9963)" src="http://farm8.staticflickr.com/7373/10412001266_483a1e4c9d_s.jpg" class="no-display appear">
                                </a>
                            </div>


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/10278343103/">
                                    <img alt="Tim Atlas - Lost in the Waiting Album Cover" src="http://farm4.staticflickr.com/3705/10278343103_dd92d24d07_s.jpg" class="no-display appear">
                                </a>
                            </div>


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/10217169844/">
                                    <img alt="Ortofon Concorde S-120 (#1211)" src="http://farm9.staticflickr.com/8552/10217169844_a83bb0c26f_s.jpg" class="no-display appear">
                                </a>
                            </div>


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/9391366956/">
                                    <img alt="Horse #9119" src="http://farm4.staticflickr.com/3832/9391366956_eae44dee74_s.jpg" class="no-display appear">
                                </a>
                            </div>


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/9163716976/">
                                    <img alt="5 241" src="http://farm6.staticflickr.com/5529/9163716976_d5d1a0c052_s.jpg" class="no-display appear">
                                </a>
                            </div>


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/8681566188/">
                                    <img alt="Content Magazine x Umbrella Salon Image Challenge 13 (#6456)" src="http://farm9.staticflickr.com/8266/8681566188_62b2ffa05e_s.jpg" class="no-display appear">
                                </a>
                            </div>


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/8436780884/">
                                    <img alt="Nasty Ray (#1058)" src="http://farm9.staticflickr.com/8361/8436780884_2b2e984a1b_s.jpg" class="no-display appear">
                                </a>
                            </div>


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/8122661150/">
                                    <img alt="Andrea Garcia / Fancy Made" src="http://farm9.staticflickr.com/8472/8122661150_5f0dbf6c61_s.jpg" class="no-display appear">
                                </a>
                            </div>


                            <div class="flickr_badge_image">
                                <a href="http://www.flickr.com/photos/markjsebastian/8075637825/">
                                    <img alt="Andrea Garcia / Fancy Made (#4427)" src="http://farm9.staticflickr.com/8196/8075637825_4febf52b7a_s.jpg" class="no-display appear">
                                </a>
                            </div>


                        </div>
                    </li>
                </ul>
            </div><!-- End .wrap !-->
        </footer><!-- End .main-footer !-->
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>