<?php

spl_autoload_register(cloudAutoLoad);

function cloudAutoLoad($className){
  $path = "classes/";
  $ext = ".class.php";
  $fullpath = $path . $className .$ext;

  include_once $fullpath;

}

?>
