<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="/css/loginandregister.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <form action="reg" method="post">
         @csrf
         <div class="wrapper fadeInDown">
            <div id="formContent">
            
              <h2 class="active"> Sign Up </h2>
          
             
              <div class="fadeIn first">
                <img src="/images/logo4.jpg" id="icon" alt="User Icon" />
              </div>
          
             
                <form>
                <input type="text" id="name" class="fadeIn second" name="name" placeholder="Name"><span style="color: red">@error('name')<br>{{$message}}@enderror</span>
                <input type="email" id="email" class="fadeIn third" name="email" placeholder="Email"><span style="color: red">@error('email')<br>{{$message}}@enderror</span>
                <input type="password" id="password" class="fadeIn fourth" name="password" placeholder="Password"><span style="color: red">@error('password')<br>{{$message}}@enderror</span>
              
                <input type="submit" class="fadeIn fifth" value="Log In">
                </form>
          
            </div>
          </div>
     </form> 
 </body>
</html>


