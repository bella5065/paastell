<?php
/*
$conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
if($conn->connect_error) { die("conncetion failed:".$conn->connect_error);}
 echo "Hello";
 $mysqli = new mysqli("10.10.4.14", "20dea24280871f3d", "88a74ef3812b8c3c", "op_2445e6ec_d0c4_479d_8103_e15be2ed4358");
 echo "Hello";
 if($mysqli){
        echo "MySQL 접속 성공";
   }else{
      echo "MySQL 접속 실패";
    }

 echo"H";
 $pdo = new PDO ("mysql :". "host = 10.10.4.14;". "dbname = op_2445e6ec_d0c4_479d_8103_e15be2ed4358",'20dea24280871f3d', '88a74ef3812b8c3c');
 $conn=mysqli_connect('10.10.4.14', '20dea24280871f3d', '88a74ef3812b8c3c')or die("Failed");
 echo "HEllo";
*/
?>
<?php
 echo "H";
    $servername = "localhost";
    $dbname = "op_2445e6ec_d0c4_479d_8103_e15be2ed4358";
    $user = "20dea24280871f3d";
    $password = "88a74ef3812b8c3c";
 echo "H";
    try
    {
 echo "H";
      $connect = new PDO('mysql:host=$servername;dbname=$dbname', $user, $password);
 echo "H";
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "서버와의 연결 성공!";
    }
  catch(PDOException $ex)
    {
        echo "서버와의 연결 실패! : ".$ex->getMessage()."<br>";
    }
?>
~
~
~