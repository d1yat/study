<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
    </head>
    <body>
        <?php
            $myPartyAges = array(20, 21, 22, 23, 24);
            
            for ($i = 0; $i < count($myPartyAges); $i++) {
                echo $myPartyAges[$i] . '<br>';
            }
        ?>
    </body>
</html>
