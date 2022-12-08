<?php
session_start();
// Create database connection using db file
if(!isset($_SESSION['id'])){
    header( 'Location: login.php');
    exit();
}else{ include_once("db.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id");
?>
<!--including header-->
<?php require './inc/header.php'?>
<section class="section">
    <h1>Welcome to Employee DataBase</h1>
</section>
    <H3><a href="add.php">Add New Employee</a><br/><br/></H3>
<!--Table-->
    <table width='80%' border=1 class="table table-striped">
    <tr>
        <th >Name</th> <th>Mobile</th> <th>Email</th> <th>Update/Delete</th>
    </tr>
        <!--display data-->
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";
        /*Update and Delete*/
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    }
    ?>
    </table>
    <div class="btn">
        <!--Logout button-->
        <a class="btn btn-outline-danger" href="logout.php" role="button">Logout</a>
    </div>
<!--including footer-->
<?php require './inc/footer.php'?>
</body>
</html>
