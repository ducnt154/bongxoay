<?
$fn = "asin.txt";
$content = '############################################## Grabamax V.24.1.2 By Chokeng For Blogspot ##############################################Asin Masih kosong';
$fp = fopen($fn,"w") or die ("Error opening file in write mode!");
fputs($fp,$content);
fclose($fp) or die ("Error closing file!");
//echo "<meta http-equiv=\"refresh\" content=\"0; url=edit.shtml\" />\n";
echo "<meta http-equiv=\"refresh\" content=\"0; url=class_keyword-form.php\" />\n";
?>