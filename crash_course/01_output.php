<!--PHP crash course-->
<!--Also first PHP project-->
<!--Done via https://www.youtube.com/watch?v=BUCiSSyIGGU-->


<!--Html is working well here-->
<!--<h1>Hello world!</h1>-->

<!--php code inside html(with echo we can use just "=" symbol)-->
<h3><?= 123; ?></h3>

<!--php code-->
<?php
// echo - printing number, string, html code
echo "Hello world!";
echo 3;
echo 123, "String";

// print - works like echo but takers only one val
print 666;
print "echo";

// print_r() - printing arr and single var
print_r("George");
print_r([1, 2, 3]);

// var_dump() - returns more info about var(type, length)
var_dump(800);

// var_export - similar to var_dump()(printing more info about var)
var_export("Harry");
