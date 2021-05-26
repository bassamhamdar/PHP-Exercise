<?php

function check($word){
    $word = $_POST['word'];
    $rev = strrev($word);

    if($word == $rev){
        echo "$word is a Palindrome";
    }else{
        echo "$word is Not a Palindrome";
    }
}
if (isset($_POST['submit'])){
     check($word);
}

?>
<html>
    <form method="POST">
        <input type="text" name="word" required>
        <button type="submit" name="submit">Submit</button>
    </form>        
</html>





