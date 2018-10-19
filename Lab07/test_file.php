<?php

require 'autoloading.php';

echo "<h1>Payroll System Programmed with OOP</h1><br>";
echo "*************************************************<br>";

    // instantiate classes

    $i1 = new Invoice(11234, "seat", 2, 375);
    $i2 = new Invoice(56789, "tire", 4, 79.95);
    
    $sE = new SalariedEmployee('John Smith', '111-11-1111', 800.00);
    
    $hE = new HourlyEmployee('Karen Price', '222-22-2222', 16.75, 40);
    
    $cE = new CommissionEmployee('Sue Johnson', '333-33-3333', 10000, 0.06);
    
    $bcE = new basePlusCommissionEmployee('Bob Lewis', '444-44-4444', 5000, 0.04, 300);
    
    
    // print info
    $i1->toString();
    
    echo "*************************************************<br>";
    
    $i2->toString();

    echo "*************************************************<br>";
    
    $sE->toString();
    
    echo "*************************************************<br>";
    
    $hE->toString();
    
    echo "<br>*************************************************<br>";
    
    $cE->toString();
   
    echo "<br>*************************************************<br>";
    
    $bcE->toString();
    
    echo "<br>*************************************************<br>";
    
    echo "Number of Invoices: " , $i2->getInvoiceCount(), "<br>";
    echo "Number of Employees: " , $bcE->getEmployee_count();
    

