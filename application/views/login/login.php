<section>
 <form>
   <span id="error_message"></span>
 </br>
   <input type="text" name="username" id="login_username" placeholder="Username.."/>
   <input type="password" name="password" id="login_password" placeholder="**************"/>
   <button type="submit" id="submit_login" onclick="return false;"/>Submit</button>
 </form>
</section>

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
       url : 'sample/check',
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