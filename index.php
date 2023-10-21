<?php 
$earning = 0;
$titthe = 0;
$kingdom = 0;
$pastor = 0;
$wife = 0;
$family = 0;
$saviings = 0;
$reduction = 0;
$leftover = 0;
if(isset($_GET['submit'])){
$earning = $_GET['Earning'];
$titthe  = (10 * $earning )/100 ;
$kingdom  = (5 * ($earning - $titthe) )/100 ;
$pastor = (5 * ($earning - $titthe - $kingdom ) )/100 ;
$wife = (5 * ($earning - $titthe - $kingdom - $pastor) )/100 ;
$family  =  (5 * ($earning - $titthe - $kingdom - $pastor - $wife) )/100 ;
$saviings =  (10 * ($earning - $titthe - $kingdom - $pastor - $family) )/100 ;
$reduction   =   ( $titthe + $kingdom + $pastor + $wife + $family + $saviings)  ;

$leftover  =  ($earning - $reduction ) ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
 
    <div class='wrapper'>
        <div class=''>
        <form class='cen'  method="GET">
            <h2> <label for="Earning"> Earnings</label> </h2>
           
            <input type="number" placeholder='Enter Your Earning'name='Earning' class ='myinput'> 
            <input type="submit" value='Calculate'  name='submit' class ='mysubmit'>
            <p>You can Spend this <strong> N<?php echo number_format(ceil($leftover)); ?> </strong >any how </p>

        </form>
        <hr>
        </div>
        <div class='cen'>
        <h2> Earnings: N <?php  echo number_format($earning )?></h2>
        <h2> Titthe: N<?php  echo number_format (ceil($titthe)) ?></h2>
        <h2> Kingdom: N<?php  echo number_format(ceil($kingdom ))?></h2>
        <h2> Pastor: N<?php  echo number_format(ceil( $pastor) )?></h2>
        <h2> Wife: N<?php  echo number_format(ceil( $wife ))?></h2>
        <h2> Family: N<?php  echo number_format(ceil( $family)) ?></h2>
        <h2> Saviings: N<?php  echo number_format(ceil( $saviings)) ?></h2>
        <h1 > TOTAL: N<?php  echo number_format(ceil($reduction)) ?></h1>

         
        </div>
        
    </div>
    
</body>
</html>