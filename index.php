<?php include 'assets/templates/site_header.php';?>

<div class="js_quicksearch_parent">

	<div class="fat_hero left halfy" id="top">

		<h1 class="pink">Online learning for <br>the social sector.</h1>

		<div class="i_need">

			<div class="btn-group">
			  <button class="btn btn-text to_work_on disabled btn-lg" type="button">
			    <i class="far fa-arrow-down"></i> I need to work on 
			  </button>
			  <button class="btn btn-text dropdown-toggle shadow-none" data-ineed="" type="button" id="ineedbutton" data-bs-toggle="dropdown" aria-expanded="false">
			    <strong class="pink">literally everything</strong> <i class="fal fa-chevron-down"></i>
			  </button>
		    <ul class="dropdown-menu" aria-labelledby="ineed" data-ineedselect="">
		    	<li>
		    		<form>
					    <div class="input-group mb-3">
							  <input type="text" class="form-control" id="quicksearch" placeholder="Filter lessons..."> 
							</div>
					</form>
		    	</li>
		      <li><a class="dropdown-item cyan" href="#">our project management issues</a></li>
		      <li><a class="dropdown-item red" href="#">business and startup stuff</a></li>
		      <li><a class="dropdown-item purple" href="#">digital and internet fun</a></li>
		    </ul>
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
	
	</div>

</div>

<?php include 'assets/templates/site_footer.php';?>