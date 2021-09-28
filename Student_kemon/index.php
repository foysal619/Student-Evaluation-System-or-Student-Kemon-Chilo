<!DOCTYPE html>
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
    }
    body{
        
        /* background-color: #31F6B6; */
        background: url(image/edu1.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    /* .main{
        height:628px;
        width:414px;
        border:1px solid black;
        background-color: lightblue;
    } */

    h1.title_area{
        
        margin-top:50px;
        text-align: center;
        text-transform: uppercase;
        color: white;
        background-color: tomato;

    }
    img.teacherimg{

        height:150px;
        width:150px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius:50%;

    }
    .teacher_btn{
        display: block;
        margin-top:25px;
        margin-left: auto;
        margin-right: auto;

        background-color: #f44336; 
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        font-weight: bold;

    }

    img.adminimg{
            
            margin-top:25px;
           
            display: block;
            margin-left: auto;
            margin-right: auto;
           

    }
    .admin_btn{
        display: block;
        margin-top:25px;
        margin-left: auto;
        margin-right: auto;

        background-color: #f44336; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        font-weight: bold;

    }

    .admin_btn:hover {
          background-color: #C70039;
          color: white;
        }

    </style>
</head>
<body>
        <?php

             if(isset($_POST['student_mk'])){
                header("location:firstindex.php");
             }

            ?>
    

    <div class="main">
        <h1 class="title_area">Student Kemon Cilo?</h1> <br><br><br><br>

            <form action="" method="post">

                <img class="adminimg" src="image/welcome.png" alt="This is Admin image">

                    <input class="admin_btn" type="submit" name="student_mk" value="<< Continue >>"/>
            </form>
            
        </div>


    </div>
</body>
</html>