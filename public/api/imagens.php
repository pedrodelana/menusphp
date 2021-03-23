<div class="titulo">Imagens</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<?php
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

$types = array( 'png', 'jpg', 'jpeg', 'gif' );
$path = __DIR__ . '/../files/';
$dir = new DirectoryIterator($path);

if (move_uploaded_file($tmp, $arquivo))
{
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
}
else
{
    echo "<br>Erro no upload de arquivo!";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<br>


<div class="container-fluid">
    <div class="row">    
        <?php foreach ($dir as $fileInfo): ?> 
            <?php $ext = strtolower( $fileInfo->getExtension() ); if( in_array( $ext, $types )) :  ?> 
            <div class="col-md-3">                
                <img src="<?= '../files/' .   $fileInfo ?>" alt="">                                
            </div>
            <?php endif ?>
        <?php endforeach ?>
    
    </div>
</div>


<style>
    input, button {font-size: 1.2rem;}
    img {height: 15vh; width:100%;margin: 10px;}
</style>