<?php

namespace App\Controls\Grido;

class Grid extends \Grido\Grid {

    /**
     * Custom condition callback for filter birthday.
     * @param string $value
     * @return array|NULL
     */
    public function birthdayFilterCondition($value)
    {

        $date = explode('/', $value);
        foreach ($date as &$val) {
            $val = (int) $val;
        }

        return count($date) == 3
            ? array('created_at', '= ?', "{$date[2]}-{$date[1]}-{$date[0]}")
            : NULL;
    }

}