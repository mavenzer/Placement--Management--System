<?php 
// include_once("connect.php");
include_once("session.php");
?>
<!-- $conn=mysqli_connect("localhost","root","null","tandp"); -->
<?php
$conn=mysqli_connect("localhost","root","","tandp");
$commit=@$_POST['submit'];

if(isset($commit))
    {
    $sql=$conn->query("select username from login_det where username='".$_POST['username']."' AND password='".$_POST['password']."'");
    $usercount=$sql->num_rows;
    if($usercount==1)
        {
        //echo "hello";
        if($row=$sql->fetch_array())
            {
            $id=$row["id"];
            }
        $_SESSION["username"]=$_POST['login'];
        header("location:admin.php");
        exit();
        }
    else
        {
        echo "Incorrect";
        //header("location:form.php");
        exit();
        }
    }

?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin. Login</title>
</head>
<body>

<h3>Login here</h3>
                
        <form action="index.php" method="post" >
            <table>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input type="text" name="username" maxlength="10" /></td>
                </tr>
                <p></p>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" maxlength="50" /></td>
                </tr>
            </table>
                <p></p>  
            <input type="submit" name="submit" value="Submit" />
        </form>

</body>
</html>