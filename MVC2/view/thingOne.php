<?php
    ob_start();

    echo '<article>';
    echo '<h3>'.$thing['gamename'].'</h3>';
    echo '<img src = "public/images/'.$thing['image'].'">';
    echo '<p>Authro(s): '.$thing['author'].'</p>';
    echo '<p>Price: '.$thing['price'].'</p>';
    echo '<p>Содержание: '.$thing['description'].'</p>';
    echo '<p style="padding-top:10px;"></p>';
    echo '<a href="things" role="button"> Back &raquo;</a>';
    echo '</p>';
    echo '</article>';


    echo '<div style = "clear:both;"></div>';

    $content = ob_get_clean();

include 'view/templates/layout.php';

