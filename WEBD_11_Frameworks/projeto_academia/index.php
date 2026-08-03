<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">


    <style type="text/css">@import url("css/index.css");</style>

    <link rel="icon" href="images/favicon.png" sizes="50x48" type="image/x-icon"/>
    <title>Bem-Vindo à Alta Forma!</title>
</head>
<body>
    <?php include("includes/header.php");?>

<!-- MENU -->
    <header>
        <nav class="navbar navbar-expand-lg bg-black navbar-dark pb-3">
            <div class="container-fluid">
                <a class="navbar-brand ms-5">
                    <img src="images/logo.png" alt="Logo" width="90" height="80" class="d-inline-block align-text-top"/>
                </a>
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav me-5">
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold m-4" aria-current="page">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold m-4">NOSSA ACADEMIA</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link active fw-semibold m-4">NOSSOS SERVIÇOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold m-4">NOSSOS PRODUTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold m-4">FALE CONOSCO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header> 

<!-- BANNER -->
    <div class="container-fluid bg-black text-light pt-5">
        <img src="images/banner1.png" class="img-fluid mx-auto d-block text-light" alt="Continue treinando"/>
    </div>

<!-- SEÇÃO 1  -->
    <section class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 d-inline">
                <img src="images/banner1.2.png" class="mx-auto img-fluid" alt=""/>
            </div>
            <div class="col-md-6 d-inline">
                <p class="fw-bold mb-0 t1">MUSCULAÇÃO É SAÚDE!</p>
                <h1 class="fw-bold ms-3">Treino <span class="fw-bold t2">Diário</span></h1>
                <h6 class="fw-medium text-muted t3">Treino completo de acordo com seu objetivo</h6>
                <p class="text-muted">A musculação melhora a força, saúde cardiovascular, postura e <br> disposição diária. Também reduz estresse, melhora a autoestima <br> e contribui para qualidade de vida, equilíbrio físico e bem-estar mental.</p>
                <div class="card w-75 ms-4 mt-5 c1">
                    <div class="card-body c2">
                        <div class="row">
                            <div class="col-lg-6 d-inline">
                                <p class="fst-italic"><span class="fw-bold">✓</span> Musculação</p>
                                <p class="fst-italic"><span class="fw-bold">✓</span> Pilates</p>
                                <p class="fst-italic"><span class="fw-bold">✓</span> CrossFit</p>
                            </div>
                            <div class="col-lg-6 d-inline">
                                <p class="fst-italic"><span class="fw-bold">✓</span> Zumba</p>
                                <p class="fst-italic"><span class="fw-bold">✓</span> Roupas fitness</p>
                                <p class="fst-italic"><span class="fw-bold">✓</span> Suplementos nutricionais</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btnn mt-5 rounded">Quero saber mais</button>
                </div>
            </div>
        </div>
    </section>
    
<!-- SEÇÃO 2 -->
    <section class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="fw-bold ms-3">Nossas <span class="fw-bold t2">Especialidades</span></h1>
                <h6 class="fw-normal ms-3 mt-3">Há mais de 20 anos no mercado, nossa academia tem preparo e áreas exclusivas para a realização de pilates, crossfit e musculação.</h6>
                <div class="d-flex justify-content-center section2_button">
                    <button class="btnn ms-3 mt-4 p-2 rounded">Conheça mais sobre nós</button>
                </div>
            </div>
            <div class="col-lg-4 img1_box">
                <img src="images/s2_mulher.jpg" class="img-fluid img1" alt="Mulher fazendo musculação"/>
            </div>
            <div class="col-lg-4 img2_box">
                <img src="images/s2_crossfit.png" class="img-fluid img2" alt="Pessoas fazendo crossfit"/>
            </div>
        </div>
        <div class="row mt-2 div_esp">
            <div class="col-md-8 esp_col">
                <div class="esp text-light ms-3 h-100">
                    <div class="row h-100">
                        <div class="col-md-2 d-flex justify-content-center align-items-start">
                            <img src="images/logo.png" alt="Academia Alta Forma" class="img fluid esp_img mt-4">
                        </div>
                        <div class="col-md-10 align-self-center">
                            <div class="row esp_row g-3">
                                <div class="col-md">
                                    <h5 class="esp_title">Treino personalizado</h5>
                                    <div class="barra">
                                        <div class="progresso1"></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <span class="percentual">85%</span>
                                </div>
                            </div>
                            <div class="row esp_row g-3">
                                <div class="col-md">
                                    <h5 class="esp_title">Acompanhamento nutricional</h5>
                                    <div class="barra">
                                        <div class="progresso2"></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <span class="percentual">30%</span>
                                </div>
                            </div>
                            <div class="row esp_row g-3">        
                                <div class="col-md">
                                    <h5 class="esp_title">Exercícios fisioterápicos</h5>
                                    <div class="barra">
                                        <div class="progresso3"></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <span class="percentual">70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 img3_box">
                <img src="images/s2_pilates.jpg" class="img-fluid img3" alt="Pessoas fazendo pilates"/>
            </div>
        </div>
    </section>

