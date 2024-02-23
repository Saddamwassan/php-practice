<?php 
$name = $email  = $gender = $site = $comment =  "";
$nameError = $emailError =  $genderError = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  // name 
  if(empty($_POST["name"])){
    $nameError = "name is required";
  }else{
    $name = test_input($_POST["name"]);
    if(!preg_match('/^[a-zA-Z-]*$/',$name)){
      $nameError = "Only letters and whitespaces are allowed.";
    };
  }
  // email 
  if(empty($_POST["email"])){
    $emailError = "email is required";
  }else{
    $email = test_input($_POST["email"]);
  if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    
  }else{
    $emailError = "invalid email address";
  }
  }
  }
  // gender 
  if(empty($_POST["gender"])){
    $genderError = "gender is required";
  }else{
    $gender = test_input($_POST["gender"]);
  }
  // website 
  if(empty($_POST["site"])){
    $site = "";
  }else{
    $site = test_input($_POST["site"]);
  }
   // comment 
   if(empty($_POST["comment"])){
    $comment = "";
  }else{
    $comment = test_input($_POST["comment"]);
  }
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_validation</title>
    <style>
      span{
        color:red;
      }
      input{
        margin:10px;
      }
    </style>
</head>
<body>
    <form method="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <span>* required field</span>
      <br>
      Name:  <input type="text" name="name">
      <span>*<?php echo $nameError?></span>
      <br>
      email: <input type="text" name= "email">
      <span>*<?php echo $emailError?></span>
      <br>
      portfolio-sit: <input type="text" name="site">
      <br>
      Male: <input type="radio" name="gender" value="male">
      <span>*<?php echo $genderError?></span>
      <br>
      Female: <input type="radio" name="gender" value="female">
      <br>
      comment: <textarea name="comment" id="comment" cols="30" rows="6"></textarea> 
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php 
    echo $name."<br>";
    echo $email."<br>";
    echo $site."<br>";
    echo $gender."<br>";
    echo $comment;
    ?>  
</body>
</html>