<?php

  echo "Agora são ".date('H:i:s');

  $hora = date('H');
  if ($hora > 6 && $hora <12) {
    echo "  <br/><br/> Bom Dia";
  } else {
    if ($hora > 12 && $hora <18) {
      echo " <br/><br/> Boa Tarde";
    } else {
      echo "  <br/><br/> Boa Noite";
    }

  }

 ?>
