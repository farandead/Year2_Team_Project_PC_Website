<?php
                    if($Changes>0){
                    for ($x = 1; $x <= $Changes; $x++) {
                     $position=$Jump*$x;
                       $text= substr_replace(  $text,  $insert, $position, 0 );
                        $Jump=$Jump+Strlen($insert);
                                                   }
                    }
?>
