<?php
// url php zmenit na soucasny php soubor
$url = 'editor.php';
$file = 'file.txt';
 
if (isset($_POST['text']))
{
   file_put_contents($file, $_POST['text']);
 
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Continue</a>.', htmlspecialchars($url));
    exit();
}
 
$text = file_get_contents($file);
 
?>
<form action="" method="post">
<textarea name="text"><?php echo htmlspecialchars($text) ?></textarea>
<br>
<input type="submit" />
</form>
