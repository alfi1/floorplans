<!DOCTYPE html>

<html lang="en">

<!-- Display a non-bibliographic location: e.g. toilets -->
<!-- A code copy of floor_display.php -->

<!-- take URL parameters to display the correct floor and location -->

<head>
  <title>University of Sussex Library floorplan display</title>
  <meta charset="utf-8">
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123127517-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123127517-1');
</script>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <!-- Sussex branding for fonts -->
  <link rel="stylesheet" href="library-style.css">
 
<!-- Make the footer sticky to the bottom of the page -->
  
  <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
}
</style>


</head>
<body>


<?php

// Check the IP address.  The navigation kiosk needs to display some different options
// TG 03/10/2018

 if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }

elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }

else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }

// Flag whether we are on the navigation kiosk

if ($ip_address  === "139.184.67.131")
// test on Tim's PC
//	if ($ip_address  === "139.184.66.196")
{
	$isKiosk = 1;
	} else {
	$isKiosk = 0;
}

// End of IP address checking


// Which location was selected?
if(isset($_REQUEST["frmLocation"])) {

        $location_details = $_REQUEST["frmLocation"];

        $arrStuff = explode('~',$location_details);
		
        $floor = $arrStuff[0];
        $location = $arrStuff[1];

		
        if ($location == 'family_room') {
        $image_file = 'first_floor.svg';
		//$subtitle = "Family room";
	    $subject_title = "<h3>Family room</h3>
							Facilities include:<ul>
							<li>Toys and books for a range of ages</li>
							<li>Safety gated play area</li>
							<li>Bean bags and comfy chairs</li>
							<li>Quiet/feeding corner with a privacy screen</li>
							<li>Study desks with access to power sockets and wifi</li>
						</ul>";
                }				

		elseif ($location == 'baby_change') {
        $image_file = 'first_floor.svg';
		//$subtitle = "Baby Changing";
	    $subject_title = "<h3>Baby Changing Facilities</h3>";
                }			

		elseif ($location == 'training_room') {
        $image_file = 'second_floor.svg';
		$subtitle = "Training Room";
	    $subject_title = "From the top of the main staircase, walk along the lightwell until you reach a bridge on your right.<br>Cross the bridge, and the training room will be the first door on your left";
                }					
				
		elseif ($location == 'ols') {
        $image_file = 'ground_floor.svg';
		$subtitle = "Open Learning Space";
	    $subject_title = "To your left just before you reach the main staircase";
                }					
		
        // Select the right image for that floor

        elseif ($floor == 'ground' && $location='toilets') {
        $image_file = 'ground_floor.svg';
		//$subtitle = "Toilets";
        $subject_title = "<h3>Toilets</h3>
						<p><img src='disabled.png'>1 accessible toilet beside the main staircase</p>
						Nearby alternatives in the <strong>basement</strong>:
							<ul>
							<li>1 gender-neutral, accessible, cubicle</li>
							<li>4 male cubicles</li>
							<li>12 female cubicles</li>
							</ul>
							";
			}

        elseif ($floor == 'first' && $location='toilets') {
        $image_file = 'first_floor.svg';
		$subtitle = "Toilets";
        $subject_title = "<ul><li><img src='disabled.png'>1 accessible toilet  beside the main staircase</li><li>1 gender-neutral cubicle towards the centre of the building</li></ul>";
                }
				
        elseif ($floor == 'second' && $location='toilets') {
        $image_file = 'second_floor.svg';
		$subtitle = "Toilets";
	    $subject_title = "<ul><li><img src='disabled.png'>1 accessible toilet beside the main staircase</li><li>8 gender-neutral cubicles at the front of the Library</li></ul>";
                }				
	
}


// Add the extra search button for the kiosk  
if ($isKiosk === 1) {

echo '	<br><br>';		
echo '	<div id="extra_search_for_kiosk">	';
echo '	<a href="floorplan-select.php" name="new_search_footer" class="btn btn-secondary btn-block" role="button">	';
echo '	<img src="placeholder-white.svg" height="40">	';
echo '	Look for something else	';
echo '	</a>	';
echo '	</div>	';
echo '	<br><br>';	

// Also, on the kiosk, return to the home page after 5 minutes
// You might need to make the interval longer, but try it for size first
// 11/10/2018
header( "refresh:300; url=http://www.sussex.ac.uk/library/floorplans/" ); 

}
// End of the special kiosk displays


?>


<!-- Bootstrap header that gets its values from the url parameters -->

    <?php
	
	echo '<div class="card">';
	
	echo '<div class="row">';
	echo '<div class="card-header col-md-3"><h2>' . ucwords($floor) . ' Floor</h2><h2>' . $subtitle . '</h2></div>';
		
	echo '<div class="card-body col-md-9">';
	
	echo '<div class="row">';
		
		echo '<div class="col">';
		echo $subject_title;
		echo '</div>';
		
	
	echo '</div>';
	
	echo '<!-- End of card body --></div>';
	
		
?>


<!-- end of the header row--></div>
<!-- End of card body></div>
<!-- End of card --></div>
  
  
  
<!-- Size the image to only occupy 90% of screen height.  To stop it dropping off the bottom of the screen at first view -->
<object type="image/svg+xml"  class="img-fluid" height="90%" preserveAspectRatio="xMidYMid meet"  data="   <?php echo $image_file . '?frmLocation=' . $location; ?>">
  Your browser does not support SVG
</object>


<!-- New search button -->


<div class="footer">

<a href="floorplan-select.php" name="new_search_footer" class="btn btn-secondary btn-block btn-lg" role="button">
<img src='placeholder-white.svg' height="40">
Look for something else
	</a>
</div>


</body>
</html>

