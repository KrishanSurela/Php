<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Form Validation</title>
    <style>
        .error{
            color:red;
            font-size: 20px;
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;
        }
        label{
            font-weight: bold;
        }
         
    </style>
     
    <?php
        $name = $email = $gender= "";
        $emailErr = $nameErr = $genderErr ="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["fullname"])){
                $nameErr = "Name is Required";
            }else{  
                // Name Validation
                if(!preg_match("/^[a-zA-z-' ]*$/",test_input($_POST["fullname"]))){
                    $nameErr="Only letters and white spaces are allowed";
                }else{ 
                    $name = test_input($_POST["fullname"]);
                }

            }
            if(empty($_POST["email"])){
                $emailErr = "Email is Required";
            }else{
                //Email Validation
                if(!filter_var(test_input($_POST["email"]),FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid Email Format";
                }else{
                    $email = test_input($_POST["email"]); 
                } 
            }
            if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
            }else{
                $gender = test_input($_POST["gender"]);
            } 
        }

        function test_input($data){
            $data = trim($data); // remove extra white spaces
            $data = stripslashes($data); // remove backslashes
            $data = htmlspecialchars($data);// remove html special character
            return $data;
        }
    ?>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <label for="fullname">Full name</label><br>
        <input type="text" name="fullname"><span class="error"> * <?php echo $nameErr;?></span><br>
        <label for="email">Email Id</label><br>
        <input type="text" name="email"><span class="error"> * <?php echo $emailErr;?></span>
        <br>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="Other"> Others <span class="error"> * <?php echo $genderErr;?></span><br>
        <input type="submit" id="submitBtn" name="submit" value="submit">
    </form>
    <div id="output"> 
        <h2>Your Input</h2> 
        <label for="">Full Name</label><br>
        <?php echo $name;?><br>
        <label for="">Email</label><br>
        <?php echo $email;?><br>
        <label for="">Gender</label> <br>   
        <?php echo $gender;?>
    </div>
    
</body>
</html>