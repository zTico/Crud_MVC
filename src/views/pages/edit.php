<?php $render('header'); ?> 

<h2>Editar usuario</h2>
<a href="<?=$base?>">retornar</a>
<form method="POST" action="<?=$base?>/usuario/<?=$usuario['id']?>/editar">
    <label> Nome: <br>
        <input type="text" name="nome" value="<?=$usuario['nome']?>">
    </label> <br><br>

    <label> E-mail: <br>
        <input type="email" name="email" value="<?=$usuario['email']?>">
    </label> <br><br>
        
    <input type="submit" value="Adicionar">
    
</form>

<?php $render('footer'); ?>