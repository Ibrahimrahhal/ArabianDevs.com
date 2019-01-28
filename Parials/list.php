

<?php
 return function ($value='')
 {
   // code...
 }($value)
{
  $str = "";
  foreach ($value as $item) {
    $str.=
     "<li>
    {$item}
    </li>";
  }
  echo ("<ul class=\"list\">" . $str .  "  </ul>");
return;




}


 ?>
