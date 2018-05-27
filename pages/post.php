<div id="content" class="site-content center-relative">
    <div class="single-post-wrapper content-1070 center-relative">

        <?php

$post = get_post();
if($post == false){
    header("Location:index.php?page=error");
}else{
    ?>

            <!-- Single Content -->

            <article class="center-relative">
                <h1 class="entry-title">
                    <?= $post->title ?>
                </h1>
                <div class="post-info content-660 center-relative">
                    <div class="cat-links">
                        <ul>
                            <li><a href="#">Catégorie</a></li>
                        </ul>
                    </div>
                    <div class="entry-date published">
                        <?= date("d/m/Y à H:i", strtotime($post->date)) ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="entry-content">
                    <div class="post-full-width">
                        <div class="image-slider-wrapper">
                            <div class="caroufredsel_wrapper">
                                <ul class="image-slider slides center-text">
                                    <li><img src="img/posts/<?= $post->image ?>" style="width:650px; height:auto;" alt=""></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <br><br>
                    <div class="content-wrap content-660 center-relative ">
                        <p>
                            <?= html_entity_decode($post->content); ?>
                        </p>
                    </div>
                </div>
                <div class="clear"></div>
            </article>
            <br><br><br>

            <?php
}
?>
            <?php
            include "functions/disqus.php";
        ?>
    </div>
</div>

<script type="text/javascript">
    document.getElementById("sidebar").style.position = "fixed";
</script>