<?php
    include 'conn.php';
    
    if(!isset($_GET['id']) || empty($_GET['id'])){header('location:index.php');} 
    $id = $_GET['id'];
    $position_q = "SELECT position FROM students WHERE student_num='$id' ";
    $position_res = $conn->query($position_q);
    $position = $position_res->fetch_array();
    $status = $position["position"];
    if($status=='admin'){ ?>
        <script>
            alert("Admin information can't be deleted!");
            location.replace("index.php");
        </script>';
<?php } else { 
        $query = "delete from students where student_num='$id'";
        $result = $conn->query($query); ?>
        <script>
            alert("Record has been deleted!");
            location.replace("index.php");
        </script>';
<?php } ?>


