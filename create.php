<div class="title">
    <h2>Create a news item</h2>
</div>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>
<div>
    <label for="select_author">Author</label>
    <select name="select_author">
<?php foreach ($tab_authors as $author): ?>
        <option value="<?php echo $author['id']; ?>"><?php echo $author['fullname']; ?> [<?php echo $author['category']; ?>]</option>
<?php endforeach ?>
    </select>
</div>
<div>
	<label for="title">Title</label>
	<input type="input" name="title" />
</div>
<div>
	<label for="text">Text</label>
	<textarea name="text"></textarea>
</div>
	<input type="submit" name="submit" value="Create news item" />

</form>
<p class="link"><a href="../news" title="Return to index news">Index news</a></p>