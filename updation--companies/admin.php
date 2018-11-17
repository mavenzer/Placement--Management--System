<?php 
// include_once("connect.php");
include_once("session.php");
?>

<?php
    $conn =mysqli_connect("localhost", "root","","tandp");
    // if(isset($_POST['submit1']))
    // {
    //     $branch = $_POST['batch']; 
    //     $tenth = $_POST['tenth'];
    //     $twelfth = $_POST['twelfth'];
    //     $cgpa = $_POST['cgpa'];
    //     $back = $_POST['back'];
    //     $agap = $_POST['agap'];
    //     $sql = "SELECT * FROM student_profile WHERE cgpa = '$cgpa' 
    //     AND branch = '$branch' 
    //     AND twelfth = $twelfth 
    //     AND backlogs = $back 
    //     AND gap = $agap";
    //     //$sql = "SELECT * FROM student_profile WHERE 1";
    //     $sql = "SELECT * FROM student_profile WHERE cgpa =9 AND branch =  'CS' AND gap = 0";
    //     $res = $conn->query($sql);
    //     echo    "<div class='row'";
    //         while($row = $res->fetch_assoc())
    //         {                   
                       
    //                     echo "First Name : ".$row{'f_name'};
    //                     echo "Last Name : ".$row{'l_name'};
    //                     echo "Reg.No : ".$row{'reg_num'};
    //                     echo "Branch : ".$row{'branch'};
    //                     echo "Gaps : ".$row{'gap'};
    //                     echo "Backlogs : ".$row{'backlogs'};
    //                     echo " </span>
    //                     </div>
    //                     </div>";                    
    //         }
    //     echo "</div>";
    

    // }

    if(isset($_POST['submit2']))
    {
        $cname = $_POST['cname'];
        $package = $_POST['package'];
        $job_des = $_POST['job_des'];
        $min_cgpa = $_POST['min_cgpa'];
        echo $cname;
        echo $package;
        //$sql = "INSERT INTO company VALUES ('','".$cname."','".$package."')";
        $sql = "INSERT INTO company(name, package,job_des,min_cgpa) VALUES ('".$cname."','".$package."','".$job_des."', '".$min_cgpa."')";
        $res = $conn->query($sql);
    }

    if(isset($_POST['submit3']))
    {
        $id = $_POST['cid'];
        $sql = "DELETE from company WHERE cid = '$id'";
        $res = $conn->query($sql);
        echo "Removed Successfully";
    }

    if(isset($_POST['submit4']))
    {
        $branch = $_POST['branch'];
        $cid = $_POST['cid'];
        echo $branch.$cid;
        $sql = "SELECT * FROM student_profile WHERE branch = '$branch' AND cid = $cid";
        //$sql = "SELECT * FROM student_profile WHERE branch = 'CS' AND cid = 1";
        $res = $conn->query($sql);
        echo    "<div class='row'>";
            while($row = $res->fetch_array())
            {                   
                       
                        echo "First Name : ".$row{'f_name'};
                        echo "Last Name : ".$row{'l_name'};
                        echo "Reg.No : ".$row{'reg_num'};
                        echo "Branch : ".$row{'branch'};
                        echo " </span>
                        </div>
                        </div>";                    
            }
        echo "</div>";
    }

    // if(isset($_POST['submit5']))
    // {
    //     $package = $_POST['package'];
    //     $branch = $_POST['batch'];
    //     $cid = $_POST['cid'];
    //     $sql = "SELECT * FROM tandp.student_profile WHERE branch = '$branch' AND cid = (SELECT cid FROM tandp.company WHERE cid = $cid AND package = '$package')";
    //     //$sql = "SELECT * FROM tandp.student_profile WHERE cid = (SELECT cid FROM tandp.company WHERE cid = 1)";
    //     $res = $conn->query($sql);
    //      echo    "<div class='row'>";
    //         while($row = $res->fetch_array())
    //         {                   
                       
    //                     echo "First Name : ".$row{'f_name'};
    //                     echo "Last Name : ".$row{'l_name'};
    //                     echo "Reg.No : ".$row{'reg_num'};
    //                     echo "Branch : ".$row{'branch'};
    //                     echo " </span>
    //                     </div>
    //                     </div>";                    
    //         }
    //     echo "</div>";
        
    // }
   
