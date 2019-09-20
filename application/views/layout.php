<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escola Trade - Aprenda com os melhores</title>
    <link href="<?=base_url('css/bootstrap.css'); ?>" rel="stylesheet" />
    <link href="<?=base_url('css/style.css?_='.time()); ?>" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?=base_url('images/etrade.png'); ?>" height="50px" />
            </a>
            <div class="justify-content-end" id="navbarCollapse">
                <form class="form-inline mt-2 mt-md-0">
                    <a href="<?=base_url('logout'); ?>" class="text-white-50 mr-3">
                        Login
                    </a>
                    <a href="<?=base_url('logout'); ?>">
                        <button class="btn btn-warning my-2 my-sm-0" type="button">Iniciar</button>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <header id="header-home">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6" style="padding-top: 40vh">
                    <h1>Aprenda com os melhores</h1>
                    <p>Cursos especializados no mercado de operações financeiras</p>
                    <a href="<?=base_url('register'); ?>">
                        <button style="border-radius: 159px;"
                            class="btn btn-warning text-black-50 btn-lg mt-1 px-5">Começa já</button>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section id="boxes">
        <div class="end-header"></div>
        <div class="container">
            <h1 class="mt-5"><a class="text-warning">#</a> Porque a Escola.Trade</h1>
            <div class="row text-center">
                <div class="col-sm-4">
                    <img src="<?=base_url('images/box01.jpg'); ?>" rel="box" class="w-75" />
                    <h2><a class="text-warning">#</a> ACESSO VITALICIO</h2>
                    <p>Após a confirmação do seu pagamento, você terá acesso vitalicio ao curso que você adquiriu. Seu
                        login sempre será válido em nossa plataforma.</p>
                </div>
                <div class="col-sm-4">
                    <img src="<?=base_url('images/box02.jpg'); ?>" rel="box" class="w-75" />
                    <h2><a class="text-warning">#</a> TEMOS OS MELHORES</h2>
                    <p>Os melhores mestres estão na nossa plataforma pra sempre te ajudar a multiplicar os seus
                        rendimentos operando no mercado financeiro.</p>
                </div>
                <div class="col-sm-4">
                    <img src="<?=base_url('images/box03.jpg'); ?>" rel="box" class="w-75" />
                    <h2><a class="text-warning">#</a> TIRE SUAS DUVIDAS</h2>
                    <p>Tire suas dúvidas dentro da plataforma, sua dúvida podera ser respondida por outros alunos ou
                        pelo mestre do curso.</p>
                </div>
                <div class="col-sm-12 text-center">
                    <a href="<?=base_url('register'); ?>">
                        <button style="border-radius: 159px;" class="btn btn-warning text-black-50 btn-lg px-5">Começa
                            já</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
        $feedbacks = array('Gostei demais','Teste','Testesssadsad','Patrick');



    ?>
    <section id="feedback">
        <div class="end-boxes"></div>
        <div class="container pb-5">
            <h1 class="mt-5"><a class="text-warning">#</a> Depoimentos</h1>
            <div id="carouselFeedbacks" class="carousel slide" data-ride="carousel" data-interval=5000>
                <ol class="carousel-indicators position-static">
                    <?php foreach ($feedbacks as $i=>$value) { ?>
                    <li data-target="#carouselFeedbacks" data-slide-to="<?=$i; ?>"
                        class="<?=$i===0?'active':''; ?> h-auto w-auto" style="text-indent:0">
                        <img class="" src="https://via.placeholder.com/60" alt="person" />
                    </li>
                    <?php } ?>
                </ol>
                <div class="carousel-inner">
                    <?php foreach ($feedbacks as $i=>$value) { ?>
                    <div class="carousel-item my-5 <?=$i===0?'active':''; ?> text-center text-white">
                        <div class="row">
                            <div class="col-sm-3 text-center offset-3 quotation">
                                <div class="personimg" style="background: url(https://via.placeholder.com/200); background-size:cover"></div>
                            </div>
                            <div class="col-sm-3">
                                <p style="font-size: 25px;"><?=$value; ?></p>
                                <b>- Nome do cliente</b>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="end-feedback"></div>
    </section>
    <section id="courses" class="text-center mt-5 mb-5">
        <img src="<?=base_url('images/cert.jpg'); ?>" />
    </section>
    <section id="register">

    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script src="<?=base_url('js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?=base_url('js/bootstrap.min.js'); ?>"></script>
</body>

</html>