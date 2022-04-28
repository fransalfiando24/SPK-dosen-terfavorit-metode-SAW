<?php
  session_start();
  session_destroy();
  echo "<META HTTP-EQUIV='Refresh' Content='2; URL=?p=home'>";
?>