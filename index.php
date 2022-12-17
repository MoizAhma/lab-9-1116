<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20-NTU-CS-1116</title>
</head>
<body>
<form action="main.php" method = "post">
  <label for="email">Email:</label>
  <br>
  <input type="email" id="email" required name="email">
  <br>
  <label for="lname">Password:</label>
  <br>
  <input type="password" id="password" required name="password">
  <br><br>
  <input type="radio" id="first_radio" name="gradio" value = "option 1">
  <label for="first_radio">First Radio</label>
  <br>
  <input type="radio" id="second_radio" name="gradio" value = "option 2">
  <label for="second_radio">Second Radio</label>
  <br>
  <input type="radio" id="third_disabled_radio" name="gradio" value = "option 3">
  <label for="third_disabled_radio">Third disabled radio</label>
  <br><br>
  <input type="checkbox" name="checkbox" >
<label for="demoCheckbox"> Check me!</label><br>
<br>
  <input type="submit" value="Submit">
</form>
</body>
</html>