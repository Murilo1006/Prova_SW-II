<?php
    $nome=htmlspecialchars($_POST['nome']);
    $lista=$_POST["lista"];
    $numero=$_POST["numero"];
    $itens=$_POST["itens"];
?>

<p>O nome é: <?php echo $nome; ?> </p>
<p>A lista é: <?php echo $lista;"</ul>" ?> </p>
<p>O paragrafo é: <?php echo $numero; ?> </p>
<p>Os itens são: <?php echo $itens; ?> </p>

<?php

    echo "Paragrafos: <br><br>";
    if($numero >10){
        echo "Muitos paragrafos gerados! <br><br>" ;
    }



    if ($numero >1 && $numero <20) {
    echo"<ul>";
        for ($i=1; $i<= $numero ; $i++) {
            echo"<li> $nome $i </li>";
        }
    echo"</ul>";}else{
        echo "ERRADO <br><br>";
    }

?>

<?php
    echo "Paragrafos: <br><br>";
    if($itens >30){
        echo "Lista extensa! <br><br>" ;
    }



    if ($itens >1 && $numero <50) {
    echo"<ul>";
        for ($i=1; $i<= $itens ; $i++) {
            echo"<li> $i $lista </li>";
        }
    echo"</ul>";}else{
        echo "ERRADO <br><br> ";
    }
?>