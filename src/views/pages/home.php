<?php $render('header'); ?> 

<?= $base . '<br>' ?>
<a href="http://localhost/mvc/public/novo">Novo Usuario</a>

<table border="1px">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['nome'] ?></td>
            <td><?= $usuario['email'] ?></td>
            <td>
            <a href="<?=$base?>/usuario/<?=$usuario['id']?>/editar">Editar</a> 
            <a href="<?=$base?>/usuario/<?=$usuario['id']?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<?php $render('footer'); ?>