//$("").on('click','' 
    $("#login-user").on('submit', function(e){

        e.preventDefault(); //STOP default action
        var postData = $('#login-user').serializeArray();
        var formURL = "loginprocess.php";
        $('#login-user-msg-div').html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> <strong>Logging You in</strong>...');
        $("#login-user-msg-div").css("display","");
        $.ajax(
        {
            url : formURL,
            type: "POST",
            data : postData,
            success:function(data, textStatus, jqXHR) 
            {   if (data==1) {
                window.location.href = "admin.php";
            }else{
                $("#login-user-msg-div").html("");
                $("#login-user-msg-div").html(data);
                $("#login-user-msg-div").css("display","");
               
            };
                
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
                alert("Fail " + textStatus + " - " + errorThrown);  
            }
            //return false;
        });
          })

  $("#register-user").on('submit', function(e){

        e.preventDefault(); //STOP default action
        var postData = $('#register-user').serializeArray();
        var formURL = "newuserprocess.php";
        $('#register-user-msg-div').html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span><strong>Submitting your form</strong>...');
        $("#register-user-msg-div").css("display","");
        $.ajax(
        {
            url : formURL,
            type: "POST",
            data : postData,
            success:function(data, textStatus, jqXHR) 
            {   if (data) {
                $("#register-user-msg-div").html("");
                $("#register-user-msg-div").html(data);
                $("#register-user-msg-div").css("display","");
            }else{
                $("#register-user-msg-div").html("");
                $("#register-user-msg-div").html(data);
                $("#register-user-msg-div").css("display","");
               
            };
                
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
                alert("Fail " + textStatus + " - " + errorThrown);  
            }
            //return false;
        });
          })

$("#user-password").on('submit', function(e){

        e.preventDefault(); //STOP default action
        var postData = $('#user-password').serializeArray();
        var formURL = "forgotpass-process.php";
        $('#pass-user-msg-div').html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> <strong>Submitting your form</strong>...');
        $("#pass-user-msg-div").css("display","");
        $.ajax(
        {
            url : formURL,
            type: "POST",
            data : postData,
            success:function(data, textStatus, jqXHR) 
            {   if (data) {
                $("#pass-user-msg-div").html("");
                $("#pass-user-msg-div").html(data);
                $("#pass-user-msg-div").css("display","");
            }else{
                $("#pass-user-msg-div").html("");
                $("#pass-user-msg-div").html(data);
                $("#pass-user-msg-div").css("display","");
               
            };
                
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
                alert("Fail " + textStatus + " - " + errorThrown);  
            }
            //return false;
        });
          })

$("#forgot-user-form").on('submit', function(e){

        e.preventDefault(); //STOP default action
        var postData = $('#forgot-user-form').serializeArray();
        var formURL = "update_pass_process.php";
        $('#forgot-user-msg-div').html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span><strong>Submitting your form</strong>...');
        $("#forgot-user-msg-div").css("display","");
        $.ajax(
        {
            url : formURL,
            type: "POST",
            data : postData,
            success:function(data, textStatus, jqXHR) 
            {   if (data) {
                $("#forgot-user-msg-div").html("");
                $("#forgot-user-msg-div").html(data);
                $("#forgot-user-msg-div").css("display","");
            }else{
                $("#forgot-user-msg-div").html("");
                $("#forgot-user-msg-div").html(data);
                $("#forgot-user-msg-div").css("display","");
               
            };
                
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
                alert("Fail " + textStatus + " - " + errorThrown);  
            }
            //return false;
        });
          });

$("#upload-file").on('submit', function(e){

        e.preventDefault(); //STOP default action                
      
        var formURL = "flupload.php";
        $("#file-name span").html("");
                    $("#file-size span").html("");
                    $("#file-type span").html("");
                    $("#message").html("");
        $('#message').html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span><strong>Uploading File .</strong>...');
        $("#message").css("display","");
        $.ajax(
        {
            url : formURL,
            type: "POST",
            data : new FormData(this),
            cache: false,
            processData:false,
            contentType:false,
            success:function(data, textStatus, jqXHR) 

            {   console.log(data);
                if (data) {
                console.log(data);
                var obj = JSON.parse(data);
                
                   
                    $("#file-name span").html("");
                    $("#file-size span").html("");
                    $("#file-type span").html("");
                    $("#message").html("");
                    $("#file-name span").html(obj['name']);
                    $("#file-size span").html(obj['size']);
                    $("#file-type span").html(obj['type']);
                    for (i = 0; i < obj['error'].length; ++i) {
                    $("#message").append('<strong>'+obj['error'][i]+'</strong></br>');
                }
                
            }
                else{
                    $("#message").html("");
                    $('#message').html('<strong>Please check the file size.</strong>...');
                }
            },
            
        });
          });

$("#update-user-form").on('submit', function(e){

        e.preventDefault(); //STOP default action
        var postData = $('#update-user-form').serializeArray();
        var formURL = "update-profile.php";
        $('#update-message').html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span><strong>Updating profile</strong>...');
        $("#update-message").css("display","");
        $.ajax(
        {
            url : formURL,
            type: "POST",
            data : postData,
            success:function(data, textStatus, jqXHR) 
            {   if (data) {
                console.log(data);
                $("#update-message").html("");
                $("#update-message").html(data);
                $("#update-message").css("display","");
            }
                
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
                alert("Fail " + textStatus + " - " + errorThrown);  
            }
            //return false;
        });
          });