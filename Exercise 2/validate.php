<?php
// this program will make sure data is given through post
if ($_SERVER["REQUEST_METHOD"] == ["POST"]) {
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $website = test_input($_POST["website"]);
   $comment = test_input($_POST["comment"]);
   $gender = test_input($_POST["gender"]);
}
echo $name . "<br/>" . $email . "<br/>" . $website . "<br/>" . $comment . "<br/>" . $gender;
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>