<?php
    function getSum($n1, $n2)
    {
        return $n1 + $n2;
    }
    function getRaz($n1, $n2)
    {
        return $n1 - $n2;
    }
    function getRew($n1, $n2)
    {
        return $n1 * $n2;
    }
    function getDel($n1, $n2)
    {
        if ($n2 === 0) return 'Дулить на ноль нельзя';
        return $n1 / $n2;
    }
    function Calculate()
    {
        if (isset($_GET['calculate']))
        {
            switch ($_GET['todo'])
            {
                case '+':

                break;
                case '-':

                break;
                case '*':

                break;
                case '/':
            }
        }
    }
