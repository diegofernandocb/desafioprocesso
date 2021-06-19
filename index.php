<?php include_once("conexao.php"); ?>


<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<body>
        <h1>conteudo</h1>
        <fieldset class="row2">
          <legend><font color="white">-</font></legend>
            <p>

     <?php

     //bloco de consulta para verificar quais os processos de AÇÃO DE DIVÓRCIO
//#########################################################################################################
            echo utf8_encode('todos os processos da 4ª Vara<br><br>');
            $query = "SELECT * from publicacoes_fila_2020_08_02";
             $result = mysqli_query($mysqli, $query);

                $json_array = array(); // array do json
            while($row_conteudo = mysqli_fetch_assoc($result)){
    //$tipoproc = utf8_encode($row_conteudo['ra_conteudo']);

                  $json_array[] = $row_conteudo; // populando o array json
    $tipoproc = $row_conteudo['ra_conteudo'];
    $id = $row_conteudo['id'];


       // echo "<p>". $row_conteudo['id'] . "--->" . $tipoproc ."</p>";

       $string = $tipoproc;
       $search = ' 4ª Vara';
               if (preg_match("/{$search}/", $string)) {
                  $idconteudo = $row_conteudo['id'];
	              $haystack = $string;
                  $needle   = 'RELAÇÃO Nº';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);

if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." Não consta no Nº de processo<BR>");
} else {
     echo utf8_encode("ID do Processo: ".$idconteudo . " Nº do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
     echo utf8_encode(substr($haystack, ($posj),46))."<BR><br>";

}


                  }
           }



                     // echo json_encode($json_array);
                /*    echo '<pre>';
                    print_r($json_array);  // imprimindo o dados json
                    echo '</pre>';
                    */
     //bloco de consulta para verificar quais são os processos referente a processos de alimentação
//#####################################################################################################
    echo utf8_encode('<br><br>todos os processos de alimentação<br><br>');
    $query = "SELECT * from publicacoes_fila_2020_08_02";
    $result = mysqli_query($mysqli, $query);

    while($row_conteudo = mysqli_fetch_assoc($result)){
    //$tipoproc = utf8_encode($row_conteudo['ra_conteudo']);
    $tipoproc = $row_conteudo['ra_conteudo'];
       // echo "<p>". $row_conteudo['id'] . "--->" . $tipoproc ."</p>";

       $string = $tipoproc;
       $search = 'ALIMENTOS';
               if (preg_match("/{$search}/", $string)) {
                  $idconteudo = $row_conteudo['id'];
	              $haystack = $string;
                  $needle   = 'RELAÇÃO Nº';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);

if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." Não consta no Nº de processo<BR>");
} else {
     echo utf8_encode("ID do Processo: ".$idconteudo . " Nº do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
     echo utf8_encode(substr($haystack, ($posj),46))."<BR><br>";

}


                  }

           }
      //bloco de consulta para verificar quais os processos de paterinidade
//#########################################################################################################
       echo utf8_encode('<br><br>todos os processos de investigação de paternidade<br><br>');
            $query = "SELECT * from publicacoes_fila_2020_08_02";
             $result = mysqli_query($mysqli, $query);
            while($row_conteudo = mysqli_fetch_assoc($result)){
    //$tipoproc = utf8_encode($row_conteudo['ra_conteudo']);
    $tipoproc = $row_conteudo['ra_conteudo'];
       // echo "<p>". $row_conteudo['id'] . "--->" . $tipoproc ."</p>";

       $string = $tipoproc;
       $search = 'investigação de paternidade';
               if (preg_match("/{$search}/", $string)) {
$idconteudo = $row_conteudo['id'];
	              $haystack = $string;
                  $needle   = 'RELAÇÃO Nº';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);

if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." Não consta no Nº de processo<BR>");
} else {
     echo utf8_encode("ID do Processo: ".$idconteudo . " Nº do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
     echo utf8_encode(substr($haystack, ($posj),46))."<BR><br>";

}

                  }
        }
      //bloco de consulta para verificar quais os processos de AÇÃO DE DIVÓRCIO
