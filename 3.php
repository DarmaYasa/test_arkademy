<?php 

    function count_vowels($word) {
        $count = 0;
        for($i = 0; $i < strlen($word); $i++) {
            if($word[$i]=='a' or $word[$i]=='i' or $word[$i]=='u' or $word[$i]=='e' or $word[$i]=='o') {
                $count++;
            }
        }
        echo $count."<br/>";
    }

    count_vowels("programmer");
    count_vowels("hmm..");