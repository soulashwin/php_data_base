<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: darkmagenta;
         }
         .container{
            background-image: linear-gradient(140deg, #EADEDB 0%, #BC70A4 50%, #BFD641 75%);
            padding:15px;
            border-radius: 20px;
            background-color: powderblue;
        }
        input{
            padding: 3px;
            border-radius: 20px;
            margin-right: 20px;
            text-align: center;
            color: black;
            font-family:system-ui,'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            background-color: whitesmoke;
        }
        .button{
            padding:4px;
            border-radius: 20px;
            margin-right: 20px;
            text-align: center;
            font-weight: bold;
            width: 100px;
        }
        .button:Hover{
            box-shadow: 2px;
            background-image: linear-gradient(140deg, #EADEDB 0%, #BC70A4 50%, #BFD641 75%);
        }
        h1{
            color: whitesmoke;
            text-align: left;
            font-family: sans-serif;
        }
        h3{
            color: whitesmoke;
            text-align: left;
            font-family: sans-serif;
        }
        textarea{
            padding: 3px;
            border-radius: 20px;
            margin-right: 20px;
            text-align: center;
            color: black;
            font-family:system-ui,'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            background-color: whitesmoke;

        }
    
    </style>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 <div class="container">
<h1>Registration Form</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <button class="button" type="submit" name="submit" value="Submit">Sumbit</button>  
</form>
 </div>

<?php
echo "<h2>Your Input:</h2>";
echo "<h3>$name;</h3>";
echo "<br>";
echo "<h3>$email;</h3>";
echo "<br>";
echo "<h3> $website;</h3>";
echo "<br>";
echo  "<h3>$comment;</h3>";
echo "<br>";
echo "<h3>$gender;</h3>";
?>

</body>
</html>
