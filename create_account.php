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
                <form id="accountForm"  class="col s12" method="post">
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
                           <p id="errorEmail"  style="color:red;">  </p> 
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input class="validate" type="password" name="password" id="password" />
                                <label for="password">Enter your password</label>
                            </div>
                            <p id="errorPassword"  style="color:red;">  </p> 
                        </div>


                        <div class="row">
                            <div class="input-field col s12">
                                <input class="validate" type="text" name="firstName" id="firstname" />
                                <label for="firstName">Enter your First Name</label>
                            </div>
                            <p id="errorFirstName"  style="color:red;">  </p> 
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input class="validate" type="text" name="lastName" id="lastname"/>
                                <label for="lastName">Enter your Last Name</label> 
                            </div>
                            <p id="errorLastName"  style="color:red;">  </p> 
                        </div>

                        <div class="row">
             <!--               <a href="login.php" name="btn-login"
                                class="col s12 btn btn-large waves-effect green-btn">Create your account</a> -->
                                <button type="submit" name="btn-login" class="col s12 btn btn-large waves-effect green-btn"> Create your account </button>
                               
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>

    <?php include_once("template/includes/js.php"); 

        $link = mysqli_connect("shareddb-w.hosting.stackcp.net", "usersDB-313439961b", "sarajevo84", "usersDB-313439961b");
    
        if (mysqli_connect_error()) {
             die ("There was an error connecting to the database!");
        }
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
      
        if (isset($firstName) && isset($lastName) && isset($email) && isset($password)) {
        $query = "INSERT INTO users (email, password, first_name, last_name) VALUES ('$email', '$password', '$firstName', '$lastName')";
        mysqli_query($link, $query);
        echo '<script type="text/javascript">
           window.location = "login.php"
            </script>';
        }
        echo isset($firstname);
        echo isset($lastName);
        echo isset($email);
        echo isset($password)

        
    ?>
</body>



</html>

<script type="text/javascript">

$(document).on("keydown", "form", function(event) { 
    return event.key != "Enter";
});

function isEmail(email){
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
        
        function isName(fullName){
			var regex = /^[a-z ,.'-]+$/i ;
			return regex.test(fullName);
		}

$("#accountForm").on('submit', function(event) {
    event.preventDefault();
    var valid = true;
    if ($("#email").val() == "" || isEmail($("#email").val() == false)){
         $("#errorEmail").html("Please enter a valid email!");
          valid = false;
     } else  $("#errorEmail").html("");

    if ($("#firstname").val() == ""){
        $("#errorFirstName").html("First Name field is empty!");
        valid = false;
    } else $("#errorFirstName").html("");

    if ($("#lastname").val() == ""){
        $("#errorLastName").html("Last Name field is empty!");
        valid = false;
    } else $("#errorLastName").html("");
    if ($("#password").val() == ""){
        $("#errorPassword").html("Password field is empty!");
        valid = false;
    } else if ($("#password").val().length<8){
        $("#errorPassword").html("Password must contain at least 8 characters!");
        valid = false;
    } else  $("#errorPassword").html("");
 
    if (valid)  this.submit(); //now submit the form
});
</script>