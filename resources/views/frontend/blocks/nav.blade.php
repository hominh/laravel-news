       <div id='main-head' class='main-head'>
            <div class='wrap'>
                <header>
                    <div class='title'>
                        <a rel="home" title="SmartMag" href="#">
                            SMART<span class="main-color">MAG</span></a>
                    </div><!--End .title !-->
                    <div class='right'>
                        Ads is here
                    </div><!--End .right !-->
                </header><!--End header !-->
                <nav class='navigation cf'>
                    <div class="mobile" data-type="classic" data-search="1">
                        <a href="#" class="selected">
                        <span class="text">Navigate</span><span class="current"></span> <i class="hamburger fa fa-bars"></i>
                        </a>
                    </div>
                    <div class='menu-main-menu-container'>
                    <ul class="menu" id="menu-main-menu">
                        <li class='menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-425 current_page_item menu-item-722' id='menu-item-722'>
                            <a href='{{url('/')}}' title='Home'>Home</a>
                        </li>
                        @foreach($parent_catedata as $item_parent)
                        <?php $parentaliascate = $item_parent["alias"]; $parentnameid = $item_parent["id"]; ?>
                        <li class='menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2087' id=''><a href='#'><a href="{!! URL('category',[$parentnameid,$parentaliascate]) !!}">{!! $item_parent["name"] !!}</a>
                        <ul class='sub-menu'>
                            @foreach($sub_catedata as $item_sub)
                                <?php $subaliascate = $item_sub["alias"]; $subnameid = $item_sub["id"]; ?>
                                @if($item_parent["id"] == $item_sub["parent_id"])
                                    <li class='menu-item menu-item-type-custom menu-item-object-custom menu-item-2090'<a href="{!! URL('category',[$subnameid,$subaliascate]) !!}">{!! $item_sub["name"] !!}</a></li>
                                @endif()    
                            @endforeach
                        </ul>

                        @endforeach
                        
                        
                       
                        
                        
                        
                        
                        
                    </ul>
                    </div><!-- End .menu-main-menu-container !-->
                </nav><!--End nav menu !-->

            </div><!-- End .wrap !-->

        </div><!-- End .main-head #main-head !-->