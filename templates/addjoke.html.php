<form action="" method="post">
    <label for="joketext">Type your joke here:</label><br><br>  
    <textarea name="joketext" rows="3" cols="40"></textarea>

    <div class="mb-3">
        <label for="fileToUpload" class="form-label"><h5>Add image here:</h5></label>
        <input type="file" name="fileToUpload">
    </div>

    <select name="author">
        <option value="">Select an author</option>
        <?php foreach ($authors as $author):?>
            <option value="<?=htmlspecialchars($author['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8'); ?>    
            </option>
            <?php endforeach;?>
    </select> 

    <select name="category">
        <option value="">Select an category </option>
        <?php foreach ($categories as $category):?>
            <option value="<?=htmlspecialchars($category['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($category['categoryName'], ENT_QUOTES, 'UTF-8'); ?>    
            </option>
            <?php endforeach;?>
    </select> 
    <br><input type="submit" name="submit" value="Add">
</form>
