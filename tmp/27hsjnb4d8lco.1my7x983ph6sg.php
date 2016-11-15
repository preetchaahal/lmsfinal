<?php echo $this->render('website/templates/header.html',$this->mime,get_defined_vars(),0); ?>
	<!-- =====header====== -->	
	
	<!-- =====slider====== -->
	<div class="slider">
	  <div class="container">
	    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	      </ol>

	        <!-- Wrapper for slides -->
	        <div class="carousel-inner" role="listbox">
	          <div class="item active">
	            <img src="<?php echo $ASSETS['site']; ?>/img/slide1.jpg" alt="...">
	            <div class="carousel-caption">
	             Slide 1
	            </div>
	          </div>
	          <div class="item">
	            <img src="<?php echo $ASSETS['site']; ?>/img/slide1.jpg" alt="...">
	            <div class="carousel-caption">
	              Slide 2
	            </div>
	          </div>

	           <div class="item">
	              <img src="<?php echo $ASSETS['site']; ?>/img/slide1.jpg" alt="...">
	              <div class="carousel-caption">
	              Slide 3
	            </div>
	    </div>
	  </div>

	  <!-- Controls -->
	        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	          <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	          <span class="sr-only">Next</span>
	        </a>
	      </div>
	  </div>
	</div>
	<div class="clearfix"></div>

	<!-- =======newsletter -->
	<div class="container">
	  <div class="newsletter">
	    <div class="col-md-6">
	      <h3>SIGN UP FOR OFFERS AND NEWSLETTERS:</h3>
	    </div>

	    <div class="col-md-4 col-xs-6 col-sm-6">
	      <input type="text" class="mail" placeholder="Submit E-Mail Address">
	     </div>

	    <div class="col-md-2 col-xs-6 col-sm-6" id="btn" align="center">
	      <button type="button" class="mailbtn btn-Default">SUBMIT</button>
	    </div>
	      <div class="clearfix"></div>
	  </div>
	</div>

	<!-- ========upper=========== -->
	<div class="block container spacer">
	    <div class="row">
	    <div class=" welborder col-md-4 col-xs-10">
	        <div class="welcome">
	           <h2><span class="grey">Online Interior Design </span> <span class="charcaol">Courses</h2>
	        </div>
	      </div>

	       <div class="col-md-8 col-xs-10 text-justify">
	          <p class="text-danger">LEARN INTERIOR DESIGN 100% ONLINE -
	        START STUDYING AT ANY TIME OF THE YEAR, FROM ANYWHERE IN THE WORLD, WITH NO ATTENDANCE EVER REQUIRED</p>
	        <p>Whether you're looking to improve your interior design skills or contemplating a complete career change, we have the interior design course to suit you:</p>
	        <div class="col-md-6 link">
	          <a href="#">FREE "SAMPLER" INTERIOR DECORATING COURSE</a>
	          <p>Try our FREE "sampler" course first, with no obligation, to get a taste of the contents of the full Interior Decorator course. </p>

	        <a href="#">INTERIOR DECORATOR COURSE</a>
	        <p>A thorough introduction to the subject, comprising 10 detailed lessons with accompanying assignments.</p>

	        <a href="#">LEARN AutoCAD/REVIT ARCHITECTURE ONLINE</a>
	        <p>We have partnered with online specialists <b><a href="#">CAD Training Online</a></b> to offer our students the opportunity to study <b>AutoCAD</b> or <b>Revit Architecture for Interior Design </b>100% online, <b>AT A 10% DISCOUNT FOR RHODEC STUDENTS. </b></p>
	      </div>

	        <div class="interior-img1 col-md-6 col-xs-10" align="right">
	          <img src="<?php echo $ASSETS['site']; ?>/img/tsv_transform_full_interior_short.gif" alt="">
	        </div>
	    </div>
	  </div>
	</div>

	<!-- ==========bottom======== -->
	<div class="news">
	  <div class="container">
	      <hr/>
	      <div class="row">

	      <div class="link">
	        <a href="#">PROFESSIONAL INTERIOR DESIGN DIPLOMA COURSE</a>
	        <p>Trains you to know, understand and put into practice the essentials of professional interior design. The course of study is structured in ten units.</p>
	<hr/>
	        <a href="#">BACHELOR'S DEGREE INTERIOR DESIGN COURSE</a>
	        <p>Upgrade to <b><u>Bachelor of Arts in Interior Design </u></b>status with just one further year of study on graduation from the Diploma Course, 100% by distance learning. Hands-on project and dissertation work.</p>
	      </div>
	    </div>
	  </div>
	  <div class="clearfix"></div>

<!-- =====footer====== -->
<?php echo $this->render('website/templates/footer.html',$this->mime,get_defined_vars(),0); ?>