?>



<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Administrator Area</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Optional theme
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-     aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous"> -->
    
    <script src="js/jquery.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.js"></script>
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Welcome Administrator</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </div>    
        </div>
    </nav>

    
    <div class="container">
        <h1>Admin.,
            <small>you can begin with your operations below.</small>
        </h1>
        <br>
        <br>
        <!-- <div class="panel panel-default">
        <blockquote><mark>Get Students List:</mark></blockquote>
        <p><h4>Enter the following details:</h4></p>
        <form method="post" action="#" name="student">
         <table class="table table-bordered">
            <thead>
                 <tr class="danger">
                    <th>
                    Branch: <input type="text" name="batch" size="10">
                    </th>
                    <th>
                    10th Percentage: <input type="text" name="tenth" size="10">
                    </th>
                    <th>
                    12th Percentage: <input type="text" name="twelfth" size="10">
                    </th>
                </tr> 
                <tr class="danger">
                    <th>
                    Current CGPA: <input type="text" name="cgpa" size="10">
                    </th>
                    <th>
                    Backlogs allowed: <input type="text" name="back" size="10">
                    </th>
                    <th>
                    Academic Gap allowed: <input type="text" name="agap" size="10">
                    </th>
                </tr>
            </thead>
        </form>    
        </table>
        <input type="submit" value="Submit" name="submit1">
        </div>  -->
        
        <div class="panel panel-default">
        <blockquote><mark>Add or Remove Companies:</mark></blockquote>
        <p><h4>Enter the following details:</h4></p>
        <form method="post" action="admin.php">
            <h4>
                Add company:
            </h4>
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                    <th>
                    Enter Company Name: <input type="text" name="cname" size="20">
                    </th>
                    <th>
                    Package Offered: <input type="text" name="package" size="10">
                    </th>
                    <th>
                    	Enter the Job Description : <input type="text" name="job_des" size ="20">
                    </th>
                    <th>
                    	Minimum CGPA Required :  <input type="text" name="min_cgpa" size ="20">
                    </th>
            </thead>
        <input type="submit" name="submit2" value="Add Company">
            </form> 
 
        </table>
            
        
            <br>
            <br>
            <h4>
                Remove company:
            </h4>
        <form method="post" action="admin.php">  
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                    <th>
                    Enter Company ID: <input type="text" name="cid" size="10">
                    </th>
            </thead>        
           
        </table>
        <input type="submit" value="Submit" name="submit3">
         </form>
        </div>
    <!-- 
        <div class="panel panel-default">
        <blockquote><mark>Get Company related Details:</mark></blockquote>
        <p><h4>Enter the following details:</h4></p>
        <form method="post" action="#">
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                    <th>
                    Branch: <input type="text" name="branch" size="10">
                    </th>
                    <th>
                    Placed in Company ID: <input type="text" name="cid" size="10">
                    </th>
            </thead>
           
        </table>
        <input type="submit" name="submit4" value="Submit">
        </form>  -->
        <!-- </div> -->

       <!--  <div class="panel panel-default">
        <blockquote><mark>Get Package-wise Details:</mark></blockquote>
        <p><h4>Enter the following details:</h4></p>
        <form method="post" action="#">
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                    <th>
                    Package: <input type="text" name="package" size="10">
                    </th>
                    <th>
                    Company ID: <input type="text" name="cid" size="10">
                    </th>
                    <th>
                    Branch: <input type="text" name="batch" size="10">
                    </th>
            </thead>
        </form>    
        </table>
        <input type="submit" value="Submit" name="submit5">
        </div>
    </div> -->
    
    
</body>
</html>