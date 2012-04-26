<?php
        global $wpdb ;
	$sql = $wpdb->prepare("SELECT meta_key, meta_value from $wpdb->postmeta INNER JOIN $wpdb->posts
                ON ($wpdb->postmeta.post_id = $wpdb->posts.ID)where post_id = %d",
				$_GET['post']) ;
	$mailing = $wpdb->get_results($sql) ;
        //var_dump($mailing);
        $midia; $tel1; $email; $tel2; $cidade; $estado;
        foreach($mailing as $d){
            if($d->meta_key=='email')$email = $d->meta_value;
            if($d->meta_key=='midia')$midia = $d->meta_value;
            if($d->meta_key=='tel1')$tel1 = $d->meta_value;
            if($d->meta_key=='tel2')$tel2 = $d->meta_value;
            if($d->meta_key=='cidade')$cidade = $d->meta_value;
            if($d->meta_key=='estado')$estado = $d->meta_value;
        }
?>
<div>
        <b>E-mail: </b><?=$email?> | <b>Mídia: </b><?=$midia?> | <b>CPF: </b><?=$cpf?> | <?=$nacionalidade?>
        <b>Telefone 01: </b><?=$tel1?> | <b>Telefone 02: </b><?=$tel2?> | <b>Cidade: </b><?=$cidade?>
         | <b>Estado: </b><?=$estado?>
</div>