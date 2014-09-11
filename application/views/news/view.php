<div class="title">
    <h2>View new</h2>
</div>
<div class="new">
    <h2 class="title"><?php echo $news_item['title'] ?></h2>
    <div class="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p>Category: <?php echo $news_item['category'] ?></p>
    <p class="author">Author: <?php echo $news_item['fullname'] ?></p>
</div>
<p class="link"><a href="../news">Return to index news</a></p>