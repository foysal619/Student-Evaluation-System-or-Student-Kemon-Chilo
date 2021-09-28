<?php
include('userdata.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student add,Update and Delete</title>

        <style>
            *{
                margin:0px auto;
                padding:0px auto;
            }
            body{
                
                /* background-color: #31F6B6; */
                background: url(image/edu2.jpg);
                background-size: cover;
                background-repeat: no-repeat;
            }
            
            .topnav a {
          float: center;
          display: inline-block;
          color: #f2f2f2;
          background-color: red;
          text-align: center;
          cursor: pointer;
          margin: 4px;
          font-size:26px;
          padding: 14px 16px;
          text-decoration: none;
        }

        /* Change color on hover */
        .topnav a:hover {
          background-color: #008CBA;
          color: white;
          font-size:26px;
        }


            h1.title_area{
                
                margin-top:25px;
                text-align: center;
                text-transform: uppercase;
                color: #4CAF50;
            }
        
        
        </style>

</head>
<body>

 <Section>
            <div class="topnav">
            <a href="firstindex.php"><img class="teacherimg" src="image/home.png" alt="This is Teacher image" style="width:30px;height:30px;float:left;"> | Home</a>
            <a href="addstudent.php"><img class="teacherimg" src="image/add.png" alt="This is Teacher image" style="width:30px;height:30px;float:left;"> | Add Student</a>
            <a href="updatestudent.php"><img class="teacherimg" src="image/update.png" alt="This is Teacher image" style="width:30px;height:30px;float:left;"> | Update Student</a>
            <a href="deletestudent.php"><img class="teacherimg" src="image/delete.png" alt="This is Teacher image" style="width:30px;height:30px;float:left;"> | Delete Student</a>
            
            </div>
            
        </Section>
        <br>


    
</body>
</html>