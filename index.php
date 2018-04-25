<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site da empresa Fast BI, empresa com foco em Bussiness Inteligence." />
    <meta name="robots" content="all" />
    <meta name="keywords" content="sites, web, desenvolvimento, Bussiness, Inteligence, Fast, Negocios, inteligencia, BI,Pentaho, Agile BI, Relatório, Fast BI">
    <META NAME="LANGUAGE" CONTENT="Pt-Br" >


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Fast BI!</title>
  </head>
  <body>

    <nav class=" navbar site-header fixed-top py-1" role="navigation">
 
      <div class=" nav container d-flex flex-column flex-md-row justify-content-between">
        <a class="navbar-brand" href="#"><img class="img-responsive2"src="assets/img/logobi.png"></a>

        <!-- <a class="py-2 brand" href="#"><img src="assets/img/logobi.png" alt=""> -->
          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg> -->
        <!-- </a> -->
        <a class="py-2 d-none d-md-inline-block " href="#services">Serviços</a>
        <a class="py-2 d-none d-md-inline-block" href="#solutions">Soluções</a>
        <a class="py-2 d-none d-md-inline-block" href="#about">Sobre Nós</a>
        <a class="py-2 d-none d-md-inline-block" href="#team">Equipe</a>
        <a class="py-2 d-none d-md-inline-block" href="#clients">Clientes</a>
        <a class="py-2 d-none d-md-inline-block" href="#contact">Contato</a>
      </div>
    </nav>


    <!--  FAST BI intro -->
    <div class="container-x">  
      <div class="image-intro">
        <div class="text-intro col-md-5 p-lg-5 mx-auto my-5-x text-center">
          <!-- <h1 class="intro-company-name text-uppercase display-4 font-weight-normal">FAST BI!</h1>
          <p class="lead font-weight-normal">Fast Business Intelligence</p>
          <a class="btn btn-outline-primary" href="#">Em breve</a> -->
          <a  id="chevron-sector"href="#services">
            <div class=" col-md-10 offset-md-5  col-lg-10 offset-lg-5 chevron-margin-top">
              <div class="chevron"></div>
              <div class="chevron"></div>
              <div class="chevron"></div>
            </div>
            <span class="text-chevron">Saiba mais</span>
          </a>
        </div>
      </div>
    </div>

    <!--  SERVIÇOS --> 
    <div id="services" class="services margin-section">
      <div class="container">
        <h1 class="title-section text-uppercase font-weight-normal text-center display-6">Serviços</h1>
        <div class="row card-deck">
          <div class="card text-center border-secondary " >
            <img class="card-img-top" src="assets/img/service-icons/target_audience.svg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Consultoria Gerencial</h4>
              <!-- <p class="card-text">Nossa empresa presta assistência ao gestores na elaboração de KPIs, definição de métricas e gráficos.</p> -->
            </div>
            <div class="card-footer ">
            <a class="btn btn-outline-primary" data-toggle="modal" data-target="#modalConsultoria">Saiba mais</a>
             </div>
          </div>

          <div class="card text-center border-secondary" >
            <img class="card-img-top" src="assets/img/service-icons/se_bench.svg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Ferramentas Analíticas</h4>
              <!-- <p class="card-text">Desenvolvimento soluções tecnológicas que auxiliem na gestão da informação de sua empresa.</p> -->

            </div>
            <div class="card-footer ">
            <a class="btn btn-outline-primary" data-toggle="modal" data-target="#modalFerramenta">Saiba mais</a>
             </div>
          </div>

          <div class="card text-center border-secondary">
            <img class="card-img-top" src="assets/img/service-icons/hosting_service.svg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Gerenciamento de Serviços</h4>
              <!-- <p class="card-text">Contamos com profissionais responsáveis que prestarão auxílio às empresas quanto as suas necessidades de Servidores.</p> -->
            </div>
            <div class="card-footer ">
              <a class="btn btn-outline-primary" data-toggle="modal" data-target="#modalGerencia">Saiba mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Modal`s Serviços-->
     <div class="modal fade" id="modalConsultoria" tabindex="-1" role="dialog" aria-labelledby="modalConsultoriaLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalConsultoriaLabel">Consultoria Gerencial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Nossa empresa presta assistência ao gestores na elaboração de KPIs, definição de métricas e gráficos. Possuímos consultores terceirizados na área de gestão da Produtividade, capaz de auxiliar a alcançar suas metas.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>

              </div>
            </div>
          </div>
      </div>

      <div class="modal fade" id="modalFerramenta" tabindex="-1" role="dialog" aria-labelledby="modalFerramentaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalFerramentaLabel">Ferramentas Analíticas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Desenvolvimento soluções tecnológicas que auxiliem na gestão da informação de sua empresa, fornecendo de forma rápida e clara todo o conhecimento necessário para tomadas de decisões certeiras.
</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>

            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalGerencia" tabindex="-1" role="dialog" aria-labelledby="modalGerenciaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalGerencia">Gerenciamento de Serviços</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Contamos com profissionais responsáveis que prestarão auxílio às empresas quanto as suas necessidades de Servidores, Licenças de Software e TI em geral, quanto a manutenção do projeto de BI.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>

            </div>
          </div>
        </div>
      </div>
    </div>


    <!--   SOLUÇÕES -->
    <div id="solutions" class="solutions margin-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="pentahoo-margin">
              <a href="www.pentaho.com/" target="_blank">
                <img src="assets/img/solutions/logo-pentaho.png" alt="Lights" style="width:100%">
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="">
              <a href="https://www.postgresql.org/" target="_blank">
                <img src="assets/img/solutions/postgresql-logo.png" alt="Lights" style="width:100%">
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="">
              <a href="https://www.linode.com/" target="_blank">
                <img src="assets/img/solutions/linode-logo.png" alt="Lights" style="width:100%">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--  SOBRE NÓS -->
    <div id="about" class="about-us margin-section">
      <div class="container">
        <h1 class="title-section text-uppercase font-weight-normal text-center display-6">Sobre nós</h1>
        <div class="row">
          <div class=" ">
            <p class="text-justify">Somos uma equipe formada por seletos profissionais, tanto do quadro funcional quanto terceirizados, priorizando a qualidade no serviço prestado e o melhor custo benefício para nossos clientes. </p>
            <p class="text-justify">Empresa fundada em 2018, temos como premissa a melhoria dos processos gerenciais de nossos clientes. Almejamos ser os pioneiros na revolução administrativa do Vale do Ivaí, melhorando o comércio regional e revelando todo o potencial que nossas empresas possuem.</p>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-lg-4 p-3">
              <h3>Missão</h3>
              <p class="text-justify">Fornecer soluções em gestão da informações...</p>
              <p><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalMission">Nossa Missão</button></p>
            </div>
            <div class="col-lg-4 p-3">
              <h3>Visão</h3>
              <p class="text-justify">Ser referência na gestão da informação em todo o Vale do Ivaí...</p>
              <p><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalVision">Nossa Visão</button></p>
            </div>
            <div class="col-lg-4 p-3">
              <h3>Valores</h3>
              <p class="text-justify">Solucionadores de problemas: Nosso compromisso é resolver os problemas de....</p>
              <p><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalValues">Nossos Valores</button></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal`s Sobre Nós -->
      <div class="modal fade" id="modalMission" tabindex="-1" role="dialog" aria-labelledby="modalMissionLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalMissionLabel">Missão</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Fornecer soluções em gestão da informações, auxiliando o processo de tomada de decisão.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>

              </div>
            </div>
          </div>
      </div>

      <div class="modal fade" id="modalVision" tabindex="-1" role="dialog" aria-labelledby="modalVisionLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalVisionLabel">Visão</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Ser referência na gestão da informação em todo o Vale do Ivaí, introduzindo o paradigma da administração inteligente nos comércios e indústrias locais.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>

            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalValues" tabindex="-1" role="dialog" aria-labelledby="modalValuesLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalValuesLabel">Valores</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>• Solucionadores de problemas: Nosso compromisso é resolver os problemas de nossos clientes de forma satisfatória e completa. Desafios são encarados como um estímulo!</p>
              <p>• A “rapidez” é nosso nome. O desenvolvimento rápido e entregas modulares do projeto garantem um retorno mais rápido ao cliente, garantindo que o produto final apresente o retorno esperado.</p>
              <p>• Crescemos junto com nossos clientes. O que nos motiva é ver nossos clientes tomarem decisões embasadas em nossas soluções,  que lhes permitam crescer e se desenvolver.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  EQUIPES -->
    <div id="team" class="team margin-section">
      <div class="container">
        <h1 class="title-section text-uppercase font-weight-normal text-center display-6">Equipe</h1>
        <div class="row">

          <div class="col-lg-4  ">
            <img class="rounded-circle" src="assets/img/team/ronan.jpg" alt="Ronan" width="140" height="140">
            <h3>Ronan Anacleto</h3>
            <h5><span class="badge badge-secondary">Consultor em BI</span> </h5> 
            <p>Mestre em Ciências da Computação pela Universidade Estadual de Londrina. Professor na rede
            Federal de ensino por dois anos. Hoje ainda exerce atividades docentes porém dedica seu
            tempo como Consultor e Analista de BI na empresa Fast BI, fundada por ele em 2018.</p>
            <a href="https://www.facebook.com/ronan.anacleto?ref=br_rs"> <i class="fa fa-facebook-square fa-2x" style="color: #00AFEF;" ></i></a>
            <!-- <a href="https://br.linkedin.com/"> <i class="fa fa-linkedin-square fa-2x"></i></a> -->
          </div>

          <div class="col-lg-4  ">
            <img class="rounded-circle" src="assets/img/team/bruna.jpg" alt="Ronan" width="140" height="140">
            <h3>Débora Bruna F. F. Anacleto</h3>
            <h5><span class="badge badge-secondary">Administradora</span> </h5> 
            <p>Funcionária de grandes redes como Super Pão e Pernambucanas, possui experiência prática em de
               atendimento ao público e na aplicação de metodologias de produtividade como estabelecimento de
                metas de venda. </p>
            <a href="https://www.facebook.com/deborabruna.2012"> <i class="fa fa-facebook-square fa-2x" style="color: #00AFEF;"></i></a>
            <!-- <a href="https://br.linkedin.com/"> <i class="fa fa-linkedin-square fa-2x"></i></a> -->
          </div>

          <div class="col-lg-4  ">
            <img class="rounded-circle" src="assets/img/team/marcio.jpg" alt="Márcio" width="140" height="140">
            <h3>Márcio Genciano</h3>
            <h5><span class="badge badge-secondary">Consultor de Produtividade</span> </h5> 
            <p>Consultor terceirizado que trabalha na área de Produtividade. Na síntese, seu trabalho eleva
               o potencial dos Colaboradores através de Metas e acompanhamento semanal da produção. Realiza
                um Trabalho de Coachee individual ou em grupo.</p>
            <a href="https://www.facebook.com/vendassssss/"> <i class="fa fa-facebook-square fa-2x" style="color: #00AFEF;"></i></a>
            <!-- <a href="https://br.linkedin.com/"> <i class="fa fa-linkedin-square fa-2x"></i></a> -->
          </div>

          <!-- <div class="col-lg-3  ">
            <img class="rounded-circle" src="assets/img/team/marcelo.jpg" alt="Marcelo" width="140" height="140">
            <h2>Marcelo S. Cavassani</h2>
            <h5><span class="badge badge-secondary">Desenvolvedor Web</span> </h5> 
            <p>Mestre em Ciências da Computação pela Universidade Estadual de Londrina. Professor na rede
            Federal de ensino por dois anos. Hoje ainda exerce atividades docentes porém dedica seu
            tempo como Consultor e Analista de BI na empresa Fast BI, fundada por ele em 2018.</p>
            <a href="https://github.com/cavassani"> <i class="fa fa-github-square fa-2x"></i></a>
            <a href="https://www.linkedin.com/in/marcelo-sanches-cavassani-52249351/"> <i class="fa fa-linkedin-square fa-2x"></i></a>
          </div> -->


        </div>
      </div>
    </div>

    <!--CONTATOS -->

    <div id="contact" class="contact margin-section-top">

      <div class="container p-3">
        <div class="wrapper">
          <div class="bi-info">
            <hr>
            <ul>
              <li><i class="fa fa-road"></i> Rua Manoel Pereira. 162. </li>
              <li><i class="fa fa-home"></i> Lidianópolis, Paraná</li>
              <!-- <li><i class="fa fa-phone"></i> (555) 555-5555</li> -->
              <li><i class="fa fa-envelope"></i> contato@fastbi.com.br</li>
            </ul>
            <hr>
            <div class="img-logo-contact">
              <img src="assets/img/contact-logo.png" alt="Fast BI">
            </div>
          </div>

        <div class="contact-bi">
          <h3>Contate-nos</h3>
          <form id="formcontact" class="needs-validation"  novalidate>
            <p>
              <label for="Name">Nome</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="nome"  required>
              <div class="invalid-feedback">
                Por favor digite seu nome.
              </div>
            <p>
              <label for="phone">Telefone</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Tel."  required>
              <div class="invalid-feedback">
                por favor digite seu telefone.
              </div>
            </p>
            <p class="full">
              <label for="email">E-mail</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"  required>
              <div class="invalid-feedback">
                Por favor digite seu e-mail.
              </div>
            </p>
            <p>
              <div class="form-group">
                <label class="text-inverse" for="select-menu">Motivo de Contato</label>
                <select class="custom-select d-block form-control" name="select" id="select" required style="width: 200px;">
                  <option value="">Selecione um item</option>
                  <option value="Orçamento">Orçamento</option>
                  <option value="Visita">Visita</option>
                  <option value="Outro">Outro</option>
                </select>
                  <div class="invalid-feedback">
                    Por favor selecione uma opção de motivo de contato.
                  </div>
              </div> 
            </p>

            <p class="full">
              <!-- <div class="form-group"> -->
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                <div class="invalid-feedback">
                  Escreva uma mensagem.
                </div>
              <!-- </div> -->
            </p>
            <p >
            <!-- <div class="form-group"> -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="terms"  id="invalidCheck" required style="width: 7%;">
                <label class="form-check-label" for="invalidCheck">
                  Aceito termos e condições
                </label>
                <div class="invalid-feedback">
                  Voçê deve aceitar para enviar a mensagem.
                </div>
              <!-- </div> -->
            </div>
            </p>
            <p class="full">
              <button  id="btn-send" type="submit" >Enviar</button>
            </p>
            <div id="msg"></div>
          </form>
        </div>
      </div>

    </div>
    <!-- <div id="contact" class="contact margin-section-top">

      <div  class="container p-3  ">
        <div class="col-md-8 p-3 offset-lg-2  col-sm-12 col-12 border rounded xxx " style="background:#f1f1f1;">
          <h2 class="mb-3 text-center">Contato</h2>
          <hr>
          <form id="formcontact" class="needs-validation"  novalidate>
            <div class="form-row">
              <div class="col-md-8 mb-3">
                <label for="Name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="nome"  required>
                <div class="invalid-feedback">
                  Por favor digite seu nome.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Tel."  required>
                <div class="invalid-feedback">
                  por favor digite seu telefone.
                </div>
              </div>

              <div class="col-md-8 mb-3">
                  <label for="email">E-mail</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"  required>
                  <div class="invalid-feedback">
                    Por favor digite seu e-mail.
                  </div>
              </div>
              <div class="input-group col-md-4 mb-3">
                <div class="form-group">
                  <label class="text-inverse" for="select-menu">Motivo de Contato</label>
                  <select class="custom-select d-block form-control" name="select" id="select" required>
                    <option value="">Selecione um item</option>
                    <option value="Orçamento">Orçamento</option>
                    <option value="Visita">Visita</option>
                    <option value="Outro">Outro</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor selecione uma opção de motivo de contato.
                  </div>
                </div> 
              
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Mensagem</label>
              <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
              <div class="invalid-feedback">
                Escreva uma mensagem.
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="terms"  id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Aceito termos e condições
                </label>
                <div class="invalid-feedback">
                  Voçê deve aceitar para enviar a mensagem.
                </div>
              </div>
            </div>
            <hr>
            <div class="text-center">
              <button id="btn-send" class="btn btn-outline-primary bt-lg" type="submit" style="width: 10em;">Enviar</button>
            </div>
            <div id="msg"></div>
          </form>  
        </div>
      </div>

    </div> -->

  <!-- FOOTER  -->
    <footer class="container py-1">
      <div class="row">
        <div class="col-12 col-md d-block text-center">
          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg> -->
          <small class="d-block mb-3 text-muted"> Fast BI &copy; 2018</small>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./node_modules/popper.js/dist/popper.min.js"></script>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/inputmask/dist/jquery.inputmask.bundle.js"></script>
    <script>
      $(' a[href^="#"]').on('click', function(e) {

        var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

        $('html, body').animate({ 
          scrollTop: targetOffset - 100
        }, 1000);
      });
      
      $(document).ready(function(){
        $(":input").inputmask();
        $("#phone").inputmask({"mask": "(99) 99999-9999"});

      });
      
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
   
    </script>

    <script>
       /* script  de envio de e-mail, chamando o  config do phpmailer no sendMail.php via ajax*/
      $(document).ready(function(){

        $('#formcontact').on('submit', function(event){
          event.preventDefault();
          $.ajax({
              dataType: 'JSON',
              url: 'sendMail.php',
              type: 'POST',
              data: $(this).serialize(),
              beforeSend: function(xhr){
                $('#btn-send').html('Enviando...');
              },
              success: function(response){
                console.log('sucesso')
                if(response){
                  console.log(response);
                  if(response['signal'] == 'ok'){
                  $('#msg').html('<div class="alert alert-success">'+ response['msg']  +'</div>');
                    $('input, textarea').val(function() {
                      return this.defaultValue;
                    });
                    location.reload();
                  }
                  else{
                    $('#msg').html('<div class="alert alert-danger">'+ response['msg'] +'</div>');
                  }
                }
              },
              error: function(){
                $('#msg').html('<div class="alert alert-danger">ocorreu um erro, tente mais tarde.</div>');
              },
              complete: function(){
                $('#btn-send').html('Mensagem Enviada');
              }
            });
        });
      });
    </script>

    <!-- BEGIN JIVOSITE CODE  -->
    <script type='text/javascript'>
    (function(){ 
      var widget_id = '6Cx5PF2wox';
      var d=document;
      var w=window;function l(){
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//code.jivosite.com/script/widget/'+widget_id;
        var ss = document.getElementsByTagName('script')[0];
        ss.parentNode.insertBefore(s, ss);
      }
      if(d.readyState=='complete'){
        l();
        }else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
    </script>
    <!-- END JIVOSITE CODE -->
  </body>
</html>
