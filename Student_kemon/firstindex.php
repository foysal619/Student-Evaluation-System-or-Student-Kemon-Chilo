<!DOCTYPE html>
<?php include 'userdata.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Kemon Cilo</title>
    <style>
    
    *{
        margin:0px auto;
        padding:0px auto;
        /* box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif; */
    }
    body{
        
        /* background-color: #31F6B6; */
        background: url(image/edu2.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }


        /* .topnav {
        overflow: hidden;
        background-color: #333;
        } */
        .topnav a {
          float: left;
          display: inline-block;
          color: #f2f2f2;
          background-color: red;
          text-align: center;
          cursor: pointer;
          margin: 4px;
          font-size:26px;
          padding: 14px 16px;
          text-decoration: none;
          border-radius:30px;
        }

        /* Change color on hover */
        .topnav a:hover {
          background-color: #008CBA;
          color: white;
          font-size:26px;
          border-radius:30px;
        }

    img.teacherimg{

        height:100px;
        width:100px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius:50%;

    }
  

    img.adminimg{
            
            margin-top:5px;
            height:100px;
            width:100px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius:50%;

    }
 
    /* this is details area */

        .grid-container {
            display: grid;
            grid-column-gap: 50px;
            grid-template-columns: auto auto auto;
            padding: 10px;
            }

            .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 25px;
            text-align: center;
            border-radius:30px;
            }

    </style>
</head>
<body>

        <div>
            <Section>
                <div class="topnav">
                <a href="index.php">Home</a>
                </div>
        
            </Section>
            <br>
        </div>
       

        <div class="grid-container">
            <div class="grid-item"> 

                <h3>ADVISOR</h3><br>
                <div style="padding:0px auto;display:inline-block;">
                <img class="teacherimg" src="image/teacher.png" alt="This is Teacher image" style="width:250px;height:250px;float:left; margin:0px auto;">
                </div>
                <br>
                <hr>
                <br>
                <div>
                <p>Advisor have to login with their specific Id and Password which is given by administrator.
                    Advisor can add multiple Teacher Name, Course Title, Course Code and Couse Comments which details collected from all teachers from any semester.</p>
                </div>
                    <div class="topnav"><a href="teclogin.php">Login</a></div>
            </div>



            <div class="grid-item">

                <h3>Student or Parents</h3><br>
                <div style="padding:0px auto;display:inline-block;">
                <img class="teacherimg" src="image/studnet.png" alt="This is Teacher image" style="width:250px;height:250px;float:left; margin:0px auto;">
                </div>
                <br>
                <hr>
                <br>
                <p >A student or parent can view their comment by select their ID, Section and Semester which is given by their semester course teacher. Here no login required for students or parents.</p>
                <div class="topnav"><a href="try.php">Login</a></div>
            </div>


            <div class="grid-item">
                <h3>Admin</h3><br>
                <div style="padding:0px auto;display:inline-block;">
                <img class="teacherimg" src="image/admin.png" alt="This is Teacher image" style="width:250px;height:250px;float:left; margin:0px auto;">
                </div>
                <br>
                <hr>
                <br>
                
                    <p styel="font-size:18px;">Admin can login with their specific ID and Password. Admin can add, update and delete any student info from the database.</p>
                    
                        <div class="topnav" style="margin:0px auto;">
                        <a href="admlogin.php">Login</a>
                        </div>
            </div>  
        
        </div>

        

</body>
</html>