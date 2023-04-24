<?php

  $dbname = "student";
  $dbuser = "root";
  $dbpass = "";
  $dbhost = "localhost";

  $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name=$_POST['fname'];
      $mname=$_POST['mname'];
      $lname=$_POST['lname'];
      $dob=$_POST['dob'];
      $email=$_POST['email'];
      $fathername=$_POST['fathername'];
      $fatherlastname=$_POST['fatherlastname'];
      $mothername=$_POST['mothername'];
      $motherlastname=$_POST['motherlastname'];
      $gender=$_POST['gender'];
      $nationality=$_POST['nationality'];
      $street=$_POST['street'];
      $city=$_POST['city'];
      $country=$_POST['country'];
      $telephone=$_POST['telephone'];
      $mobile=$_POST['mobile'];

      $sql="INSERT INTO `student`(
            `student_firstname`,
            `student_middlename`,
            `student_lastname`,
            `dob`,
            `email`,
            `father_firstname`,
            `father_lastname`,
            `mother_firstname`,
            `mother_lastname`,
            `gender`,
            `nationality`,
            `street`,
            `cityaddress`,
            `country`,
            `telephone`,
            `phonenumber`
      )
      VALUES(
            '$name',
            '$mname',
            '$lname',
            '$dob',
            '$email',
            '$fathername',
            '$fatherlastname',
            '$mothername',
            '$motherlastname',
            '$gender',
            '$nationality',
            '$street',
            '$city',
            '$country',
            '$telephone',
            '$mobile'
      )";

   $result = mysqli_query($conn, $sql);
   if ($result) {
       $last_id = $conn->insert_id;
      echo '<script language="javascript">';
      echo 'alert("Student details saved Successfully.")';
      echo '</script>';
      }
      mysqli_close($conn);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Second Page</title>
    <link rel="stylesheet" href="./css/index.css">
    <!--Text change Section -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <div class="content" id="indexpage">
        <form name="student-details" action="./student_data.php" method="post">
         <input type="hidden" name="studentid" value="<?php echo $last_id ?>">
         <div>
            <center>
            <b><i><u> Student Registration form</u></i></b>
            </center>
          </div>
         <!-- HSC Section -->
         <div>
           <p>HSC Institution Name <span>*</span></p>
           <input type="text" placeholder="Enter Institution Name" class="textbox" name="hscname" id="hscname" required>
           <p>HSC Board <span>*</span></p>
            <select id="hscboard" name="hscboard" class="textbox" >
               <option value="">Select</option>
               <option value="CBSC">CBSE</option>
               <option value="ICSC">ICSE</option>
               <option value="State Board">State Board</option>
            </select>
           <P>Score in HSC in Percentage <span>*</span></P>
           <input type="text" class="textbox" onkeypress="return validateperc(event)" maxlength="2" id="hscperc" name="hscperc">
         </div> 
         <!-- SSC Section -->
         <div>
            <p>SSC Institution Name <span>*</span></p>
            <input type="text" class="textbox" placeholder="Enter Institution Name" name="sscname" id="sscname" required>
            <p>SSC Board <span>*</span></p>
             <select id="sscboard" name="sscboard" data-name="sscboard" class="textbox">
                <option value="">Select</option>
                <option value="CBSE">CBSE</option>
                <option value="ICSE">ICSE</option>
                <option value="State Board">State Board</option>
             </select>
            <P>Score in SSC in Percentage <span>*</span></P>
            <input type="text" class="textbox" onkeypress="return validateperc(event)" maxlength="2" id="sscperc" name="sscperc">
          </div> 
         <!--  Current College Section-->
         <div>
            <p>Currently Pursuing<span>*</span></p>
            <input type="text" class="textbox" placeholder="Enter Institution Name" id="cname" name="cname">
            <p>Current Educational Institution Name<span>*</span></p>
            <input type="text" class="textbox" id="cename" name="cename">
            <P>Overall Percentage <span>*</span></P>
            <input type="text" class="textbox" onkeypress="return validateperc(event)" maxlength="2" id="cperc" name="cperc">
            <p>Current Backlogs(if any)<span>*</span></p>
            <input type="text" class="textbox" onkeypress="return validateperc(event)" maxlength="2" id="backlog" name="backlog">
          </div> 
          <!-- submit section -->
          <div ><br>
           <center>
              <button type="submit"  id="submit" onclick="return validateform2()">Submit</button>
           </center>
          </div>
           
        </form>
     </div> 
     <script src="./js/index.js"></script>
</body>
</html>
