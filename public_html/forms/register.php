<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $name =$_REQUEST['name'];
    $age = $_REQUEST['age'];
    $ins_query="insert into new_record
    (`trn_date`,`name`,`age`)values
    ('$trn_date','$name','$age','$submittedby')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "Registro exitoso!";
}
?>


<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Insert New Record</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="form">
        <div>
            <h1>Insert New Registration</h1>
            <form name="form" method="post" action="">
                <input type="hidden" name="new" value="1" />
                <p>
                    <input type="text" name="name" placeholder="Enter Name" required />
                </p>
                <p>
                    <input type="text" name="age" placeholder="Enter Age" required />
                </p>
                <p>
                    <input name="submit" type="submit" value="Submit" />
                </p>
            </form>
            <p style="color:#FF0000;">
                <?php echo $status; ?>
            </p>
        </div>
    </div>
</body>
</html> -->