<?php
    session_start();
    include 'conn.php';

    if(!isset($_POST['id']) || empty($_GET['id'])){header('location:add-student.php');} 
    if(isset($_POST['save'])){
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

        $query = "INSERT INTO students(fname, mname, lname, student_num, program, year_level, email, contact, sex, birthdate, address, status, position,  password) VALUES ('$fname','$mname','$lname','$student_num','$program','$year_level','$email','$contact','$sex','$birthdate','$address','$status','$position','$password')";

        $result = $conn->query($query);
        $_SESSION["message"] = "Record has been saved!";
        $_SESSION["msg_type"] = "success";
        header("location: add-student.php");
    }

?>