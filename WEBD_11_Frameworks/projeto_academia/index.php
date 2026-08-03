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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <?php include("includes/footer.php");?>    
</body>
</html>