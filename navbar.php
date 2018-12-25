<div id="navbar-id" class="pt-2 pb-2">
<nav class="navbar navbar-expand-md navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ADHub</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
		         	<span class="navbar-toggler-icon"><img id="logo" alt="Logo" src="img/navicon.svg" width="35" height="35"></span>
	</button>
    <div class="collapse navbar-collapse pull-md-right text-xs-center" id="navbarSupportedContent-4">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#loginform"><i class="fa fa-external-link-square"></i> Login</a></li>
        <li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#registerform"><i class="fa fa-user-plus"></i> Sign Up &nbsp;&nbsp;&nbsp; </a></li>
        <li class="nav-item"><a class="btn postAnAd" href="postAnAd.php"><i class="fa fa-plus-circle"></i> Post An AD</a></li>
        <li class="nav-item"><a class="nav-link" href="#"> &nbsp;&nbsp;&nbsp; <i class="fa fa-mobile" style="font-size: 19px;"></i> Conatct Us</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>

<!-------------------------Login Form----------------------------------->
<div class="modal fade" id="loginform">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">LOGIN</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body text-center">
        <div class="container">
          <form action="userLogReg.php" method="post">
          <div class="input-group mt-4">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-user fa-input"></i></div>  
            </div>
            <input type="text" name="username" placeholder="Enter Username" class="form-control">
          </div>

          <div class="input-group mt-4 mb-4">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-lock fa-input"></i></div>  
            </div>
            <input type="password" name="password" placeholder="Enter Password"  class="form-control"  class="form-control">
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <button class="logReg-button form-control mb-4" name="user-login-button"><i class="fa fa-external-link-square"></i>Login</button>
            </div>
          </div>
        </form>
          <hr>
          <a href="" class="float-left" data-toggle="modal" data-target="#registerform" data-dismiss="modal">New User?</a>
          <a href="" class="float-right" data-toggle="modal" data-target="#forgotPswdform" data-dismiss="modal">Forgot Password?</a>
        </div>
        
      </div>
    </div>
  </div>
</div>


<!-------------------------register Form----------------------------------->
<div class="modal fade" id="registerform">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">REGISTER</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body text-center">
        <div class="container">
          <form action="userLogReg.php" method="post">
          <div class="input-group mt-4">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-user-circle-o fa-input"></i></div>  
            </div>
            <input type="text" name="firstname" placeholder="Enter Firstname" pattern="[A-Za-z]{1,20}" title="Must contain only uppercase or lowercase letters" class="form-control" required>
          </div>

          <div class="input-group mt-4">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-user-circle-o fa-input"></i></div>  
            </div>
            <input type="text" name="lastname" placeholder="Enter Lastname" pattern="[A-Za-z]{1,20}" title="Must contain only uppercase or lowercase letters" class="form-control" required>
          </div>

          <div class="input-group mt-4">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-envelope fa-input"></i></div>  
            </div>
            <input type="email" name="email" placeholder="Enter Email" class="form-control" required>
          </div>

          <div class="input-group mt-4">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-phone fa-input"></i></div>  
            </div>
            <input type="tel" name="mobile" placeholder="Enter Contact" pattern="[6789][0-9]{9}" title="Must start with 6,7,8 or 9 only" class="form-control" required>
          </div>

          <div class="input-group mt-4">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-user fa-input"></i></div>  
            </div>
            <input type="text" name="username" placeholder="Enter Username" pattern="[a-zA-Z0-9]{6,30}" title="Must contain atleast 6 characters" class="form-control" required>
          </div>

          <div class="input-group mt-4 mb-4">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-unlock-alt fa-input"></i></div>  
            </div>
            <input type="password" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&]).{8,}" class="form-control" title="Must contain at least one number, one uppercase, one lowercase letter, one special character and at least 8 or more characters" required>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-6">
              <button class="logReg-button form-control mb-4" name="user-register-button"><i class="fa fa-user-plus"></i>register</button>
            </div>
          </div>
          <hr>
        </form>
          <a href="" class="float-right" data-toggle="modal" data-target="#loginform" data-dismiss="modal">Already Have An Account?</a>
        </div>
        
      </div>
    </div>
  </div>
</div>


<!-------------------------Forgot Password Form----------------------------------->
<div class="modal fade" id="forgotPswdform">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">FORGOT PASSWORD</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body text-center">
        <div class="container">
          <form action="userLogReg.php" method="post">
          <div class="input-group mt-4 mb-4">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-envelope fa-input"></i></div>  
            </div>
            <input type="email" name="email" placeholder="Enter Email" class="form-control" required>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-10">
              <button class="logReg-button form-control mb-4" name="send-pswd-button">Send Me My Password</button>
            </div>
          </div>
        </form>
          <hr>
          <a href="" class="float-left" data-toggle="modal" data-target="#registerform" data-dismiss="modal">New User?</a>
          <a href="" class="float-right" data-toggle="modal" data-target="#loginform" data-dismiss="modal">Back To Login</a>
        </div>
        
      </div>
    </div>
  </div>
</div>