<div class="container" id="login_form">
  <div class="row">
    <!-- <div class="col-md-3"></div> -->
      <div class="col-md-5 col-md-offset-3">
      
      	 <div class="panel panel-default">
           <div class="panel-heading">
              <span class="glyphicon glyphicon-lock"></span><strong> Sign in</strong>
           </div>
           <div class="panel-body">
             <form class="form-horizontal" role="form">
               <div class="form-group">
                 <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                   <div class="col-sm-9">
                   		<input type="email" class="form-control" id="login_username" placeholder="Email" required>
                   </div>
               </div>
               <div class="form-group">
                <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="login_password" placeholder="******" required>
                </div>
               </div>
               <span id="error_message"></span>
               <div class="form-group">
                 <div class="col-sm-offset-3 col-sm-9">
                   <div class="checkbox">
                     <label><input type="checkbox"/>Remember me</label>
                   </div>
                 </div>
               </div>
               <div class="form-group last">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-success btn-sm" id="submit_login" onclick="return false;"/>Sign in</button>
                  <button type="reset" class="btn btn-default btn-sm">Reset</button>
                </div>
              </div>
            </form>
          </div>
        	<div class="panel-footer">
            Not Registred? <a id="register" onclick="switch();">Register here</a></div>
       		</div>
       </div>
       
       <div class="panel panel-default" id="register_form" style="display: none;">
           <div class="panel-heading">
              <span class="glyphicon glyphicon-pencil"></span><strong> Register</strong>
           </div>
           <div class="panel-body">
             <form class="form-horizontal" role="form">
               <div class="form-group">
                 <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                   <div class="col-sm-9">
                   		<input type="email" class="form-control" id="login_username" placeholder="Email" required>
                   </div>
               </div>
               <div class="form-group">
                <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="login_password" placeholder="******" required>
                </div>
               </div>
               <span id="error_message"></span>
               <div class="form-group">
                 <div class="col-sm-offset-3 col-sm-9">
                   <div class="checkbox">
                     <label><input type="checkbox"/>Remember me</label>
                   </div>
                 </div>
               </div>
               <div class="form-group last">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-success btn-sm" id="submit_login" onclick="return false;"/>Sign in</button>
                  <button type="reset" class="btn btn-default btn-sm">Reset</button>
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
</div>

<div class="container" id="register_form">
  <div class="row">
    <!-- <div class="col-md-3"></div> -->
      <div class="col-md-5 col-md-offset-3">
       
       <div class="panel panel-default" style="display: none;">
           <div class="panel-heading">
              <span class="glyphicon glyphicon-pencil"></span><strong> Register</strong>
           </div>
           <div class="panel-body">
             <form class="form-horizontal" role="form">
               <div class="form-group">
                 <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                   <div class="col-sm-9">
                   		<input type="email" class="form-control" id="login_username" placeholder="Email" required>
                   </div>
               </div>
               <div class="form-group">
                <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="login_password" placeholder="******" required>
                </div>
               </div>
               <span id="error_message"></span>
               <div class="form-group">
                 <div class="col-sm-offset-3 col-sm-9">
                   <div class="checkbox">
                     <label><input type="checkbox"/>Remember me</label>
                   </div>
                 </div>
               </div>
               <div class="form-group last">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-success btn-sm" id="submit_login" onclick="return false;"/>Sign in</button>
                  <button type="reset" class="btn btn-default btn-sm">Reset</button>
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
</div>



<script>
 $(document).ready(function(){
 
 	 $("#register").on('click',function(){
 	 	$("#login_form").hide();
    $("#register_form").show();
   });`
 
   $('#submit_login').on('click',function(){
     getLoginData();
   });
   var getLoginData = function(){
     login_data = {
       username : $('#login_username').val(),
       password : $('#login_password').val()
     }
     console.log(login_data);
     login(username, password);
   }

   function login(username, password) {
     $.ajax({
       url : 'user/login',
       type: "POST",
       /*
       data: {
             username : $q('#login_username').val(),
             password : $('#login_password').val()
             },
        */
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
