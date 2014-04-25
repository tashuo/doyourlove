
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Register to doyourLove</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="http://doyourlove/modules/register/bootstrap2/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://doyourlove/modules/register/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class="register-container container">
            <div class="row">
            	<div class="span3"></div>
                <div class="register span6">
                    <form action="" method="post">
                        <h2>REGISTER TO <span class="red"><strong>doyourlove</strong></span></h2>
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="choose a username...">
                        
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="choose a password...">
                        
                        <label for="repeat_password">Repeat password:</label>
                        <input type="password" id="repeat_password" name="repeat_password" class="form-control" placeholder="repeat the password...">
                        
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="enter your email...">
                        
                        <label for="sex">Sex:</label>
                        <div class="ta_shuo_div">
                          <label>Female<input type="radio" name="sex" value="0"/></label>
                          <label>Male<input type="radio" name="sex" value="1" /></label>
                        </div>
                        <button type="submit" data-loading-text="正在注册...">REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
		<div align="center">@copyright <a href="http://about.me/tashuo" target="_blank" title="ta_shuo">ta_shuo</a></div>
        <!-- Javascript -->
        <script src="http://doyourlove/modules/register/js/jquery-1.8.2.min.js"></script>
        <script src="http://doyourlove/modules/register/bootstrap2/js/bootstrap.min.js"></script>
        <script src="http://doyourlove/modules/register/js/jquery.backstretch.min.js"></script>
        <script src="http://doyourlove/modules/register/js/scripts.js"></script>

    </body>

</html>

