<?php
    session_start();
     if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:owner_login.php");  
       }

       
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="print.css" media="print">
<style>
  *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
  }
  body
  {
    scroll-behavior: smooth;
  }
select
{
  width: 65%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;

}
input[type=text], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 20px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 170px;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

}

.col-25 {
  float: left;
  width: 25%;
  left: 20px;
  margin-top: 6px;

}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
 .reset
 {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 170px;
 }

/*start media 600px*/
@media screen and (max-width: 600px) 
{

  #back::after{
    content: "\a";
    white-space: pre;
  }
  .reset 
  {
     background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100px;


  }
  .reset::before
  {
    content: "\a";
    white-space: pre;
  }
  #sub::before{
    content: "\a";
    white-space: pre;
  }
  .col-25, .col-75, input[type=submit] 
  {
    width: 100%;
    margin-top: 0;

  }
  input[type=submit] 
  {
    float: right;
    width: 150px;
    margin-top: 0;

  }
  .back
  {
     background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width:100%;
    padding: 5px;

  }
  input[type=text], select, textarea
  {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  nav.main-nav.nav-icon
  {
    width: 40px;
    display: block;
  }
  nav ul li 
  {
    margin: 0 0 0 15px;
    font-size: 16px;
  }
  nav ul li a.active
  {
    display: none;
  }

  nav
  {
     background-color: #63a3ad;
   
    height: 70px;
    width: 100%;
    position: fixed;
    top: 0px;
  }
}/* end media 600px*/

nav
{
  background-color: #63a3ad;

  height: 70px;
  width: 100%;
  position: fixed;
  top: 0px;
}

label.logo
{
  color: white;
  font-size: 30px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}

nav ul
{
  float: right;
  margin-right: 20px;
}

nav ul li
{
  display: inline-block;
  line-height: 70px;
  margin: 0 5px;
}
nav ul li a
{
  color: white;
  font-size: 20px;
  text-decoration: none;
  background-color: transparent;
  border-radius: 3px;
  padding: 7px 13px;
}

  a.active, a:hover
  {
    background: #1b9bff;
    transition: .5s;
  }
  .checkbtn
  {
    font-size: 30px;
    color: white;
    float: right;
    line-height: 80px;
    margin-right:40px ;
    cursor: pointer;
    display: none;
    padding-right: 0px;
  }
  #check
  {
    display: none;
  }

@media (max-width: 952px)
  {
    label.logo
    {
      font-size: 30px;
      padding-left: 50px;
    }
    nav ul li a
    {
      font-size: 16px;
    }
  }

/*start mdedia 680px*/
 @media (max-width: 680px)
  {
    .checkbtn{
      display: block;
    }
    ul
    {
      position: fixed;
      width: 50%;
      height: 100vh;
      background-color: #2c3e50;
      top: 70px;
      left: -100%;
      transition: all .5s ease;
      top: 0 px;
    }
    nav ul li {
      display: block;
      margin: 50px 0;
      line-height: 10px;
      
    }
    nav ul li a {
      font-size: 20px;
      font-weight: 50px;
      line-height: 60px;
    }
    a:hover,a.active
    {
      background: none;
      color: #0082e6;

    }
    #check:checked ~ ul
    {
      left: 0;
    }
  }/*end media 680px*/

/*start  media 650 px*/
@media screen and (max-width: 650px)
{

  a.back
  {
     background-color:transparent;
    color: #04AA6D;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width:100%;

  }
  #sub::before{
    content: "\a";
    white-space: pre;
  }
  #back::after{
    content: "\a";
    white-space: pre;
  }

}/* end media 650px*/

div.wrapper
{
  padding-top: 10%;
}

.back
{
   background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 170px;

}

</style>
<meta charset="utf-8">

    <!--Jquery CDN link -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <!--Jquery CDN link -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
       <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
   <nav class="main-nav">
    <input type="checkbox" id="check" name="">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">MegHostel</label>
    
    <ul>
      <li style="font-size: 25px;"><a href="tes.php">Home</a></li>
      <li style="font-size: 25px;">
        <a  href="">About Us </a>
      </li>
      <li>
        <a  href="">Our Service</a>
      </li>
       <li style="font-size: 25px;">
        <a href="owner_logout.php">Log Out </a>
      </li>
    </ul>
  </nav>
