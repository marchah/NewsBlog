<div class="title">
    <h2>Index news</h2>
</div>

<?php foreach ($news as $news_item): ?>

	<div class="new">
		<h2 class="newtitle"><?php echo $news_item['title'] ?></h2>
		<div class="main">
			<?php echo $news_item['text'] ?>
		</div>
        <p>Category: <?php echo $news_item['category'] ?></p>
        <p class="author">Author: <?php echo $news_item['fullname'] ?></p>
		<p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>
	</div>

<?php endforeach ?>
    <p class="link"><a href="news/create" title="Create a new">Create new</a></p>