<?php 

$text = $_GET['paragraph'];
$word =$_GET['censored'];
$text2= str_replace($word,'***',$text);
?>

<h1>Paragrafo orginale:</h1>
<p> 
    <?php echo$text?>
    <br>
    lunghezza paragrafo originale:<?php echo strlen($text) ?> 
</p>

<h1>Nuovo Paragrafo:</h1>

<p> 
    <?php echo$text2?>
    <br>
    lunghezza paragrafo:<?php echo strlen($text2) ?>
</p>
