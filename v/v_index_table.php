
<main>
    <a href="index.php?view=list"> <div>Normal View</div></a>
    <h2>Welcome to my Blog</h2>
    <p>
        This is a miscellany collection of personal experience stories, essays, book pilots, hiking guides,
        music and pictures reflecting a life much of which has been spent in the mountains,
        Africa and other interesting parts of the world.
    </p>

    <article >

        <h3>Articles close to the edge.</h3>

        <section class="section-table">

    <?php foreach ($messages as $message) { ?>
            <div class="articles">
                <h4>
                    <?=$message['name']?>
                </h4>
                <div class="article-img"><img src="gal-img/Alp_cl.jpg" alt="Alpine climb"></div>
                <p><?=$message['text']?></p>


                <ul>
                    <li>
                        <a class="a-article" title="Articles" href="index.php?c=message&id=<?=$message['id_message'] ?>">
                            <img src="images/blog-icon.png" alt="button" width="50px">
                        </a>
                    </li>
                    <li>
                        <a class="a-article" title="Pictures" href="aboutUs.html">
                            <img src="images/pic-icon.png" alt="button" width="70px">
                        </a>
                    </li>
                </ul>
                <hr>

            </div>
    <?php } ?>
        </section>

    </article>

</main>

