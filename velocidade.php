<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

      <fieldset><legend>Sistema de multas</legend>

        <form method="POST" action="velocidade.php"> 
        
            velocidade: <input type="number" name="velocidade">
            <input type="submit" value="verificar">
            <input type="submit" value="limpar">

        </form>

        <?php

              if( array_key_exists( 'velocidade', $_POST ) ) {
                $velocidade = $_POST['velocidade'];

                if($velocidade > 70+((10*70)/100) && $velocidade < 80+((10*80)/100)){
            
                  echo "<p>Sua velocidade é de <strong> $velocidade km/h</strong></p><br/> Você está acima da velocidade permida e sua multa é leve";
                }
                    else{
                      if($velocidade >= 80+((10*80)/100) && $velocidade < 90+((10*90)/100)){
                          echo "<p>Sua velocidade é de <strong> $velocidade km/h</strong></p><br/> Você está acima da velocidade permida e sua multa é média";
                    }
                      else{
                        if($velocidade >= 90+((10*90)/100)){
                        echo "<p>Sua velocidade é de <strong> $velocidade km/h</strong></p><br/> Você está acima da velocidade permida e sua multa é grave";
                      }
                        else{
                          if($velocidade > 0 && $velocidade < 70+((10*70)/100)){
                            echo "<p>Sua velocidade é de <strong> $velocidade km/h</strong></p><br/>";
                      }
                    }
                  }     
                }
              }
                            
              if( array_key_exists( 'limpar', $_POST ) ) {
                $velocidade = null;
              }  
        ?>

      </fieldset>
</body>
</html>