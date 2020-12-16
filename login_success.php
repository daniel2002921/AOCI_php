<?php
       session_start();
       if($_SESSION[authenticated] == true){
              $result = '登入時間： '.$_SESSION[login_time];
              foreach($_SESSION[fruits] as $fruit){
                     $result .= "<br>$fruit";
              }
       }else{
              header('Location: login.php');
              exit;
       }

?>