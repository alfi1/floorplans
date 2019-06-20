<!DOCTYPE html>
<html>
<head>
  <title>Non-book locations</title>
  <!-- meta name="viewport" content="width=device-width, initial-scale=1" -->
  <!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script -->
</head>

<!-- To be included in the front page, to allow navigation to non-bibliographic locations -->
<!-- TG.  22/08/2018 -->

<!-- Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>< -->

<body>

<br>

<!-- test card -->
<div class="card">
  <div class="card-header"><h4>Other facilities</h4></div>
  <div class="card-body">

  <!-- Put all the buttons in a group -->
  <div class="btn-group-vertical">

  
    
 <!-- Drop down button -->
 <div class="dropdown">
   <button type="button" class="btn btn-default dropdown-toggle text-left  mt-1" data-toggle="dropdown">
<img src='toilet.png' align="left">
     &nbsp;&nbsp;Toilets
   </button>
   <div class="dropdown-menu">
     <a class="dropdown-item" href="location_display.php?frmLocation=ground~toilets">Ground Floor</a>
     <a class="dropdown-item" href="location_display.php?frmLocation=first~toilets">First Floor</a>
     <a class="dropdown-item" href="location_display.php?frmLocation=second~toilets">Second Floor</a>
   </div>
</div>
  
  
<!-- baby changing button -->  
<button class="btn btn-default btn-block text-left mt-1" onclick="window.location.href='location_display.php?frmLocation=first~baby_change'">
<img src='baby-with-diaper.svg' width="25" align="left">
&nbsp;&nbsp;Baby Changing
</button>
<!-- // Baby changing button -->  
  
<!-- Family room button -->  
<button class="btn btn-default btn-block text-left mt-1" onclick="window.location.href='location_display.php?frmLocation=first~family_room'">
<img src='father-and-son.svg' width="25" align="left">
&nbsp;&nbsp;Family room
</button>
<!-- End of family room button -->

<!-- Training room --> 
<button class="btn btn-default btn-block text-left mt-1" onclick="window.location.href='location_display.php?frmLocation=second~training_room'">
<img src='seo-training.svg' width="25" align="left">
&nbsp;&nbsp;Training Room
</button> 
<!-- // Training room -->  

<!-- Open Learning Space -->
<button class="btn btn-default btn-block text-left mt-1" onclick="window.location.href='location_display.php?frmLocation=ground~ols'">
<img src='meeting.svg' width="25" align="left">
&nbsp;&nbsp;Open Learning Space
</button>
<!-- // Open Learning Space -->


  
<!-- End of the card -->  
	</div> 
  </div>

</body>
</html>
