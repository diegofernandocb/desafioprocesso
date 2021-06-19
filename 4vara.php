
<?php include_once("conexao.php"); ?><HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
      echo utf8_encode('todos os processos da 4ª Vara em json<br><br>');
            $query = "SELECT * from publicacoes_fila_2020_08_02";
             $result = mysqli_query($mysqli, $query);

                $json_array = array(); // array do json
            while($row_conteudo = mysqli_fetch_assoc($result)){
    //$tipoproc = utf8_encode($row_conteudo['ra_conteudo']);

                  //$json_array[] = $row_conteudo; // populando o array json
    $tipoproc = $row_conteudo['ra_conteudo'];
    $id = $row_conteudo['id'];



       // echo "<p>". $row_conteudo['id'] . "--->" . $tipoproc ."</p>";

       $string = $tipoproc;
       $search = ' 4ª Vara';
               if (preg_match("/{$search}/", $string)) {
                   $idconteudo = $row_conteudo['id'];
                  $stringok = utf8_encode($string);
              //  echo $stringok;
                  $json_array[] =  array('id'=> $idconteudo, 'stringok'=> $stringok);


                  }
           }



                    //echo json_encode($json_array);
                    $fp = fopen('4vara.json', 'w');
                    fwrite($fp, json_encode($json_array));
                    fclose($fp);
                    
                /*    echo '<pre>';
                    print_r($json_array);  // imprimindo o dados json
                    echo '</pre>';
                    */
?>
</BODY>
</HTML>
