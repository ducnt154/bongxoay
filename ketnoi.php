<?php
$conn=@mssql_connect("115.84.178.152","toanpv","toanpv@345")or die("Ket noi khong thanh cong !");
mssql_select_db("soccer");
@mssql_query("SET NAMES 'utf8'",$conn);
?>
