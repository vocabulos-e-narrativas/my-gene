<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY GENE</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo BASE_URL; ?>css/style.css?v=6.0" rel="stylesheet">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body>
    <div class="frame-top">
        <img src="<?php echo BASE_URL ?>/images/barra_superiror.png" alt="" class="" />
    </div>
    <div class="room-container">
        <img src="<?php echo BASE_URL ?>/images/estante_open_020.png" alt="" class="room" />
    </div>
    <a href="javascript:void(0);" class="close-library1" onclick="changeRoomAndRedirect('library.php');"></a>
    <a href="#" class="book1" onclick="showBook('yellow');"></a>
    <a href="#" class="book2" onclick="showBook('blue');"></a>
    <a href="#" class="book3" onclick="showBook('green');"></a>
    <div class="book-modal">
        <div class="book-modal-content">
            <div class="book-modal-yellow">
                <div class="book-modal-close" onclick="hideBook();"></div>
                <img src="<?php echo BASE_URL ?>images/LIVRO_1.png" class="book">
                <div class="book-wrapper row">
                    <div class="pt-3 col-md-6 text-center">
                        <div class="row my-4 px-4">
                            <h3 class="text-dark-yellow bold px-5">Tenho a primeira consulta de genética marcada. E
                                agora?</h3>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <img src="<?php echo BASE_URL ?>images/icon_yellow.png" alt="" class="book-icon-big">
                            </div>
                        </div>
                        <div class="row my-2 mb-4">
                            <h4 class="text-dark-yellow bold">Conselhos práticos</h4>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <button id="yellowTrigger1" class="active px-3" onclick="yellowHandleClick(1)">
                                    <h4>Prepare a sua primeira consulta de genética</h4>
                                </button>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col text-center">
                                <button id="yellowTrigger2" class="px-3" onclick="yellowHandleClick(2)">
                                    <h4>Leve um acompanhante</h4>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="yellowContent1" class="my-p-5">
                            <div class="row my-my-4">
                                <div class="col-2 text-end"></div>
                                <div class="col text-left">
                                    <h4 class="text-dark-yellow bold">
                                        Informação para levar para a primeira
                                        consulta de genética:
                                    </h4>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-2 text-end">
                                    <img src="<?php echo BASE_URL ?>images/icon1_yellow.png" alt="" class="book-icon">
                                </div>
                                <div class="col text-left">
                                    <h5 class="text-gray bold">
                                        Se teve ou tem doença, levar exames médicos que
                                        possa ter realizado relacionados com a história da
                                        doença oncológica.
                                    </h5>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-2 text-end">
                                    <img src="<?php echo BASE_URL ?>images/icon2_yellow.png" alt="" class="book-icon">
                                </div>
                                <div class="col text-left">
                                    <h5 class="text-gray bold">
                                        História familiar de doença (quem tem ou já teve
                                        cancro, de que tipo, com que idade, …).
                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-end">
                                    <img src="<?php echo BASE_URL ?>images/icon3_yellow.png" alt=""
                                        class="py-2 book-icon">
                                </div>
                                <div class="col text-left">
                                    <h5 class="text-gray bold">
                                        Se tem familiares portadores, levar a documentação
                                        dos estudos genéticos realizados na família.
                                    </h5>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-2 text-end">
                                    <img src="<?php echo BASE_URL ?>images/icon4_yellow.png" alt="" class="book-icon">
                                </div>
                                <div class="col text-left">
                                    <h5 class="text-gray py-3 bold">
                                        Dúvidas e questões a colocar ao médico/a.
                                    </h5>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-2 text-end"></div>
                                <div class="col text-left">
                                    <h4 class="text-dark-yellow bold">
                                        Sabia que pode levar um acompanhante à
                                        consulta de genética?
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div id="yellowContent2" class="my-p-6" style="display: none;">
                            <div class="row mt-1 mb-2">
                                <div class="col-2 text-end"></div>
                                <div class="col text-left">
                                    <h4 class="text-dark-yellow bold">
                                        Levar um acompanhante à consulta de
                                        genética pode ajudá-lo a:
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-end">
                                    <img src="<?php echo BASE_URL ?>images/icon5_yellow.png" alt="" class="book-icon">
                                </div>
                                <div class="col text-left">
                                    <h5 class="text-gray bold py-2">
                                        Sentir-se confiante.
                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-end">
                                    <img src="<?php echo BASE_URL ?>images/icon6_yellow.png" alt="" class="book-icon">
                                </div>
                                <div class="col text-left">
                                    <h5 class="text-gray bold py-2">
                                        Sentir-se apoiado e seguro emocionalmente.
                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-end">
                                    <img src="<?php echo BASE_URL ?>images/icon7_yellow.png" alt=""
                                        class="py-2 book-icon">
                                </div>
                                <div class="col text-left">
                                    <h5 class="text-gray bold ">Prestar atenção
                                        <span>(por exemplo, o acompanhante pode
                                            escrever a informação dada durante as consultas).</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-end">
                                    <img src="<?php echo BASE_URL ?>images/icon8_yellow.png" alt="" class="book-icon">
                                </div>
                                <div class="col text-left">
                                    <h5 class="text-gray bold ">Facilitar uma comunicação aberta
                                        <span>(por exemplo, o
                                            acompanhante pode colocar questões ao médico/a).</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-end">
                                    <img src="<?php echo BASE_URL ?>images/icon9_yellow.png" alt="" class="book-icon">
                                </div>
                                <div class="col text-left">
                                    <h5 class="text-gray bold py-2">Identificar as suas necessidades.</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-end">
                                    <img src="<?php echo BASE_URL ?>images/icon10_yellow.png" alt="" class="book-icon">
                                </div>
                                <div class="col text-left">
                                    <h5 class="text-gray bold ">Compreender o tema do risco genético e/ou a
                                        síndrome de cancro hereditário.</h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-2 text-end"></div>
                                <div class="col text-left">
                                    <h4 class="text-dark-yellow bold">
                                        Pode também não levar um acompanhante
                                        à consulta. Para algumas pessoas, é mais
                                        confortável assim.
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book-modal-blue">
                <div class="book-modal-close" onclick="hideBook();"></div>
                <img src="<?php echo BASE_URL ?>/images/LIVRO_2.png" class="book">
                <div class="book-wrapper row">
                    <div class="pt-3 col-md-6 text-center">
                        <div class="row my-my-4 my-px-4">
                            <h3 class="text-dark-blue bold px-5">Tenho a primeira consulta de genética marcada. E
                                agora?</h3>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <img src="<?php echo BASE_URL ?>images/icon_blue.png" alt="" class="book-icon">
                            </div>
                        </div>
                        <div class="row my-2 mb-4">
                            <h4 class="text-dark-blue bold">O que preciso de saber?</h4>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <button id="blueTrigger1" class="active px-3" onclick="blueHandleClick(1)">
                                    <h5 class="bold">O que é feito no teste genético?</h5>
                                </button>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <button id="blueTrigger2" class="px-3" onclick="blueHandleClick(2)">
                                    <h5 class="bold">Como se transimite um gene?</h5>
                                </button>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <button id="blueTrigger3" class="px-3" onclick="blueHandleClick(3)">
                                    <h5 class="bold">O que é o risco genético de um cancro?</h5>
                                </button>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <button id="blueTrigger4" class="px-3" onclick="blueHandleClick(4)">
                                    <h5 class="bold">Como interpretar o resultado do teste genético.</h5>
                                </button>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <button id="blueTrigger5" class="px-3" onclick="blueHandleClick(5)">
                                    <h5 class="bold">Para que é que serve a consulta de genética?</h5>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="blueContent1" class="my-p-5">
                            <div class="row my-4">
                                <div class="col text-center">
                                    <img src="<?php echo BASE_URL ?>images/icon1_blue.png" alt="" class="book-icon-big">
                                </div>
                            </div>
                            <div class="row my-4 px-4">
                                <div class="col text-center">
                                    <h5 class="">
                                        O teste genético é a recolha de amostra biológica,
                                        geralmente sangue, para análise do ADN de forma a
                                        detetar variantes nos genes associados ao
                                        cancro hereditário.
                                    </h5>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col text-center">
                                    <img src="<?php echo BASE_URL ?>images/player.png" alt="" class="book-player">
                                </div>
                            </div>
                        </div>
                        <div id="blueContent2" class="my-p-5" style="display: none;">
                            <div class="row my-4">
                                <div class="col text-center">
                                    <img src="<?php echo BASE_URL ?>images/icon2_blue.png" alt="" class="book-icon-big">
                                </div>
                            </div>
                            <div class="row my-4 px-4">
                                <div class="col text-center">
                                    <h5 class="">
                                        Os genes são as unidades de informação genética.
                                        Estes agrupam-se em cromossomas, constituindo assim
                                        o material genético das células.
                                    </h5>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col text-center">
                                    <!--<a id="blueSubContent1" href="#" target="_blank">-->
                                    <a id="blueSubContent1">
                                        <img src="<?php echo BASE_URL ?>images/player.png" alt="" class="book-player">
                                    </a>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-4 text-center">
                                    <button id="blueSubTrigger1" class="active subBtn1"
                                        onclick="blueSubHandleClick1('')">
                                        <h5 class="bold">Os genes</h5>
                                    </button>
                                </div>
                                <div class="col-4 text-center">
                                    <button id="blueSubTrigger2" class="subBtn1" onclick="blueSubHandleClick1('')">
                                        <h5 class="bold">A transmissão</h5>
                                    </button>
                                </div>
                                <div class="col-4 text-center">
                                    <button id="blueSubTrigger3" class="subBtn1" onclick="blueSubHandleClick1('')">
                                        <h5 class="bold">O processo</h5>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="blueContent3" class="my-p-5" style="display: none;">
                            <div class="row my-my-4">
                                <div class="col text-center">
                                    <img src="<?php echo BASE_URL ?>images/icon3_blue.png" alt="" class="book-icon-big">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col text-center">
                                    <h5 class="">
                                        O risco genético de cancro indica a probabilidade
                                        de desenvolver cancro pela presença de determinada
                                        variantede genes que é detetada através de
                                        testes genéticos
                                    </h5>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col text-center">
                                    <!--<a id="blueSubContent2" href="#" target="_blank">-->
                                    <a id="blueSubContent2">
                                        <img src="<?php echo BASE_URL ?>images/player.png" alt="" class="book-player">
                                    </a>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-3 text-center">
                                    <button id="blueSubTrigger1" class="active subBtn2"
                                        onclick="blueSubHandleClick2('')">
                                        <h5 class="bold py-2">O risco</h5>
                                    </button>
                                </div>
                                <div class="col-3 text-center">
                                    <button id="blueSubTrigger2" class="subBtn2" onclick="blueSubHandleClick2('')">
                                        <h5 class="bold py-2">As probabilidades</h5>
                                    </button>
                                </div>
                                <div class="col-3 text-center">
                                    <button id="blueSubTrigger3" class="subBtn2" onclick="blueSubHandleClick2('')">
                                        <h5 class="bold py-2">A prevenção</h5>
                                    </button>
                                </div>
                                <div class="col-3 text-center">
                                    <button id="blueSubTrigger4" class="subBtn2" onclick="blueSubHandleClick2('')">
                                        <h5 class="bold py-2">A saúde geral</h5>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="blueContent4" class="my-p-5" style="display: none;">
                            <div class="row px-5">
                                <div class="col">
                                    <img src="<?php echo BASE_URL ?>images/icon4_blue.png" alt=""
                                        class="book-icon-small">
                                </div>
                            </div>
                            <div class="row px-5">
                                <div class="col">
                                    <h4 class="text-light-blue bold mb-2">Resultado positivo:</h4>
                                </div>
                            </div>
                            <div class="row px-3">
                                <div class="col">
                                    <ul class="text-gray bold">
                                        <li>Tem variantes genéticas associadas a um cancro hereditário.</li>
                                        <li>Existe risco aumentado de desenvolver a doença.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row px-5">
                                <div class="col">
                                    <img src="<?php echo BASE_URL ?>images/icon5_blue.png" alt=""
                                        class="book-icon-small">
                                </div>
                            </div>
                            <div class="row px-5">
                                <div class="col">
                                    <h4 class="text-light-blue bold mb-2">Resultado negativo:</h4>
                                </div>
                            </div>
                            <div class="row px-3">
                                <div class="col">
                                    <ul class="text-gray bold">
                                        <li>O teste não encontrou variantes genéticas conhecidas associadas a um cancro
                                            hereditário.</li>
                                        <li>Não significa que não tem gene mutante.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row px-5">
                                <div class="col">
                                    <img src="<?php echo BASE_URL ?>images/icon6_blue.png" alt=""
                                        class="book-icon-small">
                                </div>
                            </div>
                            <div class="row px-5">
                                <div class="col">
                                    <h4 class="text-light-blue bold mb-2">Resultado inconclusivo (VUS): </h4>
                                </div>
                            </div>
                            <div class="row px-3">
                                <div class="col">
                                    <ul class="text-gray bold">
                                        <li>Este resultado aplica-se se for o caso índice da sua família.</li>
                                        <li>Pode ter uma variante genética que ainda não
                                            está associada a um cancro hereditário.</li>
                                        <li>Pode ter de continuar a ser acompanhado pelo seu médico.</li>
                                        <li>Pode ter de repetir o teste genético.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="blueContent5" class="my-p-3" style="display: none;">
                            <div class="row my-px-4 my-pb-1">
                                <div class="col">
                                    <img src="<?php echo BASE_URL ?>images/icon7_blue.png" alt=""
                                        class="book-icon-medium">
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <h5 class="text-dark-blue bold mb-2">A consulta genética serve para:</h5>
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <img src="<?php echo BASE_URL ?>images/icon8_blue.png" alt=""
                                        class="book-icon-small">
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <h5 class="text-gray bold">Interpretar a história médica e familiar.</h5>
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <img src="<?php echo BASE_URL ?>images/icon8_blue.png" alt=""
                                        class="book-icon-small">
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <h5 class="text-gray bold">Esclarecer dúvidas com um especialista.</h5>
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <img src="<?php echo BASE_URL ?>images/icon8_blue.png" alt=""
                                        class="book-icon-small">
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <h5 class="text-gray bold">Conhecer o risco genético.</h5>
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <img src="<?php echo BASE_URL ?>images/icon8_blue.png" alt=""
                                        class="book-icon-small">
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <h5 class="text-gray bold">Discutir se há motivo para realização de estudo genético.
                                        <span>(por exemplo, planos de vigilância, intervenções cirúrgicas preventivas,
                                            etc.)</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <img src="<?php echo BASE_URL ?>images/icon8_blue.png" alt=""
                                        class="book-icon-small">
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <h5 class="text-gray bold">Conhecer a probabilidade de desenvolver a doença.</h5>
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <img src="<?php echo BASE_URL ?>images/icon8_blue.png" alt=""
                                        class="book-icon-small">
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <h5 class="text-gray bold">Discutir estratégias para gerir o risco genético.</h5>
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <img src="<?php echo BASE_URL ?>images/icon8_blue.png" alt=""
                                        class="book-icon-small">
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <h5 class="text-gray bold">Apoio aplicado ao seu caso e à sua família.</h5>
                                </div>
                            </div>
                            <div class="row px-4 my-pb-1">
                                <div class="col">
                                    <h5 class="text-dark-blue bold">Sabia que pode pedir informação sobre a
                                        possibilidade
                                        de consultas na psicologia?</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book-modal-green">
                <div class="book-modal-close" onclick="hideBook();"></div>
                <img src="<?php echo BASE_URL ?>/images/LIVRO_3.png" class="book">
                <div class="book-wrapper row">
                    <div class="pt-3 col-md-6 text-center">
                        <div class="row my-4 px-4">
                            <h3 class="text-dark-green bold px-5">Tenho a primeira consulta de genética marcada. E
                                agora?</h3>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <img src="<?php echo BASE_URL ?>images/icon_green.png" alt="" class="book-icon-big">
                            </div>
                        </div>
                        <div class="row my-2 mb-4">
                            <h4 class="text-dark-green bold">Recursos importantes</h4>
                        </div>
                        <div class="row my-2">
                            <div class="col text-center">
                                <button id="greenTrigger1" class="active px-3" onclick="greenHandleClick(1)">
                                    <h4>Rede de apoio externo</h4>
                                </button>
                            </div>
                        </div>
                        <div class="row my-my-4">
                            <div class="col text-center">
                                <button id="greenTrigger2" class="px-3" onclick="greenHandleClick(2)">
                                    <h4>Sabia que...?</h4>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="greenContent1" class="my-p-5">
                            <div class="row my-my-3">
                                <div class="col-2 text-end"></div>
                                <div class="col text-left">
                                    <h4 class="text-dark-green bold">
                                        Exite uma rede de apoio externo que pode procurar. Saiba mais em:
                                    </h4>
                                </div>
                            </div>
                            <div class="my-py-2">
                                <div class="py-1 row">
                                    <div class="col-2 text-end"></div>
                                    <div class="col text-left">
                                        <h5 class="text-dark-green">
                                            Equipas multidisciplinares com experiência de seguir pessoas de alto risco
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 text-end"></div>
                                    <div class="col text-left line-height-1">
                                        <p class="text-gray bold">xxxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxxxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="my-py-2">
                                <div class="py-1 row">
                                    <div class="col-2 text-end"></div>
                                    <div class="col text-left">
                                        <h5 class="text-dark-green">
                                            Apoio psicológico e Psiquiatria
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 text-end"></div>
                                    <div class="col text-left line-height-1">
                                        <p class="text-gray bold">xxxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxxxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="my-py-2">
                                <div class="py-1 row">
                                    <div class="col-2 text-end"></div>
                                    <div class="col text-left">
                                        <h5 class="text-dark-green">
                                            Associações de doentes
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 text-end"></div>
                                    <div class="col text-left line-height-1">
                                        <p class="text-gray bold">xxxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxxxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxxxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                        <p class="text-gray bold">xxxx <img
                                                src="<?php echo BASE_URL ?>images/verde_link.png" alt=""
                                                class="book-icon-small"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="greenContent2" class="my-4 my-p-6" style="display: none;">
                            <div class="row my-my-3">
                                <div class="col-2 text-end"></div>
                                <div class="col text-left">
                                    <h4 class="text-dark-green bold">
                                        SABIA QUE...
                                    </h4>
                                </div>
                            </div>
                            <div class="my-py-4">
                                <div class="py-1 row">
                                    <div class="col-2 text-end"></div>
                                    <div class="col text-left">
                                        <h5 class="text-gray bold">
                                            <span class="text-dark-green bold">“Sabia que</span>
                                            o continente xxx é o que tem
                                            mais variantes de cancro hereditário identificadas?
                                            <span class="text-dark-green">“</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="my-py-4">
                                <div class="py-1 row">
                                    <div class="col-2 text-end"></div>
                                    <div class="col text-left">
                                        <h5 class="text-gray bold">
                                            <span class="text-dark-green bold">“Sabia que</span>
                                            numa família de quatro filhos, pode
                                            acontecer que só um deles é portador (ou nenhum)?
                                            <span class="text-dark-green">“</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="my-py-4">
                                <div class="py-1 row">
                                    <div class="col-2 text-end"></div>
                                    <div class="col text-left">
                                        <h5 class="text-gray bold">
                                            <span class="text-dark-green bold">“Sabia que</span>
                                            as variantes mais frequentes em Portugal
                                            são...
                                            <span class="text-dark-green">“</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="my-py-4">
                                <div class="py-1 row">
                                    <div class="col-2 text-end"></div>
                                    <div class="col text-left">
                                        <h5 class="text-gray bold">
                                            <span class="text-dark-green bold">“Sabia que</span>
                                            a maior parte das famílias tem apenas
                                            uma variantes específica.
                                            <span class="text-dark-green">“</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="frame-bottom">
        <a href="<?php echo BASE_URL ?>city.php">
            <img src="<?php echo BASE_URL ?>/images/barra_inferior_voltar_cidade.png" alt="" class="" />
        </a>
    </div>

    <!-- Add Bootstrap JS and jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function () {
            var roomContainer = $('.room-container').show();
            var frameTop = $('.frame-top').show();
            var frameBottom = $('.frame-bottom').show();
        });
    </script>
    <script>
        function showBook(color) {
            var bookModal = $('.book-modal');
            var bookModalContent = bookModal.find('.book-modal-content');

            // Hide all modals
            bookModalContent.find('.book-modal-yellow').hide();
            bookModalContent.find('.book-modal-blue').hide();
            bookModalContent.find('.book-modal-green').hide();

            // Set the background color of the book-modal to semi-transparent dark
            bookModal.show();

            // Show the respective book modal based on the color
            bookModalContent.find('.book-modal-yellow').toggle(color === 'yellow');
            bookModalContent.find('.book-modal-blue').toggle(color === 'blue');
            bookModalContent.find('.book-modal-green').toggle(color === 'green');
        }

        function hideBook() {
            var bookModal = $('.book-modal');

            // Hide the book-modal
            bookModal.hide();
        }
    </script>
    <script>
        function yellowHandleClick(imageNumber) {
            let triggerElement1 = document.getElementById("yellowTrigger1");
            let triggerElement2 = document.getElementById("yellowTrigger2");
            let contentElement1 = document.getElementById("yellowContent1");
            let contentElement2 = document.getElementById("yellowContent2");
            if (imageNumber === 1) {
                triggerElement1.classList.add("active");
                triggerElement2.classList.remove("active");
                contentElement1.style.display = 'block';
                contentElement2.style.display = 'none';
            } else {
                triggerElement1.classList.remove("active");
                triggerElement2.classList.add("active");
                contentElement1.style.display = 'none';
                contentElement2.style.display = 'block';
            }
        }
    </script>
    <script>
        function blueHandleClick(imageNumber) {
            let triggerElement1 = document.getElementById("blueTrigger1");
            let triggerElement2 = document.getElementById("blueTrigger2");
            let triggerElement3 = document.getElementById("blueTrigger3");
            let triggerElement4 = document.getElementById("blueTrigger4");
            let triggerElement5 = document.getElementById("blueTrigger5");
            let contentElement1 = document.getElementById("blueContent1");
            let contentElement2 = document.getElementById("blueContent2");
            let contentElement3 = document.getElementById("blueContent3");
            let contentElement4 = document.getElementById("blueContent4");
            let contentElement5 = document.getElementById("blueContent5");
            if (imageNumber === 1) {
                triggerElement1.classList.add("active");
                triggerElement2.classList.remove("active");
                triggerElement3.classList.remove("active");
                triggerElement4.classList.remove("active");
                triggerElement5.classList.remove("active");
                contentElement1.style.display = 'block';
                contentElement2.style.display = 'none';
                contentElement3.style.display = 'none';
                contentElement4.style.display = 'none';
                contentElement5.style.display = 'none';
            } else if (imageNumber === 2) {
                triggerElement1.classList.remove("active");
                triggerElement2.classList.add("active");
                triggerElement3.classList.remove("active");
                triggerElement4.classList.remove("active");
                triggerElement5.classList.remove("active");
                contentElement1.style.display = 'none';
                contentElement2.style.display = 'block';
                contentElement3.style.display = 'none';
                contentElement4.style.display = 'none';
                contentElement5.style.display = 'none';
            } else if (imageNumber === 3) {
                triggerElement1.classList.remove("active");
                triggerElement2.classList.remove("active");
                triggerElement3.classList.add("active");
                triggerElement4.classList.remove("active");
                triggerElement5.classList.remove("active");
                contentElement1.style.display = 'none';
                contentElement2.style.display = 'none';
                contentElement3.style.display = 'block';
                contentElement4.style.display = 'none';
                contentElement5.style.display = 'none';
            } else if (imageNumber === 4) {
                triggerElement1.classList.remove("active");
                triggerElement2.classList.remove("active");
                triggerElement3.classList.remove("active");
                triggerElement4.classList.add("active");
                triggerElement5.classList.remove("active");
                contentElement1.style.display = 'none';
                contentElement2.style.display = 'none';
                contentElement3.style.display = 'none';
                contentElement4.style.display = 'block';
                contentElement5.style.display = 'none';
            } else if (imageNumber === 5) {
                triggerElement1.classList.remove("active");
                triggerElement2.classList.remove("active");
                triggerElement3.classList.remove("active");
                triggerElement4.classList.remove("active");
                triggerElement5.classList.add("active");
                contentElement1.style.display = 'none';
                contentElement2.style.display = 'none';
                contentElement3.style.display = 'none';
                contentElement4.style.display = 'none';
                contentElement5.style.display = 'block';
            }
        }
    </script>
    <script>
        function greenHandleClick(imageNumber) {
            let triggerElement1 = document.getElementById("greenTrigger1");
            let triggerElement2 = document.getElementById("greenTrigger2");
            let contentElement1 = document.getElementById("greenContent1");
            let contentElement2 = document.getElementById("greenContent2");
            if (imageNumber === 1) {
                triggerElement1.classList.add("active");
                triggerElement2.classList.remove("active");
                contentElement1.style.display = 'block';
                contentElement2.style.display = 'none';
            } else {
                triggerElement1.classList.remove("active");
                triggerElement2.classList.add("active");
                contentElement1.style.display = 'none';
                contentElement2.style.display = 'block';
            }
        }
    </script>
    <script>
        function blueSubHandleClick1(newLink) {
            // Change the href attribute of the link with id 'blueSubContent'
            //document.getElementById('blueSubContent1').href = newLink;

            // Remove 'active' class from all buttons
            var buttons = document.querySelectorAll('.subBtn1');
            buttons.forEach(function (button) {
                button.classList.remove('active');
            });

            // Add 'active' class to the clicked button
            event.currentTarget.classList.add('active');
        }
        function blueSubHandleClick2(newLink) {
            // Change the href attribute of the link with id 'blueSubContent'
            //document.getElementById('blueSubContent2').href = newLink;

            // Remove 'active' class from all buttons
            var buttons = document.querySelectorAll('.subBtn2');
            buttons.forEach(function (button) {
                button.classList.remove('active');
            });

            // Add 'active' class to the clicked button
            event.currentTarget.classList.add('active');
        }
    </script>
    <script>
        function changeRoomAndRedirect(destination) {
            var roomContainer = $('.room-container img');
            var images = [
                'estante_open_020.png',
                'estante_open_019.png',
                'estante_open_018.png',
                'estante_open_017.png',
                'estante_open_016.png',
                'estante_open_015.png',
                'estante_open_014.png',
                'estante_open_013.png',
                'estante_open_012.png',
                'estante_open_011.png',
                'estante_open_010.png',
                'estante_open_09.png',
                'estante_open_08.png',
                'estante_open_07.png',
                'estante_open_06.png',
                'estante_open_05.png',
                'estante_open_04.png',
                'estante_open_03.png',
                'estante_open_02.png',
            ];
            var index = 0;

            function changeImage() {
                if (index < images.length) {
                    roomContainer.attr('src', '<?php echo BASE_URL ?>images/' + images[index]);
                    index++;
                    setTimeout(changeImage, 100); // Tempo de transição entre imagens (em milissegundos)
                } else {
                    window.location.href = destination;
                }
            }

            changeImage();
        }
    </script>
</body>

</html>