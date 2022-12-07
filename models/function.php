<?php

class separer
{
    static public function foreachALl($vars, $var)
    {
        foreach ($vars as $var) {
            if ($vars == 'users') {
                $var = 'user';
            } elseif ($vars == 'admins') {
                $var = 'admin';
            } elseif ($vars == 'members') {
                $var = 'member';
            }elseif($vars == 'items') {
                $var = 'item';
            }elseif($vars == 'categories') {
                $var = 'category';
            }
        }
        return $var;
    }
}
?>