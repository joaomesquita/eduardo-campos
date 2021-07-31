<?php include 'components/header.php' ?>

<div class="header-page interna" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 17.69%, rgba(0, 0, 0, 0.4) 93.98%), url('img/bg-equipe.jpg');">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-5">
                <h1 class="font-48 color-light fw-light">Eduardo Campos Advogados Associados</h1>
                <p class="font-32 color-light fw-light">Há 35 anos oferecendo soluções em Advocacia Empresarial.</p>
                <a href="contato.php" class="btn outline-color-secondary color-light text-uppercase">Entre em contato</a>
            </div>
        </div> -->
    </div>
</div>

<div class="session">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center mb-5">
                <h1 class="font-36 color-primary text-uppercase">Blog</h1>
            </div>
        </div>

        <div class="container">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 mb-5">
                    <div class="row">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                        <div class="col-lg-6 mb-4">
                            <a href="post.php" class="text-decoration-none">
                                <img src="img/noticia1.png" alt="" class="img-fluid w-100 mb-3">
                                <h2 class="font-18 fw-bold color-primary text-uppercase">Previsão de Título Post</h2>
                                <p class="font-15 color-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque nulla consectetur urna quisque velit neque proin lacinia vitae...</p>
                            </a>
                            <p class="font-12 color-gray text-uppercase"><a href="blog.php" class="color-primary text-decoration-none">Categoria</a><i class="bi bi-calendar mx-2"></i>28/05/2021</p>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-lg-3">
                    <form class="d-flex mb-3">
                        <input class="form-control me-2" type="search" placeholder="O que você procura?" aria-label="Search">
                    </form>
                    <ul class="list-unstyled d-block my-4">
                        <li>
                            <a class="font-15 color-primary text-uppercase text-decoration-none" href="post.php">→ Previsão de Título Post</a>
                            <hr class="bg-gray my-3">
                        </li>
                        <li>
                            <a class="font-15 color-primary text-uppercase text-decoration-none" href="post.php">→ Previsão de Título Post</a>
                            <hr class="bg-gray my-3">
                        </li>
                        <li>
                            <a class="font-15 color-primary text-uppercase text-decoration-none" href="post.php">→ Previsão de Título Post</a>
                            <hr class="bg-gray my-3">
                        </li>
                        <li>
                            <a class="font-15 color-primary text-uppercase text-decoration-none" href="post.php">→ Previsão de Título Post</a>
                            <hr class="bg-gray my-3">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>