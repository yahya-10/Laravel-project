<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>the foodies</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		@include('Client.Components.header')
	</header>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Special Menu</h1>
				</div>
			</div>
		</div>
	</div>
    
    
        {{-- <h1>{{$item['title']}}</h1> --}}
    

	<!-- End All Pages -->
	
	<!-- Start Stuff -->
	<div class="stuff-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Stuff</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    @if(count($items) > 0)
                        @foreach($items as $item)
                            <div class="our-team">
                                <div class="pic">
                                    <img src="images/stuff-img-01.jpg">
                                    {{-- <img src={{$item['pictures.picture1']}} > --}}
                                    <ul class="social">
                                        <li><a href="#" class="fa fa-play"></a></li>
                                        <li><a href="#" class="fa fa-picture-o"></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3 class="title">{{$item['title']}}</h3>
                                    <a href="#" class="post">{{$item['description']}}<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach 
                    @else 
                        <p>There's no item yet!!</p>
                    @endif
                </div>
{{-- 
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/stuff-img-02.jpg">
                            <ul class="social">
                                <li><a href="#" class="fa fa-play"></a></li>
								<li><a href="#" class="fa fa-picture-o"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/stuff-img-03.jpg">
                            <ul class="social">
                                <li><a href="#" class="fa fa-play"></a></li>
								<li><a href="#" class="fa fa-picture-o"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">Web Developer</span>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/stuff-img-04.jpg">
                            <ul class="social">
                                <li><a href="#" class="fa fa-play"></a></li>
								<li><a href="#" class="fa fa-picture-o"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Web Developer</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/stuff-img-05.jpg">
                            <ul class="social">
								<li><a href="#" class="fa fa-play"></a></li>
								<li><a href="#" class="fa fa-picture-o"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/stuff-img-06.jpg">
                            <ul class="social">
                                <li><a href="#" class="fa fa-play"></a></li>
								<li><a href="#" class="fa fa-picture-o"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">Web Developer</span>
                        </div>
                    </div>
                </div> --}}
            </div>
		</div>
	</div>
	<!-- End Stuff -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
		
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		@include('Client.Components.contactInfo')
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		@include('Client.Components.footer')
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>