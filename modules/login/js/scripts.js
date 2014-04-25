
jQuery(document).ready(function() {

    $('.page-container form').submit(function(){
    	
    	$('#loginMessage').html('Login');
        var username = $(this).find('.username').val();
        var password = $(this).find('.password').val();
        if(username == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '27px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.username').focus();
            });
            return false;
        }
        if(password == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '96px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.password').focus();
            });
            return false;
        }
        
        $.post('includes/ajax/ajaxLogin.php',
        		{
        			username: username,
        			password: password
        		},
        		function(data,status){
        			if(data){
        				window.location.href="index.php";
        			}else{
        				alert($('#loginMessage').html());
        				$('#loginMessage').append("<span style='display:none; color:red;'> - Wrong username or password.</span>");
        	            $('#loginMessage span').fadeIn('medium');
        	            alert($('#loginMessage').html());
        			}
        		}
        		);

        return false;
        
    });

    $('.page-container form .username, .page-container form .password').keyup(function(){
        $(this).parent().find('.error').fadeOut('fast');
    });
    
    
});
