 <?
 $Test = new RTS_Code_Test();
        $list = array(1,5,2,1,10);
        $comparision = 6;
        $string = "MyString";
        $rotation = 2;

        $tmp1 = $Test->aboveBelow($list,$comparision);
        $tmp2 = $Test->stringRotation($string,$rotation);
        var_dump($tmp1);
        echo $tmp2;
        die();
		?>