<div class="wrapper">
  <br>
     <h1 style="text-align:center">Registration Form </h1><br>
            <h3 style="text-align:center">This form is for the information of your Hostel<br>Fill it with the Corret Details..</h3>
    <div class="container">
         <!-- query to retrieve the hostel details from hostel_info and hostel_owner tables-->               
      
       <form id="contact" action="" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-25">
            <label>City</label>
          </div>
          <div class="col-75">
            <input type="text" name="hostel_city" placeholder="Enter Hostel City... Shillong/ Tura/ Jowai" onchange="uppercase()">
         
          </div>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-25">
            <label>Hostel Name</label>
          </div>
          <div class="col-75">
            <input  type="text" placeholder="hostel name" required autofocus="" name="hostel_name" onchange="uppercase()">
            
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-25">
            <label>Hostel Address</label>
          </div>
          <div class="col-75">
            <input   type="text" placeholder="hostel address" name="hostel_address" required autofocus="" onchange="uppercase()">
          </div>
        </div>
        <br>
         <div class="row">
          <div class="col-25">
            <label>Pincode</label>
          </div>
          <div class="col-75">
            <input    type="text" required autofocus=""  name="hostel_pincode" placeholder="hostel pincode">
          </div>
        </div>
        <br>
         <div class="row">
          <div class="col-25">
            <label>Hostel Description</label>
          </div>
          <div class="col-75">
            <textarea name="hostel_description" placeholder="write some details about your hostel" style="height: 140px;"  required ></textarea>
            
          </div>
        </div>
        <br>
         <div class="row">
          <div class="col-25">
            <label>Hostel Type</label>
          </div>
          <div class="col-75">
            <input type="text" name="hostel_type" placeholder="Enter Hostel type.. Boys hostel or Girls Hostel" onchange="uppercase()" >
            
          </div>
        </div>
        <br>
         <div class="row">
          <div class="col-25">
            <label>Total Room</label>
          </div>
          <div class="col-75">
            <input  type="text" placeholder="hostel total  room" name="hostel_room" required autofocus="" >
            
          </div>
        </div>
          <div class="row">
          <div class="col-25">
            <label> Select the Hostel Profile image:<span style="color:red;">*</span></label>
          </div>
          <div class="col-75">
           
              <input type="file"  name="uploadfile" >
            
          </div>
        </div>
        <br>



        <hr>
        <div class="row">
          <div class="col-75">
               <h2 style="text-align:center;">Hostel Fees  </h1>
            
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label>Hostel Addmission Fees</label>
          </div>
          <div class="col-75">
             <input  type="text" placeholder="Admission fees" required autofocus="" name="admission_fees">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-25">
            <label>Monthly Mess Fees</label>
          </div>
          <div class="col-75">
            <input   type="text" placeholder="Monthly Fees" name="monthly_fees" required autofocus="">
            
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-25">
            <label>Monthly Establishment Fees</label>
          </div>
          <div class="col-75">
            <input   type="text" placeholder="hostel monthly establishment fees" name="establishment" required autofocus="">
          </div>
        </div>
        
        <br>
         <div class="row">
          <div class="col-25">
            <label></label>
          </div>
          <div class="col-25">
            <input type="submit" name="up" value="Register">
          </div>
        </div>
        <br>
      </form>

         <?php
      include('connection.php');
      $owner_id=$_GET['owner_id'];
      if(isset($_POST['up']))
      {
        $hostelname=$_POST['hostel_name'];
        $hostel_type=$_POST['hostel_type'];
        $hosteladdress=$_POST['hostel_address'];
        $hostelpincode=$_POST['hostel_pincode'];
        $hostelroom=$_POST['hostel_room'];
        $hosteldecription=$_POST['hostel_description']; 
        $hosteladmission_fees=$_POST['admission_fees'];
        $hostelmonthly_fees=$_POST['monthly_fees'];
        $hostelestablishment=$_POST['establishment'];
        $hostelcity=$_POST['hostel_city'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          $targetDir = "owner_upload/";
          $fileName = $_FILES["uploadfile"]["name"];
          $targetFilePath = $targetDir . $fileName;
          $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
           $total_available=0;
          if(!empty($_FILES["uploadfile"]["name"]))
          {
              $allowTypes = array('jpg','png','jpeg','gif','pdf');
              if(in_array($fileType, $allowTypes))
              {
                if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $targetFilePath))
                {
                  $sq="INSERT into hostel_info
                  (
                    hostel_name,
                    hostel_type,
                    hostel_address,
                    pincode,
                    hostel_room,
                    more_details,  
                    owner_id,  
                    available_room,  
                    city,
                    hostel_addmission_fees,  
                    monthly_mess_fees,
                    monthly_establishment_fees,
                    date_info, 
                    hostel_profile  
                  ) 
                  values
                  (
                    '$hostelname',
                    '$hostel_type',
                    '$hosteladdress', 
                    $hostelpincode,
                    $hostelroom,
                    '$hosteldecription',
                    $owner_id,
                    $total_available,
                    '$hostelcity',
                    $hosteladmission_fees,
                    $hostelmonthly_fees, 
                    $hostelestablishment,
                    NOW(),
                    '$fileName'
                  );";
                  //$result=($con->query($s));
                  $res=($con->query($sq));
                  if($res)
                  { 
                    echo '<script>alert("Hostel Register Successfull");</script>';
                    $sql="SELECT * from hostel_info where owner_id=$owner_id;";
                    $re=($con->query($sql));
                    if($re)
                    {
                      while($r=mysqli_fetch_array($re))
                      {
                        $hostel_id=$r['hostel_id'];
                        $_SESSION['hostel_id']=$hostel_id;
                      }
                      echo '<script>window.location.href="add_gallery.php";</script>';
                    }
                  }
                  else
                  {
                       echo '<script>alert("Hostel Register failed");
                       window.location.href="tes.php";</script>';
                  }// end $result
                }//move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $targetFilePath)
                else
                {
                     echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
                   exit(1);
                }
              }//in_array($fileType, $allowTypes)
              else
              {
                  echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload..");</script>';
                     exit(1);
              }
              
          }//empty($_FILES["uploadfile"]["name"]
          else
          {
                echo '<script>alert("Please select a file to upload..");</script>';
                     exit(1);
         
          }
        }//end of request
          
        
    }//end of if isset
        
      ?>

      
    </div>
 
  </div>
  
  <footer style="background:white; text-align:center;padding: 50px;">
    <p></p>

        <h2>Follow us in social media</h2>
 
      <a href="https://www.facebook.com" style="text-decoration:none"><img src="facebook.png" style="height: 25px;width: 27px;"> </a>
  
       <a href="https://www.instagram.com"><img src="instagram.png" style="height:25px;width: 27px;"></a>
  
        <a href="https://www.youtube.com"><img src="youtube.png" style="height: 25px;width: 27px;"></a>
      
  </footer>
<script type="text/javascript">
function uppercase() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}
</script>

</body>
</html>


