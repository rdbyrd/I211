<?php

require 'autoloading.php';

echo "<h1>Payroll System Programmed with OOP</h1><br>";
echo "*************************************************<br>";

    $i1 = new Invoice(11234, "seat", 2, 375);
    $i2 = new Invoice(56789, "tire", 4, 79.95);
    
    $i1->toString();
    
    echo "*************************************************<br>";
    
    $i2->toString();
    
    

