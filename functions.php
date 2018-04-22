<?php
function task2($z, $a)
{
    $c = $a[0];
    $d = count($a);
    switch ($z) {
        case '+':
            for ($i = 1; $i < $d; $i++)
                $c += $a[$i];
            return $c;
       case '-':
            for ($i = 1; $i < $d; $i++)
                $c -= $a[$i];
            return $c;
        case '*':
            for ($i = 1; $i < $d; $i++)
               $c = $c * $a[$i];
            return $c;
        case '/':
            for ($i = 1; $i < $d; $i++)
                $c = $c / $a[$i];
            return $c;
        default;
            echo "ВВеденное арифметическое действие не заданно, введите пожалуйста:  '+' или '-' или '*' или ;
            '/'. ";
   }
}
?>
<?php
function task4($z, $a)
{
    echo "<html>";
    echo "<head></head>";
    echo "<body>";
    echo "<table>";
    if ($z < 9 and $a < 9) {
        for ($i = 1; $i <= $z; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $a; $j++) {
                echo "<td>";
                echo $i * $j;
                echo "</td>";
            }
            echo "</tr>";
        }
    } else {
        echo 'введите два  целых числа от 1 до 8 :' . '<br>';
    }
    echo "</table>";
    echo "</body>";
    echo "</html>";
}
?>
<?php
function task3()
{
    $mas = func_get_args();
    $s = $mas[1][0];
    $c=0;
    $d = count($mas[1]);
    $z = $mas[0][0];
    echo $str = join('+', $mas[1]).'=';
    switch ($z) {
        case '+':
            for ($i = 0; $i < $d; $i++)
                $c += $mas[1][$i];
            return $c;
        case '-':
            for ($i = 0; $i < $d; $i++)
                $c -= $mas[1][$i];
            return $c;
        case '*':
            for ($i = 0; $i < $d; $i++)
                $c = $c * $mas[1][$i];
            return $c;
        case '/':
            for ($i = 0; $i < $d; $i++)
                $c = $c / $mas[1][$i];
            return $c;
        default;
            echo "ВВеденное арифметическое действие не заданно, введите пожалуйста:  + или - или * или / ";
    }
    echo $s;
}
?>
<?php
function task5($a)
{
    if ($a == strrev($a)) {
        return true;
    } else {
        return false;
    }
}
function task55($a)
{
    if (task5($a)) {
        echo 'строка является полиндром.'.'<br>';
    } else {
        echo 'строка не является полиндром.'.'<br>';
    }
}
function task1($arr = array(), $d = 0)
{
    if ($d) {
        $str = join('', $arr);
        return $str;
    } else {
        for ($i = 0; $i < count($arr); $i++) {
            echo '<p>';
            echo $arr [$i];
            echo '</p>';
        }
    }
}
function task6 ()
{
    $time = mktime(16,30,0,4,7,2018);
    $timme = mktime(0,0,0,02,24,2016);
    return date('d.m.Y.H:i', $time).'<br>'.$timme;
}
function task7($a, $b, $t)
{
    echo strtr($a, $b, $t). '<br>';
}
function task72($str)
{
    $order = array("K", "К");
    $replace = "";
    echo $newstr = str_replace($order, $replace, $str).'<br>';
}
function task8 () {
    $data = file_get_contents('test.txt');
    echo $data.'<br>';
}
function task9 () {
    file_put_contents('anothertest.txt',"Hello again!");
    $data = file_get_contents('anothertest.txt');
    echo $data;
}