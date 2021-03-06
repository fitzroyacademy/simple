<?php include 'assets/templates/site_header.php';?>

<div class="js_quicksearch_parent">

	<div class="fat_hero left halfy lesshalfy" id="top">

		<h1 class="pink">Video lessons for <br>social sector folks.</h1>

		<div class="i_need">

			<div class="btn-group">
			  <button class="btn btn-text to_work_on disabled btn-lg" type="button">
					
			    <i class="far fa-arrow-down"></i> 
			    	<span class="workon">I need to work on</span>
			    	<span class="lessonsfound">Lessons found on</span>
			  </button>
			  <button class="btn btn-text dropdown-toggle shadow-none" data-ineed="" type="button" id="ineedbutton" data-bs-toggle="dropdown" aria-expanded="false">
			    <strong class="pink">literally everything</strong> <i class="fal fa-chevron-down"></i>
			  </button>
		    <ul class="dropdown-menu" aria-labelledby="ineed" data-ineedselect="">
					<li><a class="dropdown-item green" href="#" data-searchify="impact">designing for impact</a></li>		    	
		      <li><a class="dropdown-item cyan" href="#" data-searchify="planning">planning to win</a></li>
		      <li><a class="dropdown-item apricot" href="#" data-searchify="business">business &amp; strategy</a></li>
		      <li><a class="dropdown-item red" href="#" data-searchify="money">making money</a></li>
		      <li><a class="dropdown-item purple" href="#" data-searchify="digital">digital + the internet</a></li>					
		      <li><a class="dropdown-item pink" href="#" data-searchify="love">the way we fall in love</a></li>
		    </ul>
	    	<form class="quicksearch_form">
			    <div class="input-group mb-3">
					  <input type="text" class="form-control" id="quicksearch" placeholder="whatever I search for..."> 
					</div>
					<i class="fal fa-search"></i>
					<a class="x" id="x"><i class="far fa-times"></i></a>
				</form>
			</div>
		</div> <!-- i_need -->

	</div>

	<div class="fat_section all_lessons">

		<?php include 'assets/templates/intros/agile.php';?>
		<?php include 'assets/templates/intros/barrier.php';?>
		<?php include 'assets/templates/intros/behaviour.php';?>
		<?php include 'assets/templates/intros/bmc.php';?>
		<?php include 'assets/templates/intros/campaign.php';?>
		<?php include 'assets/templates/intros/cards.php';?>
		<?php include 'assets/templates/intros/community.php';?>
		<?php include 'assets/templates/intros/crm.php';?>
		<?php include 'assets/templates/intros/crowdfunding.php';?>
		<?php include 'assets/templates/intros/customer.php';?>
		<?php include 'assets/templates/intros/empathy.php';?>
		<?php include 'assets/templates/intros/evidence.php';?>
		<?php include 'assets/templates/intros/finance.php';?>
		<?php include 'assets/templates/intros/forecast.php';?>
		<?php include 'assets/templates/intros/hire.php';?>
		<?php include 'assets/templates/intros/ideas.php';?>
		<?php include 'assets/templates/intros/impact.php';?>
		<?php include 'assets/templates/intros/insight.php';?>
		<?php include 'assets/templates/intros/journey.php';?>
		<?php include 'assets/templates/intros/lean.php';?>
		<?php include 'assets/templates/intros/outcomes.php';?>
		<?php include 'assets/templates/intros/partner.php';?>
		<?php include 'assets/templates/intros/performance.php';?>
		<?php include 'assets/templates/intros/pitch.php';?>
		<?php include 'assets/templates/intros/sales.php';?>
		<?php include 'assets/templates/intros/scope.php';?>
		<?php include 'assets/templates/intros/social.php';?>
		<?php include 'assets/templates/intros/testing.php';?>
		<?php include 'assets/templates/intros/video.php';?>
		<?php include 'assets/templates/intros/website.php';?>
		<?php include 'assets/templates/intros/love.php';?>
		<div class="total_num"> <span></span></div>
		<div class="relativ">
			<a href="/about/michael" class="love"><i class="far fa-heart"></i></a>
		</div>

	</div>


</div>

<?php include 'assets/templates/site_footer.php';?>