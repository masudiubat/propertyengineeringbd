<nav class="navbar navbar-default navbar-fixed white no-background bootsnav">

    <div class="container">
        <!-- Start Atribute Navigation -->

        <!-- End Atribute Navigation -->
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index-2.html">
                <img src="{{asset('storage/images/brand/logo60.png')}}" class="logo logo-display" alt="">
                <img src="{{asset('storage/images/brand/logo60.png')}}" class="logo logo-scrolled" alt="">
            </a>
        </div>
        <!-- End Header Navigation -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{route('about.us')}}">About Us</a></li>
                <li><a href="{{route('project')}}">Projects</a></li>
                <li><a href="{{route('product')}}">Products</a></li>
                <li><a href="{{route('gallery')}}">Gallery</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>