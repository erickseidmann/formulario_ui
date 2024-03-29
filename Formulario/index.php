<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <script defer src="script.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Formulario de Cadastro</title>
</head>

<body class="bg-dark">
    <div class="container ">
        <div class="row form-cadastro justify-content-center bg-dark ">
            <div class="col-6 aling-self-center area-form border bg-white">
                <div class="row justify-content-center mb-4">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/welcome-video-design-template-6ef541fd151da84baea3a60a489d6a9c_screen.jpg?ts=1577643382"
                        class="rounded-circle" alt="logo ui" />
                </div>
                <span class="small d-block ">
                    Cadastre com sua conta
                    <a href="https://www.google.com/intl/pt-BR/account/about/" target="_blank">
                        <b> Google</b>
                    </a></span>
                <form class="form" id="form" action="/formulario_UI/backend/cadastro.php" method="post">

                    <div class="row input-group mt-1 ">
                        <div class="col-md-6 mb-3">
                            <button name="tipo" id="pjbtn" type="button" class="btn bot-click  btn-info  fw-semibold btn-sm">
                                Não Sou o Aluno*
                            </button>
                        </div>
                    </div>


                    <div class="row input-group mb-3 fw-semibold ">
                        <div class="col-md-6 ">
                            <label>Nome do aluno*</label>
                            <input type="text" class="form-control bg-light  " name="nome" id="nome"
                                placeholder="ex: João" />
                        </div>
                        <div class="col-md-6 ">
                            <label>Sobrenome*</label>
                            <input type="text" class="form-control bg-light " id="sobrenome" name="sobrenome"
                                placeholder="ex: fulano de tal" />
                        </div>
                    </div>
                    <div class="row input-group  mb-3 fw-semibold">
                        <div class="col-md-6 ">
                            <label>CPF*</label>
                            <input id="cpf" type="text" name="cpf" class="form-control bg-light btn-outline-secondary"
                                autocomplete="off" />
                        </div>
                        <div class="col-md-6 ">
                            <label>Email*</label>
                            <input type="email" id="email" name="email"
                                class="form-control bg-light btn-outline-secondary"
                                placeholder="ex: meuemail@gmail.com" />
                        </div>
                    </div>

                    <div id="pj" class="input-group mb-3 fw-semibold">
                        <div class="row input-group mb-3">
                            <div class="col-md-6 ">
                                <label>Nome Do Responsavel*</label>
                                <input name="razaosocial" id="razaosocial" type="text" class="form-control bg-light btn-outline-secondary" />
                            </div>
                            <div class="col-md-6 ">
                                <label>Sobrenome Do Responsavel*</label>
                                <input type="text" name="nomefantasia" id="nomefantasia" class="form-control bg-light btn-outline-secondary" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 fw-semibold">
                        <label>CPF*</label>
                            <input id="cpf" type="text" name="cpf" class="form-control bg-light btn-outline-secondary"
                                autocomplete="off" />
                        </div>
                    </div>

                    <div class="row input-group mb-3 fw-semibold">
                        <div class="col-md-6 ">
                            <label>Senha*</label>
                            <input type="password" id="senha" name="senha"
                                class="form-control bg-light btn-outline-secondary" placeholder="*******" />
                        </div>
                        <div class="col-md-6 ">
                            <label>Repita a senha*</label>
                            <input type="password" id="senha2" name="senha2"
                                class="form-control bg-light outline-secondary" placeholder="*******" />
                        </div>
                    </div>
                    <div class="row input-group mb-3 fw-semibold">
                        <div class="col-md-6 ">
                            <label>Data de Nascimento*</label>
                            <input id="data" type="text" name="data" class="form-control bg-light date" />
                        </div>
                        <div class="col-md-6 ">
                            <label>Celular*</label>
                            <input type="tel" id="tele" name="tele"
                                class="form-control bg-light btn-outline-secondary" />
                        </div>
                    </div>
                    <div class="row input-group mb-6 mb-3">
                        <label class="mb-1 fw-semibold">Sexo</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="masculino">Masculino</label>
                                <input class="form-check-input" type="radio" name="sexo" id="masculino" value="M" />

                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="feminino" value="F" />
                                <label class="form-check-label" for="feminino">Feminino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="outro" value="O" />
                                <label class="form-check-label" for="outro">Prefiro não informar</label>
                            </div>
                        </div>
                    </div>

                    <!-- INFORMAÇÕES SOBRE O ENDEREÇO -->

                    <div class="row input-group mt-1 mb-3 fw-semibold">
                        <div class="col-md-6  ">
                            <label for="cep">CEP*</label>
                            <input type="text" name="cep" class="form-control bg-light outline-secondary" id="cep"
                                maxlength="8" onkeyup="mascara_cep()" placeholder="__.___-__" />
                        </div>
                        <div class="col-md-6 ">
                            <label for="logradouro">Logradouro*</label>
                            <input type="text" name="logradouro" class="form-control bg-light outline-secondary"
                                id="logradouro" placeholder="Logradouro" readonly />
                        </div>
                    </div>
                    <div class="row input-group mt-1  mb-3 fw-semibold">
                        <div class="col-md-6 ">
                            <label for="cidade">Cidade*</label>
                            <input type="text" name="cidade" class="form-control bg-light outline-secondary" id="cidade"
                                placeholder="Cidade" readonly />
                        </div>
                        <div class="col-md-6 ">
                            <label for="estado">Estado*</label>
                            <select id="uf" name="estado" class="form-control form-select bg-light outline-secondary "
                                readonly>
                                <option selected></option>
                                <option value="MG">MG</option>
                                <option value="DF">DF</option>
                                <option value="SP">SP</option>
                                <option value="GO">GO</option>
                                <option value="RR">RR</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="AC">AC</option>
                                <option value="RO">RO</option>
                                <option value="TO">TO</option>
                                <option value="MA">MA</option>
                                <option value="PI">PI</option>
                                <option value="CE">CE</option>
                                <option value="RN">RN</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="AL">AL</option>
                                <option value="SE">SE</option>
                                <option value="BA">BA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="ES">ES</option>
                                <option value="RJ">RJ</option>
                                <option value="PR">PR</option>
                                <option value="SC">SC</option>
                                <option value="RS">RS</option>
                            </select>
                        </div>
                    </div>

                    <div class="row input-group mt-1 mb-3 fw-semibold">
                        <div class="col-md-6 ">
                            <label for="bairro">Bairro*</label>
                            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro"
                                readonly />
                        </div>
                        <div class="col-md-6 ">
                            <label for="numero">Número*</label>
                            <input type="number" name="numero" class="form-control" id="numero" placeholder="Número" />
                        </div>
                    </div>
                    <div class="col-md-6  mb-3 fw-semibold">
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" class="form-control" id="complemento"
                            placeholder="complemento" />
                    </div>
                    <div class="form-group input-goup  mb-3 fw-semibold">
                        <label for="opiniao">Deixe sua opinião conosco!</label>
                        <textarea class="form-control" name="opiniao" id="opiniao" placeholder="Escreva o que achou da nossa pagina!"
                            rows="3"></textarea>
                    </div>

                    <div class="form-check form-check-inline input-goup mb-4">
                        <label class="form-check-label fw-semibold col-12  " for="termos">*Li e aceito os <a
                                href="https://policies.google.com/terms?hl=pt-BR" target="_blank"> termos e condições
                            </a></label>
                        <input class="form-check-input" name="termos" type="checkbox" id="termos" value="termos" />

                    </div>

                    <div class="row btn-goup mb-3 ">
                        <div class="container-fluid col">
                            <button id="btncadastrar" name="btncadastrar" type="submit"
                                class="btn btn-info fw-semibold">
                                CADASTRAR
                            </button>
                            <button type="button" class="btn btn-secondary  fw-semibold">
                                VOLTAR
                            </button>
                            <button type="reset" class="btn btn-secondary fw-semibold ">
                                LIMPAR
                            </button>
                        </div>
                    </div>
                </form>

                <button type="button" class="btn btn-default btn-block  mb-3">
                    <a href="https://policies.google.com/terms?hl=pt-BR" target="_blank">Já tenho conta
                    </a>
                </button>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="//http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.js"></script>
    <script type="text/javascript" src="js/localization/messages_pt_BR.js"></script>

</body>

</html>