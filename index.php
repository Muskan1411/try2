<!DOCTYPE html>
<html>
<head>
	<?php include "header.php";?>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/owl_carousel.css">
</head>

<body>
	<?php include "navbar.php"; ?>
	
	<section class="section-class text-center">
		<div class="overlay">
			<div class="container">
				<div class="main-text">
					<h1 class="title display-3">
						Welcome To Your <span style="color: #901108;">Hub</span>
					</h1>
					<p class="subtitle">Your local Directory</p>
					<form class="">
					<div class="row search-bar pt-4 pb-4 px-2 py-2 justify-content-center">
						
							<div class="col-md-3 col-11">
								<div class="styled-select">
									<!-- <select class="form-control">
										<option selected disabled>Select Place</option>
										<option>Place1</option>
										<option>Place2</option>
										<option>Place3</option>
									</select> -->
                  <button class="search-button form-control" onclick="getLocation()">GET LOCATION</button>
									<!-- <span class="fa fa-map-marker"></span> -->
								</div>
							</div>
              <div class="col-md-3 col-11">
                <div class="styled-select">
                  <input type="text" name="" placeholder="Your Location" class="form-control">
                  <span class="fa fa-map-marker"></span>
                </div> 
              </div>
							<div class="col-md-3 col-11">
								<div class="styled-select">
									<input type="text" name="" placeholder="Search for the service" class="form-control">
									<span class="fa fa-search"></span>
								</div> 
							</div>
							<div class="col-md-3 col-6">
								<button class="search-button form-control">GO</button>
							</div>
						
					</div>
					</form>
				</div>
			</div>
		</div>
	</section>

<!--------------------Categories section--------------------------------->
	<section class="categories mt-4">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-7 text-center">
					<h2 class="title1 pb-3">Categories</h2>
				</div>
			</div>

			<div class="row justify-content-center category text-center">
				<div class="col-md-1 col-7">
					<a href="" data-toggle="tab" data-target="#accomodation"><img src="img/categories/accomodation.png" alt=""></a>
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">Accomodation</button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">PG</a>
            <a href="" class="dropdown-item">Hostels</a>
            <a href="" class="dropdown-item">Rental Rooms</a>
            <a href="" class="dropdown-item">Commercial Rentals</a>
          </div>
				</div>
				<div class="col-md-1 col-6">
					<a href=""><img src="img/categories/business.png" alt=""></a>
        <button type="button" class="dropdown-toggle" data-toggle="dropdown">Business</button>
        <div class="dropdown-menu">
          <a href="" class="dropdown-item">CA</a>
          <a href="" class="dropdown-item">Corporate Event Planners</a>
          <a href="" class="dropdown-item">Lawyers</a>
          <a href="" class="dropdown-item">Renovators</a>
          <a href="" class="dropdown-item">Vastu Shastra Consultant</a>
          <a href="" class="dropdown-item">Visa Agency</a>
          <a href="" class="dropdown-item">Renoators</a>
        </div>
				</div>
				<div class="col-md-1 col-6">
					<a href=""><img src="img/categories/clothing.png" alt=""></a>
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">Clothing</button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Boutique</a>
            <a href="" class="dropdown-item">Casual Wears</a>
            <a href="" class="dropdown-item">Ethnic Wears</a>
            <a href="" class="dropdown-item">Uniform Stores</a>
          </div>
				</div>
				<div class="col-md-1 col-6">
					<a href=""><img src="img/categories/education.png" alt=""></a>
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">Education</button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Coaching Institutes</a>
            <a href="" class="dropdown-item">Cooking Classes</a>
            <a href="" class="dropdown-item">Language Classes</a>
            <a href="" class="dropdown-item">Libraries</a>
            <a href="" class="dropdown-item">Music/Dance CLasses</a>
            <a href="" class="dropdown-item">Playschools</a>
            <a href="" class="dropdown-item">Stationery</a>
          </div>
				</div>
				<div class="col-md-1 col-6">
					<a href=""><img src="img/categories/fitness.png" alt=""></a>
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">Fitness</button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Ayurveda</a>
            <a href="" class="dropdown-item">Dietician/Nutritionist</a>
            <a href="" class="dropdown-item">Gym</a>
            <a href="" class="dropdown-item">Physiotherapy</a>
            <a href="" class="dropdown-item">Skin Treatment</a>
            <a href="" class="dropdown-item">Yoga Centers</a>
          </div>
				</div>
				<div class="col-md-1 col-6">
					<a href=""><img src="img/categories/food.png" alt=""></a>
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">Food</button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Cafe</a>
            <a href="" class="dropdown-item">Dairies</a>
            <a href="" class="dropdown-item">Grocery Store</a>
            <a href="" class="dropdown-item">Juice Corners</a>
            <a href="" class="dropdown-item">Online Food Delievry</a>
            <a href="" class="dropdown-item">Restaurants</a>
            <a href="" class="dropdown-item">Street Food Corners</a>
          </div>
				</div>
				<div class="col-md-1 col-6">
					<a href=""><img src="img/categories/health.png" alt=""></a>
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">Health</button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Clinics</a>
            <a href="" class="dropdown-item">Hospitals</a>
            <a href="" class="dropdown-item">Medical Stores</a>
            <a href="" class="dropdown-item">Optics/Eyewear</a>
            <a href="" class="dropdown-item">Veternaries</a>
          </div>
				</div>
				<div class="col-md-1 col-6">
					<a href=""><img src="img/categories/services.png" alt=""></a>
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">Services</button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Appliance Repair</a>
            <a href="" class="dropdown-item">Carpenters</a>
            <a href="" class="dropdown-item">Electrician</a>
            <a href="" class="dropdown-item">Event Organisers</a>
            <a href="" class="dropdown-item">Furniture</a>
            <a href="" class="dropdown-item">Gym</a>
            <a href="" class="dropdown-item">Home Decor</a>
            <a href="" class="dropdown-item">Kitchen Cleaners</a>
            <a href="" class="dropdown-item">Laundry</a>
            <a href="" class="dropdown-item">Packers & Movers</a>
            <a href="" class="dropdown-item">Painters</a>
            <a href="" class="dropdown-item">Pest Control Services</a>
            <a href="" class="dropdown-item">Plumbers</a>            
            <a href="" class="dropdown-item">Spa/Saloon</a>
          </div>
				</div>
				<div class="col-md-1 col-6">
					<a href=""><img src="img/categories/travel.png" alt=""></a>
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">Travel</button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Hotels/Resorts</a>
            <a href="" class="dropdown-item">Travel Agencies</a>
          </div>
				</div>
				<div class="col-md-1 col-6">
					<a href=""><img src="img/categories/utilities.png" alt=""></a>
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">Utilities</button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Couriers</a>
            <a href="" class="dropdown-item">Dairies</a>
            <a href="" class="dropdown-item">Grocery Stores</a>
            <a href="" class="dropdown-item">Parking</a>
            <a href="" class="dropdown-item">Petrol Pumps</a>
          </div>
				</div>
				<div class="col-md-1 col-6">
					<a href=""><img src="img/categories/wedding.png" alt=""></a>
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">Wedding</button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Astrologers</a>
            <a href="" class="dropdown-item">Beauticians</a>
            <a href="" class="dropdown-item">Catering</a>
            <a href="" class="dropdown-item">DJ</a>
            <a href="" class="dropdown-item">Event Managers</a>
            <a href="" class="dropdown-item">Marriage Gardens</a>
            <a href="" class="dropdown-item">Photography</a>            
          </div>
				</div>			
			</div>
		</div>
	</section>
