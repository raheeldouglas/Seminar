<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'sendemail.php';
    
    if(isset($_POST['submit'])){
      //extract values from the $_POST array  
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $contact = $_POST['phone'];
      


      //Uploading Images
        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext= pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$contact.$ext";
        move_uploaded_file($orig_file,$destination);
      
      //call function to insert and track if success or not
      $isSuccess = $crud->insertAttendees($fname, $lname, $gender,$address, $email, $contact,$destination);
      $specialtyName = $crud->getSpecialtyById($gender);

      if($isSuccess){
        SendEmail::SendMail($email, 'Welcome to Growth and Development Seminar 2022', 'You have successfully registerted for this year\'s Growth And Development Seminar');
        include 'includes/successmessage.php';
      }
      else{
        include 'includes/errormessage.php';
        //header("Location: viewrecords.php");
      }

    }
?>

   

<img src="<?php echo $destination; ?>" style="width: 15%; height:15%"/>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
              <?php echo $specialtyName['name'];  ?>    
            </h6>
            <p class="card-text">
                Address: <?php echo $_POST['address'];  ?>
            </p>
            <p class="card-text">
                Email Address: <?php echo $_POST['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number: <?php echo $_POST['phone'];  ?>
            </p>
    
        </div>
    </div>
    
    



<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>