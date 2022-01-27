<?php include 'assets/templates/site_header.php';?>

<div class="js_quicksearch_parent">

	<div class="fat_hero left halfy lesshalfy" id="top">

		<h1 class="pink">Online learning for <br>the social sector.</h1>

		<div class="i_need">

			<div class="btn-group">
			  <button class="btn btn-text to_work_on disabled btn-lg" type="button">
					
			    <i class="far fa-arrow-down"></i> 
			    <span class="ineedtowork" id="ineedtowork">I need to work on </span>
			  </button>
			  <button class="btn btn-text dropdown-toggle shadow-none" data-ineed="" type="button" id="ineedbutton" data-bs-toggle="dropdown" aria-expanded="false">
			    <strong class="pink">literally everything</strong> <i class="fal fa-chevron-down"></i>
			  </button>
		    <ul class="dropdown-menu" aria-labelledby="ineed" data-ineedselect="">
		      <li><a class="dropdown-item cyan" href="#" data-searchify="project management">our project management issues</a></li>
		      <li><a class="dropdown-item red" href="#" data-searchify="business">business and startup stuff</a></li>
		      <li><a class="dropdown-item purple" href="#" data-searchify="digital">digital and internet fun</a></li>
		    </ul>
	    	<form class="quicksearch_form">
			    <div class="input-group mb-3">
					  <input type="text" class="form-control" id="quicksearch" placeholder="whatever I search for..."> 
					</div>
					<a class="x"><i class="far fa-times"></i></a>
				</form>
			</div>

			

		</div> <!-- i_need -->

	</div>

	<div class="fat_section all_lessons">

		<?php include 'assets/templates/intros/lean.php';?>
		<?php include 'assets/templates/intros/finance.php';?>
		<?php include 'assets/templates/intros/evidence.php';?>
		<?php include 'assets/templates/intros/partner.php';?>
		<?php include 'assets/templates/intros/impact.php';?>
		<?php include 'assets/templates/intros/forecast.php';?>
		<?php include 'assets/templates/intros/testing.php';?>
		<?php include 'assets/templates/intros/hire.php';?>
		<?php include 'assets/templates/intros/behaviour.php';?>
		<?php include 'assets/templates/intros/insight.php';?>
		<?php include 'assets/templates/intros/scope.php';?>
		<?php include 'assets/templates/intros/sales.php';?>
		<?php include 'assets/templates/intros/testing.php';?>
		<?php include 'assets/templates/intros/customer.php';?>
		<div class="total_num"> <span></span></div>
		<a href="/about/michael" class="love"><i class="far fa-heart"></i></a>
	</div>


</div>

<?php include 'assets/templates/site_footer.php';?>