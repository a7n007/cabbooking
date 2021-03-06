<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="insert.php">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" required name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" required name="email" id="email" placeholder="Your Email"/>
                        </div>

                         <div class="form-group">
                            <input type="tel" class="form-input" required name="phone" id="email" placeholder="Enter ur mobile number"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-input" required name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                      
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit"  value="Sign up" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Already have an account ? <a class="active" href="login.php">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>