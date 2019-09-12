<?php

#   static method : can be used without any object instantiated. It's much faster(it uses less memory because it doesn't have to be instantiated)
// if the object is not instantiated, so you cannot use anything in the object.
// php has "parse time". when php runs, "static" will run first. PHP will find "static" first.
// you cannot use $this inside of static method (because $this doesn't make sense inside static, it refers to what the class has but nothing is instantiated)
// use self::staticMethod()
// you can use class constance within static method because class constance can be used without instantiation as well.


