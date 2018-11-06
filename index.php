<?php  

/*
|------------------------------------------------------
|   Prime number function
|-------------------------------------------------------
*/
function PHPPrimeNumber($startnumber,$endnumber){    
    $totalPrime=0;
    $sumPrime=0;
    for($i=$startnumber;$i<=$endnumber;$i++){        
        $flag=0;
        for($x=2; $x<=$i/2; $x++){
            if($i % $x==0){                
               $flag++;
                break;
            }
        }
        if($flag==0){
           $sumPrime=+$i." prime <br/>";
           $totalPrime+=1;
        }
    }
    echo "Prime Number of 0-100000 number. note:- for one-million number execution time out<br/>";
    echo "Total Prime number= ".$totalPrime."<br/>";
    echo "Sum of Prime number= ".$sumPrime;

}

/* call function */
PHPPrimeNumber(1,100000)
?>
