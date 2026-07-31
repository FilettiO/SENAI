<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">


    <style type="text/css">@import url("css/index.css");</style>
    <style type="text/css">@import url("css/servicos.css");</style>


    <link rel="icon" href="images/favicon.png" sizes="50x48" type="image/x-icon"/>
    <title>Nossos Serviços</title>
</head>
<body>
    <?php include("includes/header.php");?>
    
<!-- BANNER -->
    <div class="container-fluid bg-black text-light pt-5">
        <img src="images/banner3.png" class="img-fluid mx-auto d-block text-light" alt="Nossa Academia"/>
    </div>

<!-- SEÇÃO 1 -->
    <section class="text-light section mt-5 mb-4">
        <div class="container">
            <div class="fs-1 fw-bold fst-italic text-center pt-4 pb-3">Musculação</div>
            <div class="row impar_box">
                <div class="col-md-5">
                    <img src="images/s1_musculacao.png" class="img-fluid rounded" alt="Homem malhando o braço" />
                </div>
                <div class="col-md-7 d-flex justify-content-center align-items-center">
                    <ul class="fs-3">
                        <li>Treine em nossa academia a qualquer momento;</li>
                        <li>Treinos personalizados;</li>
                        <li>Planos de acordo com sua disponibilidade;</li>
                        <li>Personal trainer.</li>
                    </ul>
                    <div class="pb-5">
                        <button class="fs-5 fw-semibold rounded btnn impar">Quero começar!</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

<!-- SEÇÃO 2 -->
    <section class="text-light section mb-4">
        <div class="container">
            <div class="fs-1 fw-bold fst-italic text-center mt-5 pt-4 pb-3">Pilates</div>
            <div class="row par_box">
                <div class="col-md-7 d-flex justify-content-center align-items-center">
                    <ul class="fs-3">
                        <li>Aulas com profissionais qualificados;</li>
                        <li>Ritmo que se adequa à sua rotina;</li>
                        <li>Aulas em grupos ou duplas.</li>                        
                    </ul>
                    <div class="pb-5">
                        <button class="fs-5 fw-semibold mt-2 rounded btnn par">Quero me inscrever!</button>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="images/s2_pilates.png" class="img-fluid rounded" alt="Pessoas fazendo pilates" />
                </div>
            </div>

        </div>
    </section>

<!-- SEÇÃO 3 -->
    <section class="text-light section mb-4">
        <div class="container">
            <div class="fs-1 fw-bold fst-italic text-center mt-5 pt-4 pb-3">Zumba</div>
            <div class="row impar_box">
                <div class="col-md-5">
                    <img src="images/s3_zumba.png" class="img-fluid rounded" alt="Grupo dançando zumba" />
                </div>
                <div class="col-md-7 d-flex justify-content-center align-items-center">
                    <ul class="fs-3">
                        <li>Aulas para todas as idades;</li>
                        <li>Aulas com nível de intensidade;</li>
                        <li>Frequência de 2 a 4 vezes na semana.</li>                        
                    </ul>
                    <div class="pb-5">
                        <button class="fs-5 fw-semibold mt-2 rounded btnn impar">Quero me inscrever!</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

<!-- SEÇÃO 4 -->
    <section class="text-light section">
        <div class="container">
            <div class="fs-1 fw-bold fst-italic text-center mt-5 pt-4 pb-3">Crossfit</div>
            <div class="row par_box">
                <div class="col-md-7 d-flex justify-content-center align-items-center">
                    <ul class="fs-3">
                        <li>Exercícios dinâmicos e funcionais;</li>
                        <li>Treinos de acordo com a intensidade;</li>
                        <li>Aulas seguras acompanhadas por professores;</li> 
                        <li>Área exclusiva.</li>                       
                    </ul>
                    <div class="pb-5">
                        <button class="fs-5 fw-semibold mt-2 rounded btnn par">Quero me inscrever!</button>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="images/s4_crossfit.png" class="img-fluid rounded" alt="Pessoas fazendo crossfit" />
                </div>
            </div>

        </div>
    </section>

    <?php include("includes/footer.php");?>
</body>
</html>