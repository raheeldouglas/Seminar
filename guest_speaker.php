<?php 
    $title = 'Guest Speakers';
    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    

       
?>
        <div class="card-deck">
  <div class="card">
    <img src="speaker1.jpg" class="card-img-top" alt="Speaker 1">
    <div class="card-body">
      <h3 class="card-title">Speaker 1</h3>
      <p class="card-text">Speaker 1 is a renowned expert in personal growth and development. They have written several books on the topic and have been featured on numerous podcasts and TV shows. In their talks, they share practical strategies and techniques that can help people transform their lives and achieve their goals.</p>
    </div>
  </div>
  <div class="card">
    <img src="speaker2.jpg" class="card-img-top" alt="Speaker 2">
    <div class="card-body">
      <h3 class="card-title">Speaker 2</h3>
      <p class="card-text">Speaker 2 is a motivational speaker and coach who has inspired thousands of people to take control of their lives and reach their full potential. With a background in psychology and personal development, Speaker 2 offers a unique perspective on how to overcome challenges and achieve success.</p>
    </div>
  </div>
  <div class="card">
    <img src="speaker3.jpg" class="card-img-top" alt="Speaker 3">
    <div class="card-body">
      <h3 class="card-title">Speaker 3</h3>
      <p class="card-text">Speaker 3 is a corporate trainer and leadership coach who helps professionals and teams improve their productivity and effectiveness. With a wealth of experience in the business world, Speaker 3 brings real-world examples and insights to their talks, making them engaging and relevant to a wide audience.</p>
    </div>
  </div>
</div>





<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>