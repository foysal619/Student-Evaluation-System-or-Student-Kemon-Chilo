<?php
include 'userdata.php';
$co= $connt;
error_reporting(0);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Semester and section selection area</title>

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
            #main{
                padding:10px;
                height:628px;
                width:30%
                /* border:1px solid black;
                background-color: lightblue; */
                
            }
            h1.title_area{
                
                margin-top:25px;
                text-align: center;
                text-transform: uppercase;
                background-color: #f44336;
                color: white;
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

            /* this is extra area */
            .column {
                    float: left;
                    width: 50%;
                    padding: 10px;
                    height: auto; /* Should be removed. Only for demonstration */
                    }

                    /* Clear floats after the columns */
                    .row:after {
                    content: "";
                    display: table;
                    clear: both;
            }
        /* for logout */
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

    <?php
        //THIS IS CALLED DATABASE NAME
        $connect= mysqli_connect("localhost","root","","student_details");

        //
        $semester_query=$connect->query("SELECT DISTINCT S_id FROM student_info");

        $sections =$connect->query("SELECT DISTINCT Section FROM student_info");

        $co_code =$connect->query("SELECT DISTINCT Semester FROM student_info");

        $Sname =$connect->query("SELECT DISTINCT S_name FROM student_info");
        

    ?>


<div class="row" style="float:inline-block;">
        <div class="column" id="main">

        <form action="" method="post">

                <h1 class="title_area">Select Students</h1> <br><br><br><br>
        Student ID: <br> 
            <select name="S_id" >
                <?php
                    while($rows=$semester_query->fetch_assoc()){

                        $semester1= $rows['S_id'];
                        echo "<option value='$semester1'>$semester1</option>";
                    }
                
                
                
                ?>
            
            
            </select> <br><br>

            <!-- this is name section -->
            Student Name: <br> 
            <select name="S_name" >
                <?php
                    while($rows=$Sname->fetch_assoc()){

                        $sname= $rows['S_name'];
                        echo "<option value='$sname'>$sname</option>";
                    }
                
                
                
                ?>
            
            
            </select> <br><br>


            <!-- this section for course code -->
            
        Section: <br> 
        <select name="Section" >
            <?php
                while($rows3=$sections->fetch_assoc()){

                    $section2= $rows3['Section'];
                    echo "<option value='$section2'>$section2</option>";
                }
                    
            ?>
                </select>
             <br><br>

        Semester: <br> 
        <select name="Semester" >
            <?php
                while($rows3=$co_code->fetch_assoc()){

                    $semester2= $rows3['Semester'];
                    echo "<option value='$semester2'>$semester2</option>";
                }
                    
            ?>
        </select><br><br>


            <!-- this is end for course code -->
                    <table>
                        <tr>
                            <td><input type="submit" name="select_se" value="Select"> </td>
                        </tr>
                    </table>

                


                    <?php
                    

                        //this is select button
                        if(isset($_POST['select_se'])){

                            //this is used for student id
                            if(isset($_POST['S_id'])){
                                    
                                $s_id= $_POST['S_id'];
                                // $name =$connect->query("SELECT S_name FROM student_info WHERE S_id='.$s_id.'");
            
                            
                            // echo $s_id;
                            // echo '<br><br>';
            
            
                                }

                                if(isset($_POST['Section'])){
                                    
                                    $section1= $_POST['Section'];
        
                                
                                    //echo $section_item;
                                // echo '<br><br>';
        
        
                                    }

                            //this is used for semester
                            if(isset($_POST['Semester'])){
                                    
                            $section_item= $_POST['Semester'];

                        
                            }
                           
                            

                           
                        }


                    ?>
                

         </form>
         <br>   <br>
         <!-- <p style="background-color:skyblue;padding:20px;border-radius:20px;">
         <?php
          
        //   echo "ID: ".$s_id."<br>";
        //   echo "Section: ".$section1."<br>";
        //   echo "Semester: ".$section_item."<br><br>";
        //   echo "Teacher 1 Name: ". $teachername."<br>";
        //   echo "Course 1 Title: ".$co_title."<br>";
        //   echo "Course 1 Code: ".$stucode."<br>";
        //   echo "Comment 1: ".$stucore."<br><br>";
        //   echo "Teacher 2 Name: ".$teachername2."<br>";
        //   echo "Course 2 Title: ".$co_title2."<br>";
        //   echo "Course 2 Code: ".$co_code2."<br>";
        //   echo "Comment 2: ". $stucome2."<br><br>";
         ?>
         </p> -->
        </div>

<!-- this is second coulumn -->
  <div class="column">
  
            <div class="main">

                <form action="" method="post">

                        <h1 class="title_area">Student Details</h1><br>
                    <table class="table1">
                        <!-- <tr>
                            <td>Name:</td> <td name="stname"><?php echo $sname; ?></td>
                        </tr> -->
                        <tr>
                            <td>ID:</td> <td name="stid"><input class="teachername" type="text" name="input_id" placeholder="<?php echo $s_id; ?>" value="<?php echo $s_id; ?>" ></td>
                        </tr>
                        <tr>
                            <td>Section:</td> <td name="stsec"><?php echo $section1; ?></td>
                        </tr>

                        
                        <tr>
                            <td>Semester:</td>  <td name="stsem"><?php echo $section_item; ?></td>
                        </tr>
                        
                        <!-- <tr>
                            <td> Course 1 Code:</td>
                            <td><?php echo $c_code; ?></td>
                        </tr> -->
                        <tr>
                            <td>Course 1 Teacher:</td>
                            <td> 
                                <input class="teachername" type="text" name="input_teachername" placeholder="Enter Teacher 1 Name" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Course 1 Title:        
                            </td>
                            <td> 
                                <input class="corse_title" type="text" name="course_title" placeholder="Enter Course 1 Title" >
                            </td>
                        </tr>
                            <!-- not defiend -->
                        <tr>
                            <td>
                            Course 1 Code:        
                            </td>
                            <td> 
                                <input class="corse_title" type="text" name="course_code1" placeholder="Enter Course 1 Code" >
                            </td>
                        </tr>

                        <tr>
                        <td></td><td><textarea name="commentsarea" cols="30" rows="10" placeholder="Enter Your Comment Here" ></textarea> </td>
                        </tr>
                        <!-- Second comment -->
                        <td>Course 2 Teacher:</td>
                            <td> 
                                <input class="teachername" type="text" name="input_teachername1" placeholder="Enter Teacher 2 Name" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Course 2 Title:        
                            </td>
                            <td> 
                                <input class="corse_title" type="text" name="course_title1" placeholder="Enter Course 2 Title" >
                            </td>
                        </tr>

                            <!-- not defiend -->
                            <tr>
                            <td>
                            Course 2 Code:        
                            </td>
                            <td> 
                                <input class="corse_title" type="text" name="course_code" placeholder="Enter Course 2 Code" >
                            </td>
                            </tr>

                        <tr>
                        <td></td><td><textarea name="commentsarea1" cols="30" rows="10" placeholder="Enter Your Comment Here" ></textarea> </td>
                        </tr>
                        <!-- end socnd comment -->


                        <tr>
                        <td></td><td><input type="submit" name="submit" value="Submit"></td>
                        <td> <div class="topnav"><a href="firstindex.php">Logout</a></div></td>
                        </tr>


                    </table> <br><br>

                            <?php

                                if(isset($_POST['submit'])){

                                $co_id= $_POST['input_id'];    
                                $teachername=$_POST['input_teachername'];
                                                                
                                $co_title=$_POST['course_title'];
                                $stucore=$_POST['commentsarea'];

                                $stucode=$_POST['course_code1'];

                                $teachername2=$_POST['input_teachername1'];
                                                                
                                $co_title2=$_POST['course_title1'];
                                $co_code2=$_POST['course_code'];

                                $stucome2=$_POST['commentsarea1'];

                                $name =$connect->query("SELECT S_name FROM student_info WHERE S_id='$co_id'");
                                $quary="UPDATE student_info SET cse111_comment='$stucore',T_name='$teachername',C_code='$stucode', C_title='$co_title',T2_name='$teachername2',C2_title='$co_title2',C2_code='$co_code2',C2_comment='$stucome2'  WHERE S_id='$co_id'";
                                $data= mysqli_query($co,$quary);

                                    if($data){
                                    echo '<p style="color:white;font-size:20px;">Successfully Inserted</p><br>';
                                    echo "<p style='color:white;font-size:20px;'>ID: ".$co_id."<br>";
                                    }else{
                                        echo '<p style="color:tomato;font-size:20px;">Not Inserted</p>';
                                    }

                                   

                                }
                                
                                if(isset($_POST['goback'])){
                                    header("location:firstindex.php");
                               }

                                
                            
                            ?>
                    


                </form>

            </div>
 
  
  </div>
</div>
    
</body>
</html>