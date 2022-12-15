<?php
     require_once 'db/conn.php';
    //Get values from post operation
    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $id = $_POST['id'];  
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $address = $_POST['address'];

        //Call Crud Function
        $result = $crud->editAttendee($id,$fname, $lname, $gender, $email, $contact, $address);

        //Redirect to index.php
        if($result){
            header("Location: viewrecords.php");
        }
        else{
            //echo'error';
            include 'includes/errormessage.php'; 
            header("Location: viewrecords.php");  
        }
    }
    else{
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }

    


?>