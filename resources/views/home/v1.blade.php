@extends('layouts.main', ["page_title" => "Home"])

@section('content')
<section id="intro" class="slideshow bg-dark">

    <div class="owl-carousel cursor-grab fade-out-scroll-5 nav-bottom-right" data-items="1" data-dots="false"
        data-nav="true">

        <!-- Begin carousel item 
        ========================= -->
        <div class="cc-item parallax bg-image"
            style="background-image: url(assets/img/intro/banner_1.jpg); background-position: 50% 50%;"
            data-percent-height="0.9">

            <!-- Begin caption -->
            <div class="cc-caption intro-caption bottom-left caption-animate">
                <h1 class="intro-title">Hi!<br>I'm Dede Laga </h1>
                <div class="intro-sub-title-wrap max-width-400">
                    <!-- max width class is optional -->
                    <h2 class="intro-sub-title">
                        I'm a Web Developer that creates a really cool projects. :)
                    </h2>
                </div>
            </div>
            <!-- End caption -->

        </div>

        <div class="cc-item parallax bg-image"
            style="background-image: url(assets/img/intro/banner_2.jpg); background-position: 50% 50%;"
            data-percent-height="0.9">

            <!-- Begin caption -->
            <div class="cc-caption intro-caption bottom-left caption-animate">
                <h1 class="intro-title">Shadow<br>on The Wall</h1>
                <div class="intro-sub-title-wrap">
                    <h2 class="intro-sub-title">
                        Movement walk togetherness concrete group of people mystery beautiful silhouette standing.
                    </h2>
                </div>
            </div>
            <!-- End caption -->

        </div>

        <div class="cc-item parallax bg-image"
            style="background-image: url(assets/img/intro/banner_3.jpg); background-position: 50% 55%;"
            data-percent-height="0.9">

            <!-- Begin caption -->
            <div class="cc-caption intro-caption bottom-left caption-animate">
                <h1 class="intro-title">Black Sand<br>Beach</h1>
                <div class="intro-sub-title-wrap">
                    <h2 class="intro-sub-title">
                        In Iceland, with the plane wreck. <br> How cool is that?
                    </h2>
                </div>
            </div>
            <!-- End caption -->

        </div>


    </div>
    <!-- End content carousel -->

</section>
<!-- End intro -->


