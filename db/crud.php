<?php

//use LDAP\Result;

    class crud{
        // private database object\
        private $db;

        // constructor to initialize private to the database connection
        function __construct($conn){
            $this->db = $conn;
        }

        // function to insert a new record into the  database    
        public function insertAttendees($fname, $lname, $gender, $streetaddress,$email,$contact,$avatar_path){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO seminar (firstname,lastname,gender_id, streetaddress, emailaddress,contactnumber, avatar_path) VALUES(:fname, :lname,:gender,:streetaddress,:email,:contact,:avatar_path)";
                // prepare sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':streetaddress',$streetaddress);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':avatar_path',$avatar_path);
                // excute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 

        public function editAttendee($id, $fname, $lname, $gender, $streetaddress, $email, $contact){
            try{
                $sql = "UPDATE `seminar` SET `firstname`=:fname,`lastname`=:lname,`gender_id`=:gender,
                `streetaddress`=:streetaddress,`email`=:email,`contact`=:contact
                WHERE seminar_id = :id";
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':streetaddress',$streetaddress);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                // excute statement
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }
        public function getAttendees(){
            try{
                $sql = "SELECT * FROM `seminar` a inner join gender s on a.gender_id = s.gender_id";
            $result = $this->db->query($sql);
            return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getAttendeeDetails($id){
            try{
                $sql = "select * from seminar a inner join gender s on a.gender_id
                = s.gender_id where seminar_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteAttendee($id){
            try{
                $sql = "delete from seminar where seminar_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getSpecialties(){
            try{
                $sql = "SELECT * FROM `gender`;";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getSpecialtyById($id){
            try{
                $sql = "SELECT * FROM `gender` where gender_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }


        

    }
?>
        
    



