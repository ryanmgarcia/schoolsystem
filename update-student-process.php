<?php
    session_start();
    include 'conn.php';
    
    if(!isset($_GET['id']) || empty($_GET['id'])){header('location:index.php');} 
    
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
        $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
        $mname = filter_var($_POST['mname'], FILTER_SANITIZE_STRING);
        $student_num = $_POST['student_num'];
        $program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
        $year_level = $_POST['year_level'];
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $contact = $_POST['contact'];
        $sex = $_POST['sex'];
        $birthdate = $_POST['birthdate'];
        $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
        $status = $_POST['status'];
        $password = md5($_POST['password']);
        if($_POST['password']==''){
            $query = "UPDATE students SET fname='$fname',mname='$mname',lname='$lname',student_num='$student_num',program='$program',year_level='$year_level',email='$email',contact='$contact',sex='$sex',birthdate='$birthdate',address='$address',status='$status' WHERE id='$id'";
            $result = $conn->query($query);
            $_SESSION["message"] = "Record has been updated!";
            $_SESSION["msg_type"] = "success";
            header("location: update-student.php?id=$student_num");
        } else {
            $query = "UPDATE students SET fname='$fname',mname='$mname',lname='$lname',student_num='$student_num',program='$program',year_level='$year_level',email='$email',contact='$contact',sex='$sex',birthdate='$birthdate',address='$address',status='$status',password='$password' WHERE id='$id'";
            $result = $conn->query($query);
            $_SESSION['id'] = $id;
            $_SESSION["message"] = "Record has been updated!";
            $_SESSION["msg_type"] = "success";
            header("location: update.php?id=$student_num");
        }
    }

?>