<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
  echo 'あなたはInternet Explorerを使用しています<br />';
}
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
?>
<h3>strposが非falseを返しました</h3>
<center><b>あなたはInternet Explorerを使用しています</b></center>
} else {
?>
<h3>strposがfalseを返しました</h3>
<center><b>あなたはInternet Explorerを使用していません</b></center>
<?php
}
?>

<form action="action.php" method="post">
 名前: <input type="text" name="name" />
 年齢: <input type="text" name="age" />
 <input type="submit" />
</form>

<!-- こんにちは、<?php echo $name=filter_input(INPUT_POST,'name'); ?> さん。 
あなたは、<?php echo (int)$_POST['age']; ?> 歳です。 -->