


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>

    <div class="main">

        <section class="login">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="cancel1.php">
                        <h2 class="form-title">Cancel Now</h2>
                        <div class="form-group">
                            <input type="text"  required class="form-input" name="phone" id="name" placeholder="Enter phone"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" required  class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Cancel now"/>
                        </div>
                    </form>
                   
                </div>
            </div>
        </section>

    </div>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
