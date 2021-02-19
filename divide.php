<?php
//function inverse($x) {
//    if (!$x) {
//        throw new Exception('Division by zero.');
//    }
//    return 1/$x;
//}
//
//try {
//    echo inverse(5) . "\n";
//} catch (Exception $e) {
//    echo 'Caught exception: ',  $e->getMessage(), "\n";
//} finally {
//    echo "First finally.\n";
//}
//
//try {
//    echo inverse(0) . "\n";
//} catch (Exception $e) {
//    echo 'Caught exception: ',  $e->getMessage(), "\n";
//} finally {
//    echo "Second finally.\n";
//}

function divide($numerator, $denominator){
    if ($denominator === 0){
//            throw new DivideByZeroException();
        throw new Exception('Division by zero.');
    }
    return $numerator / $denominator;
}
try {
    echo divide(15,0);

}catch (Exception $e){
    echo $e->getMessage();
}