<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of student</title>

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
include 'userdata.php';
        $connect= $connt;
        $resultset=$connect->query("SELECT S_id FROM student_info");

        //$resultst=$connect->query("SELECT name FROM students_info");


    ?>

<div class="main">

<h1 class="title_area">Update student</h1> <br><br><br><br>

        <form action="" method="post">
        
               
            <!-- this are used for show id  -->
            Select Student: <br> <br>
            <select name="S_id" >
                <?php
                while($rows=$resultset->fetch_assoc()){

                    $stu_id= $rows['S_id'];
                    echo "<option value='$stu_id'>$stu_id</option>";
                }
                
                ?>
            
            
            </select> <br><br>

            <!-- <input type="submit" name="select_stu" value="Login"> <br><br> -->



            Student Name: <br>
            <input class="username" type="text" name="inname" placeholder="Enter Student Name"/>  <br>
            Student ID: <br>
            <input type="text" class="text" name="inid" placeholder="Enter Student ID"> <br>
            
            Semester: <br>
            <input class="username" type="text" name="insemester" placeholder="Enter Semester"/>  <br>
            Section: <br>
            <input type="text" class="text" name="insection" placeholder="Enter Section"> <br><br>
            
            <table>
                <tr>
                    <td><input type="submit" name="add_student" value="Update"></td><td><input type="submit" style="margin-left: 100px;" name="goback" value="<< Back"></td>
                </tr>
            </table>

            
                <?php


                    //this is select button
                    if(isset($_POST['add_student'])){

                        $student_id= $_POST['S_id'];
                                              
                        $stname= $_POST['inname'];
                        $stid= $_POST['inid'];
                        $stsection= $_POST['insection'];
                        $stsemester= $_POST['insemester'];
                        
                        echo "Name: ".$stname."<br>";
                        echo "ID: ".$stid."<br>";
                        
                        $quary="UPDATE student_info SET S_name ='$stname',S_id='$stid',Section='$stsection',Semester='$stsemester'  WHERE S_id='$student_id'";
                        $data= mysqli_query($connect,$quary);

                        
                        if($data){
                        echo 'Successfully Updated'; 
                        }else{
                            echo 'Not Updated';
                        }


                    }    
                    if(isset($_POST['goback'])){
                        header("location:studentbutton.php");
                     }

               

                ?>


         </form>






</div>
    
</body>
</html>