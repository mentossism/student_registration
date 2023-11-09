<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"dbcrud");
$edit = $_GET['edit'];

$sql = "select * from student where id = '$edit'";

$run = mysqli_query($connection,$sql);


while($row=mysqli_fetch_array($run))
{
    $id = $row['id'];
    $name = $row['name'];
    $section = $row['sections'];
    $course = $row['course'];
    $assigned_teacher = $row['assigned_teacher'];
    $school_year = $row['school_year'];
    $semester = $row['semester'];

}

?>

<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"dbcrud");


    if(isset($_POST['submit']))
        {
          $edit = $_GET['edit'];  
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
    <title>Student Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1> Student Crud Application </h1>
                    </div>
                    <div class="card-body">

                    <form action="add.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name" value="<?php echo $name; ?>"> 
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control"  placeholder="Enter Address" value="<?php echo $address ?>"> 
                        </div>

                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name ="mobile" class="form-control"  placeholder="Enter Mobile" value="<?php echo $mobile ?>"> 
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Edit">
                        </form>
                    </div>
                    </div>

                </div>
            
            </div>
        </div>

</body>
</html>