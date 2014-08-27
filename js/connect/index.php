<html>
<head><title> Grabamax By chokeng </title>
</head>
<body>
<center>
<h3>Grabamax V.24.1.2 By Chokeng For Blogspot</h3>
</center>
Total Asin: (<?php $fileasin='asin.txt'; $fileopen = @file($fileasin, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) or die('total asin (0) <a href="add.php" >Add</a>');
//debug($fileopen);
$totalasin = count($fileopen); echo $totalasin;?>) <a href="class_keyword-view.php" >Add</a><br>
<a href="asin.php" target="_blank">Asin Grap </a>

<form id="FCONTOH" name="CONTOH" method="get" action="
up.php?<?php echo $_POST['post'];?><?php echo $_POST['blog'];?>
<?php echo $_POST['author'];?><?php echo $_POST['label'];?><?php echo $_POST['inx'];?><?php echo $_POST['lab'];?>"> 
<p> <b>Total Post: <br /> 
<input name="post" type="text" id="nama" size="20" value="1" /></p> 
<p> Autor Blog: <br /> 
<input name="author" type="text" id="nama" size="20" value="chokeng" /></p> 
<p> Name Blog: <br /> 
<input name="blog" type="text" id="nama" size="20" value="admin" /></p>
<p> Label Post : <br />
<input name="label" type="text" id="nama" size="50" value="Eletronic,Laptop,Ipad" /></p>
<p> Folder Images : <br />
<input name="inx" type="text" id="nama" size="80" value="images"  /></p>
<p> Path Images :</b> <br />
<input name="lab" type="text" id="nama" size="80" value="https://googledrive.com/host/0B0gIfwXz4bP_TlFETHJ1QW01Qnc/" /></p>


 <p> <input type="submit" name="button" value="Creat XML" /> </p> 
 </form>
 </body>
</html>