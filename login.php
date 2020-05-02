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
                <form class="col s12" method="post">
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
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input class="validate" type="password" name="password" id="password" />
                                <label for="password">Enter your password</label>
                            </div>
                        </div>

                        <div class="row">
                            <a href="index.php" name="btn-login"
                                class="col s12 btn btn-large waves-effect green-btn">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <a href="#">Create account</a>
    </div>

    <?php include_once("template/includes/js.php"); ?>
</body>

</html>