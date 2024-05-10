<?php
function how_many_cats($cats = 2){
    for($i = 0;$i < $cats;$i++){
        echo "ニャー";
    }
}
how_many_cats();
echo"<hr>";
how_many_cats(3);