<?php
	
	session_start();?>

<?php
	$id = $_POST['account'];
	$pw = $_POST['password'];
	include("./connectsql.php");
	$sql = "SELECT * FROM AOCI_DB.user_table where account ='".$id."'";
	

	echo $sql;
	
	$db_result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	
	print_r($db_result);

	

	//echo $rows;
	echo '<br>';
	echo "id=".$id;
	echo '<br>'; 
		echo "pw=";
	 echo $pw;
	// echo '<br>'; 

	echo $_SESSION['account'];



	if($db_result == null)
	{
	        echo "<script>alert('您尚未註冊。')</script>";       
	} 



	else if($pw == $db_result['0']['password'])
	{
	        //將帳號寫入session，方便驗證使用者身份
	        $_SESSION['account'] = $id;
			$_SESSION['password'] = $pw;
	        echo "<script>alert('歡迎".$id."使用系統!')</script>";
	        // echo '<meta http-equiv=REFRESH CONTENT=1;url=userpage.php>';
	      
		   
		   
		
	}
	else if($id == null && $pw == null)
	{
		echo "<script>alert('請輸入帳號、密碼。')</script>";
	}

	else if($pw !=$db_result['0']['password'] ){

		echo "<script>alert('密碼輸入錯誤。')</script>";
	}
	
 header("Location: index.php");

	
?>

