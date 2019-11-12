<pre>
<?php
if(isset($_FILES['arquivo'])){

    if(count($_FILES['arquivo']['tmp_name']) > 0){

        for($q = 0; $q < count($_FILES['arquivo']['tmp_name']); $q++){
            $nomeArquivo = md5($_FILES['arquivo']['name'][$q].time().rand(0,999));
            move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivos/'.$nomeArquivo);

            echo "Enviado com Sucesso";
        }
    }
}
?>
</pre>
<form method="post" enctype="multipart/form-data">
    Arquivo:<br>
    <input type="file" name="arquivo[]" multiple><br><br>
    <input type="submit" value="Enviar Arquivos">
</form>
