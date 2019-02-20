<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{pagetitle}</title>
    <!-- CSS -->
    {css}  
</head>
<body>
    <div class="login-wrapper">
        <div class="login-left">
        </div>
        <div class="login-right">
            <form class="form-signin" role="form" method="post" action="{login}">
                <h1>
                    <i class="fas fa-cloud fa-lg" style="color: #007bff;"></i> 
                    WOM 
                </h1>
                
                {error_msg}
                <div>
                    <a class="btn btn-primary btn-sm" href="{authUrl}"> 
                        <i class="fab fa-google-plus-square fa-lg"></i>
                        Use Google Account
                    </a>
                </div>

                <div class="seperator">or</div>

                <div class="form-input">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" name="user_email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                </div>

                <div class="form-input">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password"  name="user_password" id="inputPassword" class="form-control" placeholder="Password" required>
                </div>

                <div class="form-input">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>
                    <button class="btn btn-primary btn-sm" type="submit">Sign in</button>
                </div>

                <div>
                    <p>
                        <span>&copy; {copyrightyear} <a href="#">WOM</a>.</span>
                        <span> All rights reserved.</span>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScripts -->
    {js}
</body>
</html>