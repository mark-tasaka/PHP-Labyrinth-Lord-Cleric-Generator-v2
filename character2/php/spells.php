<?php

function spellsLevel1($level)
{
    if($level == 1)
    {
        return 1;
    }
    else if($level >= 2 && $level <= 3)
    {
        return 2;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 3;
    }
    else if($level >= 7 && $level <= 9)
    {
        return 4;
    }
    else if($level >= 10 && $level <= 12)
    {
        return 5;
    }
    else if($level >= 13 && $level <= 14)
    {
        return 6;
    }
    else if($level >= 15 && $level <= 16)
    {
        return 7;
    }
    else if($level >= 17 && $level <= 18)
    {
        return 8;
    }
    else
    {
        return 9;
    }

}


?>