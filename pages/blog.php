            <div id="content" class="site-content">
                    <div class="full-screen-scroll">
                        <ul id="cbp-bislideshow" class="cbp-bislideshow scroll">
                        <?php
                        $posts = get_posts();
                        foreach($posts as $post){
                        ?>
                            <li style="background-image: url('img/posts/<?= $post->image ?>');">
                                <article class="entry-holder">
                                    <h2 class="entry-title">
                                        <a href="index.php?page=post&id=<?= $post->id ?>"><?= $post->title ?></a>
                                    </h2>
                                    <div class="info-holder">
                                        <div class="cat-links">
                                            <ul>
                                                <li>
                                                    <a href="#">Catégorie</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry-date published"><?= date("d/m/Y à H:i",strtotime($post->date)); ?></div>
                                    </div>
                                    <div class="excerpt"><?= html_entity_decode(substr(nl2br($post->content),0,200)) ?><a class="read-more" href="index.php?page=post&id=<?= $post->id ?>"></a></div>
                                    <div class="clear"></div>
                                </article>
                            </li>
                            <?php
                            }
                            ?>

                   
                </ul>
            </div>
            <div class="clear"></div>
        </div>

<script type="text/javascript">
    document.getElementById("single-post").className = "page-scroll";
</script>