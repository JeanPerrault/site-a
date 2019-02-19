<?php

echo "Hello World.<br>\n";
echo "Hello World.<br>\n", "Goodbye world.<br>\n";

print "Hello world.<br>"; // renvoie un entier (1)

var_dump(['hello','world']);

print_r(['hello','world']);

var_dump(false);
print_r(false);

echo "---";

$str_h1 ="PHP";

echo "<h1>Sorties $str_h1</h1>";
?>

<h1>Sorties <?php echo $str_h1; ?></h1>
<!-- ou -->
<h1>Sorties <?= $str_h1; ?></h1>

