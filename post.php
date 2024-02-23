<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"> <?= $currentPost['title'] ?> </h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At quis debitis obcaecati. Iure repellendus distinctio laborum cum eligendi quibusdam obcaecati molestias, mollitia nobis consequuntur labore, officiis cupiditate in ullam optio?
            Ea nemo exercitationem illum optio iste reprehenderit, deleniti vel, nostrum veritatis nisi fuga sint accusantium neque quisquam enim vitae, blanditiis facilis consequuntur. Velit doloribus fugiat ad facilis? Consequuntur, ex praesentium.
            Dolor perspiciatis facilis aspernatur similique eveniet, illum libero modi sapiente officiis laudantium temporibus maiores laboriosam recusandae dignissimos culpa. Voluptate in illo nostrum voluptas nesciunt architecto libero sed, blanditiis porro iusto?
            Officiis deleniti numquam temporibus ut atque ratione explicabo nostrum, animi at et fugit incidunt autem. Voluptas, quos unde! Iste ab porro voluptas ad explicabo sunt, eius voluptatem optio deleniti ut?
            Aliquid pariatur ut nostrum quo non possimus accusamus? Iure, sapiente ab illum laborum obcaecati temporibus nam quos delectus dolor ad ea impedit corrupti magni, a accusamus maxime exercitationem perferendis voluptas?</p>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, unde? Dolorum provident, perspiciatis deleniti ullam pariatur, quaerat nobis molestiae ipsam quis sit porro, facilis ab facere illum architecto ducimus fuga?
            Quidem aliquid aut eos reiciendis cumque inventore earum molestiae nesciunt, commodi tenetur pariatur repellat, aliquam, facilis blanditiis. Consequuntur, quod. Asperiores aliquam at, aut ab ut rem dolorem tempora corrupti obcaecati.
            In sapiente molestias expedita, qui amet harum a ducimus ipsa nihil deserunt saepe et? Commodi omnis, et distinctio nesciunt perferendis enim consequuntur, vero fugiat optio, mollitia placeat assumenda inventore rerum?
            Recusandae sit velit numquam expedita, beatae perspiciatis unde assumenda adipisci iste accusamus, odit molestiae blanditiis ex dignissimos porro aliquam. Voluptatem sint tempore, libero aspernatur corrupti eum nihil quas! Porro, eum.
            Reprehenderit vitae earum aliquid iure, corporis vero voluptates pariatur dolorum voluptas sed? Nostrum repellat autem deserunt perferendis enim magni, iusto provident iste repudiandae sed voluptatum ullam saepe placeat ut nisi?</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>