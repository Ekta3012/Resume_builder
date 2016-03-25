	 <!DOCTYPE html>
<html>
<head>
	<title>Resume Builder | Software Incubator</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<script type="text/javascript">
		/*$(document).ready(function() {
		 var s = $(".navbar_scroll");
		 var pos = s.position();        
		 $(window).scroll(function() {
		  var windowpos = $(window).scrollTop();
		  if (windowpos >= pos.top) {
		   s.addClass("navbaron");
		  }
		  else {
		   s.removeClass("navbaron"); 
		  }
		 });
		});*/
		$(document).ready(function(){       
		   var scroll_start = 0;
		   var startchange = $('#download');
		   var offset = startchange.offset();
		    if (startchange.length){
		   $(document).scroll(function() { 
		      scroll_start = $(this).scrollTop();
		      if(scroll_start > offset.top) {
		          $(".navbar-default").css('background-color', 'blue');
		       } else {
		          $('.navbar-default').css('background-color', 'black');
		       }
		   });
		    }
		});
		window.onmouseover=load;
		function load(){
			land_temp=document.getElementByClassName("land_temp");
			land_temp.style.position="relative";
			land_temp.style.top='50px';
			mUp();
		}
		function mUp(){
			land_temp.style.top=parseInt(land_temp.style.top)-10+'px'
			//alert('done');
		}

		function mDown(){
			land_temp.style.top=parseInt(land_temp.style.top)+10+'px'
			//alert('try again');
		}
	</script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="content-land">
		<div style="font-size:40px; padding-top: 100px;">Create a standout resume in minutes.</div>
		<div style="font-size:30px; padding-top: 20px; padding-bottom: 20px;">Easily create professional resumes.</div>
		<a class="btn btn-info" href={{ url('/login') }} id="create_button">Create Resume Now</a><br>
		<img src="img/a.png" class="land_temp" onmouseover="mUp(this)" onmouseout="mDown(this)">
		<img src="img/b.png" class="land_temp">
		<img src="img/c.png" class="land_temp">
	</div>
	<div id="download">
		<span>Downloaded 0</span> <span>Saved 0</span>
	</div>
	<!--fixed navigation-->
	<div class="navbar_scroll">
	<nav class="navbar navbar-fixed-top" style="font-size: 20px;">
		<div class="container-fluid" >
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            	</button>
				<a class="navbar-brand" href="#">Resume Builder</a>
			</div>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Customer Reviews</a></li>
					<li><a href="#sample_design"> Sample Designs</a></li>
					<li><a href="#contact"> Contact Us</a></li>
					@if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} 
                            <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                               <li><a href="{{ url('/logout') }}">
                               <i class="fa fa-btn fa-sign-out"></i>
                               Logout</a></li>
                            </ul>
                        </li>
                    @endif
				</ul>
			</div>				
		</div>			
	</nav>
	</div>
	<div class="container-fluid" id="why_rb">
		<h2 style="text-align: center;">Why Resume Builder</h2>
			Resume Builder makes it fast and easy to create the powerful, professional resume hiring managers are looking for.<br>
			Our Resume Builder lets you create a resume in minutes!
	</div>
	<div class="container-fluid" id="how_itworks">
		<h1 style="text-align: center;">How It <span style="color: #15b8db">Works</span></h1>
		<div class="row step">
			<div class="col-sm-6">
				<img src="img/macpro.png" class="img-responsive">
			</div>
			<div class="col-sm-6" style="font-size: 25px; width: 50%;">
				 Build a resume with the help of few simple steps.
			</div>
		</div><hr>
		<div class="pointer pointer-right">
			<img src="img/arrow_down_left.png">
		</div>
		<div class="row step">
			<div class="col-sm-6" style="font-size: 25px; width: 50%;">
				Choose a template, of your choice.Make your resume of your choice.
			</div>
			<div class="col-sm-6">
				<img src="img/templates.png" class="img-responsive">
			</div>
		</div><hr>
		<div class="pointer pointer-left">
			<img src="img/arrow_down_right.png">
		</div>
		<div class="row step">
			<div class="col-sm-6">
				<img src="img/download.png" class="img-responsive">
			</div>
			<div class="col-sm-6" style="font-size: 25px; width: 50%;">
				Download Your resume in pdf or word document format.
			</div>
		</div><hr>
		<div class="pointer pointer-right">
			<img src="img/arrow_down_left.png">
		</div>
		<div class="row step">
			<div style="font-size: 25px; width: 50%;" class="col-sm-6">
				Save your resume for future reference. You can edit/ view your resume in future. By creating an account in Resume Builder.
			</div>
			<div class="col-sm-6">
				<img src="img/login.png" class="img-responsive">
			</div>
		</div><hr>
	</div>
	<div class="container" id="sample_design">
		<ul class="nav nav-tabs">
		    <li class="active"><a href="#sample-featured" data-toggle="tab">Featured</a></li>
		    <li><a href="#" data-toggle="tab">Professional</a></li>
		    <li><a href="#" data-toggle="tab">Engineer</a></li>
	  	</ul>
	</div>
	<!--Tab panes-->
	<div class="tab-content cv-templates">
		<div class="tab-pane" id="sample-featured">
			<div class="template">
				<img src="img/avant.jpg">
				<figcaption>Design Director</figcaption>
			</div>
			<div class="template">
				<img src="img/gallant.jpg">
				<figcaption>President</figcaption>
			</div>
			<div class="template">
				<img src="img/slate.jpg">
				<figcaption>Sales & Marketing</figcaption>
			</div>
		</div>
	</div>

	<div class="container-fluid" id="features">
		<h1 style="text-align: center; margin-bottom: 80px;">Features</h1>
		<ul style="list-style: none;">
			<li>Easy to create with social login</li>
			<li>Provides different design templates</li>
			<li>You can Save and download your resume for future.</li>
			<li>You can Edit your resume. Change the templates</li>
		</ul>
	</div>
	<div class="container" id="contact">
		<h1 style="text-align: center; color: #15b8db; margin-bottom: 30px; ">Contact Us</h1>
		Thanks for your interest in Resume Builder. If you have a question regarding your Resume Builder, please visit our support forums. To get in touch, use the contacts listed below.
		<ul>
			<li>silive.in</li>
			<li>www.facebook.com/si</li>
		</ul>
	</div>
	<footer class="container-fluid panel-footer">
	<ul style="list-style: none; text-align: center;">
			<li style="display: inline;"><img src="img/fb.png" class="f_img"></li>
			<li style="display: inline;"><img src="img/twitter.png"class="f_img"></li>
			<li style="display: inline;"><img src="img/google.png" class="f_img"></li>
		</ul>
		<div style="text-align: center;">ResumeBuilder-2016 &copy; @ Software Incubator.</div>
	</footer>
</body>
</html>