<?php    

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "member";

  $mname=$_REQUEST["member_name"];
  $mpwd=$_REQUEST["member_password"];
	
 
  $conn = new mysqli($servername, $username,$password, $dbname);
                   
  if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$sql = "INSERT INTO member (`member_name`, `member_password`) VALUES ('?','?')";
print($sql);
//INSERT INTO `member` (`member_id`, `member_name`, `member_password`, `member_sex`, `member_tel`, `member_email`, `member_city`, `member_area`, `member_street`, `member_birthday`) VALUES (NULL, 'su', 'ggggg', 'gg', NULL, 'fdddf@gggg', NULL, NULL, NULL, '2002-07-14');
/*
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

    $result = $conn->query($sql);*/
    header('Location: chancexu.shop.html');

?>
