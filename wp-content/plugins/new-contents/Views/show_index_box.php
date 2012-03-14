<?php

if(get_post_meta( $nota->ID, 'show_index', true )!="") $check = "checked";

echo "<input type=\"checkbox\" name=\"show_index\" id=\"show_index\" value=\"true\" $check /> Exibir Nota Oficial na Index";

?>