<!--------------------------Premium ADS------------------------------->
	<div class="popular ml-4 mr-4 mt-4 mb-4 pb-5">
		<div class="container animatable">
			<p class="text-center pb-3"><span style="color: #901108;">Premium</span>&nbsp; ADS</p>
			<div class="owl-carousel owl-theme owl-carousel1">
                    <div class="item  fadeInUp">
                        <div class="card">
                        	<div class="card-header">
                            <img    src="img/backdrop1.jpg" alt="New york">
                        	</div>
                        	<div class="card-body">
                        		First 
                        	</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                        	<div class="card-header">
                            <img    src="img/backdrop1.jpg" alt="New york">
                        	</div>
                        	<div class="card-body">
                        		First 
                        	</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                        	<div class="card-header">
                            <img    src="img/backdrop1.jpg" alt="New york">
                        	</div>
                        	<div class="card-body">
                        		First 
                        	</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                        	<div class="card-header">
                            <img    src="img/backdrop1.jpg" alt="New york">
                        	</div>
                        	<div class="card-body">
                        		First 
                        	</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                        	<div class="card-header">
                            <img    src="img/backdrop1.jpg" alt="New york">
                        	</div>
                        	<div class="card-body">
                        		First 
                        	</div>
                        </div>
                    </div>

                </div>
		</div>
	</div>
<!--------------------------Popular Near You------------------------------->
	<div class="popular ml-4 mr-4 mt-4 mb-4 pb-5">
		<div class="container animatable">
			<p class="text-center pb-3"><span style="color: #901108;">Popular</span>&nbsp; Near&nbsp; You</p>
			<div class="owl-carousel owl-theme owl-carousel2">
                    <div class="item  fadeInUp">
                        <div class="card">
                        	<div class="card-header">
                            <img    src="img/backdrop1.jpg" alt="New york">
                        	</div>
                        	<div class="card-body">
                        		First 
                        	</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                        	<div class="card-header">
                            <img    src="img/backdrop1.jpg" alt="New york">
                        	</div>
                        	<div class="card-body">
                        		First 
                        	</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                        	<div class="card-header">
                            <img    src="img/backdrop1.jpg" alt="New york">
                        	</div>
                        	<div class="card-body">
                        		First 
                        	</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                        	<div class="card-header">
                            <img    src="img/backdrop1.jpg" alt="New york">
                        	</div>
                        	<div class="card-body">
                        		First 
                        	</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                        	<div class="card-header">
                            <img    src="img/backdrop1.jpg" alt="New york">
                        	</div>
                        	<div class="card-body">
                        		First 
                        	</div>
                        </div>
                    </div>

                </div>
		</div>
	</div>

<!--------------------------------Footer------------------------------------------>
<?php include "footer.php";?>


<!--------------------------------Scripts------------------------------------------>
<script type="text/javascript">

function getLocation() {
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
    console.log("dhjdks");
  } else {
    alert("Your Browser doesn't support Geolocation");
  }
}

  function showPosition(position) {
console.log("tdsfrgthyjukl0");
  var locAPI = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true&key=AIzaSyCPZiUzoenAWSuTMW5LJhzxFSXYFrzVdQI";
  console.log(locAPI);
  $.get({
    url: locAPI,
    success: function(data){
      console.log(data);
      var data = data.results[0];
      console.log(data.address_components[4].long_name);
    }
  })
}
function showError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            console.log("User denied the request for Geolocation.")
            break;
        case error.POSITION_UNAVAILABLE:
            console.log("Location information is unavailable.")
            break;
        case error.TIMEOUT:
            console.log("The request to get user location timed out.")
            break;
        case error.UNKNOWN_ERROR:
            console.log("An unknown error occurred.")
            break;
    }
}
</script>
<script type="text/javascript" src="js/owl_carousel.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>