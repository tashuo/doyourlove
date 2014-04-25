
jQuery(document).ready(function() {

    /*
        Background slideshow
    */
    $.backstretch([
      "http://doyourlove/modules/register/img/backgrounds/1.jpg"
    , "http://doyourlove/modules/register/img/backgrounds/3.jpg"
    ], {duration: 3000, fade: 750});

    /*
        Tooltips
    */
//    $('.links a.home').tooltip();
//    $('.links a.blog').tooltip();

    
    //实时验证email的规则
    $('#email').change(function(){
    	if($('#email').val() != ''){
    		if(!validEmail($('#email').val())){
    			$("label[for='email']").html('Email:');
    			$("label[for='email']").append("<span style='display:none' class='red'> - Please enter a valid email.</span>");
                $("label[for='email'] span").fadeIn('medium');
                $("button[type='submit']").attr('disabled','true');
    		}else{
    			$("label[for='email']").html('Email:');
    			$("button[type='submit']").removeAttr('disabled');
    		}
    	}
    });
    function validEmail(email){
    	var patten = new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
		return patten.test(email);
    }
    
    /*
        Form validation
    */
    $('.register form').submit(function(){
        $(this).find("label[for='username']").html('Username:');
        $(this).find("label[for='password']").html('Password:');
        $(this).find("label[for='repeat_passwod']").html('Repeat password:');
        $(this).find("label[for='email']").html('Email:');
        $(this).find("label[for='sex']").html('Sex:');

        var username = $(this).find('input#username').val();
        var password = $(this).find('input#password').val();
        var repeat_password = $(this).find('input#repeat_password').val();
        var email = $(this).find('input#email').val();
        var sexNode = $("input[type='radio'][name='sex']:checked");
        

        if(username == '') {
            $(this).find("label[for='username']").append("<span style='display:none' class='red'> - Please enter a valid username.</span>");
            $(this).find("label[for='username'] span").fadeIn('medium');
            return false;
        }
        
        if(password == '') {
            $(this).find("label[for='password']").append("<span style='display:none' class='red'> - Please enter a valid password.</span>");
            $(this).find("label[for='password'] span").fadeIn('medium');
            return false;
        }
          
        if(repeat_password != password){
        	$(this).find("label[for='repeat_password']").append("<span style='display:none' class='red'> - The repeat password must be same as the first password.</span>");
            $(this).find("label[for='repeat_password'] span").fadeIn('medium');
            return false;
        }
        
        if(email == '') {
            $(this).find("label[for='email']").append("<span style='display:none' class='red'> - Please enter a email.</span>");
            $(this).find("label[for='email'] span").fadeIn('medium');
            return false;
        }
        
        if(sexNode.length == 0){
        	$(this).find("label[for='sex']").append("<span style='display:none' class='red'> - Please select Your sex.</span>");
        	$(this).find("label[for='sex'] span").fadeIn('medium');
        	return false;
        }
        
        
        //异步提交
        $.post('includes/ajax/ajaxRegister.php',
        		{username: username,
        		 password: password,
        		 email:    email,
        		 sex:      sexNode.val()
        		},
        		function(data,status){
        			//console.log(data);
        			if(data){
        				window.location.href = 'index.php';
        			}
        		}
        		);
        
        return false;
        
    });
    
    


});


