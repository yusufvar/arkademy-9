<?php
function handshake($n)
{
    if ($n == 0)
    return 0;
    else 
    return ($n - 1) + handshake ($n - 1);

}
$n = 6;
echo(handshake($n));