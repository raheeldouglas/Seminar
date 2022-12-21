<?php 
    $title = 'Venue';
    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    // Get attendees by id

       
?>
        <!-- Venues -->
<h2>Venues</h2>
<ul>
  <li>
    <h3>Venue 1</h3>
    <p>Venue 1 is a modern conference center located in the heart of the city. It has a capacity of 500 people and is equipped with state-of-the-art audio-visual equipment and Wi-Fi.</p>
    <p>Address: 123 Main Street, City, State Zip</p>
    <p>Capacity: 500</p>
    <p>Amenities: Wi-Fi, audio-visual equipment</p>
  </li>
  <li>
    <h3>Venue 2</h3>
    <p>Venue 2 is a beautiful outdoor event space nestled in the mountains. It has a capacity of 200 people and is surrounded by stunning natural scenery.</p>
    <p>Address: 456 Mountain Road, City, State Zip</p>
    <p>Capacity: 200</p>
    <p>Amenities: Scenic views, outdoor seating</p>
  </li>
  <li>
    <h3>Venue 3</h3>
    <p>Venue 3 is a stylish hotel conference room located near the airport. It has a capacity of 100 people and is equipped with a catering kitchen and on-site parking.</p>
    <p>Address: 789 Airport Boulevard, City, State Zip</p>
    <p>Capacity: 100</p>
    <p>Amenities: Catering kitchen, on-site parking</p>
  </li>
</ul>

<!-- Location Map -->
<h2>Location</h2>
<div id="map"></div>
<script>
  function initMap() {
    var location = {lat: 37.7749, lng: -122.4194};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: location
    });
    var marker = new google.maps.Marker({
      position: location,
      map: map
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

<!-- Carousel Slideshow -->
<h2>Photos</h2>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="photo1.jpg" class="d-


<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>