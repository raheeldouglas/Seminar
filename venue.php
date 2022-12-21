<?php 
    $title = 'Venue';
    require_once 'includes/header.php'; 
    //require_once 'includes/auth_check.php';
   // require_once 'db/conn.php';

    

       
?>
        <!-- Venues -->
<h2>Venues</h2>
<ul>
  <li>
    <h3>AESSEAL New York Sports Stadium</h3>
    <p>AESSEAL New York Sports Stadium is a modern conference and sports center located in the heart of the city. It has a capacity of 5000 people and is equipped with state-of-the-art audio-visual equipment and Wi-Fi.</p>
    <p>Address: New York Way, Rotherham S60 1FJ, UK</p>
    <p>Capacity: 5000</p>
    <p>Amenities: Wi-Fi, audio-visual equipment</p>
    <p>June 12, 2023</p>
  </li>
  <li>
    <h3>Staples Center Stadium </h3>
    <p>Crypto.com Arena is a multi-purpose indoor arena in Downtown Los Angeles. Adjacent to the L.A. Live development, it is located next to the Los Angeles Convention Center complex along Figueroa Street. The arena opened on October 17, 1999; it was known as Staples Center until December 2021 when Crypto.com acquired the naming rights.</p>
    <p>Address: 1111 S Figueroa St, Los Angeles, CA 90015, USA</p>
    <p>Capacity: 7000</p>
    <p>Amenities: Scenic views, Wi-Fi, Food Courts</p>
    <p>March 23, 2023</p>
  </li>
  <li>
    <h3>Jamaica Conference Centre</h3>
    <p>The Jamaica Conference Centre, is the Caribbean’s most sophisticated meeting place. Located on the picturesque Kingston Waterfront, in the heart of the down town business district, the Conference Centre is a testament to Jamaican architecture and functional elegance, offering comprehensive facilities and services to meet the most stringent requirements of conference planners.</p>
    <p>Address: 14-20 Port Royal St, Kingston</p>
    <p>Capacity: 2000</p>
    <p>Amenities: Catering kitchen, on-site parking</p>
    <p>January 10, 2023</p>
  </li>
</ul>

<!-- Location Map -->
<h2>Locations</h2>
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


<!-- Carousel Slideshow -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="venue_photos\newyorkstadium.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="venue_photos\StaplesCentre.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="venue_photos\jaconference_centre.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>