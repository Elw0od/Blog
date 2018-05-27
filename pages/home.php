<?php

$posts = get_posts();
foreach($posts as $post){
    ?>
    <div id="content" class="site-content">
        <div id="blog-wrapper">
            <div class="blog-holder center-relative">


                <article id="post-1" class="blog-item-holder featured-post">
                    <div class="entry-content relative">
                        <div class="content-1170 center-relative">
                            <div class="cat-links">
                                <ul>
                                    <li>
                                        <a href="#">Catégorie</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="entry-date published">
                                <?= date("d/m/Y à H:i",strtotime($post->date)); ?>
                            </div>
                            <h2 class="entry-title">
                                <a href="index.php?page=post&id=<?= $post->id ?>"><?= $post->title ?></a>
                            </h2>
                            <div class="excerpt">
                                <?= html_entity_decode(substr(nl2br($post->content),0,50)); ?><a class="read-more" href="index.php?page=post&id=<?= $post->id ?>"></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </article>

                <?php
    }
?>

                    <?php

$posts = get_other_posts();
foreach($posts as $post){
    ?>
                        <article id="post-2" class="blog-item-holder">
                            <div class="entry-content relative">
                                <div class="content-1170 center-relative">
                                    <h2 class="entry-title">
                                        <a href="index.php?page=post&id=<?= $post->id ?>"><?= $post->title ?></a>
                                    </h2>
                                    <div class="cat-links">
                                        <ul>
                                            <li>
                                                <a href="#">Catégorie</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry-date published">
                                        <?= date("d/m/Y à H:i",strtotime($post->date)); ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </article>
                        <?php
    }
?>

            </div>
            <div class="clear"></div>
            <div class="block load-more-holder"><a href="index.php?page=blog">VOIR TOUS LES ARTICLES</a></div>
        </div>
        <?php

$posts = get_posts();
foreach($posts as $post){
?>
            <div class="featured-image-holder">
                <div class="featured-post-image" style="background-image: url(img/posts/<?= $post->image ?>)"></div>
            </div>
            <div class="clear"></div>
            <?php
    }
?>
    </div>