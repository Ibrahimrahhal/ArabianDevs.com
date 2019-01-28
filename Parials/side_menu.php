<?php
 return function ($value)
{
$items="";
foreach ($value as $item) {
$items.=
"<div class=\"side-menu-item hvr-underline-from-center\">
  {$item}
  </div>";
}

echo "<div class=\"side-menu\">
  <div class=\"side-menu-title\">
    <div class=\"side-menu-title-icon\">

    </div>
  </div>
  <div class=\"side-menu-items\">

  {$items}

  </div>
</div>";

return;


}


 ?>
