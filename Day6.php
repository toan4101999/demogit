<?php
$handle = fopen ("php://stdin","r");
$t = fgets($handle);
while ($userinfo = fscanf($handle, "%s\t%s\t%s\n")) {

for($i = 0; $i < $t; $i++) { 

$s = trim(fgets($handle));

    $newmang=[];
    $mangsai=[];
    for($i=0;$i<=strlen($s)-1;$i++){
        if($i%2==0){
        array_push($newmang,$s[$i]);
    }else{
        array_push($mangsai,$s[$i]);
    }
}
    
    $newmangdung=implode("", $newmang);
    $newmangsai=implode("", $mangsai);
    printf ("%s %s\n", $newmangdung, $newmangsai);
}
}

     fclose($handle);
?>