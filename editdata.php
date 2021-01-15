<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Edit form</title>
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

<form action="" method="POST">
    <div class="form-group">
    <label for="exampleFormControlTextarea1">write here to notes</label>
    <br>
   
   <?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'add_list');
$ida=$_GET['iddata'];
$show="select * from notescontent where id=$ida";
$usedata=mysqli_query($con, $show);
$arry=mysqli_fetch_array($usedata);
if(isset($_POST['submit']))
{
    $data1=$_POST['data'];
    $idupdate=$_GET['iddata'];
    $quary="update notescontent set id=$ida,notes='$data1' where id=$idupdate";
    $result=mysqli_query($con,$quary);
    if($result==1)
    {
       header('location:display.php');
    }
    else
    {
        echo "error";
    }
}


?>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="data"><?php echo $arry['notes']; ?></textarea>
    </div>
<br>
</br>
  </div>
  <button class="btn btn-primary" type="submit" name="submit" >Update</button>
</form>
</html>
