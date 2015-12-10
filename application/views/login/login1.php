<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="8 LayerOJT Devs" content="">
    <link rel="icon" href="../favicon.ico">
    <title>Sign In</title>
    <link href="../assets/ext/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/cust.css" rel="stylesheet">
    <!-- <link href="../assets/ext/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->
   <!--  <link href="signin.css" rel="stylesheet"> -->
    <!-- // <script src="../assets/js/ie-emulation-modes-warning.js"></script> -->
</head>
<body> 
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>


    <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span><strong> Sign in</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">
                            Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="login_username" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="login_password" placeholder="******" required>
                        </div>
                    </div>
                    <span id="error_message"></span>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm" id="submit_login" onclick="return false;"/>
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Not Registred? <a href="register.html">Register here</a></div>
            </div>
        </div>
    </div>
</div>

<!-- <section>

    <div class="container">

      <form class="form-signin">
        <span id="error_message"></span>
        <br>
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="login_username" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="login_password" class="form-control" placeholder="*****" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit_login" onclick="return false;"/>Sign in</button>
      </form>

    </div>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</section> -->
>>>>>>> origin/login

<script>
 $(document).ready(function(){

   $('#submit_login').on('click',function(){
     getLoginData();
   });

   var getLoginData = function(){

     login_data = {
       username : $('#login_username').val(),
       password : $('#login_password').val()
     }
     console.log(login_data);

     createLoginRequest();
   }

   function createLoginRequest(){

     $.ajax({
       url : 'test/check',
       type: "POST",
       data: {
             username : $('#login_username').val(),
             password : $('#login_password').val()
             },

       success: function(result){
         console.log(result);

         if(result == 'correct'){
           $('#error_message').css("color", "green");
           $('#error_message').text('Correct');
         }else if( result == 'incorrect'){
           $('#error_message').css("color", "red");
           $('#error_message').text('Your username or password is invalid');
         }
       },
       // Error Handling
       error: function(){

       }
     });

   }

 });
</script>
