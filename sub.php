<?php
$myfile = fopen("TEST.txt", "w") or die("Unable to open file!");
fwrite($myfile, $_POST['subject']);
fclose($myfile);
echo 'Success!'
?>
