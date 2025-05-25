<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/signup.css">
        
    <title>Create Account</title>
    <style>
        .container{
            animation: transitionIn-X 0.5s;
        }
    </style>
</head>
<body>
<style>
        span {
            color: red;
           
        }
    </style>
<?php

session_start();
 $x= (" required");
$_SESSION["user"]="";
$_SESSION["usertype"]="";

// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

$_SESSION["date"]=$date;


//import database
include("connection.php");
$error='';
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 

// define variables and set to empty values
$nameErr = $emailErr = $teleErr = $newpasswordErr = $cpasswordErr ="";
$name= $email= $tele= $newpassword = $cpassword= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
              $nameErr = '<span class="form-label" style="color:rgb(255, 62, 62);text-align:center;">ادخل اسم </span>';
                } else {
                  $name = test_input($_POST["name"]);
                  // check if name only contains letters and whitespace
                  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "فقط احرف ";
                  }
                }
                
                if (empty($_POST["email"])) {
                  $emailErr = "ادخل الايميل ";
                } else {
                  $email = test_input($_POST["email"]);
                  // check if e-mail address is well-formed
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "الايميل خطاء ";
                  }
                }
                  
                if (empty($_POST["tele"])) {
                  $teleErr = "ادخل رقم الهاتف   ";
                 } else { 
                    $tele = $_POST["tele"];   
                   
                //     if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}]$/",$tele)) {
                //       $teleErr = "يجب ادخال رقم يمني  ";
                //     }
                }
               
              
              
                if (empty($_POST["newpassword"])) {
                  $newpasswordErr = "ادخل كلمة السر ";
                }
                 else{
                    $newpassword = $_POST["newpassword"];
            //     if(strlen($newpassword)<8){
            //         $newpasswordErr = "يجب ادخل اكثر من  8 احرف";
            //     }elseif(!preg_match("/[A-Z]/",$newpassword)){
            //         $newpasswordErr = "يجب ادخل حروف وارقام ";
            //     } 
             }
            
                
            
              if (empty($_POST["cpassword"])) {
                $cpasswordErr = "اكد كلمة السر ";
              }else{
               $cpassword=$_POST['cpassword'];
                if ($newpassword==$cpassword){
                    $sqlmain= "select * from webuser where email=?;";
                    $stmt = $database->prepare($sqlmain);
                    $stmt->bind_param("s",$email);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if($result->num_rows==1){
                    $error='<span  style="color:rgb(255, 62, 62);text-align:center;">هذا الحساب موجود مسبقاً </span>';
                    }else{
                  //TODO
                        $database->query("insert into patient(pemail,pname,ppassword,ptel) values('$email','$name',' $newpassword ','$tele');");
                        $database->query("insert into webuser(email,usertype) values('$email','p')");
            
                        //print_r("insert into patient values($pid,'$email','$fname','$lname','$newpassword','$address','$nic','$dob','$tele');");
                        $_SESSION["user"]=$email;
                        $_SESSION["usertype"]="p";
                        $_SESSION["username"]=$fname;
            
                        header('Location: patient/index.php');
                    }
            }

              
        }
}
//}
?>


    <center>
    <div class="container">
    
        <table border="0" style="width: 69%;">
            <tr>
                <td colspan="2">
                    <p class="header-text">انشاء حسابك الخاص</p>
                    <p class="sub-text">سجل بياناتك للمتابعة معنا</p>
                </td>
            </tr>
            <tr>
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
                
        
           
                
            <tr>
            <td class="label-td" colspan="2">
                     <label for="name" class="form-label">الاسم <span class="label-td"> <?php echo $nameErr;?></span> </label>
                </td>
                <tr>
                <td class="label-td" colspan="2">
                    <input type="text" name="name" class="input-text"  value="<?php echo $name;?>">
                    
                </td>
            </tr>
            <tr>
            <td class="label-td" colspan="2">
                     <label for="newemail" class="form-label">البريد الالكتروني<span class="label-td"> <?php echo $emailErr;?></span> </label>
                </td>
                <tr>
                <td class="label-td" colspan="2">
                    <input type="email" name="email" class="input-text"  value="<?php echo $email;?>">
                    
                </td>
            </tr>
            <tr>
            <td class="label-td" colspan="2">
                     <label for="tele" class="form-label">رقم الجوال <span class="label-td"> <?php echo $teleErr;?></span> </label>
                </td>
                <tr>
                <td class="label-td" colspan="2">
                    <input type="tele" name="tele" class="input-text"  value="<?php echo $tele;?>">
                    
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="newpassword" class="form-label">انشاء كلمة مرور  <span class="label-td"> <?php echo $newpasswordErr;?></span> </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="password" name="newpassword" class="input-text" placeholder="New Password" >
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="cpassword" class="form-label">تاكيد كلمة المرور   <span class="label-td"> <?php echo $cpasswordErr;?></span> </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="password" name="cpassword" class="input-text" placeholder="Conform Password" >
                </td>
            </tr>
     
             <tr>
                
                <td colspan="2">
                <?php echo $error ?>


                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >
                </td>
                <td>
                    <input type="submit" name="send" value="Sign Up" class="login-btn btn-primary btn">
                </td>

            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Already have an account&#63; </label>
                    <a href="login.php" class="hover-link1 non-style-link">Login</a>
                    <br><br><br>
                </td>
            </tr>
            
                    </form>
            </tr>
        </table>

    </div>
</center>
</body>
</html>