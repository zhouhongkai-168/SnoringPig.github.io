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
		if($user && $password){
			$sql = "select * from user where username = '$name' and password='$passowrd'";//������ݿ��Ƿ��ж�Ӧ��username��password��sql
				$result = mysql_query($sql);//ִ��sql
				$rows=mysql_num_rows($result);//����һ����ֵ
				if($rows){//0 false 1 true
					header("refresh:0;url=welcome.html");//����ɹ���ת��welcome.htmlҳ��
					exit;
				}else{
					echo "�û������������";
					echo "
						<script>
								setTimeout(function(){window.location.href='login.html';},1000);
						</script>

					";//�������ʹ��js 1�����ת����¼ҳ�����ԣ�������½�������
				}
		}
		else{//����û����������п�
					echo "����д������";
					echo "
                      <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                      </script>";
                        //�������ʹ��js 1�����ת����¼ҳ�����ԣ�������½�������
		}

	}
	else{
		exit;
	}

	$conn->close();
?>
