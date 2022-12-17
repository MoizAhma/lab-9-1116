<?php
     //Activity 1
     echo "<h3>Activity 1</h3>";
    echo "Email: ";
    echo $_POST ["email"];
    echo "<br>";
    echo "Password: ";
    echo $_POST ["password"];
    echo "<br>";
    if ($_POST ["email"] == "") {
        echo "The Email field cannot be blank<br>";
    }
    if ($_POST ["password"] == "") {
        echo "The Password field cannot be blank<br>";
    }
    //Activity 3
    echo "<h3>Activity 2</h3>";
    echo "Slected: ";
    echo $_POST ["gradio"];
    echo "<br>";
     //Activity 3
     echo "<h3>Activity 3</h3>";
    echo "Check Box: ";
    if(isset($_POST['checkbox'])){
        echo "True";
    }
    else{
        echo"False";
    }
    //Activity4
    echo "<h3>Activity 4</h3>";
    $arr = array('2','3','4','7','8','5');
    function sorting($arr , $str){
    if($str == "ASC")
    {
        asort($arr);
        echo "Ascending Sort: ";
        foreach($arr as $ascendarray)
        {
            echo $ascendarray;
            echo "<br>"; 
        }
    }
    else if($str == "DESC")
    {
        rsort($arr);
        echo "Descending Sort: ";
        echo "<br>";
        foreach($arr as $descendarray)
        {
            echo $descendarray;
            echo "<br>"; 
        }
    }
 }   
    sorting($arr , "DESC");
    //Activity5
    echo "<h3>Activity 5</h3>";
    if ($_POST['gradio'] == "option 1") {
    $random_number_array = range(0, 100);
    shuffle($random_number_array);
    echo "Random Array: ";
    foreach ($random_number_array as $a) {
        echo "$a,";
    }
    echo "</br>";
    echo "Sorted Array: ";
    sorting($random_number_array, "DESC");
    }
    //Activity 6
    echo "<h3>Activity 6</h3>";
    if ($_POST['gradio'] == "option 2") {
    $limit_random_array_values = range(0, 100);
    shuffle($limit_random_array_values);
    $random_array_value = array_slice($limit_random_array_values, 0, 100);
    echo "<pre>";
    print_r($random_array_value);
    echo "</pre>";
    reset($random_array_value);
    echo "<pre>";
    print_r($random_array_value);
    echo "</pre>";
    }
    
?>