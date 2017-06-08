<!DOCTYPE html>
<html>
  <head>
    <title>Add new user</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
    
  </head>
  <body>

    <?php include 'navbar.php' ?>

    <div class="container">
      <div class="row">
        
        <div class="col-md-5" style="margin: 0 auto; float: none;">

        <div class="col-md-12 q-panel" style="padding:0;">
          <div class="panel panel-default card shadow--2dp">
            <div class="panel-heading o-nav">
              <h3 class="panel-title">Sign Up</h3>
            </div>
            <div class="panel-body">
              
              <div class="form-wrapper">                    
                <div class="card">
                  
                  <div class="q-back">
                    
                    <form role="form" method="post" id="register-user">
                      <div class="form-group">
                        <label>Please enter your pass code to add new user.</label>
                        <input class="form-control" name="AdministraterPassword" type="password" value="" required autofocus>
                      </div>
                      <div class="form-group">
                        <label>User Name</label>
                          <input class="form-control dairy dropdown-toggle" name="username" type="text" autocomplete required autofocus>
                      </div>
                      <div class="form-group">
                        <label>Email Id</label>
                        <input class="form-control" placeholder="Max 30 Alphaneumeric Characters" name="email" type="email" maxlength="30" autocomplete required autofocus>
                      </div>
                      <div class="form-group">
                        <label>Contact No.</label>
                        <input class="form-control" placeholder="Max 15 Alphaneumeric Characters" name="mobile" type="text" maxlength="15" autocomplete required autofocus>
                      </div>
                  
                      <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" placeholder="Min 8 and Max 15 Alphaneumeric Characters" name="password" type="password" value="" required autofocus>
                      </div>
                      <div class="form-group">
                        <label>Duration</label>
                        <input class="form-control" name="duration" type="text" required autofocus>
                      </div>
                      <!-- Change this to a button or input when using this as a form -->
                      <div class="form-group">
                        <a class="mdl-btn" type="submit">Back</a>
                        <button class="mdl-btn" type="submit">Submit</button>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <div class="sign_up_text">
                <p>Already have an account.</p><a href="login.php"> Login</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      </div>
      <div class="row">
            <div id="register-user-msg-div"></div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="utility/cm_ajax.js"></script>
  </body>
</html>