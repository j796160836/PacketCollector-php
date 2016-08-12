<?php
$file_path = "./files/data.txt";
$clean = @$_GET['clean'];
if (strcmp($clean, "1") == 0) {
	file_put_contents($file_path, "", LOCK_EX);
	header('Location: '.$_SERVER['PHP_SELF']);
	exit;
}

$myfile = @fopen($file_path, "r") or die("Unable to open file!");

$data = "";
if(filesize($file_path) > 0) {
	$data = fread($myfile, filesize($file_path));
}
fclose($myfile);

?>
<p>[<a href="<?php echo $_SERVER['PHP_SELF']."?clean=1"; ?>">Clean All</a>]</p>
<hr />
<?php
echo str_replace("\n", "<br/>\n", $data);

?>