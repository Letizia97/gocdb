<?php
echo '<div style="overflow: hidden">';
    echo '<span class="header" style="vertical-align:middle; float: left; padding-top: 0.9em; padding-left: 1em;">';
        echo 'User personal data is hidden (' . getInfoMessage() . ')';
    echo '</span>';
    echo '<img src="' . \GocContextPath::getPath() . 'img/people.png" class="decoration" />';
echo '</div>'
?>
