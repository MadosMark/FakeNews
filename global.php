<?php require __DIR__ . ('/header.php'); ?>

<section class="newsFeedContainer">
    <?php usort($articles, "sortByDate"); ?>
    <?php foreach ($articles as $article) :
        if ($article["category"] === "global") : ?>
            <div class="card">
                <img src=<?php echo $article['image']; ?> class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $article['title']; ?></h5>
                    <p class="card-text"><?php echo $article['content']; ?></p>
                    <p class="author">Published by <?php echo $article['author']['full_name']; ?></p>
                    <p class="date"><?php echo date_format($article['date'], 'd F Y'); ?></p>
                    <div class="bottom-card-content">
                        <a href="https://media.giphy.com/media/xT4ApznCZTtuBjmHHa/giphy.gif" class="btn btn-primary">Read more</a>
                        <div class="likeCounter">

                            <p class="like-counter"><?php echo $article['likes'] ?></p>
                            <i class="glyphicon glyphicon-thumbs-up"></i>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</section>