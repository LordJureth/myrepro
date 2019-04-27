<?php

function header(){

  $myfile = fopen("./file.txt", "r");

  echo fread($myfile, filesize("file.txt"));

  fclose($myfile);
}

?>
