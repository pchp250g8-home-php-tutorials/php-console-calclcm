<?php
    system("cls");
    echo("Enter the first integer number\r\n");
    $strLine = chop(fgets(STDIN));
    $iNum1 = intval($strLine);
    echo("Enter the second integer number\r\n");
    $strLine = chop(fgets(STDIN));
    $iNum2 = intval($strLine);
    $iVal1 = abs($iNum1);
    $iVal2 = abs($iNum2);
    if( $iVal1 > 0 && $iVal2 > 0)
    {
        $iVal3 = $iVal1;
        $iVal4 = $iVal2;
        while ($iVal1 != $iVal2) 
        {
            if($iVal1 > $iVal2)
            {
                $iVal1 -= $iVal2;
                $iVal3 += $iVal4;
            }
            else
            {
                $iVal2 -= $iVal1;
                $iVal4 += $iVal3;
            }
                
        }
        $nLcm = ($iVal3 + $iVal4) / 2;
        printf("The Lcm of the numbers %d and %d is %d\r\n", $iNum1, $iNum2, $nLcm);
    }
    else
    {
        echo("The numbers must not be equal 0");
    }
    fgetc(STDIN);
?>