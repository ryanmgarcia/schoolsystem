<?php

    session_start();
    include 'conn.php';
    if(isset($_POST['submit'])){
        $student_num = $_POST['student_num'];
        $password = md5($_POST['password']);

        $query = "SELECT * FROM students WHERE student_num='$student_num' && password='$password'";
        $result = $conn->query($query);

        if($row = $result->fetch_array()){
            $_SESSION['id'] = $row['id'];
            echo "<script>alert('Login Successfully!');</script>";
            echo "<script>location.replace('index.php');</script>";
        }
        else{
            echo "<script>alert('Invalid username or password!');</script>";
            echo "<script>location.replace('login.php');</script>";
        }
    }
?>