<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>calendario Marcado</title>
  </head>
  <body>

      <?php
         function linha($semana)
         {
           echo "<tr>";
           for ($i=0; $i <= 6; $i++) {
             if (isset($semana[$i])) {

              if ($i == 6) {
                   echo "<td><b><font color='red'>{$semana[$i]}</font></b></td>"; //colocar a cor vermelha
                 } else {
                   if ($i == 5) {
                     echo "<td><b>{$semana[$i]}</b></td>";
                   } else {
                     if (date('d') == $semana[$i]){
                       echo "<td><b>{$semana[$i]}</b></td>";
                     } else {
                     echo "<td>{$semana[$i]}</td>";
                    }
                   }
                 }


             } else {
               echo "<td></td>";
             }

           }
           echo "</tr>";
         }

         function calendario()
         {
           $dia = -1;
           $semana = array();
           while ($dia <= 31) {
             if ($dia <= 0) {
               array_push($semana, null);
             } else {
               array_push($semana, $dia);

               if (count($semana) == 7) {
                 linha($semana);
                 $semana = array();
               }
             }

             $dia++;
           }
           linha($semana);
         }
       ?>


       <table border="1">
         <tr>
           <th>Dom</th>
           <th>Seg</th>
           <th>Ter</th>
           <th>Qua</th>
           <th>Qui</th>
           <th>Sex</th>
           <th>Sáb</th>
         </tr>
         <?php calendario(); ?>
    </table>

  </body>
</html>
