<?php
require("./connect.php");
	   header("Content-Type: text/html;charset=utf-8");
	   $username = @$_REQUEST["username"];
	   $password = @$_REQUEST["password"];
	   
	   if(!$username || !$password){
	   	die('{"state":"error","errortype":"参数不能为空"}');
	   }
	  
     
     $select_query = "SELECT username FROM userlist";
     $select_res = mysql_query($select_query);
	 $json_array = array();
     while($row = mysql_fetch_array($select_res)){
		array_push($json_array,$row);
     	  if($username == $row["username"]){
     	  		die('{"state":"error","errortype":"用户名不能重复"}');
     	  }
	 }

	 $charu_query = "INSERT INTO userlist (username,password) VALUES ('$username','$password')";
	    $shiye_res = mysql_query($charu_query);
		if($shiye_res){
				die('{"state":"sucess","errortype":"null"}');
		}else{
			die('{"state":"error","errortype":"数据库插入失败"}');
		}
	 
	 mysql_close($con);
      
?>