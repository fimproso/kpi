<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
// Simple Computation
$size = 9;
echo '<pre>';
for ($row = 1; $row <= $size; ++$row) {
   for ($col = 1; $col <= $size; ++$col) {
      printf('%3d', $row * $col);
   }
   echo '<br>';
}
echo '</pre>'
?>
    </body>
</html>
