<?php
 
 include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="st.css">
    <title>Document</title>
</head>
<body>
 
    <th>
               <a href="doctors.php" ><button  class="login-btn btn-primary-soft btn btn-icon-back"  style="padding-top:11px;padding-bottom:11px;margin-left:20px;width:125px"><font class="tn-in-text">Back</font></button></a>
               
           </th>
    
              
        <tr>
                   <td colspan="4">
                       <center>
                        <h1>التعليقات</h1>
                        <div class="abc scroll">
                        <table width="93%" class="sub-table scrolldown" border="0">
                        <thead>
                        <tr>
                        <th class="table-headin">
                                    
    
                                   ID
                                   
                                   </th>
                                <th class="table-headin">
                                    
    
                                 Name
                                
                                </th>
                                <th class="table-headin">
                                    Email
                                </th>
                                <th class="table-headin">
                                    
                                   Message
                                    
                                </th>
                                <th class="table-headin">
                                    
                                    Events
                                    
                                </tr>
                        </thead>
         <tbody>
    
           <?php
        
           $sql="SELECT * FROM comment";
           $result= $database->query($sql);
          
           if( $result){
               while( $row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
               $name=$row['name'];
               $email=$row['email'];
               $message=$row['message'];
               echo '<tr>
               <td>'.$id.'</td>
               <td>'.$name.'</td>
               <td>'.$email.'</td>
               <td>'.$message.'</td>
               <td>
               <div style="display:flex;justify-content: center;">
             
              <a href="delete_comment.php?deleteid='.$id.'" class="non-style-link"><button  class="btn-primary-soft btn button-icon btn-delete"  style="padding-left: 40px;padding-top: 12px;padding-bottom: 12px;margin-top: 10px;"><font class="tn-in-text">حذف</font></button></a>
               </div>
               </td>
               ' ;
             
               }

           }
            
           ?>
       
        </tbody>
    </table>
    
    </center>
</body>
</html>