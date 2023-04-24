<?php
  $dbname = "student";
  $dbuser = "root";
  $dbpass = "";
  $dbhost = "localhost";

  $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $studentid = $_POST['studentid'];
if(isset($_FILES['photo'])){
    $photoname=$_FILES['photo']['name'];
    $phototempname = $_FILES["photo"]["tmp_name"];
    $photofolder = "uploadfile1/" . $photoname;
    move_uploaded_file($phototempname, $photofolder);
}
if(isset($_FILES['hscm'])){

    $hscmname=$_FILES['hscm']['name'];
    $hscmtempname=$_FILES["hscm"]["tmp_name"];
    $hscmfolder="uploadfile1/" . $hscmname;
    move_uploaded_file($hscmname, $hscmfolder);
}
if(isset($_FILES['sscm'])){

    $sscmname=$_FILES['sscm']['name'];
    $sscmtempname=$_FILES["sscm"]["tmp_name"];
    $sscmfolder="uploadfile1/" . $sscmname;
    move_uploaded_file($sscmname, $sscmfolder);
}
if(isset($_FILES['allsem'])){

    $allsemname=$_FILES['allsem']['name'];
    $allsemtempname=$_FILES["allsem"]["tmp_name"];
    $allsemfolder="uploadfile1/" . $allsemname;
    move_uploaded_file($allsemname, $allsemfolder);
}
    #sql query to insert into database
    $sql = "INSERT INTO `student_file`(
    `sid`,
    `passport_photo`,
    `hsc_marksheet`,
    `ssc_marksheet`,
    `allsem_marksheet`
)
VALUES(
    '$studentid',
    '$photoname',
    '$hscmname',
    '$sscmname',
    '$allsemname'
)";
 
    if(mysqli_query($conn,$sql)){
 
    // echo "File Sucessfully uploaded";
    }
    else{
        // echo "Error";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfully Registreted</title>
    <style>
        h1{
            color:green;
        }
    </style>
</head>
<body>
    <center>
        <h1>Registed Sucsessfully</h1><br>
        <h1>Best of Luck👍</h1>
    </center>
</body>
</html>