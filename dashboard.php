

<html>
    <head>
        <title>Final Examination</title>
        <style>

            button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                left:450px;
                    }
            .container { 
                        height: 200px;
                        position: relative;
                        
                        }

            .center {
                        margin: 0;
                        position: absolute;
                        top: -40px;
                        left: 410px;
                       
                        }
            p{
                text-align: center;
                font-family:Arial, Helvetica, sans-serif;
                font-size: 4em;
                padding-top: 50px;
                color: green;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
            <form action="" method="post">
                    <p>DASHBOARD</p><br><br>
                <div class="container">
                    <div class="center">
                        <button type="button" name="admin" onclick="location.href='add.php'">Add Student</button>
                        <button type="button" name="faculty" onclick="location.href='addfaculty.php'">Add Faculty</button>
                        <button type="button" name="students" onclick="location.href='index.php'">List of Students</button>
                    </div>
                <div>
            </form>
    </body>
</html>