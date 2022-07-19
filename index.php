<!DOCTYPE html>
<html>
  <head>
     <title>PHP MAILER </title>

    <meta name="theme-color" content="#0000006" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://res.cloudinary.com/dyadjj49h/raw/upload/v1655394747/test_sfy8aq.css">
    
</head>

<body>
<form method="post" action="Sign up" >
  <div class="container">
    <h1>ASTRAL TRAVEL</h1>
    <p>Please fill in this form to create an account.</p>
    <label for="fistname"><b>Fistname</b></label>
    <input type="text" placeholder="Enter Fistname" name="firstname" id="psw" pattern="[A-Za-z]{3,}"  title="3 or more letters,no special characters or white space" required>
    <br><br>
    <label for="lastname"><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="lastname" id="psw" pattern="[A-Za-z]{3,}" title="3 or more letters,no special characters or white space"  required>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="psw" pattern=".{4,}" title="4 or more characters" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="psw" required>
    

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])..{6,}" title="6 or more characters with atleast one(nurmber,lowercase&uppercase letter ,special character)" required >

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="cpassword" id="psw-repeat"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="6 or more characters with atleast one(nurmber,lowercase&uppercase letter ,special character)" required >
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" value="Submit" class="registerbtn" action="connect.php" method="post">Register</button>
  
</div>
 
  <div class="container signin">
    <p>Already have an account? <a href="login">Sign in</a>.</p>
  </div>
</form>
</body>
</html>
