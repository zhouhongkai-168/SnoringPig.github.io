<?php
	$serverName = "localhost";
	$username = "root";//linux���ݿ�����
	$password = "123456";//���ݿ�����
	$dbname = "root";//�Լ����������ݿ���

// ��������
	$conn = new mysqli($servername, $username, $password, $dbname);
// �������
	if ($conn->connect_error) {
    	die("����ʧ��: " . $conn->connect_error);
	} 

	if($_POST['submit']){
		$user= $_POST['user'];//html��������������
		$passwordv = $_POST["password"];
		$sql = "insert into user(username,password) values ('$name','$password')";//into �����Ǳ��������������ֶΣ������ֵ
	}
	else{
		exit(0);
	}

	if ($conn->query($sql) === TRUE) {
		echo "ע��ɹ�";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>
