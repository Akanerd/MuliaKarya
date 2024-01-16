<?php
if (!function_exists('money_format')) {
    function moneyFormat($str)
    {
        return 'Rp. ' . number_format($str,'0','','.');
    }
}
