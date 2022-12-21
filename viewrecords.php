<?php 
    $title = 'View Records';
    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    // Get all attendees
    $results = $crud->getAttendees();
?>



    <table class="table table-striped table">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>

      
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?> 
           <tr>
                <td><?php echo $r['seminar_id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['seminar_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['seminar_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('This will be lost, are you sure you want to delete records?');"
                    href="delete.php?id=<?php echo $r['seminar_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            
            </tr> 
        <?php }?>    
    </table>


<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>