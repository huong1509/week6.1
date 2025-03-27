<form action="" method="post">
    <input type="hidden" name="jokeid" value="<?= htmlspecialchars($joke['id'], ENT_QUOTES, 'UTF-8'); ?>">

    <label for="joketext">Edit your joke here:</label>
    <textarea name="joketext" id="joketext" rows="3" cols="40"><?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8'); ?></textarea>

    <input type="submit" name="submit" value="Save">
</form>
