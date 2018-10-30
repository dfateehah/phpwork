<?php

    function myNum(){
        static $x = 0;
        echo $x;
        $x++;
    }
    MyNum();
    echo "<br>";
    myNum();
    echo "<br>";
    myNum();
?>