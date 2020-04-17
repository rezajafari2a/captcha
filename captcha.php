<?php

class rjzcaptcha_persian
{

    private function makecaptcha()
    {
        $number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $adad = ['یک', 'دو', 'سه', 'چهار', 'پنج', 'شش', 'هفت', 'هشت', 'نه', 'ده'];
        $oper = ["+", '-'];
        $operand = ["جمع", 'تفریق'];
        $r1 = rand(0, 9);
        $r2 = rand(0, 9);
        if ($r1 < $r2) {
            $r1 = $r2;
        }
        $o = rand(0, 1);
        return array("strcode" => $adad[$r1] . " " . $oper[$o] . " " . $adad[$r2]
            , "code" => $r1 . "" . $r2);
    }
    private function checkcaptcha($str)
    {
        $number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $adad = ['یک', 'دو', 'سه', 'چهار', 'پنج', 'شش', 'هفت', 'هشت', 'نه', 'ده'];
        $oper = ["+", '-'];
        $operand = ["جمع", 'تفریق'];
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $strcode = $_SESSION['stcode'];
        $strcode = explode(" ", $strcode);
        $r1 = $number[array_search($strcode[0], $adad)];
        $r2 = $number[array_search($strcode[2], $adad)];
        if ($strcode[1] == "-") {
            $o = "-";
        } else {
            $o = "+";
        }
        $ma = "$r1 $o $r2";
        $str1 = intval(eval('return ' . $ma . ';'));
        if ($str1 == intval($str)) {
            return true;
        } else {
            return false;
        }
    }
}
