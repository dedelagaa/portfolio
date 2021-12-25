<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body>

	<div id="global-search" class="gl-s">

	    <!-- Begin global search close button -->
	    <div class="global-search-close-wrap">
	        <a href="#0" class="global-search-close" title="Close">
	            <i class="fas fa-close"></i>
	        </a>
	    </div>
	    <!-- End global search close button -->

	    <!-- Begin global search form -->
	    <form id="global-search-form" method="get" action="search-results-2.html">
	        <input type="text" class="form-control" id="global-search-input" name="search"
	            placeholder="Type your keywords...">
	    </form>
	    <!-- End global search form -->

	</div>

    @include('layouts.partials.header')

    <div id="body-content">       

        <div id="content-container">
            @yield('content')
        </div>

        @include('layouts.partials.footer')
        
    </div>

    @include('layouts.partials.script')

</body>
</html>