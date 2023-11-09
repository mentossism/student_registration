<?php
   $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms_db");

    if(isset($_POST['submit']))
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $section = $_POST['section'];
            $course = $_POST['course'];
            $assigned_teacher = $_POST['assigned_teacher'];
            $school_year = $_POST['school_year'];
            $semester = $_POST['semester'];


           $sql = "insert into student(id,name,section,course,assigned_teacher,school_year,semester)values(' $id',' $name',' $section','$course','$assigned_teacher','$school_year','$year')";

           if(mysqli_query($connection,$sql))
           {
                  echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;
           }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1> Student Registration </h1>
                    </div>
                    <div class="card-body">

                    <form action="add.php" method="post">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" class="form-control"  placeholder="Enter ID"> 
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name"> 
                        </div>

                        <div class="form-group">
                            <label>Section</label>
                            <input type="text" name ="section" class="form-control"  placeholder="Enter Section"> 
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <input type="text" name ="course" class="form-control"  placeholder="Enter Course"> 
                        </div>
                        <div class="form-group">
                            <label>Assigned Teacher</label>
                            <input type="text" name ="assigned_teacher" class="form-control"  placeholder="Enter Assigned Teacher"> 
                        </div>
                        <div class="form-group">
                            <label>School Year</label>
                            <input type="text" name ="school_year" class="form-control"  placeholder="Enter School Year"> 
                        </div>
                        <div class="form-group">
                            <label>Semester</label>
                            <input type="text" name ="semester" class="form-control"  placeholder="Enter Semester"> 
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Register">
                        </form>
                   
                    </div>
                    </div>

                </div>
            
            </div>
        </div>

</body>
</html>