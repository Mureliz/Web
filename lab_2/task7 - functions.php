<?php
function printStringReturnNumber()
{
    echo "String\n";
    return 42;
}

$my_num = printStringReturnNumber();
echo $my_num;
