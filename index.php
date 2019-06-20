<!DOCTYPE html>
<html lang="en">
<head>
<link rel="apple-touch-icon" href="ios_icon.png" />

<link rel="icon" 
      type="image/png" 
      href="ios_icon.png">

  <title>University of Sussex Library floorplans</title>
    
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
  
  <!-- initial lines.  Commented out and replaced when toilets added, as both files were calling bootstrap -->
  <!-- which stopped the drop-downs and collapses from working .  TG 28/08/2018 -->
  
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script -->
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script -->
 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 
 <!-- Sussex branding for fonts -->
 <link rel="stylesheet" href="library-style.css">
 
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

// the real kiosk
if ($ip_address  === "139.184.67.131")
// test in Tim's PC
//if ($ip_address  === "139.184.66.196")

{
	$isKiosk = 1;
	} else {
	$isKiosk = 0;
}
// End of IP address checking


// Check whether the browser is Internet Explorer

// Set a default
$internet_explorer = 0;

$ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0; rv:11.0') !== false)) {
	// do stuff for IE

	$internet_explorer = 1;
		
}


// Insert the array that holds details of subjects and their classmarks
include 'subject_array.php';

// Sort the array by subject instead of classmark

//Create index rows
foreach ($locations as $row) {
  foreach ($row as $key => $value){
    ${$key}[]  = $value; //Creates $subject (and the others)
  }  
}

// Now perform the sort
array_multisort($subject, SORT_ASC, $locations);
// End of array sorting

?>

<!--  a container to hold the whole thing -->

<?php
// Add some white space on the kiosk
if ($isKiosk === 1) {
	echo '	<br><br><br>';	
}
?>

<div class="container">

    
<!-- put the logo and header on the same row -->
<!-- Wait until the revised logo from Admin. 28/08/2018 -->
<!-- depending on how that looks, you might be able to dispense with the row/column business -->

	<div class="row pt-3">
	
<!-- Show a logo only on large and extra large screens -->
	<div class="col-2 d-none d-xs-none d-sm-none d-md-block d-lg-inline d-xl-inline">
	<img src="library_logo_flint.jpg" width="120">
	</div>
	
	<div class="col-9">
		<div name="text-header">
		<h3>University of Sussex</h3>
		<h1>Library Floorplans</h1>
		</div>
	</div>
	
<!-- End of row -->
</div>
<br>


<div class="card">

  <div class="card-header">
    <h4>Find where something is shelved by subject or classmark</h4>
  </div>

<div class="card-body">

<!-- Put the drop-downs in their own group -->
<div class="btn-group btn-block mt-2 mb-2 ml-2" role="group" aria-label="Subject and classmark drop-down boxes">

<!-- start of the drop downs for subject, classmark, floor -->

<form class="form col-12" role="form" id="form" action="floorplan_display.php" method="get">

 
<!-- Subject drop down -->

<!-- select class="selectpicker form-control col-md-7" title="colour" id="type" name="frmSubject" -->
<!-- If Subject is selected, clear any value for Classmark -->
<select class="selectpicker form-control" title="Subject" id="type" name="frmSubject" onfocus="frmClassmark.value=''">
<option value="NoSubject">Choose a subject</option>

	<?php

  		foreach ( $locations as $var ) {
    			
    			echo '<option value="' . $var["floor"] . '~' . substr($var['code'],0,1) . '~' . $var['subject'] . '~' . $var['title'] . '">' . $var["subject"] . '</option>';
	}
	?>
</select>

<!-- Classmark drop down -->
<!-- If Classmark is selected, clear any value for Subject -->

<select class="selectpicker form-control" title="Classmark" id="type" name="frmClassmark" onfocus="frmSubject.value=''">
<option value="NoClassmark">... or a classmark</option>
<option value="second~a">A</option>
<option value="second~b">B</option>
<option value="second~c">C</option>
<option value="second~d">D-DF</option>
<option value="first~d">DG-DX</option>
<option value="first~e">E</option>
<option value="first~f">F</option>
<option value="first~g">G</option>
<option value="first~h">H</option>
<option value="first~j">J</option>
<option value="first~k">K</option>
<option value="first~l">L</option>
<option value="first~m">M</option>
<option value="first~n">N</option>
<option value="ground~p">P</option>
<option value="ground~q">Q</option>
<option value="ground~r">R</option>
<option value="ground~s">S</option>
<option value="ground~t">T</option>
<option value="ground~u">U</option>
<option value="ground~v">V</option>
<option value="ground~z">Z</option>
</select>


<!-- the mt-2 puts a margin above the button to make a white gap -->

<button type="submit" class="btn btn-secondary text-left btn-block mt-2" id="submit">

	<img src='placeholder-white.svg' height="30">
	&nbsp;
	Show me where to find

</button>

<!-- End of the button group -->
</div>

</div>

</form>

<!-- end navbar -->

  <div class="card-footer">
  All Journals and Documents collections are stored in the basement
  </div>

  </div>
  

<?php 

	// Insert the appropriate version of floor selector
	// There is a different version for Internet Explorer, and the kiosk

	
	 if ($isKiosk === 1) {
		//include 'floor_selector_kiosk.php';
		include 'floor_selector.php';
	 }

	elseif ($internet_explorer == 0) {
			include 'floor_selector.php';
		}

	elseif ($internet_explorer == 1) {
			include 'floor_selector_IE.php';
	 
	};

		
// include the drop-down for the toilets
include 'location-select.php';

?>

<?php 
// Don't show the email link on the kiosk
//	 if ($isKiosk === 0) {

//echo '	<br>	';
//echo '<div class="alert alert-info">';

//echo '<img src="email.svg" width="50">';

//echo '  &nbsp;';
//echo '	If you have any comments or suggestions about these floorplans, please let us know at <a href="mailto:library@sussex.ac.uk">Library@sussex.ac.uk</a>';

//echo '</div>';

//	}


// Show  a QR code on the kiosk

	 if ($isKiosk === 1) {
		 
		echo '	<br><br>	';
		echo '<div class="alert alert-light">';
		echo '<table border="0">';
		echo '<tr padding="10">';
		echo '<td>';
		echo '<img src="qrcode.png" width="200">';		 
		echo '</td>';
		echo '<td>';
		echo '  &nbsp;';
		echo '</td>';
		echo '<td>';
		echo '<h3>Use these floorplans on your phone<h3>';
		echo '</td>';
		echo '</tr>';
		echo '</table>';
		echo '</div>';
		
	 }
// end of QR code
	

?>


<!-- end the whole container that contains everything -->
</div>


</body>
</html>

