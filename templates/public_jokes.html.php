<table border='1'>
<p><?=$totalJokes?> jokes have been submitted to the Internet Joke Database.</p>

<tr>
    <th> <?= htmlspecialchars('ID') ?> </th>
    <th> <?= htmlspecialchars('Joketext') ?> </th>
    <th> <?= htmlspecialchars('Jokedate') ?> </th>
    <th> <?= htmlspecialchars('Image') ?> </th>
    <th> <?= htmlspecialchars('Email') ?> </th>
    <th> <?= htmlspecialchars('Category') ?> </th>

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



    </blockquote>
    </tr>
<?php endforeach;?>
</table>