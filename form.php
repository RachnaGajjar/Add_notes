<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header('location:registration.php');
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>index </title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="add nots,">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- onlinefonts -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //Custom-Stylesheet-Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
        <a href="logout.php" class="title-agile"> Log out </a>   
        <h1 class="title-agile text-center">Welcome <?php echo $_SESSION['username'];?></h1>
    </header>
    <!-- //header -->
</div>
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
</body>
<!-- //Body -->
<form action="make_entry.php" method="post">
    <div class="form-group">
    <label for="exampleFormControlTextarea1">write here to notes</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="notes"></textarea>
  </div>
  <center> <a class="btn btn-success" href="display.php">Show list</a>
  <button class="btn btn-primary" type="submit" name="submit">Submit</button></center>
 
</form>
</html>