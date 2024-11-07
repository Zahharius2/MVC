<?php
    ob_start();
 ?>
 <h2>Список игрищ</h2>
 <?php
 foreach ($thingsList as $thingOne) {
    echo '<article>';
    echo '<h3>';
    echo '<a href = "thing?title='.$thingOne["gamename"].'">'.$thingOne['gamename'].'</a>';
    echo '</h3>';
    echo '<img src = "public/images/'.$thingOne['image'].'">';
    echo '<p>Author(s): '.$thingOne['author'].'</p>';
    echo '<p>Price: '.$thingOne['price'].'</p>';
    echo '<p style = "padding-top:10px;">';
    echo '<a href="thing?title='.$thingOne['gamename'].'" role="button"> Содержание &raquo;</a>';
    echo '</article>';
    echo '<div style = "clear:both;"></div>';
 }

  ?>


  <?php
  $content = ob_get_clean();
  include 'view/templates/layout.php';
   ?>