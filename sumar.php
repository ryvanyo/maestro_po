<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Sumar</title>
  </head>

  <body> 
    <?php
      ?>
      <table>
        <?php

          $contador = 1;
          for($i=0; $i < $_GET["a"]; $i++){
            ?>
            <tr>
            <?php
              for($j=0; $j < $_GET["b"]; $j++){

                echo "<td>".($contador++)."</td>";
                
              }
            ?>
            </tr>
            <?php  
          }

        ?>
      </table>
      <?php  
    echo "";
    ?>
  </body>
</html>