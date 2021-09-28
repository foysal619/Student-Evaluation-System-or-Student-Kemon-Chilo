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
            .main{
                padding:10px;
                height:628px;
                width:414px;
                border:1px solid black;
                background-color: lightblue;
                
            }
            h1.title_area{
                
                margin-top:25px;
                text-align: center;
                text-transform: uppercase;
                color: #4CAF50;
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
$resultset=$connect->query("SELECT student_id FROM students_info");


?>

<div class="main">

<h1 class="title_area">List of student</h1> <br><br><br><br>

        <form action="" method="post">
            Select Student: <br> <br>
            <select name="studentlist" >
                <?php
                while($rows=$resultset->fetch_assoc()){

                    $stu_id= $rows['student_id'];
                    echo "<option value='$stu_id'>$stu_id</option>";
                }
                
                ?>
            
            
            </select> <br><br>
            <table>
            <tr>
                <td><input type="submit" name="select_stu" value="Submit"> </td> <td><input type="submit" style="margin-left: 100px;" name="goback" value="<< Back"></td>
            </tr>
            </table>
            

            <?php
                if(isset($_POST['select_stu'])){
                                
                        $student_item= $_POST['studentlist'];

                    
                        header("location:comments.php");


                }
                if(isset($_POST['goback'])){
                    header("location:studentselect.php");
                }

                        
                
            ?>

         </form>






</div>
    
</body>
</html>