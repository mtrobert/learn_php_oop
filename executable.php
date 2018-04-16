<?php
/**
 * An executable file. Messaging concept in OOP using classes Bussines, Staff and Employee.
 */
 require 'src/Bussiness.php';
 require 'src/Staff.php';
 require 'src/Employee.php';

 $employee = new Employee();
 $staff = new Staff([$employee]);
 $b_and_b = new Bussiness($staff);
 $employee2 = new Employee('Jonathan', 'Baker');
 $b_and_b->hire($employee2);
 var_dump($b_and_b->getStaffMembers());



?>
