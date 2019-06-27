<?php

// Version with collapsible tables.  Works with all browsers apart from IE.  29/08/2018

// Insert the array that holds details of subjects and their classmarks
include 'subject_array.php';


// Push each floor's subjects into a separate array

$ground_subjects = array();
$first_subjects = array();
$second_subjects = array();

foreach ( $locations as $var ) {

$floor = $var["floor"];


if($floor =='ground')
	{
	array_push($ground_subjects,$var);
	}


else if ($floor =='first')	
	{
	array_push($first_subjects,$var);
	}

else if ($floor =='second')
	{
	array_push($second_subjects,$var);
	};

}

// You need to sort these arrays on subject
// This worked using usort on benskitchen - but that was running PHP 7 instead of the Sussex 5.6
// I found the following solution // https://stackoverflow.com/questions/2699086/sort-multi-dimensional-array-by-value#2699159

// Reorder the Ground Floor subjects
$new0 = $ground_subjects;
$keys = array_column($ground_subjects, 'subject');
$ground_subjects = array_multisort($keys, SORT_ASC, $new0);
$ground_subjects = $new0; 


// Reorder the First Floor subjects
$new1 = $first_subjects;
$keys = array_column($first_subjects, 'subject');
$first_subjects = array_multisort($keys, SORT_ASC, $new1);
$first_subjects = $new1; 


// Reorder the Second Floor subjects
$new2 = $second_subjects;
$keys = array_column($second_subjects, 'subject');
$second_subjects = array_multisort($keys, SORT_ASC, $new2);
$second_subjects = $new2; 

?>

<body>

<p>

<div class="card card-header">
    <h4>Or explore by floor</h4>
</div>

<div class="card-group">
 

<!-- Ground floor card -->

<div class="card" style="width: 18rem;">

  <div class="card-header">
    Ground Floor
  </div>

  <div class="card-body">

<a href='floorplan_display.php?frmFloor=ground'>
<img class="card-img" src="ground_floor_thumb.png"  width=400>
</a>

<!-- Change the length of the button text depending on screen size -->

<!-- Hide the longest form of the wording on small and medium screens -->
<div class="d-xs-block d-sm-none d-md-none d-lg-block d-xl-block">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#ground">Subjects on Ground Floor</button>
</div>

<!-- Show abbreviated wording on medium screens-->
<div class="d-none d-xs-none d-sm-none d-md-block d-lg-none d-xl-none">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#ground">Subjects on Ground</button>
</div>

<!-- Show shortest wording on small screens-->
<div class="d-none d-xs-none d-sm-block d-md-none d-lg-none d-xl-none">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#ground">Subjects</button>
</div>

<!-- end of changing the length of the button text depending on screen size -->


<table class="table table-striped collapse" id="ground">
<?php

foreach ( $ground_subjects as $this_subject ) {

echo '<tr><td><a href="floorplan_display.php?frmSubject=' . $this_subject["floor"] . '~' . substr($this_subject['code'],0,1) . '~' . $this_subject['subject'] . '~' . $this_subject['title'] . '">' . $this_subject["subject"] . '</a></td></tr>';

}
?>

</table>


  </div>

</div>

<!-- First floor card starts -->

<div class="card" style="width: 18rem;">

  <div class="card-header">
    First Floor
  </div>

  <div class="card-body">

<a href='floorplan_display.php?frmFloor=first'>
<img class="card-img" src="first_floor_thumb.png"  width=400>

</a>

<!-- Change the length of the button text depending on screen size -->

<!-- Hide the longest form of the wording on small and medium screens -->
<div class="d-xs-block d-sm-none d-md-none d-lg-block d-xl-block">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#first">Subjects on First Floor</button>
</div>

<!-- Show abbreviated wording on medium screens-->
<div class="d-none d-xs-none d-sm-none d-md-block d-lg-none d-xl-none">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#first">Subjects on 1st Floor</button>
</div>

<!-- Show shortest wording on small screens-->
<div class="d-none d-xs-none d-sm-block d-md-none d-lg-none d-xl-none">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#first">Subjects</button>
</div>

<!-- end of changing the length of the button text depending on screen size -->


<table class="table table-striped collapse" id="first">

<?php

foreach ( $first_subjects as $this_subject ) {

echo '<tr><td><a href="floorplan_display.php?frmSubject=' . $this_subject["floor"] . '~' . substr($this_subject['code'],0,1) . '~' . $this_subject['subject'] . '~' . $this_subject['title'] . '">' . $this_subject["subject"] . '</a></td></tr>';


}
?>

</table>

  </div>

</div>

<!-- second floor card begins -->

<div class="card" style="width: 18rem;">

  <div class="card-header">
    Second Floor
  </div>

  <div class="card-body">

<a href='floorplan_display.php?frmFloor=second'>
<img class="card-img" src="second_floor_thumb.png"  width=400>

</a>

<!-- Change the length of the button text depending on screen size -->

<!-- Hide the longest form of the wording on small and medium screens -->
<div class="d-xs-block d-sm-none d-md-none d-lg-block d-xl-block">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#second">Subjects on Second Floor</button>
</div>

<!-- Show abbreviated wording on medium screens-->
<div class="d-none d-xs-none d-sm-none d-md-block d-lg-none d-xl-none">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#second">Subjects on 2nd Floor</button>
</div>

<!-- Show shortest wording on small screens-->
<div class="d-none d-xs-none d-sm-block d-md-none d-lg-none d-xl-none">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#second">Subjects</button>
</div>

<!-- end of changing the length of the button text depending on screen size -->

<table class="table table-striped collapse" id="second">

<?php


foreach ( $second_subjects as $this_subject ) {

echo '<tr><td><a href="floorplan_display.php?frmSubject=' . $this_subject["floor"] . '~' . substr($this_subject['code'],0,1) . '~' . $this_subject['subject'] . '~' . $this_subject['title'] . '">' . $this_subject["subject"] . '</a></td></tr>';
}
?>

</table>



  </div>

</div>


</div>  <!-- end of card group -->

