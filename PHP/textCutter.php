<?php
                    if($Changes>0){
                    for ($x = 1; $x <= $Changes; $x++) {
                     $position=$Jump*$x;
                      $tracker=false;
                      while($tracker){
                      if($text[$position+1]!=" "){
                      $position=$position+1;
                      }
                      else{
                      $tracker=true;
                      }
                      }
                      }
                       $text= substr_replace(  $text,  $insert, $position, 0 );
                        $Jump=$Jump+Strlen($insert);
                                                   }
                    }
?>
