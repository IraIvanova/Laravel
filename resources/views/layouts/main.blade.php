<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<header>
    <div class="navbar-wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top box effect6">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a title="team" href="#">About</a></li>
                        <li><a title="services" href="#">Services</a></li>
                        <li><a title="works" href="#">Works</a></li>
                        <li><a title="blog" href="#">Blog</a></li>
                        <li><a title="contact" href="#">Contact</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div id="header-wrapper " class="  blur header-slider">


        <div id="myCarousel" class="carousel fade">
            <div class="bgImage"> </div>

            <div class="logo">
                <img src="{{asset('img/depositphotos_84597030-stock-illustration-sheriff-vector-icon-isolated-on.png')}}"
                     height="300px" alt=""/>
            </div>
            <!-- Картинки в карусельке -->
            <div class=" carousel-inner" role="listbox">
                <div class=" active item"><p class="home-slide-content">
                    <strong>Creative</strong> and passion
                </p>
                </div>
                <div class=" item"><p class="home-slide-content">
                    Beautiful <strong>design</strong>
                </p></div>
                <div class="item"><p class="home-slide-content">
                    Whole life is <strong>art</strong>
                </p></div>
            </div>
            <!-- Навигационные элементы -->

            <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>

        </div>
    </div>
</header>

<section class="spacer ">
    <div class="container">
        <div class="row">
            <div class=" col-sm-6 span6 alignright flyLeft">

                <div class="  blockquote   ">
                    <h3 class=" large">
                        Illustration is my inspiration
                        Create your own world!
                    </h3>
                    <p class="little">Use magic!</p>
                </div>

            </div>

            <div class="logo2 col-sm-4 hidden-xs">
                <img src="{{asset('/img/depositphotos_84597030-stock-illustration-sheriff-vector-icon-isolated-on.png')}}"
                     height="180px" alt=""/>
            </div>
        </div>
    </div>
</section>
@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="">
                <ul class="social-networks">
                    <li>Facebook</li>
                    <li>Vk</li>
                </ul>
                <p class="copyright">
                    Ivanova Irina 2017 </p>
                <div class="credits">
                    <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maxim
                    -->
                    <a href="#">GitHub</a>
                </div>

            </div>
        </div>
    </div>
    <!-- ./container -->
</footer>

<script src="{{asset('js/jquery.min.js')}}"></script>
{{--<script src="assets/js/accordion.js"></script>--}}
{{--<script src="node_modules/background-blur/dist/background-blur.min.js"></script>--}}

<!--<script src="assets/js/custom.js"></script>-->
<script type="text/javascript">
    $(document).ready(function () {
        $('.carousel').carousel({
                interval: 5000
            }
        );
$('.service-item img ').on('mouseover', function(){
    $(this).addClass('animated pulse').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function() { $(this).removeClass('animated pulse')});
 $(this).next().addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function() { $(this).removeClass('animated fadeInUp')});
});
 $('.portfolio-overlay ').on('mouseover', function(){
     $(this).addClass()
 })

    });

</script>


</body>
</html>