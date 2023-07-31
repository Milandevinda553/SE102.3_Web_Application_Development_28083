<?php
$uni = 100;
$bil = 0;
if($uni<=50){

    $bil = $uni * 3.50;
    echo "Amount = $bil";

}elseif($uni>50 && $uni<=100){
        $uni = $uni - 50;
        $bil = $uni * 4.00 + 50 * 3.50;
        echo "Amount = $bil";      
}elseif($uni>100 && $uni<=150){
    $uni = $uni - 100;
    $bil = $uni * 5.20 + 50 * 3.50 + 50 * 4.0;
    echo "Amount = $bil";    

}else{
    $uni = $uni - 150;
    $bil = $uni * 6.50 + 50 * 3.50 + 50 * 4.0 + 50 * 5.20 ;
    echo "Amount = $bil";  
}
?>
