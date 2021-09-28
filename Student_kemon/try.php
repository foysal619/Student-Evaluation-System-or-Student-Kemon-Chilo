<?php
    $connect= mysqli_connect("localhost","root","","student_details");
    $semester_query=$connect->query("SELECT DISTINCT S_id FROM student_info");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
            .main{
                /* margin-left:30px;
                float:left;
                padding:10px;
                height:628px;
                width:414px; */
                /* border:1px solid black; */

                padding:10px;
        height:628px;
        width:414px;
                
            }
            h1.title_area{
        
                margin-top:25px;
                text-align: center;
                text-transform: uppercase;
                background-color: #f44336;
                color: black;
            }
           
            input[type=submit]{

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

            /* this section for goto home */
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
        
        
        </style>



</head>
<body>


<div class="topnav"><a href="firstindex.php">Back</a><h1 class="title_area">Select Student ID</h1></div>

<br><br>
<div class="container"></div>
    <div class="main">

    <!-- this is start logical area -->
            <form action="" method="post">

            Student ID: <br> 
                <select name="S_id" >
                    <?php
                        while($rows=$semester_query->fetch_assoc()){

                            $id= $rows['S_id'];
                            echo "<option value='$id'>$id</option>";
                        }
                    ?>
                </select> <br><br>
                    
                <input type="submit" name="btn_comment" value="View Comments">

            </form><br><br><br>

            <p style="background-color:skyblue;padding:20px;border-radius:20px;">
            <?php

                if(isset($_POST['btn_comment'])){
                    $id1=$_POST['S_id'];
                    
                    //THIS IS CALLED DATABASE NAME


                        $query = "SELECT * FROM student_info WHERE S_id='$id1'";
                        $data = mysqli_query($connect,$query);
                        $total = mysqli_num_rows($data);
                        $result =mysqli_fetch_assoc($data);

                        echo "<br>Student Name: ".$result['S_name']."<br>Student ID:".$result['S_id'];
                        echo "<br>Section ".$result['Section']."<br>Semester: ".$result['Semester'];
                        
                        echo "<br><br><Strong>Subject 1</strong>";
                        echo "<br><br>Teacher Name: ".$result['T_name'];
                        echo "<br>Course Code: ".$result['C_code'];
                        echo "<br>Course Title: ".$result['C_title'];
                        echo "<br>Comment: ".$result['cse111_comment'];

                        echo "<br><br><Strong>Subject 2</strong>";
                        echo "<br><br>Teacher Name: ".$result['T2_name'];
                        echo "<br>Course Code: ".$result['C2_code'];
                        echo "<br>Course Title: ".$result['C2_title'];
                        echo "<br>Comment: ".$result['C2_comment'];

                        

                }

            
            ?>
            </p>
    </div>




















</body>
</html>