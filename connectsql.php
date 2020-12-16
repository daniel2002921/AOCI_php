<?php
/*
$db_host = "localhost";
$db_table = "user";
$db_username = "root";
$db_pwd = "cjo4hjp6";

//資料連線
if(!@mysql_connect($db_host, $db_table, $db_username, $db_pwd)) die("Connect Failed.");

//連接資料庫
if(!@mysql_select_db($db_table)) die("DB ERROR.");

//設定字元與連線校對
mysql_query("SET NAMES 'utf8'");
*/

// //資料庫設定
// //資料庫位置
// $db_server = "127.0.0.1";
// //資料庫名稱
// $db_name = "AOCI_DB";
// //資料庫管理者帳號
// $db_user = "root";
// //資料庫管理者密碼
// $db_passwd = "";
// //對資料庫連線
// if(!$con=@mysqli_connect($db_server, $db_user, $db_passwd, $db_name))
//         die("無法對資料庫連線");

// //資料庫連線採UTF8
// mysqli_query($con,"SET NAMES utf8");

// echo $sql;
// //選擇資料庫
// if(!@mysqli_select_db($con,$db_name))
//         die("無法使用資料庫");


$dsn = 'mysql:dbname=AOCI_DB;host=localhost;charset=utf8;';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
$user = 'root';
$password = '';
try
    {   // 建立資料連線
        $pdo = new PDO($dsn, $user, $password, $options);
    }
catch (PDOException $e)
    {
        echo 'connection failed';
    }
  



?> 
