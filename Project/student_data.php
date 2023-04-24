<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All The Best</title>
    <link rel="stylesheet" href="./css/final.css">
     <!--Text change Section -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <form action="./sucess.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="studentid" value="<?php echo $_POST['studentid'] ?>" >
        <div id="maindiv" class="content">
            <div>
                <p>Recent Passport Size Photo(Image less than 4MB)<span>*</span></p>
                <input type="file" id="photo" name="photo" accept="image/*" />
            </div>
            <div>
                <p>HSC Mark sheet(image,PDFor docs size less than 4MB)<span>*</span></p>
                <input type="file" id="hscm" name="hscm" />
            </div>
            <div>
                <p>SSC Mark sheet(image,PDFor docs size less than 4MB)<span>*</span></p>
                <input type="file" id="sscm" name="sscm" required />
            </div>
            <div>
                <p>All semesters mark sheet in a single PDF or docs(file size less than 10MB)<span>*</span></p>
                <input type="file" id="allsem" name="allsem" required />
            </div><br>
            <div>
                <center>
                  <button type="submit" class="btn" onclick="return finalSubmit()">Final Submit</button>
                  <button type="reset" class="btn">Reset</button>
                </center>
            </div>
        </div>
        <script src="./js/final.js"></script>
    </form>
</body>
</html>
<?php
  $dbname = "student";
  $dbuser = "root";
  $dbpass = "";
  $dbhost = "localhost";

  $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

  if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST) {
    $studentid = $_POST['studentid'];
    $hscname=$_POST['hscname'];
    $hscboard=$_POST['hscboard'];
    $hscpercentage=$_POST['hscperc'];
    $sscname=$_POST['sscname'];
    $sscboard=$_POST['sscboard'];
    $sscpercentage=$_POST['sscperc'];
    $cname=$_POST['cname'];
    $cename=$_POST['cename'];
    $cperc=$_POST['cperc'];
    $backlog=$_POST['backlog'];

    $sql="INSERT INTO `student_details`(
        `sid`,
    `hsc_institution`,
    `hsc_board`,
    `hsc_score`,
    `ssc_institution`,
    `ssc_board`,
    `ssc_score`,
    `current_course`,
    `current_institution`,
    `overall_score`,
    `backlog`
    )
    VALUES(
        '$studentid',
        '$hscname',
        '$hscboard',
        '$hscpercentage',
        '$sscname',
        '$sscboard',
        '$sscpercentage',
        '$cname',
        '$cename',
        '$cperc',
        '$backlog'
    )";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);                   
  }  
?>