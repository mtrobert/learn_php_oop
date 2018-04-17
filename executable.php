<?php

use b_and_b\personnel\Employee;
use b_and_b\Staff;
use b_and_b\Bussiness;

 $employee = new Employee();
 $staff = new Staff([$employee]);
 $b_and_b = new Bussiness($staff);
 $employee2 = new Employee('Jonathan', 'Baker');
 $b_and_b->hire($employee2);
 var_dump($b_and_b->getStaffMembers());



?>
