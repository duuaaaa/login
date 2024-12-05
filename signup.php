<?php
include("dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SignUp</h1>
    <form action="" method="post" name="f">
        <table border="1" cellspacing="0">
            <tr>
                <td><label>First name</label></td>
                <td><input type="text" name="fname" require></td>
            </tr>
            <tr>
                <td><label>Last name</label></td>
                <td><input type="text" name="lname" require></td>
            </tr>
            <tr>
                <td><label>Gender</label></td>
                <td><select name="gender" require style="width:165px>
                <option value="">select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select></td>
</tr>
<tr>
<td><label>Age</label></td>
<td><input type="number" name="age" min="10" max="50" require style="width:165px";></td>
</tr>
<tr>
    <td><label>Email</label></td>
    <td><input type="text" pattern="^[A-Za-z/d]+(?:[_%+][A-Za-z/d]+)*@[a-z]+/.[a-z]{2,4}$" title="invalid email" name="email" require></td>
</tr>

<tr>
    <td><label>Username</label></td>
    <td><input type="text" name="uname" require></td>
</tr>
<tr>
    <td><label>Password</label></td>
    <td><input type="text" pattern="^[/dA-Za-z/W_]+$"  name="password" title="uppercase lowercase number symbol" require></td>
</tr>
<tr>
    <td><label>Confirm Password</label></td>
    <td><input type="password" name="confirmpassword" require></td>
</tr>
<tr>
    <td colspan="2" align="center"><input type="submit" value="SignUp" onclick="return check()" name="submit"></td>
</tr>
</table>
</form>

<script>
    function check(){
        let pass = f.password.value;
        let cpass=f.confirmpassword.value;
        if(pass!=cpass){
            alert("password is not identical");
            return false;
        }else{
            return true;
        }
        }
        </script>

        <?php
        if(isset($_POST['signupbtn'])){
            $firstname=$_POST['fname'];
            $lastname=$_POST['lname'];
            $gender=$_POST['gender'];
            $gender=$_POST['age'];
            $email=$_POST['email'];
            $username=$_POST['fname'];
            $password=$_POST['password'];
            $q="INSERT INTO `signup`(`firstname`, `lastname`, `gender`, `age`, `username`, `password`) VALUES ('$firstname','$lastname',' $gender',' $gender','$email','$username','$password')";
            $run= mysqli_querry($sonn,$q);
            if($run){
                echo"<script>alert('Regestration successfully')</script>";
                echo"<script>alert('username is : .$username. and password is : . $password.)</script>";
                echo "<script>
                window.location.href='mylogin.php';
                </script>";
            }
        }
        
        ?>
    


</body>
</html>