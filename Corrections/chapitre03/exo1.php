<?php 
    // Considérons 
    //$a = 3, 
    // $b = 9, 
    // $c = false, 
    // $d = !($c), 
    // $e = 9.

    // 1. ($a > 8)
    // (3 > 8)
    // false

    // 2. ($b == 9)
    // (9 == 9)
    // true

    // 3. !($a != 3)
    // !(3 != 3)
    // !(false)
    // true

    // 4. !($c)
    // !(false)
    // true

    // 5. ($a < $b) || $c
    // (3 < 9) || false
    // true || false
    // true

    // 6. !(($a + $b) != 12)
    // !((3 + 9) != 12)
    // !(12 != 12)
    // !(false)
    // true

    // 7. (($b == 5) || (($e > 10) && ($a < 8)))
    // ((9 == 5) || ((9 > 10) && (3 < 8)))
    // (false || (false && true))
    // (false || false)
    // false

    // 8. ((($b == 5) || (($e > 10) && ($a < 8))) || ($a < $b) || $c) && $c
    // (((9 == 5) || ((9 > 10) && (3 < 8))) || (3 < 9) || false) && false
    // ((false || (false && true)) || true || false) && false
    // ((false || false) || true || false) && false
    // (false || true || false) && false
    // true && false
    // false

    // 9. $a != 3
    // 3 != 3
    // false

    // 10. !($d) || $c
    // !(true) || false
    // false || false
    // false

    // 11. (($a + $b) == 12) && $d
    // ((3 + 9) == 12) && true
    // (12 == 12) && true
    // true && true
    // true

    // =====
    // $a = true, $b = false

    // 12. $a || $b && $b
    // true || false && false
    // true || (false && false)
    // true || false
    // true

    // 13. $a || $b and $b
    // true || false and false
    // (true || false) and false
    // true and false
    // false

    // 14. $b and $a || $a
    // false and true || true
    // false and (true || true)
    // false and true
    // false

    // 15. $b and $a or $a
    // false and true or true
    // (false and true) or true
    // false or true
    // true

    // 16. $f = $b || $a
    // $f = false || true
    // $f = (false || true)
    // $f = true

    // 17. $g = $b or $a
    // $g = false or true
    // ($g = false) or true
    // $g = false

    // 18. $h = $a && $b
    // $h = true && false
    // $h = (true && false)
    // $h = false

    // 19. $i = $a and $b
    // $i = true and false
    // ($i = true) and false
    // $i = true

    // 20. $b || $a && $b || $a && !$b
    // false || true && false || true && !false
    // false || true && false || true && true
    // false || (true && false) || (true && true)
    // false || false || true
    // true
?>