<section id="search-results-section" style="background-color: #90098787">
    <div class="container" >
        <div class="row">
            <div class="col-md-12">

                <!-- Begin tabs wrap 
                ===================== -->
                <div class="tabs-wrap product-tabs">

                    <!-- Begin nav tabs 
                    ====================
                    * Use class "nav-pills" or "nav-tabs" to style tabs.
                    * Use class "text-center" or "text-right" to aling tabs.
                    * Use class "nav-justified" to enable equal widths tabs.
                    -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li role="presentation" class="active"><a href="#39876221" aria-controls="39876221" role="tab" data-toggle="tab">From Blog (2)</a></li>
                        <li role="presentation"><a href="#39075564" aria-controls="39075564" role="tab" data-toggle="tab">From Portfolio (3)</a></li>
                        <li role="presentation"><a href="#37009132" aria-controls="37009132" role="tab" data-toggle="tab">From Shop (2)</a></li>

                        <li role="presentation"><a href="#38871143" aria-controls="38871143" role="tab" data-toggle="tab">From Pages (1)</a></li>
                        <li role="presentation"><a href="#90098787" aria-controls="90098787" role="tab" data-toggle="tab">From Galleries (1)</a></li>
                    </ul>
                    <!-- End nav tabs -->

                    <!-- Begin tabs contents -->
                    <div class="tab-content">

                        <!-- Begin tab pane -->
                        <div role="tabpanel" class="fade tab-pane active in" id="39876221">

                            <!--Begin search results -->
                            <div class="search-results">

                                <!-- Begin search result head (from blog) -->
                                <div class="search-results-head">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2 class="no-margin">- From Blog</h2>
                                            <p class="small text-gray"><em>Search results from blog.</em></p>
                                        </div>

                                        <div class="col-sm-6 text-right small text-gray">
                                            <span class="sr-count">2 Results are found</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End search result head -->

                                <!-- Begin search result item 
                                ============================== -->
                                <div class="search-results-item">
                                    <div class="row">
                                        <div class="row-md-height">

                                            <!-- Column -->
                                            <a href="blog-single-sidebar-right.html" class="col-md-4 col-md-height sr-item-image bg-image" style="background-image: url(assets/img/blog/list/blog-4.jpg);"></a> <!-- /.col -->

                                            <!-- Column -->
                                            <div class="col-md-8 col-md-height">

                                                <!-- Begin search result item info -->
                                                <div class="sr-item-info">
                                                    <div class="sr-item-category"><a href="#">News</a>, <a href="#">Lifestyle</a></div>

                                                    <a href="blog-single-sidebar-right.html" class="sr-item-title">
                                                        <h2>Learn From These Mistakes Before You Learn Skateboarding</h2>
                                                    </a>

                                                    <div class="sr-item-meta">
                                                        <i class="fas fa-clock-o"></i> 
                                                        <span class="published">April 11, 2016</span>
                                                        <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">John Doe</a></span>
                                                    </div>
                                                    
                                                    <div class="sr-item-desc">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non recusandae ipsa cum eum aspernatur sint eligendi. Accusantium, veniam, porro voluptatum dolorem deleniti laborum sapiente...
                                                    </div>
                                                </div>
                                                <!-- End search result item info -->

                                            </div> <!-- /.col -->
                                        </div> <!-- /.row-height -->
                                    </div> <!-- /.row -->
                                </div>
                                <!-- End search result item -->

                                <!-- Begin search result item 
                                ============================== -->
                                <div class="search-results-item">
                                    <div class="row">
                                        <div class="row-md-height">

                                            <!-- Column -->
                                            <a href="blog-single-sidebar-right.html" class="col-md-4 col-md-height sr-item-image bg-image" style="background-image: url(assets/img/blog/list/blog-3.jpg);"></a> <!-- /.col -->

                                            <!-- Column -->
                                            <div class="col-md-8 col-md-height">

                                                <!-- Begin search result item info -->
                                                <div class="sr-item-info">
                                                    <div class="sr-item-category"><a href="#">News</a>, <a href="#">Technology</a></div>

                                                    <a href="blog-single-sidebar-right.html" class="sr-item-title">
                                                        <h2>10 Lessons That Will Teach You All You Need To Know About Electricity</h2>
                                                    </a>

                                                    <div class="sr-item-meta">
                                                        <i class="fas fa-clock-o"></i> 
                                                        <span class="published">April 11, 2016</span>
                                                        <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">John Doe</a></span>
                                                    </div>
                                                    
                                                    <div class="sr-item-desc">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non recusandae ipsa cum eum aspernatur sint eligendi. Accusantium, veniam, porro voluptatum dolorem deleniti laborum sapiente...
                                                    </div>
                                                </div>
                                                <!-- End search result item info -->

                                            </div> <!-- /.col -->
                                        </div> <!-- /.row-height -->
                                    </div> <!-- /.row -->
                                </div>
                                <!-- End search result item -->

                            </div>
                            <!--End search results -->

                        </div>
                        <!-- End tab pane -->

                        <!-- Begin tab pane -->
                        <div role="tabpanel" class="fade tab-pane" id="39075564">

                            <!--Begin search results -->
                            <div class="search-results">

                                <!-- Begin search result head (from portfolio) -->
                                <div class="search-results-head">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2 class="no-margin">- From Portfolio</h2>
                                            <p class="small text-gray"><em>Search results from portfolio.</em></p>
                                        </div>

                                        <div class="col-sm-6 text-right small text-gray">
                                            <span class="sr-count">3 Results are found</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End search result head -->

                                <!-- Begin search result item 
                                ============================== -->
                                <div class="search-results-item">
                                    <div class="row">
                                        <div class="row-md-height">

                                            <!-- Column -->
                                            <a href="portfolio-single-3.html" class="col-md-4 col-md-height sr-item-image bg-image" style="background-image: url(assets/img/porfolio/portfolio-3.jpg);"></a> <!-- /.col -->

                                            <!-- Column -->
                                            <div class="col-md-8 col-md-height">

                                                <!-- Begin search result item info -->
                                                <div class="sr-item-info padding-bottom-80">
                                                    <div class="sr-item-category"><a href="#">Print</a></div>

                                                    <a href="portfolio-single-3.html" class="sr-item-title">
                                                        <h2>Armenian Inventors</h2>
                                                    </a>

                                                    <a href="portfolio-single-3.html" class="btn btn-default margin-top-40">View More</a>
                                                </div>
                                                <!-- End search result item info -->

                                            </div> <!-- /.col -->
                                        </div> <!-- /.row-height -->
                                    </div> <!-- /.row -->
                                </div>
                                <!-- End search result item -->

                                <!-- Begin search result item 
                                ============================== -->
                                <div class="search-results-item">
                                    <div class="row">
                                        <div class="row-md-height">

                                            <!-- Column -->
                                            <a href="portfolio-single-1.html" class="col-md-4 col-md-height sr-item-image bg-image" style="background-image: url(assets/img/porfolio/portfolio-2.jpg);"></a> <!-- /.col -->

                                            <!-- Column -->
                                            <div class="col-md-8 col-md-height">

                                                <!-- Begin search result item info -->
                                                <div class="sr-item-info padding-bottom-80">
                                                    <div class="sr-item-category"><a href="#">Print</a></div>

                                                    <a href="portfolio-single-1.html" class="sr-item-title">
                                                        <h2>Beer Six Back</h2>
                                                    </a>

                                                    <a href="portfolio-single-1.html" class="btn btn-default margin-top-40">View More</a>
                                                </div>
                                                <!-- End search result item info -->

                                            </div> <!-- /.col -->
                                        </div> <!-- /.row-height -->
                                    </div> <!-- /.row -->
                                </div>
                                <!-- End search result item -->

                                <!-- Begin search result item 
                                ============================== -->
                                <div class="search-results-item">
                                    <div class="row">
                                        <div class="row-md-height">

                                            <!-- Column -->
                                            <a href="portfolio-single-2.html" class="col-md-4 col-md-height sr-item-image bg-image" style="background-image: url(assets/img/porfolio/portfolio-1.jpg);"></a> <!-- /.col -->

                                            <!-- Column -->
                                            <div class="col-md-8 col-md-height">

                                                <!-- Begin search result item info -->
                                                <div class="sr-item-info padding-bottom-80">
                                                    <div class="sr-item-category"><a href="#">Print</a>, <a href="#">Motion</a></div>

                                                    <a href="portfolio-single-2.html" class="sr-item-title">
                                                        <h2>Sushi Bar</h2>
                                                    </a>

                                                    <a href="portfolio-single-2.html" class="btn btn-default margin-top-40">View More</a>
                                                </div>
                                                <!-- End search result item info -->

                                            </div> <!-- /.col -->
                                        </div> <!-- /.row-height -->
                                    </div> <!-- /.row -->
                                </div>
                                <!-- End search result item -->

                            </div>
                            <!--End search results -->

                        </div>
                        <!-- End tab pane -->

                        <!-- Begin tab pane -->
                        <div role="tabpanel" class="fade tab-pane" id="37009132">

                            <!--Begin search results -->
                            <div class="search-results">

                                <!-- Begin search result head (from portfolio) -->
                                <div class="search-results-head">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2 class="no-margin">- From Shop</h2>
                                            <p class="small text-gray"><em>Search results from shop.</em></p>
                                        </div>

                                        <div class="col-sm-6 text-right small text-gray">
                                            <span class="sr-count">2 Results are found</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End search result head -->

                                <!-- Begin search result item 
                                ============================== -->
                                <div class="search-results-item">
                                    <div class="row">
                                        <div class="row-md-height">

                                            <!-- Column -->
                                            <a href="shop-single.html" class="col-md-4 col-md-height sr-item-image bg-image" style="background-image: url(assets/img/shop/shop-2.jpg);"></a> <!-- /.col -->

                                            <!-- Column -->
                                            <div class="col-md-8 col-md-height">

                                                <!-- Begin search result item info -->
                                                <div class="sr-item-info">
                                                    <div class="sr-item-category"><a href="#">Design</a>, <a href="#">Motion</a></div>

                                                    <a href="shop-single.html" class="sr-item-title">
                                                        <h2>Exocet Chair</h2>
                                                    </a>

                                                    <div class="sr-item-price">
                                                        <span class="sr-item-price-old">$490.00</span> 
                                                        <span class="sr-item-price-new">$390.00</span>
                                                    </div>

                                                    <div class="sr-item-desc">
                                                        Non recusandae ipsa cum eum aspernatur sint eligendi. Accusantium, veniam, porro voluptatum dolorem deleniti laborum sapiente...
                                                    </div>

                                                    <div class="margin-top-20">
                                                        <a href="shop-single.html" class="btn btn-dark-bordered btn-sm">View Details</a>
                                                        <a href="" class="btn btn-dark btn-sm"><i class="fas fa-shopping-bag"></i> Add To Cart</a>
                                                    </div>
                                                </div>
                                                <!-- End search result item info -->

                                            </div> <!-- /.col -->
                                        </div> <!-- /.row-height -->
                                    </div> <!-- /.row -->
                                </div>
                                <!-- End search result item -->

                                <!-- Begin search result item 
                                ============================== -->
                                <div class="search-results-item">
                                    <div class="row">
                                        <div class="row-md-height">

                                            <!-- Column -->
                                            <a href="shop-single.html" class="col-md-4 col-md-height sr-item-image bg-image" style="background-image: url(assets/img/shop/shop-3.jpg);"></a> <!-- /.col -->

                                            <!-- Column -->
                                            <div class="col-md-8 col-md-height">

                                                <!-- Begin search result item info -->
                                                <div class="sr-item-info">
                                                    <div class="sr-item-category"><a href="#">Design</a>, <a href="#">Motion</a></div>

                                                    <a href="shop-single.html" class="sr-item-title">
                                                        <h2>E3/E4 Shairs</h2>
                                                    </a>

                                                    <div class="sr-item-price">$480.00</div>

                                                    <div class="sr-item-desc">
                                                        Non recusandae ipsa cum eum aspernatur sint eligendi. Accusantium, veniam, porro voluptatum dolorem deleniti laborum sapiente...
                                                    </div>

                                                    <div class="margin-top-30">
                                                        <a href="shop-single.html" class="btn btn-dark-bordered btn-sm">View Details</a>
                                                        <a href="" class="btn btn-dark btn-sm"><i class="fas fa-shopping-bag"></i> Add To Cart</a>
                                                    </div>
                                                </div>
                                                <!-- End search result item info -->

                                            </div> <!-- /.col -->
                                        </div> <!-- /.row-height -->
                                    </div> <!-- /.row -->
                                </div>
                                <!-- End search result item -->

                            </div>
                            <!--End search results -->
                            
                        </div>
                        <!-- End tab pane -->

                        <!-- Begin tab pane -->
                        <div role="tabpanel" class="fade tab-pane" id="38871143">

                            <!--Begin search results -->
                            <div class="search-results">

                                <!-- Begin search result head (from portfolio) -->
                                <div class="search-results-head">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2 class="no-margin">- From Pages</h2>
                                            <p class="small text-gray"><em>Search results from pages.</em></p>
                                        </div>

                                        <div class="col-sm-6 text-right small text-gray">
                                            <span class="sr-count">1 Result are found</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End search result head -->

                                <!-- Begin search result item 
                                ============================== -->
                                <div class="search-results-item">
                                    <div class="row">
                                        <div class="row-md-height">

                                            <!-- Column -->
                                            <a href="page-dummy-2.html" class="col-md-4 col-md-height sr-item-image bg-image" style="background-image: url(assets/img/page-header/page-header-bg-24.jpg);"></a> <!-- /.col -->

                                            <!-- Column -->
                                            <div class="col-md-8 col-md-height">

                                                <!-- Begin search result item info -->
                                                <div class="sr-item-info padding-bottom-60">

                                                    <a href="page-dummy-2.html" class="sr-item-title">
                                                        <h2>Entero Timeck</h2>
                                                    </a>

                                                    <div class="sr-item-desc">
                                                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed viverra rhoncus placerat. Quisque sed auctor turpis. Etiam elementum malesuada felis, sit amet aliquet nibh laoreet et...
                                                    </div>

                                                    <a href="page-dummy-2.html" class="btn btn-default margin-top-40">Read More</a>
                                                </div>
                                                <!-- End search result item info -->

                                            </div> <!-- /.col -->
                                        </div> <!-- /.row-height -->
                                    </div> <!-- /.row -->
                                </div>
                                <!-- End search result item -->

                            </div>
                            <!--End search results -->
                            
                        </div>
                        <!-- End tab pane -->

                        <!-- Begin tab pane -->
                        <div role="tabpanel" class="fade tab-pane" id="90098787">

                            <!--Begin search results -->
                            <div class="search-results">

                                <!-- Begin search result head (from portfolio) -->
                                <div class="search-results-head">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2 class="no-margin">- From Galleries</h2>
                                            <p class="small text-gray"><em>Search results from galleries.</em></p>
                                        </div>

                                        <div class="col-sm-6 text-right small text-gray">
                                            <span class="sr-count">1 Result are found</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End search result head -->

                                <!-- Begin search result item 
                                ============================== -->
                                <div class="search-results-item">
                                    <div class="row">
                                        <div class="row-md-height">

                                            <!-- Column -->
                                            <a href="gallery-single.html" class="col-md-4 col-md-height sr-item-image bg-image" style="background-image: url(assets/img/page-header/page-header-bg-22.jpg);"></a> <!-- /.col -->

                                            <!-- Column -->
                                            <div class="col-md-8 col-md-height">

                                                <!-- Begin search result item info -->
                                                <div class="sr-item-info padding-bottom-60">

                                                    <div class="sr-item-category"><a href="#">Fashion</a>, <a href="#">Outdoor</a></div>

                                                    <a href="gallery-single.html" class="sr-item-title">
                                                        <h2>Paris Fashion Week</h2>
                                                    </a>

                                                    <div class="sr-item-meta">
                                                        <span class="gli-photos-count">39 photos</span> 
                                                        <span class="gli-photos-views">· 211 views</span>
                                                    </div>

                                                    <a href="gallery-single.html" class="btn btn-default margin-top-40">View The Entire Gallery</a>
                                                </div>
                                                <!-- End search result item info -->

                                            </div> <!-- /.col -->
                                        </div> <!-- /.row-height -->
                                    </div> <!-- /.row -->
                                </div>
                                <!-- End search result item -->

                            </div>
                            <!--End search results -->
                            
                        </div>
                        <!-- End tab pane -->

                    </div>
                    <!-- End tabs contents -->

                </div>
                <!-- End tabs wrap -->

            </div> <!-- /.col -->
        </div> <!-- /.row -->
        
    </div> <!-- /.container -->

</section>

@endsection