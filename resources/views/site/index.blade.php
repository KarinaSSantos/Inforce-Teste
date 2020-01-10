<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Inforce - Software, Site Personalizado e Marketing Digital Avançado
        </title>
<meta name="description" content="Consultoria e Desenvolvimento Web especializada em Portais, Sites Personalizados, Softwares, Apps e Estratégias de Marketing Digital." />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="Container Banner ">
            <div class="Content Homme">
                <div class="col-lg-12 col-md-10">
                <div class="row">
        <p> Conheça nosso Portal Exchange, ele te deixa por dentro da cotação das principais moedas em tempo real, e mostra as melhores noticias sobre soluções inovadoras feitas aqui no lab da Inforce!</p>
                </div>
                <div class="row">
                    <h1>
                        Quer simular uma cotação e não sabe como? Conheça nossa calculadora de Câmbio.
                    </h1>
                </div>
                <div class="row">
                    <button class="Button CaluladoraHome"> Calcule já </button>
                </div>
            </div>
        </div>
    </div>
        <div class="Container Exchange">
            <div class="Content Exchange">
                <div class="col-lg-12 col-md-10">
                <div class="row">
                    <h1></span>Exchange</span> Calculadora</h1>
                </div>
                <div class="row">
                    <p>Mais uma ferramenta disponivel no Portal Exchange Inforce</p>
                </div>
                <div class="Calculadora">
                <div class="row">
                    <form class="form-horizontal" action=>
                    <input placeholder="quantidade" id="value" name="value" required="true">
                        <select name="base" required="true" id="base" class="FormataCampo">
                            <option  value="" disabled selected> escolha sua moeda</option>
                            <option value="USD" id="USD"> USD </option>
                            <option value="BRL" id="BRL"> BRL </option>
                            <option value="EUR" id="EUR"> EUR </option>
                        </select>
                        <!--Colocar um icone de inverter-->
                        <svg class="bi bi-arrow-left-right" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.146 9.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L14.793 13l-2.647-2.646a.5.5 0 010-.708z" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M4 13a.5.5 0 01.5-.5H15a.5.5 0 010 1H4.5A.5.5 0 014 13zm3.854-9.354a.5.5 0 010 .708L5.207 7l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M4.5 7a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd"></path>
                          </svg>
                          <!--fim-->
                        <select name="to" required="true" id="to" class="FormataCampo">
                            <option  value="" disabled selected> escolha sua moeda</option>
                            <option value="USD" id="USD"> USD </option>
                            <option value="BRL" id="BRL"> BRL </option>
                            <option value="EUR" id="EUR"> EUR </option>
                        </select>
                        <button type="submit" id="calc" name="calc">Converter</button>
                    </form>
                </div>
                <div class="row">
                    <p>Resultado:</p> <?php $result ?>
                </div>
            </div>
            <div class="row">
                <h1></span>Exchange</span> RealTime</h1>
            </div>
            <div class="RealTime">
                <div class="row">
                    <!--aqui vão as bandeiras-->
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </body>
    </html>
    