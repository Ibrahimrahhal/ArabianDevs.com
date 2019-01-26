

<?php
public function list($value)
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
