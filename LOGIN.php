<?php
// 데이터베이스 연결
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// 폼 데이터 수집 및 쿼리 작성
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

// 쿼리 실행 및 결과 처리
if ($conn->query($sql) === TRUE) {
  echo "Login success!.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// 데이터베이스 연결 종료
$conn->close();
?>