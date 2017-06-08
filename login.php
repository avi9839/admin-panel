<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="assets/css/main.css" rel="stylesheet">
    
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <div class="container">
      <div class="row">
        
        <div class="col-md-5" style="margin: 0 auto; float: none;">

          <div class="col-md-12 q-panel" style="padding:0;">
            <div class="panel panel-default card shadow--2dp">
              <div class="panel-heading o-nav">
                <h3 class="panel-title">Login</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" id="login-user" method="POST">
                  <div class="form-wrapper">                    
                    <div class="card">
                      <div class="q-back">
                        <div class="form-group">
                          <div class="col-md-12">
                            <input type="text" class="form-control" id="" placeholder="User ID" name="user" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <input type="Password" class="form-control" name="password" placeholder="Password" required>
                          </div>
                        </div>
                        <div class="form-group" style="margin-left: 0;">
                          <button class="mdl-btn" type="submit">Login</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <div class="sign_up_text">
                  <p>Don't have an account yet?</p><a href="newuser.php"> Sign Up</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
            <div id="login-user-msg-div"></div>
      </div>  
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="utility/cm_ajax.js"></script>
  </body>
</html>