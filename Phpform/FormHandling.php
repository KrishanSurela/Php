<form action ="welcome.php" method="post">
    Name : <input type="text" name ="name" > <br>
    Email : <imput type="text" name="email"><br>
    <input type="submit">
</form>

//welcome.php

Welcome <?php echo $_POST["name"]; ?> <br>
your Email Address is : <?php echo $_POST["email"];?>

