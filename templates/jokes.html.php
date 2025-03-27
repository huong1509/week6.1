<table border='1'>
<tr>
    <th> <?= htmlspecialchars('ID') ?> </th>
    <th> <?= htmlspecialchars('Joketext') ?> </th>
    <th> <?= htmlspecialchars('Jokedate') ?> </th>
    <th> <?= htmlspecialchars('Image') ?> </th>
    <th> <?= htmlspecialchars('Email') ?> </th>
    <th> <?= htmlspecialchars('Category') ?> </th>
    <th> <?= htmlspecialchars('Edit') ?> </th>
    <th> <?= htmlspecialchars('Action') ?> </th>
</tr>
<?php foreach ($jokes as $joke):?>
    <tr>
    <blockquote>
        <td> <?= htmlspecialchars($joke['id']) ?> </td>
        <td> <?= htmlspecialchars($joke['joketext']) ?> </td>
        <td> <?= htmlspecialchars($joke['jokedate']) ?> </td>
        <td width="100px"><img height="100px" src="images/<?=htmlspecialchars($joke['image']); ?>"/></td>

        <td>  (by <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8');?>"> 
        <?=htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8');?>  </a>) </td>
        
        <td> <?= htmlspecialchars($joke['categoryName']) ?> </td>

        <td><a href="editjoke.php?id=<?=$joke['id']?>">Edit</a> </td>

        <form action="deletejoke.php" method="post">
            <input type="hidden" name="id" value="<?=$joke['id']?>"> 
            <td> <input type="submit" value="Delete"> </td>
        </form>
    </blockquote>
    </tr>
<?php endforeach;?>
</table>