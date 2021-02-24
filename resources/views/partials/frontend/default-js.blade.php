<script src="{{asset('assets/js/jQuery_v3.1.1.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/menu.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/parallax.js')}}"></script>
<script src="{{asset('assets/js/circle-progress.js')}}"></script>
<script src="{{asset('assets/js/circle-examples.js')}}"></script>
<script src="{{asset('assets/js/jquery.easeScroll.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bootsnav.js')}}"></script>

@stack('js')

<script>
    $("html").easeScroll();
    // Add scrollspy to <body>
    $('body').scrollspy({
        target: '#menu'
    })
    $("#menu ul li a[href^='#']").on('click', function(e) {
        // prevent default anchor click behavior
        e.preventDefault();
        // store hash
        var hash = this.hash;
        // animate
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1500, function() {
            // when done, add hash to url
            // (default click behaviour)
            window.location.hash = hash;
        });
    });
</script>