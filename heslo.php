<?php
$password = "doplnit";
if ($_POST[doddle] == $password) {
        $tell = 1;
} else {
        $tell = 2;
}
if (! is_string($_POST[doddle])) $tell = 0;
?>


<html>
<head>
<title>Toto je skryte pod heslem</title>
</head>
<body>
<?php if ($tell == 1) { ?>

<!--skryte -->
<h1>The page with all the secrets revealed </h1>
<!--skryte -->

<?php } else { ?>

<?php if ($tell == 2) print (""); ?>
<br />
<form method=post>
Zadejte heslo <input type=password name=doddle>
<input type=submit value=Potvrdit>
</form>

<?php } ?>

</body>
</html>
