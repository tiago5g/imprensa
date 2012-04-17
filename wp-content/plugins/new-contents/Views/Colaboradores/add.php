<style type="text/css">
.postbox .inside {
        display: table;
}
.postbox .inside .teste{
    float: right;
    padding-left: 10px;
}
 .postbox .inside .teste2{
    float: left;
}
</style>
<script type="text/javascript">
    window.onload = function(){
        document.getElementById('post').enctype = 'multipart/form-data';
    }
</script>
<div class="teste2">
        <?php if($url=get_post_meta($colaborador->ID, 'foto', true)):?>
        <img src="<?php echo $url; ?>" width="144" height="144"/>
        <?php        endif;?>
</div>
<div class="teste">
        <label style="padding-right: 80px">Função:</label>
        <input type="text" name="funcao" id="funcao" value="<?php echo get_post_meta($colaborador->ID,'funcao', true);?>"/><br> <br>
        <label>Foto do Colaborador:</label>
        <input type="file" name="foto" id="upload_field"/>
</div>