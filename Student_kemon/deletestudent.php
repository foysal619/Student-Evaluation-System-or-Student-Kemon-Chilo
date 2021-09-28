<!DOCTYPE html>
<?php include 'userdata.php'; ?>
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

$connect= $connt;
$resultset=$connect->query("SELECT S_id FROM student_info");

//$resultst1=$connect->query("SELECT S_name FROM student_info");


?>

<div class="main">

<h1 class="title_area">Select Student</h1> <br><br><br><br>

        <form action="" method="post">
        
               
            <!-- this are used for show id  -->
            Select Student: <br> <br>
            <select name="studentlist" >
                <?php
                while($rows=$resultset->fetch_assoc()){

                    $stu_id= $rows['S_id'];
                    echo "<option value='$stu_id'>$stu_id</option>";
                }
                
                ?>
            
            
            </select> <br><br>

            <table>
                <tr>
                    <td><input type="submit" name="select_stu" value="Delete Student"></td><td><input type="submit" style="margin-left: 100px;" name="goback" value="<< Back"></td>
                </tr>
            </table>

            
            

            <?php
                if(isset($_POST['select_stu'])){
                                
                        $student_id= $_POST['studentlist'];

                        

                        $quary="DELETE FROM student_info WHERE S_id='$student_id'";
                        //$quary_name="SELECT S_name FROM student_info WHERE S_id='$student_id'";
                       
                        $data= mysqli_query($connect,$quary);
                        //$data_name= mysqli_query($connect,$quary_name);

                        echo " <br> ID: ".$student_id;
                        //echo "<br> Name:".$data_name;

                        if($data){
                            echo '<br> Successfully Delete'; 
                            }else{
                                echo 'Not Delete';
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