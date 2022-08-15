
Kyle Salopek <krs1998@gmail.com>
5:21 PM (3 minutes ago)
to me

<?
class RTS_Code_Test {

    function __constuct()
    {
        //
    }

    function aboveBelow($list=array(),$comparision){
        //loop through the list to find the correct counts
        $results = [];
        $above = 0;
        $below = 0;
        $neither = 0;
        foreach($list as $key => $value){
            if($value > $comparision)
                $above++;
            else if ($value < $comparision)
                $below++;
            else
                $neither++;  //this is to handle a value of equal to the comparision and skip it as it is neither above nor below.
        }
        $result['above'] = $above;
        $result['below'] = $below;
        $result['neither'] = $neither;
        return $result;
    }

    function stringRotation($origin_string,$rotation_amt){

        //find the lenght of the string passed
        $str_length = strlen($origin_string);

        //error.  Let the user know.
        if($rotation_amt > $str_length)
            return "Rotation amount greater than length of string.  Please use a number smaller than {$str_length}.";
        else if ($rotation_amt < 0)
            return "Please rotation by a positive integer value.";
       
        //first find the beginning letters to append
        $overflow = substr($origin_string,-($rotation_amt),$rotation_amt);

        //find the portion of the string that is not part of the 'overflow'
        $new_beginning_str = substr($origin_string,0,($str_length-$rotation_amt));

        //concatinate the new string
        $new_str = $overflow . $new_beginning_str;
        return $new_str;

    }

}

?>
