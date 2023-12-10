<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="/css/loginandregister.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <form action="adduser" method="post">
         @csrf
         <div class="wrapper fadeInDown">
            <div id="formContent">
            
              <h2 class="active"> Sign In </h2>
          
             
              <div class="fadeIn first">
                <img src="/images/logo4.jpg" id="icon" alt="User Icon" />
              </div>
          
             
                <form>
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username"><span style="color: red">@error('username')<br>{{$message}}@enderror</span>
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password"><span style="color: red">@error('password')<br>{{$message}}@enderror</span>
                <input type="submit" class="fadeIn fourth" value="Log In">
                </form>
          
            
              <div id="formFooter">
                <a class="underlineHover" href="register">Forgot Password?</a>
              </div>
          
            </div>
          </div>
     </form> 
 </body>
</html>


