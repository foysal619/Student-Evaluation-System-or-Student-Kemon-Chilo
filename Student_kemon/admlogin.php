<?php
include('userdata.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is Admin Login page</title>

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
                color: #4CAF50;
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

<div class="topnav"><a href="firstindex.php">Back</a></div>

<div class="main">

<h1 class="title_area" style="background-color:tomato;color:black;">Admin Login Area</h1> <br><br><br><br>

    <form action='' method='post'>
        Username: <br>
        <input class="username" type="text" name="inputuser" placeholder="Enter User Name" required>  <br> <br>
        Password: <br>
        <input type="password" class="password" name="inputpass" placeholder="Enter your password" required> <br><br>
        <input type="submit" name="adm_login" value="Login">

    </form>

<?php


if(isset($_POST['adm_login'])){  
    $username= $_POST['inputuser'];
    $password= $_POST['inputpass'];

    $quary="SELECT * FROM adminlog WHERE ausername='$username' && apassword='$password'";
    $data= mysqli_query($connt,$quary);
    $total= mysqli_num_rows($data);
    
    if($total==1){
        echo 'Successfully Login'.$total;
        
        header("location:studentbutton.php");
    }
    else{
        echo 'Wrong username or password'.$total;
    }



}

?>








</div>
    
</body>
</html>