<?php
        global $wpdb ;
	$sql = $wpdb->prepare("SELECT meta_key, meta_value from $wpdb->postmeta INNER JOIN $wpdb->posts
                ON ($wpdb->postmeta.post_id = $wpdb->posts.ID)where post_id = %d",
				$_GET['post']) ;
	$mailing = $wpdb->get_results($sql) ;
        $midia; $email; $acampamento; $cidade; $estado;
        foreach($mailing as $d){
            if($d->meta_key=='email')$email = $d->meta_value;
            if($d->meta_key=='midia')$midia = $d->meta_value;
            if($d->meta_key=='acampamento')$acampamento = $d->meta_value;
            if($d->meta_key=='cidade')$cidade = $d->meta_value;
            if($d->meta_key=='estado')$estado = $d->meta_value;
        }
        $funcao = get_the_terms($_GET['post'],'funcao-credenciamento');
?>
<div>
        <b>E-mail: </b><?=$email?> | <b>Mídia: </b><?=$midia?> | <b>Função: </b><?=$funcao[0]->name?> |
        <b>Acampamento: </b><?=$acampamento?> | <b>Cidade: </b><?=$cidade?> | <b>Estado: </b><?=$estado?>
</div>