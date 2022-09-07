<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>University</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php session_start(); include 'conn.php';
    if(!isset($_GET['id']) || empty($_GET['id'])){header('location:index.php');} ?>
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
                <a class="nav-link" aria-current="page" href="add-student.php">Add Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <?php
        $id = $_GET['id'];
        $query = "select * from students where student_num='$id'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
    ?>
    <div class="container-fluid">
        <div class="row g-3">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="student-info">
                    <div class="student-header">
                        <h3>Student Information</h3>
                    </div>
                    <?php
                        if(!isset($_GET['id'])){
                            header('location:index.php');
                        }
                        $id = $_GET['id'];
                        $query = "select * from students where student_num='$id'";
                        $result = $conn->query($query);
                        $row = $result->fetch_assoc();
                    ?>
                    <div class="content">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Complete Name</th>
                                    <td><?php echo $row['lname'].", ".$row['fname']." ".$row['mname']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Student Number</th>
                                    <td><?php echo $row['student_num']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Year Level</th>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Program</th>
                                    <td><?php echo $row['program']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td><?php echo $row['email']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Sex</th>
                                    <td><?php echo $row['sex']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Birthdate</th>
                                    <td><?php echo $row['birthdate']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Address</th>
                                    <td><?php echo $row['address']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Status</th>
                                    <td><?php echo $row['status']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>