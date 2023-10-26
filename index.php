<?php
include_once("templates/header.php");
?>
<main>
    <div id="title-container">
        <h1>PROFISSIONAL DE PIJAMA</h1>
        <p>Vista o pijama da produtividade através do home office.</p>
    </div>
    <div id="posts-container">
        <?php foreach ($posts as $post) : ?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                <h2 class="post-title">
                    <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </h2>
                <p class="post-description"><?= $post['description'] ?></p>
                <div class="tags-container">
                    <?php foreach ($post['tags'] as $tag) : ?>
                        <a href="#"><?= $tag ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="btn1">
        <div class="text1">
            <span>Back</span>
            <span>to</span>
            <span>top</span>
        </div>
        <div class="clone">
            <span>Back</span>
            <span>to</span>
            <span>top</span>
        </div>
        <svg width="20px" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
    </button>
    <a href="calculadora.php"><button class="Btn">
            <div class="sign"><svg viewBox="0 0 512 512">
                    <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c-17.7 0-32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c-17.7 0-32 14.3 32 32s-14.3 32-32 32z"></path>
                </svg></div>

            <div class="text">Calcular gastos</div>
        </button></a>
</main>
<a href="sobre.php">Sobre</a>
<?php
include_once("templates/footer.php")
?>

<script>
    const scrollToTopButton = document.querySelector("button");

    scrollToTopButton.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
</script>