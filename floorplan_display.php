<!DOCTYPE html>
<html lang="en">

<!-- Adds the descriptive directions. TG. 03/08/2018 -->
<!-- The 'New Search' button now sticks to teh bottom of the page using css.  TG. 17/08/2018 -->

<!-- take URL parameters to display the correct floor and classmark -->

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


// Check the IP address.  The navigation kiosk needs to display some different options  // TG 03/10/2018

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


// Insert the array that holds details of subjects and their classmarks
include 'subject_array.php';


// Start looking to see how detailed the search has been sent by the form.  subject --> classmark --> floor

if(isset($_REQUEST["frmSubject"]) && $_REQUEST["frmSubject"] != 'NoSubject') {

	// Clear the other form data
	unset($_REQUEST["frmClassmark"]); 
	unset($_REQUEST["frmFloor"]); 
	//echo "<p>Subject ranks highest</p>";

	// Separate out the elements we want

	$subject_details = $_REQUEST["frmSubject"];

	$arrStuff = explode('~',$subject_details);

	$classmark = $arrStuff[1];
	$floor = $arrStuff[0];
	$subject = $arrStuff[2];
	$subject_title = $arrStuff[3];

	// Select the right image for that floor

	if ($floor == 'ground') {
  	$image_file = 'ground_floor.svg';
       		}

        elseif ($floor == 'second') {
        $image_file = 'second_floor.svg';
                }

       elseif ($floor == 'first') {
        $image_file = 'first_floor.svg';
                }

// Add the descriptive directions - contained in a separate file
include 'directions_array.php';
				
	}


// If Subject was not selected, move on to see if Classmark was
elseif(isset($_REQUEST["frmClassmark"]) && $_REQUEST["frmClassmark"] != 'NoClassmark') {

	unset($_REQUEST["frmSubject"]);
	unset($_REQUEST["frmFloor"]); 

	// Separate out the elements we want

	$classmark_details = $_REQUEST["frmClassmark"];

	$arrStuff = explode('~',$classmark_details);

	$classmark = $arrStuff[1];
	$floor = $arrStuff[0];
	$subject = $arrStuff[2];
	$subject_title = 'Classmark ' . strtoupper($classmark);

	// Select the right image for that floor

	if ($floor == 'ground') {
  	$image_file = 'ground_floor.svg';
       		}
        elseif ($floor == 'second') {
        $image_file = 'second_floor.svg';
                }
        elseif ($floor == 'first') {
        $image_file = 'first_floor.svg';
                }
// Add the descriptive directions - contained in a separate file
include 'directions_array.php';

}

// Was Floor selected?
elseif(isset($_REQUEST["frmFloor"]) && $_REQUEST["frmFloor"] != 'NoFloor') {

        unset($_REQUEST["frmSubject"]);
        unset($_REQUEST["frmClassmark"]);

        $floor_details = $_REQUEST["frmFloor"];

        $arrStuff = explode('~',$floor_details);

        $classmark = $arrStuff[1];
        $floor = $arrStuff[0];
        $subject = $arrStuff[2];

        // Select the right image for that floor

        if ($floor == 'ground') {
        $image_file = 'ground_floor.svg';
        $subject_title = "Classmarks P-Z and Documents";
                }

        elseif ($floor == 'second') {
        $image_file = 'second_floor.svg';
	$subject_title = "Classmarks A - DF";
                }

        elseif ($floor == 'first') {
        $image_file = 'first_floor.svg';
        $subject_title = "Classmarks DG - N";
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
// You might need to make the interval longer, but try it for size first  // 11/10/2018
header( "refresh:300; url=http://www.sussex.ac.uk/library/floorplans/" ); 

}
// End of the special kiosk displays


// Add in title and classmark information if redirected from Primo  // 30/10/2017
	
if(isset($_REQUEST["title"])) {	

echo '<div class="alert alert-info">';
echo 'You searched for: <b><i>' . chop($_REQUEST["title"],"/") . '</i></b>: classmark <b>' . $_REQUEST["full_classmark"] .'</b>';
echo '</div>';

	}

// end of title/classmark

?>


<!-- Bootstrap header that gets its values from the url parameters -->

    <?php
	
	echo '<div class="card">';
	
	// Try the header and 'back' button in their own row
	echo '<div class="row">';
	echo '<div class="card-header col-md-3"><h2>' . ucwords($floor) . ' Floor</h2></div>';
	
	
	
	echo '<div class="card-body col-md-9">';
	
	echo '<h4 class="card-subtitle text-muted">' . $subject_title;
	// If there is a subject included, add the arrow before it
		if ($subject != '') {
		echo ' <img src="arrow.svg"> ' . $subject;
		};
	echo '</h4>';


// Add in the directions if they have been given
		if ($directions != '') {
		echo '<div class="mt-4">' . $directions . '</div>';
		};
	
	//echo '<!-- end of the header row--></div>';
	echo '<!-- End of card body --></div>';
	//echo '<!-- End of card --></div>';
		
?>


<!-- end of the header row--></div>
<!-- End of card body></div>
<!-- End of card --></div>
  
 

<!-- Size the image to only occupy 90% of screen height.  To stop it dropping off the bottom of the screen at first view -->
<object type="image/svg+xml"  class="img-fluid" height="90%" preserveAspectRatio="xMidYMid meet"  data="   <?php echo $image_file . '?classmark=' . $classmark; ?>">

  Your browser does not support SVG
</object>


<!-- New search button here at the bottom -->

<div class="footer">
<a href="floorplan-select.php" name="new_search_footer" class="btn btn-secondary btn-block btn-lg" role="button">
<img src='placeholder-white.svg' height="40">
Look for something else
	</a>
</div>


</body>
</html>