//#########################################################################################################
            echo utf8_encode('<br><br>todos os processos de AÇÃO DE DIVÓRCIO<br><br>');
            $query = "SELECT * from publicacoes_fila_2020_08_02";
             $result = mysqli_query($mysqli, $query);
            while($row_conteudo = mysqli_fetch_assoc($result)){
    //$tipoproc = utf8_encode($row_conteudo['ra_conteudo']);
    $tipoproc = $row_conteudo['ra_conteudo'];
       // echo "<p>". $row_conteudo['id'] . "--->" . $tipoproc ."</p>";


       $string = $tipoproc;
       $search = 'AÇÃO DE DIVÓRCIO';
               if (preg_match("/{$search}/", $string)) {
$idconteudo = $row_conteudo['id'];
	              $haystack = $string;
                  $needle   = 'RELAÇÃO Nº';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);

if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." Não consta no Nº de processo<BR>");
} else {
     echo utf8_encode("ID do Processo: ".$idconteudo . " Nº do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
     echo utf8_encode(substr($haystack, ($posj),46))."<BR><br>";

}

                  }
           }
            //bloco de consulta para verificar quais os processos de AÇÃO DE DIVÓRCIO
//#########################################################################################################
            echo utf8_encode('<br><br>todos os processos de Inventário<br><br>');
            $query = "SELECT * from publicacoes_fila_2020_08_02";
             $result = mysqli_query($mysqli, $query);
            while($row_conteudo = mysqli_fetch_assoc($result)){
    //$tipoproc = utf8_encode($row_conteudo['ra_conteudo']);
    $tipoproc = $row_conteudo['ra_conteudo'];
       // echo "<p>". $row_conteudo['id'] . "--->" . $tipoproc ."</p>";


       $string = $tipoproc;
       $search = 'Inventário';
               if (preg_match("/{$search}/", $string)) {
$idconteudo = $row_conteudo['id'];
	              $haystack = $string;
                  $needle   = 'RELAÇÃO Nº';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);

if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." Não consta no Nº de processo<BR>");
} else {
     echo utf8_encode("ID do Processo: ".$idconteudo . " Nº do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
     echo utf8_encode(substr($haystack, ($posj),46))."<BR><br>";

}
                  }
           }
 //bloco de consulta para verificar quais os processos de outros tipos
//#########################################################################################################
            echo utf8_encode('<br><br>todos os processos de outros<br><br>');
            $query = "SELECT * from publicacoes_fila_2020_08_02";
             $result = mysqli_query($mysqli, $query);
            while($row_conteudo = mysqli_fetch_assoc($result)){
    //$tipoproc = utf8_encode($row_conteudo['ra_conteudo']);
    $tipoproc = $row_conteudo['ra_conteudo'];
       // echo "<p>". $row_conteudo['id'] . "--->" . $tipoproc ."</p>";


       $string = $tipoproc;
       $search = 'Inventário';
       $searcha = 'AÇÃO DE DIVÓRCIO';
       $searchb = 'investigação de paternidade';
       $searchc = 'ALIMENTOS';
       $searchd = ' 4ª Vara';
               if ((preg_match("/{$searchd}/", $string)) || (preg_match("/{$search}/", $string)) || (preg_match("/{$searcha}/", $string)) || (preg_match("/{$searchb}/", $string)) || (preg_match("/{$searchc}/", $string)) ) {
	              //echo 'true';

                  }
                  else{

                  $idconteudo = $row_conteudo['id'];
	              $haystack = $string;
                  $needle   = 'RELAÇÃO Nº';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);
if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." Não consta no Nº de processo<BR>");
} else {
    echo utf8_encode("ID do Processo: ".$idconteudo . " Nº do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
     echo utf8_encode(substr($haystack, ($posj),46))."<BR><br>";
}

                  }
           }

               ?>
                
                </p>
        </fieldset>
</body>
</HTML>