<!-- SEÇÃO 3 -->
    <div class="container">
        <div class="row">
            <div class="col-9 d-flex align-items-center">
                <div class="w-100 div-marcas"></div>          
            </div>
            <div class="col-3">
                <h2 class="fw-bold text-end m-4">Marcas <span class="fw-bold t2">Parceiras</span></h2>
            </div>
        </div>
    </div>
    <div class="logos mb-5">
        <div class="logos-slide">
            <img src="images/marcado.png" alt="Marcado"/>
            <img src="images/twaajd.png" alt="Twaajd"/>
            <img src="images/aesir.png" alt="Aesir"/>
            <img src="images/pure.png" alt="Pure"/>
            <img src="images/martha_smither.png" alt="Martha Smither"/>
        </div>        
    </div>

<!-- RODAPÉ -->
    <footer class="pb-5 footer">
        <div class="container-lg">
            <div class="row text-light">
                <div class="col-md-3 mt-5">
                    <div class="col-md">
                        <div class=" d-flex justify-content-center">
                            <img  src="images/logo.png" class="img-fluid mb-4 logo" alt="Logo"/>
                        </div>        
                        <div class="size mb-4">
                            <p class="fw-light m-0 d-flex justify-content-center">Desde 2001 treinando</p>
                            <p class="fw-light d-flex justify-content-center">corpos e mentes</p>
                        </div>
                        <div class="row justify-content-evenly w-75 redes">
                            <p class="fw-semibold d-flex justify-content-center">Nossas Redes</p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="d-block">
                                    <img src="images/facebook.png" class="img-fluid" alt="Facebook"/>
                                </div>
                                <div class="d-block">
                                    <img src="images/instagram.png" class="img-fluid" alt="Instagram"/>
                                </div>
                                <div class="d-block">
                                    <img src="images/twitter.png" class="img-fluid" alt="Twitter"/>
                                </div>
                                <div class="d-block">
                                    <img src="images/whatsapp.png" class="img-fluid" alt="WhatsApp"/>
                                </div>
                            </div>
                        </div>        
                    </div>                    
                </div>            
                <div class="col-md-3 mt-5 ref">
                    <div class="w-25">
                        <p class="border-bottom border-3">Menu</p> 
                    </div>
                    <a href="">Início</a>
                    <a href="">Nossa Academia</a>
                    <a href="">Nossos Serviços</a>
                    <a href="">Nossos Produtos</a>
                    <a href="">Marcas Parceiras</a>
                    <a href="">Fale Conosco</a>
                </div>            
                <div class="col-md-3 mt-5"> 
                    <div class="w-25">
                        <p class="border-bottom border-3">Mapa</p> 
                    </div>
                    <p class="fw-medium m-0">Sede</p>
                    <a>Rua 123, Bairro Cabral, 13058-192</a>
                    <a>Jaguariúna, São Paulo</a>
                        <img src="images/map.png" class="img-fluid mt-4" alt="Endereço no mapa"/>
                </div>
                <div class="col-md-3 mt-5">
                    <div class="w-75">
                        <p class="border-bottom border-3">Horário de Funcionamento</p> 
                    </div>
                    <div>
                        <p class="fw-semibold m-0">Segunda a Sexta</p>
                        <p>05:00 - 23:00</p>
                        <p class="fw-semibold m-0">Sábado</p>
                        <p>06:00 - 15:00</p>
                        <p class="fw-semibold m-0">Domingo</p>
                        <p>06:00 - 12:00</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php include("includes/footer.php");?>
    <script src="js/main.js"></script>
</body>
</html>