<?php
error_reporting(0);
include 'userdata.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Studnet Area</title>

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
                padding:10px;
                height:628px;
                width:414px;
                /* border:1px solid black;
                background-color: lightblue; */
                
            }
            h1.title_area{
                
                margin-top:25px;
                text-align: center;
                text-transform: uppercase;
                color: black;
                background-color:tomato;
            }
            input[type=text]{
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
            input[type=password]{
                width: 80%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
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
        
        
        </style>

</head>
<body>
<?php

$conn= $connt;

    

?>


<div class="main">

<h1 class="title_area">Add Student Area</h1> <br><br>

    <form action='' method='post'>
        
        Student Name: <br>
        <input class="username" type="text" name="inname" placeholder="Enter Student Name"/>  <br>
        Student ID: <br>
        <input type="text" class="text" name="inid" placeholder="Enter Student ID"> <br><br>
        
        Semester: <br>
        <input class="username" type="text" name="insemester" placeholder="Enter Semester"/>  <br>
        Section: <br>
        <input type="text" class="text" name="insection" placeholder="Enter Section"> <br>
       

            <table>
                <tr>
                    <td><input type="submit" name="add_student" value="Add Student"> </td><td><input type="submit" style="margin-left: 100px;" name="goback" value="<<Back"></td>
                </tr>
            </table>

           
            



    </form>

    <?php


        if(isset($_POST['add_student'])){

            //this is select button
            if(isset($_POST['add_student'])){
                
                $stname= $_POST['inname'];
                $stid= $_POST['inid'];
                $stsection= $_POST['insection'];
                $stsemester= $_POST['insemester'];
                // $co_code= $_POST['c_code'];

                echo "Name: ".$stname."<br>";
                echo "ID: ".$stid."<br>";
                
                $quary="INSERT INTO  student_info VALUES('$stid','$stname','$stsection','$stsemester','NULL','null','null','null','null','null','null','null')";
                $data= mysqli_query($conn,$quary);

                
                if($data){
                echo 'Successfully inserted'; 
                }else{
                    echo 'Not inserted';
                }




            }   

            
        

        }
        if(isset($_POST['goback'])){
            header("location:studentbutton.php");


        }

    ?>






</div>
    
</body>
</html>