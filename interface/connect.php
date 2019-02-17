<?php
          $con = mysql_connect("localhost:3306","root","root");
          if(!$con){
          	 die('{"state":"error","errortype":"数据库错误"}');
          }
       mysql_select_db("max",$con);
?>                       