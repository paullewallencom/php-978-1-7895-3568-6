<?php
$worldcup = array(
               array('Brazil', 'Argentina', 'Colombia', 'Uruguay', 'Spain', 'Germany', 'Belgium', 'Switzerland'),
               array('Chile', 'Ecuador', 'Cote d\'Ivoire', 'Ghana', 'Algeria', 'Nigeria', 'Cameroon', 'France'),
               array('Japan', 'Iran', 'Korea Republic', 'Australia', 'USA', 'Mexico', 'Cost Rica', 'Honduras'),
               array('Netherlands', 'Italy', 'England', 'Portugal', 'Greece', 'Bosnia-Herzegovina', 'Croatia', 'Russia')
                  );
echo '<pre>';
print_r($worldcup);
echo '</pre>';
 
   for ($i=0;$i<count($worldcup);$i++){
      for ($j=0;$j<count($worldcup[$i]);$j++){
         echo $worldcup[$i][$j].'<br>';
      }
   }
?>
