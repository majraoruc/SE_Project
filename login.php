<!DOCTYPE html>

<head>
    <title>Finance Application - Login</title>
    <?php include_once("template/includes/head.php"); ?>
    <?php include_once("template/includes/css.php"); ?>
</head>

<body id="login">

    <div id="login-form">
        <img id="login-logo" src="assets/img/logo.png" />

        <div class="container">
            <div class="z-depth-1 lighten-4 row">
                <form id="loginForm" class="col s12" method="post">
                    <div id="login-form-content">
                        <div class="row">
                            <div class="col s12">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input class="validate" type="email" name="email" id="email" />
                                <label for="email">Enter your email</label>
                            </div>
                            <p id="error"  style="color:red;">  </p> 
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input class="validate" type="password" name="password" id="password" />
                                <label for="password">Enter your password</label>
                            </div>
                        </div>

                        <div class="row">
                        <button type="submit" name="btn-login" class="col s12 btn btn-large waves-effect green-btn"> Login </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <a href="create_account.php">Create account</a>
    </div>

    <?php include_once("template/includes/js.php"); 
       
       $link = mysqli_connect("shareddb-w.hosting.stackcp.net", "usersDB-313439961b", "sarajevo84", "usersDB-313439961b");
    
        if (mysqli_connect_error()) {
             die ("There was an error connecting to the database!");
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $query = "SELECT id FROM users WHERE email = '$email' AND password = '$password'";
        $result =  mysqli_query($link, $query);
       
        if (mysqli_num_rows($result)){
            echo '<script type="text/javascript">
            window.location = "index.php"
            </script>';
        } else if (!empty($email) && !empty($password)){
            echo '<script type="text/javascript">
                $("#error").html("Email or Password is incorrect!");
                </script>';
        }



    ?>
</body>

</html>

<script type="text/javascript">

$("#loginForm").on('submit', function(event) {
    event.preventDefault();

    if ($("#email").val() == "" || $("#password").val() == "" )    {
        $("#error").html("Enter both your Email and Password!");
    } else this.submit(); //now submit the form
});

</script>