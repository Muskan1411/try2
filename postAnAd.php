<?php
	session_start();
	if(isset($_SESSION['userlogin'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<?php include "header.php";?>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/postAnAd.css">
</head>
<!-- <script type="text/javascript">
  $('#fileUpload').bind('change', function () {
  	var length = document.getElementById("chooseFile").files.length;
  	if(length == 0) {
  		$('#chooseFile').css({"display":"inline-block"});
  	} else {
  		$('#chooseFile').css({"display":"none"});
  	}
  // var filename = $("#chooseFile").val();
  // if (/^\s*$/.test(filename)) {
  //   $(".file-upload").removeClass('active');
  //   $("#noFile").text("No file chosen..."); 
  // }
  // else {
  //   $(".file-upload").addClass('active');
  //   $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
  // }
});
</script> -->
<body>
	<?php  include "navbarafterlogin.php";?>
	<section class="container mt-4 mb-4 pt-2 pb-2 post_ad">
		<form id="myForm" method="post">
		<div class="card mb-4">
		<div class="card-header">Post A free Ad</div>
		<div class="card-body">

			<div class="row justify-content-center catloc-div pt-4 pb-4">
				<div class="col-md-4 col-10">
					
          				<select name="category" class="form-control" required>
          					<option selected disabled>Select Category:</option>
          					<optgroup label="Accomodation">
	          					<option>PG</option>
	            				<option>Hostels</option>
	            				<option>Rental Rooms</option>
	            				<option>Commercial Rentals</option>
							</optgroup>

							<optgroup label="Business">
            				  <option>CA</option>
					          <option>Corporate Event Planners</option>
					          <option>Lawyers</option>
					          <option>Renovators</option>
					          <option>Vastu Shastra Consultant</option>
					          <option>Visa Agency</option>
					          <option>Renoators</option>
							</optgroup>

							<optgroup label="Clothing">
						        <option>Boutique</option>
						        <option>Casual Wears</option>
						        <option>Ethnic Wears</option>
						        <option>Uniform Stores</option> 
							</optgroup>

							<optgroup label="Education">
						        <option>Coaching Institutes</option>
					            <option>Cooking Classes</option>
					            <option>Language Classes</option>
					            <option>Libraries</option>
					            <option>Music/Dance Classes</option>
					            <option>Playschools</option>
					            <option>Stationery</option>
							</optgroup>

							<optgroup label="Fitness">
					            <option>Ayurveda</option>
					            <option>Dietician/Nutritionist</option>
					            <option>Gym</option>
					            <option>Physiotherapy</option>
					            <option>Skin Treatment</option>
					            <option>Yoga Centers</option>
							</optgroup>

							<optgroup label="Food">
					            <option>Cafe</option>
					            <option>Dairies</option>
					            <option>Grocery Store</option>
					            <option>Juice Corners</option>
					            <option>Online Food Delievry</option>
					            <option>Restaurants</option>
					            <option>Street Food Corners</option>
							</optgroup>

							<optgroup label="Health">
					            <option>Clinics</option>
					            <option>Hospitals</option>
					            <option>Medical Stores</option>
					            <option>Optics/Eyewear</option>
					            <option>Veternaries</option>
							</optgroup>

							<optgroup label="Services">
					            <option>Appliance Repair</option>
					            <option>Carpenters</option>
					            <option>Electrician</option>
					            <option>Event Organisers</option>
					            <option>Furniture</option>
					            <option>Gym</option>
					            <option>Home Decor</option>
					            <option>Kitchen Cleaners</option>
					            <option>Laundry</option>
					            <option>Packers & Movers</option>
					            <option>Painters</option>
					            <option>Pest Control Services</option>
					            <option>Plumbers</option>            
					            <option>Spa/Saloon</option>
					        </optgroup>

							<optgroup label="Travel">
					            <option>Hotels/Resorts</option>
					            <option>Travel Agencies</option>
							</optgroup>

							<optgroup label="Utilities">
					            <option>Couriers</option>
					            <option>Dairies</option>
					            <option>Grocery Stores</option>
					            <option>Parking</option>
					            <option>Petrol Pumps</option>
							</optgroup>

							<optgroup label="Wedding">
					            <option>Astrologers</option>
					            <option>Beauticians</option>
					            <option>Catering</option>
					            <option>DJ</option>
					            <option>Event Managers</option>
					            <option>Marriage Gardens</option>
					            <option>Photography</option> 
					        </optgroup>   
          				</select>
				</div>
				<div class="col-md-4 col-10">
					<input type="text" name="location" class="form-control" placeholder="Enter Location" required>
				</div>
				<div class="col-md-4 col-10">
					<input type="text" name="address" class="form-control"  placeholder="Enter Address" required>
				</div>
			</div>

			<div class="mt-3">
				<label for="" class="label-font">Ad Title</label>
				<input type="text" name="ad_title" placeholder="Write a suitable title for your ad" class="form-control" >
			</div>

			<div class="mt-3">
				<label for="" class="label-font">Add Description</label>
				<input type="text" name="ad_desc" placeholder="Write a suitable description for your ad" class="form-control" >
			</div>

			<div class="mt-3">
				<h4 class="image-header">Add Images Of Your Ad</h4>
				 
				<div class="file-upload mb-2">
					<input type="file" name="files[]" id="chooseFile" class="mr-auto">
				</div>
				<!-- <div class="file-upload mb-2">
					<input type="file" name="chooseFile2" id="chooseFile" class="mr-auto">
				</div>
				<div class="file-upload mb-2">
					<input type="file" name="chooseFile3" id="chooseFile" class="mr-auto">
				</div>
				<div class="file-upload mb-2">
					<input type="file" name="chooseFile4" id="chooseFile" class="mr-auto">
				</div>
				<div class="file-upload mb-2">
					<input type="file" name="chooseFile5" id="chooseFile" class="mr-auto">
				</div>
				<div class="file-upload mb-2">
					<input type="file" name="chooseFile6" id="chooseFile" class="mr-auto">
				</div>
				<div class="file-upload mb-2">
					<input type="file" name="chooseFile7" id="chooseFile" class="mr-auto">
				</div>
				<div class="file-upload mb-2">
					<input type="file" name="chooseFile8" id="chooseFile" class="mr-auto">
				</div>
				<div class="file-upload mb-2">
					<input type="file" name="chooseFile9" id="chooseFile" class="mr-auto">
				</div>
				<div class="file-upload mb-2">
					<input type="file" name="chooseFile10" id="chooseFile" class="mr-auto">
				</div>
 -->
			</div>
		</div>
	</div>

	<div class="card mb-4">
		<div class="card-header">Your Contact Information</div>
		<div class="card-body">
			
				<div class="mt-3">
				<label for="name" class="label-font">Name</label>
				<input type="text" name="name" placeholder="Your name" class="form-control" required>
			</div>

			<div class="mt-3">
				<label for="email" class="label-font">Email</label>
				<input type="email" name="email" placeholder="Your Email" class="form-control" required>
			</div>

			<div class="mt-3">
				<label for="mobile" class="label-font">Phone No</label>
				<input type="tel" name="mobile" placeholder="Your Phone Number" class="form-control" required>
			</div>
			

		</div>
	</div>

	<div class="card mb-4">
		
		<div class="card-body">
			<div class="mt-3">
				<input type="checkbox" name="" required>&nbsp;I agree to Terms of Use
			</div>

			<div class="mt-3">
				<input type="hidden" name="ad_added_by_user">
				<button class="SubmitForReview" name="submit-for-review">Submit for Review</button>
			</div>

		</div>
	</div>

	</form>
	</section>
<?php include "footer.php";?>	
</body>
</html>
<?php
} else {
?>
<!DOCTYPE html>
<html>
<head>	
	<?php include "header.php";?>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<body>
	<?php  include "index.php";?>
<script type="text/javascript">
	function openmodal() {
		if(!logged_in) {
			$('#loginform').modal('show');
		}
	}
</script> 
</body>
</html>
<?php	echo "<script>
		alert('You need to log in first');
		var logged_in = false;
		openmodal();
	</script>";
}

?>
