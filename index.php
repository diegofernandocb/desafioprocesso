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

     //bloco de consulta para verificar quais os processos de A��O DE DIV�RCIO
//#########################################################################################################
            echo utf8_encode('todos os processos da 4� Vara<br><br>');
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
       $search = ' 4� Vara';
               if (preg_match("/{$search}/", $string)) {
                  $idconteudo = $row_conteudo['id'];
	              $haystack = $string;
                  $needle   = 'RELA��O N�';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);

if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." N�o consta no N� de processo<BR>");
} else {
     echo utf8_encode("ID do Processo: ".$idconteudo . " N� do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
     echo utf8_encode(substr($haystack, ($posj),46))."<BR><br>";

}


                  }
           }



                     // echo json_encode($json_array);
                /*    echo '<pre>';
                    print_r($json_array);  // imprimindo o dados json
                    echo '</pre>';
                    */
     //bloco de consulta para verificar quais s�o os processos referente a processos de alimenta��o
//#####################################################################################################
    echo utf8_encode('<br><br>todos os processos de alimenta��o<br><br>');
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
                  $needle   = 'RELA��O N�';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);

if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." N�o consta no N� de processo<BR>");
} else {
     echo utf8_encode("ID do Processo: ".$idconteudo . " N� do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
     echo utf8_encode(substr($haystack, ($posj),46))."<BR><br>";

}


                  }

           }
      //bloco de consulta para verificar quais os processos de paterinidade
//#########################################################################################################
       echo utf8_encode('<br><br>todos os processos de investiga��o de paternidade<br><br>');
            $query = "SELECT * from publicacoes_fila_2020_08_02";
             $result = mysqli_query($mysqli, $query);
            while($row_conteudo = mysqli_fetch_assoc($result)){
    //$tipoproc = utf8_encode($row_conteudo['ra_conteudo']);
    $tipoproc = $row_conteudo['ra_conteudo'];
       // echo "<p>". $row_conteudo['id'] . "--->" . $tipoproc ."</p>";

       $string = $tipoproc;
       $search = 'investiga��o de paternidade';
               if (preg_match("/{$search}/", $string)) {
$idconteudo = $row_conteudo['id'];
	              $haystack = $string;
                  $needle   = 'RELA��O N�';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);

if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." N�o consta no N� de processo<BR>");
} else {
     echo utf8_encode("ID do Processo: ".$idconteudo . " N� do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
     echo utf8_encode(substr($haystack, ($posj),46))."<BR><br>";

}

                  }
        }
      //bloco de consulta para verificar quais os processos de A��O DE DIV�RCIO
//#########################################################################################################
            echo utf8_encode('<br><br>todos os processos de A��O DE DIV�RCIO<br><br>');
            $query = "SELECT * from publicacoes_fila_2020_08_02";
             $result = mysqli_query($mysqli, $query);
            while($row_conteudo = mysqli_fetch_assoc($result)){
    //$tipoproc = utf8_encode($row_conteudo['ra_conteudo']);
    $tipoproc = $row_conteudo['ra_conteudo'];
       // echo "<p>". $row_conteudo['id'] . "--->" . $tipoproc ."</p>";


       $string = $tipoproc;
       $search = 'A��O DE DIV�RCIO';
               if (preg_match("/{$search}/", $string)) {
$idconteudo = $row_conteudo['id'];
	              $haystack = $string;
                  $needle   = 'RELA��O N�';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);

if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." N�o consta no N� de processo<BR>");
} else {
     echo utf8_encode("ID do Processo: ".$idconteudo . " N� do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
     echo utf8_encode(substr($haystack, ($posj),46))."<BR><br>";

}

                  }
           }
            //bloco de consulta para verificar quais os processos de A��O DE DIV�RCIO
//#########################################################################################################
            echo utf8_encode('<br><br>todos os processos de Invent�rio<br><br>');
            $query = "SELECT * from publicacoes_fila_2020_08_02";
             $result = mysqli_query($mysqli, $query);
            while($row_conteudo = mysqli_fetch_assoc($result)){
    //$tipoproc = utf8_encode($row_conteudo['ra_conteudo']);
    $tipoproc = $row_conteudo['ra_conteudo'];
       // echo "<p>". $row_conteudo['id'] . "--->" . $tipoproc ."</p>";


       $string = $tipoproc;
       $search = 'Invent�rio';
               if (preg_match("/{$search}/", $string)) {
$idconteudo = $row_conteudo['id'];
	              $haystack = $string;
                  $needle   = 'RELA��O N�';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);

if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." N�o consta no N� de processo<BR>");
} else {
     echo utf8_encode("ID do Processo: ".$idconteudo . " N� do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
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
       $search = 'Invent�rio';
       $searcha = 'A��O DE DIV�RCIO';
       $searchb = 'investiga��o de paternidade';
       $searchc = 'ALIMENTOS';
       $searchd = ' 4� Vara';
               if ((preg_match("/{$searchd}/", $string)) || (preg_match("/{$search}/", $string)) || (preg_match("/{$searcha}/", $string)) || (preg_match("/{$searchb}/", $string)) || (preg_match("/{$searchc}/", $string)) ) {
	              //echo 'true';

                  }
                  else{

                  $idconteudo = $row_conteudo['id'];
	              $haystack = $string;
                  $needle   = 'RELA��O N�';
                  $pos      = strripos($haystack, $needle);
                  $needlej = 'JUIZ(A) DE DIREITO';
                  $posj      = strripos($haystack, $needlej);
if ($pos === false) {
    echo  utf8_encode("ID do Processo: ".$idconteudo." N�o consta no N� de processo<BR>");
} else {
    echo utf8_encode("ID do Processo: ".$idconteudo . " N� do Processo: " . substr($haystack, ($pos + 77),25))."<BR>";
     echo utf8_encode(substr($haystack, ($posj),46))."<BR><br>";
}

                  }
           }

               ?>
                
                </p>
        </fieldset>
</body>
</HTML>
