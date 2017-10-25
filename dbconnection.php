<?php


$conn  = mysql_connect("localhost","root","","KaroriBaba")
or die("coˍuld not connect".mysql_error());
mysql_select_db('KaroriBaba') or die("could not connect".mysql_error());

if(!$conn){
	die("Database Connection Failed!".mysql_error());
}





?>