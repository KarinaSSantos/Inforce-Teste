<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Inforce - Software, Site Personalizado e Marketing Digital Avançado
    </title>
    <meta name="description"
        content="Consultoria e Desenvolvimento Web especializada em Portais, Sites Personalizados, Softwares, Apps e Estratégias de Marketing Digital." />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo asset('assets/css/style.css')?>" type="text/css">

    <script type="text/javascript" src="<?php echo asset('assets/js/script.js')?>"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="All">
        <!--Inicio do Menu-->
        <div class="Menu">
            <nav class="navbar fixed-top navbar-expand-lg navbar">
                <a href="#">
                    <div class="navbar-brand"></div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon MenuBurguer">
                        ☰
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item calculadoramenu">
                            <a class="nav-link" href="#calculadora">Calculadora</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--Fim do Menu-->
        <div class="col-lg-12 col-md-10 col-sm-12">
            <div class="Container Banner" id="home">
                <div class="Content Home">
                    <div class="col-lg-6 col-md-6">
                        <div class="row Conheca">
                            <p> Conheça nosso Portal Exchange, ele te deixa por dentro da cotação das principais moedas
                                em tempo real, e mostra as melhores noticias sobre soluções inovadoras feitas aqui no
                                lab da Inforce!</p>
                        </div>
                        <div class="row Conheca">
                            <h1>
                                Quer simular uma cotação e não sabe como? Conheça nossa calculadora de Câmbio.
                            </h1>
                        </div>
                        <div class="Banner Botão ">
                            <div class="row">
                                <a href="#calculadora"> <button class="btn-converter-home"> Calcule já </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="AllCalculadora" id="calculadora">
        <div class="Container">
            <div class="Content Exchange">
                <div class="col-lg-12 col-md-12">
                    <div class="row d-flex justify-content-center">
                        <h1><span class="ExchangeTitle">Exchange</span> Calculadora</h1>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <p>Mais uma ferramenta disponivel no Portal Exchange Inforce</p>
                    </div>
                    <div class="Calculadora">
                        <div class="row d-flex justify-content-center">
                            <form class="form-horizontal" id="form-conversor">
                                <input placeholder="quantidade" id="value" name="value" type="text" required="required"
                                    name="numbers" pattern="[0-9]+$" class="FormataCampo">
                                <select name="base" required="true" id="base" class="FormataCampo custom-select ">
                                    <option value="" disabled selected> moeda</option>
                                    <option value="USD" id="USD"> USD </option>
                                    <option value="BRL" id="BRL"> BRL </option>
                                    <option value="EUR" id="EUR"> EUR </option>
                                </select>
                                <!--Colocar um icone de inverter-->
                                <svg class="bi bi-arrow-left-right" width="1em" height="1em" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.146 9.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L14.793 13l-2.647-2.646a.5.5 0 010-.708z"
                                        clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                        d="M4 13a.5.5 0 01.5-.5H15a.5.5 0 010 1H4.5A.5.5 0 014 13zm3.854-9.354a.5.5 0 010 .708L5.207 7l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z"
                                        clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                        d="M4.5 7a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H5a.5.5 0 01-.5-.5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <!--fim-->
                                <select name="to" required="true" id="to" class="FormataCampo custom-select">
                                    <option value="" disabled selected> moeda</option>
                                    <option value="USD" id="USD"> USD </option>
                                    <option value="BRL" id="BRL"> BRL </option>
                                    <option value="EUR" id="EUR"> EUR </option>
                                </select>
                                <button class="btn-converter" id="calc">Converter</button>
                            </form>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <p class="Resultado">Cotação:</p>
                            <p class="Cotacao" id="cotacao">...</p>
                            <p class="Resultado">Resultado:</p>
                            <p class="Cotacao" id="resultado">...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#form-conversor").submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('converter') }}",
                data: $("#form-conversor").serialize(),
                success: function (resposta) {
                    $("#resultado").html('R$ ' + resposta.value);
                    $("#cotacao").html('R$ ' + resposta.currency);
                }
            });
        });
    </script>
</body>
</html>