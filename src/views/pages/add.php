<?php $render('header'); ?> 

<h2>Adicionar novo usuario</h2>
<a href="<?=$base?>">retornar</a>
<form method="POST" action="<?=$base?>/novo">
    <label> Nome: <br>
        <input type="text" name="nome">
    </label> <br><br>

    <label> E-mail: <br>
        <input type="email" name="email">
    </label> <br><br>
        
    <input type="submit" value="Adicionar">
    
</form>

<?php $render('footer'); ?>