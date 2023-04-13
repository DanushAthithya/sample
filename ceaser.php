<?php
// $text=$_POST["text"];
// $key=(int)$_POST["key"];
$text="Hi";
$key=3;
$coun=strlen($text);
for($i=0;$i<$coun;$i++)
{
    if($text[$i]!=" ")
    {
        $in=intval($text[$i]);
        echo $in;
        $in=$in+$key;
        if($in>122)
        {
            $k=$in-122;
            $in=96+$k;
            echo $in;
        }
        else if($in>90 && $in<97)
        {
            $k=$in-90;
            $in=64+$k;
            echo $in;
        }
        $st=chr($in);
        $text[$i]=$st;
    }
}
echo("$text");
?>
