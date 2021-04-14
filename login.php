
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
  
	if(isset($_POST['login'])){
    $firstname = $_POST['firstname'];
    $password = $_POST['password'];

    function authenticate($firstname,$password){
      $file = explode(PHP_EOL, file_get_contents("acc.txt"));
  foreach ($file as $line) {
    list($firstname,$password) = explode(",", $line);
    if ($_POST['firstname']==$firstname && $_POST['password']==$password) {
      return true;
      
    }
    return false;
  }
  if (authenticate($_POST['firstname'], $_POST['password'])) {
    echo "login successfully";

  }else{
    echo "invalid";
    
     
  }

   
}
}

if (isset($_POST['logout'])){
         session_destroy();
         header('location:empty.php');
         exit;
        }
	?>
  

<form action="" method="post" enctype="multipart/form-data" class="contactForm lead"style="width: 100%">
                        

                         <div class="form-group">
                              <label>First Name</label>
                              <input type="text" name="firstname" class="form-control input-md" data-rule="minlen:3" required="">
                            </div>
                              
                            </div>
                          </div>
                          <div class="row">
                          
                            <div class="form-group">
                              <label>Pasword</label>
                              <input type="password" name="password"  class="form-control input-md" data-rule="required" >
                              
                            </div>
                          </div>
                       <p class="lead-footer" style="color: red"></p>

                        <input type="submit" value="login" name="login" class="btn btn-skin">
                        <input type="reset" value="reset" name="reset" class="btn btn-skin">
                        <form method="POST">
                        <input type="submit"  name="logout" class="btn btn-skin"></form>
                        


                        <p class="lead-footer" > Not a member?<a href="home1.php"><b><u> REGISTER</u></b></a></p>



                      </form>	
	</body>
</html>
