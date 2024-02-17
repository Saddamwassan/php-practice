<?php 
$name = $email = $site = $gender = $site = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST["name"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$site = $_POST["site"];
}
function test_input($data) {
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
</head>
<body>
    <form method="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      Name:  <input type="text" name="name">
      email: <input type="text" name= "email">
      portfolio-sit: <input type="text" name="site">
      Male: <input type="radio" name="gender" value="male">
      Female: <input type="radio" name="gender" value="female">
      comment: <textarea name="comment" id="comment" cols="30" rows="10"></textarea> 
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php 
    echo $name."<br>";
    echo $email."<br>";
    echo $site."<br>";
    echo $gender."<br>";

    ?>  
</body>
</html>