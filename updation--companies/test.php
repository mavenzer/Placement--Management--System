<?php
include('connect.php');

?>

<?php
    
    $fn=strip_tags(@$_POST['cname']);//first name
	$ln=strip_tags(@$_POST['package']);//last name
    if(isset($_POST['add']))
    {
        if(isset($fn) && isset($ln))
        {
        //POST se fetch kar lena hoga
        //check fullsuccess.php
        $query = mysql_query("INSERT INTO company VALUES ('6',$fn','$ln')",$conn);
        echo '<br />Data inserted Successfully';
            echo'fn :'.$fn.' ln : '.$ln;
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>
<form method="post" action="test.php">
    name: <input type="text" name="cname" size="10">
    package: <input type="text" name="package" size="10">
<input name="add" type="submit" value="Add">
</form>


</body>
</html>