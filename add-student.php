<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>University</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php session_start(); include 'conn.php'; ?>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">University</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Dashboard</a>
              </li>
              <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="add-student.php">Add Students</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <div class="student-info">
            <div class="student-header">
              <h3>Student Information</h3>
            </div>
            <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['msg_type']; ?>" >
              <?php echo $_SESSION['message'];
                    unset($_SESSION['message']);
              ?>
            </div>
            <?php endif ?>
            <form class="row g-3" action="add-student-process.php" method="post">
              <div class="col-md-4">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" require>
              </div>
              <div class="col-md-4">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" require>
              </div>
              <div class="col-md-4">
                <label for="mname" class="form-label">Middle Name (Optional)</label>
                <input type="text" class="form-control" id="mname" name="mname">
              </div>
              <div class="col-md-3">
                <label for="student_num" class="form-label">Student Number</label>
                <input type="number" class="form-control" id="student_num" name="student_num" require>
              </div>
              <div class="col-md-3">
                <label for="program" class="form-label">Program</label>
                <input type="text" class="form-control" id="program" name="program" require>
              </div>
              <div class="col-md-3">
                <label for="year_level" class="form-label">Year Level</label>
                <input type="number" class="form-control" id="year_level" name="year_level" require>
              </div>
              <div class="col-md-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" class="form-select" name="status" require>
                  <option value="Enrolled" selected>Enrolled</option>
                  <option value="Not Enrolled">Not Enrolled</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="birthdate" class="form-label">Birthdate</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" max="2022-04-30" require>
              </div>
              <div class="col-md-4">
                <label for="sex" class="form-label">Sex</label>
                <select id="sex" class="form-select" name="sex" require>
                  <option value="Male" selected>Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="contact" class="form-label">Contact No.</label>
                <input type="number" class="form-control" id="contact" name="contact" require>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" require>
              </div>
              <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" require>
              </div>
              <div class="col-md-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="" name="address" require>
              </div>
                  <input type="hidden" name="position" value="none">
              <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" name="save">Save Student</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
