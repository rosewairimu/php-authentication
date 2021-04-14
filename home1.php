<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
  if(isset($_POST['register'])){
    $firtname = $_POST['firstname'];
    $lastname = $_POST['last_name'];
    $password = $_POST['password'];
    $password =$_POST['pass2'];
    $password =md5($password);
    $text = $firtname .";" .$lastname .";"  .$password . "\n";
    $fp = fopen('acc.txt', 'a+');

    if(fwrite($fp, $text)){
      echo "registration successfully";
    }
    fclose($fp);

    

  }
  ?>
   <form action="" method="POST" enctype="multipart/form-data" role="form" class="contactForm lead">
                        
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" name="firstname" class="form-control input-md" data-rule="minlen:3" required="">
                            </div>
                          
                         
                            <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" name="last_name" class="form-control input-md" data-rule="minlen:3" required="">
                   
                            </div>
                            
                       
                        <p style="font-size: 15px;text-align: left;"><u>Create password and confirm.</u></p>
                       
                            <div class="form-group">
                              <label>password</label>
                              <input type="password" name="password" class="form-control input-md" required="">
                              
                            </div>
                        
                            <div class="form-group">
                              <label>Confirm password</label>
                              <input type="password" name="pass2" class="form-control input-md" required="">
                              
                            </div>
                         
                   
                        <p class="lead-footer" style="color: red;font-size: 12px"></p>

                        <input type="submit" value="Register" name="register" class="btn btn-skin ">

                        <p class="lead-footer">* Already have an account?<a href="login.php"><b><u> Login</u></b></a></p>

                      </form>
                    


                    
                      </body>
</html>
                      
                      