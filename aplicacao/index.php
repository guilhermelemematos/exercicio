<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Controle de Alunos e Cursos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    
<?php
    include 'menu_principal.php';
?>

                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- Project statustic start -->
                                            <div class="col-xl-12">
                                                <div class="card proj-progress-card">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-md-6">
                                                            <?php
                                                                $url = 'http://localhost/exercicio/api.php/totais';
                                                                $response = file_get_contents($url);
                                                                $data = json_decode($response, true);

                                                                // echo "Alunos ==> ". $data['alunos'];
                                                                // echo "Cursos ==> ". $data['cursos'];

                                                                $perc_alunos = $data['alunos']/50 * 100;
                                                                $perc_cursos = $data['cursos']/20 * 100;
                                                                //echo $perc_alunos;
                                                                
                                                            ?>
                                                                <h6>Alunos Cadastrados</h6>
                                                                <h5 class="m-b-30 f-w-700"><?php echo $data['alunos']; ?>
                                                                    <span class="text-c-green m-l-10"><?php echo $perc_alunos;?>% de um total de 50</span>
                                                                </h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-green" style="width:<?php echo $perc_alunos;?>%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-md-6">
                                                                <h6>Cursos Operantes</h6>
                                                                <h5 class="m-b-30 f-w-700"><?php echo $data['cursos']; ?>
                                                                    <span class="text-c-green m-l-10"><?php echo $perc_cursos;?>% de um total de 20</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-yellow" style="width:<?php echo $perc_cursos;?>%"></div>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                    </div>    
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12">
                                                        <h2>Sobre o Exercício</h2>
                                                        <p>Exercício prático para a demonstração de consumo de uma API RestFull criada em PHP</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Project statustic end -->
                                        </div>
                                        <div class="card1">
                                            <div class="card">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium imperdiet neque sed luctus. Cras cursus egestas ligula, non dictum dolor faucibus a. Nam ac mi ut sapien scelerisque blandit in in justo. Phasellus felis mauris, euismod quis nisi id, lobortis blandit mauris. Proin sit amet erat at neque auctor porttitor nec a justo. Etiam id viverra tortor. Nulla rhoncus dui ac metus congue ullamcorper.

                                            Duis eleifend pellentesque justo et venenatis. Cras nisl purus, varius a ultricies sit amet, cursus in lacus. Nulla luctus ex et enim ultrices dapibus. Proin consectetur sit amet libero at accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus suscipit aliquet lacinia. Integer quis libero sit amet lacus aliquam varius sit amet congue tortor. Fusce at eros elit. Ut tortor ante, tristique a nunc eu, porttitor aliquet mauris. Donec non libero porta, rhoncus nunc et, bibendum nisl. Aenean quis enim laoreet, posuere urna non, molestie lectus. In vitae lectus sed eros placerat aliquam sit amet a dolor. Aenean ullamcorper ullamcorper ligula ut venenatis. Mauris porta consequat fermentum. In eget ornare enim. Phasellus varius mattis fermentum.

                                            Vivamus odio augue, tristique et libero id, vehicula pulvinar velit. Duis commodo auctor sagittis. Aenean porta orci in rutrum vulputate. In nec orci ut est posuere finibus quis bibendum eros. Suspendisse eu lacus nunc. Vivamus accumsan eros est, nec vulputate sem vulputate sit amet. Phasellus varius lorem ipsum, semper dapibus neque bibendum ut. Etiam pretium arcu eros, a tristique tellus dictum non. Nam commodo posuere nisi facilisis fringilla. Cras lobortis odio eu semper feugiat. Phasellus ornare eros dolor, venenatis convallis massa elementum dignissim.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                                    <div class="col-xl-12 col-md-12">
                                                        <h2>Sobre o Cursos</h2>
                                                        <p>Cursos academicos para o ensino</p>
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="card1">
                                            <div class="card">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium imperdiet neque sed luctus. Cras cursus egestas ligula, non dictum dolor faucibus a. Nam ac mi ut sapien scelerisque blandit in in justo. Phasellus felis mauris, euismod quis nisi id, lobortis blandit mauris. Proin sit amet erat at neque auctor porttitor nec a justo. Etiam id viverra tortor. Nulla rhoncus dui ac metus congue ullamcorper.

                                            Duis eleifend pellentesque justo et venenatis. Cras nisl purus, varius a ultricies sit amet, cursus in lacus. Nulla luctus ex et enim ultrices dapibus. Proin consectetur sit amet libero at accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus suscipit aliquet lacinia. Integer quis libero sit amet lacus aliquam varius sit amet congue tortor. Fusce at eros elit. Ut tortor ante, tristique a nunc eu, porttitor aliquet mauris. Donec non libero porta, rhoncus nunc et, bibendum nisl. Aenean quis enim laoreet, posuere urna non, molestie lectus. In vitae lectus sed eros placerat aliquam sit amet a dolor. Aenean ullamcorper ullamcorper ligula ut venenatis. Mauris porta consequat fermentum. In eget ornare enim. Phasellus varius mattis fermentum.

                                            Vivamus odio augue, tristique et libero id, vehicula pulvinar velit. Duis commodo auctor sagittis. Aenean porta orci in rutrum vulputate. In nec orci ut est posuere finibus quis bibendum eros. Suspendisse eu lacus nunc. Vivamus accumsan eros est, nec vulputate sem vulputate sit amet. Phasellus varius lorem ipsum, semper dapibus neque bibendum ut. Etiam pretium arcu eros, a tristique tellus dictum non. Nam commodo posuere nisi facilisis fringilla. Cras lobortis odio eu semper feugiat. Phasellus ornare eros dolor, venenatis convallis massa elementum dignissim.</p>
                                            </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>
