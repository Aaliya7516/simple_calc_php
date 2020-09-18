<?php
    $a = intval($_POST["a"]);
    $b = intval($_POST["b"]);
    $op = $_POST["op"];

    if ($op == 'add')
    {
        $c = $a + $b;
        echo ("Sum of $a and $b is $c");
    }
    else if ($op == 'sub')
    {
        $c = $a - $b;
        echo ("Difference of $a and $b is $c");
    }
    else if ($op == 'mul')
    {
        $c = $a * $b;
        echo ("Product of $a and $b is $c");
    }
    else if ($op == 'div')
    {
        $c = $a / $b;
        echo ("$a divided by $b is $c");
    }
    else if ($op == 'exp')
    {
        $c = $a ** $b;
        echo ("$a raised to the power of $b is $c");
    }
    else if ($op == 'cct')
    {
        $c = $a . $b;
        echo ("Concatination of $a and $b is $c");
    }
    else if ($op == 'mod')
    {
        $c = $a % $b;
        echo ("Modulus of $a and $b is $c");
    }
    else if ($op == 'exit')
    {
        exit();
    }

?>