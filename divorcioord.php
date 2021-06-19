 <?php include_once("conexao.php"); ?>
     <?php

     //bloco de consulta para verificar quais os processos da 4ª vara
//#########################################################################################################
      echo utf8_encode('todos os processos da 4ª Vara<br><br>');
      // colsulta no banco de dados todos os processos contidos.
      $query = "SELECT * from publicacoes_fila_2020_08_02";
      // retorna a colsulta e armazena seu resultado
      $result = mysqli_query($mysqli, $query);
      //cria o array da saida joson
      $json_array = array();
      // cria o loop para pegar cada processo armazenado no db
            while($row_conteudo = mysqli_fetch_assoc($result)){
      // armazenando o testo longo do processo na string onde sera pesquisado as informações
                 $string = $row_conteudo['ra_conteudo'];
      // criando a variavel que devera ser referencia a ser encontrada no texto
                 $search = 'AÇÃO DE DIVÓRCIO';
       // criando a condição para que caso ache a variavel de referencia guarde o dado
               if (preg_match("/{$search}/", $string)) {
       // aramazenando a id dos dados encontrados
                   $idconteudo = $row_conteudo['id'];
       // armazenando o texto longo do processo de onde sera retirada a parte da string
                   $haystack = $string;
       //criando a variavel que deverar ser encontrada na string
                   $needle   = 'RELAÇÃO Nº';
       // variavel que vai receber a string solicitada na função strripos onde encontra o termo dentro do texto longo
                   $pos      = strripos($haystack, $needle);
        //criando a variavel que deverar ser encontrada na string
                   $needlej = 'JUIZ(A) DE DIREITO';
        // variavel que vai receber a string solicitada na função strripos onde encontra o termo dentro do texto longo
                   $posj      = strripos($haystack, $needlej);
        // tratando a string de saida para não ter erro com caracter especial de iso para utf8
                    $stringok = utf8_encode($string);
                    if ($pos === false) {
                    // caso não encontre numero de processo
                     echo  utf8_encode("ID do Processo: ".$idconteudo." Não consta no Nº de processo<BR>");
                            } else {
       // variavel recebendo o numero do processo
       $nproc = utf8_encode(substr($haystack, ($pos + 77),25));
       // variavel recebendo o nome do juiz
     $juiz = utf8_encode(substr($haystack,($posj + 19),30));
       // populando o array json
       $json_array[] =  array('id'=> $idconteudo, 'nproc'=>$nproc, 'juiz'=> $juiz );
                                     }

                                                          }
                                                                   }
        // criando a saida com tipo de arquivo json
          $data =  json_encode($json_array, true);

        // criando a array para ordenar por juiz
          $json = json_decode($data, true);
          usort($json, function($x, $y) {

        return $x['juiz'] > $y['juiz']  ? +1 : -1;

                                        });
       // criando o arquivo com a saida json ordem albetica do juiz
                    $fp = fopen('divorcioord.json', 'w');
                    fwrite($fp, json_encode($json));
                    fclose($fp);
 //print_r($json);
//var_dump($json);
?>
