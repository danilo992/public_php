<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Fitnees Point Academia</title>
</head>
<body>
  <!--container header-->
  <div class="container-header">
      <a href="#menu"><i class="material-icons">home</i><P>Home</P></a>
      <a href="#redes-sociais"><i class="material-icons">face</i><P>Redes Social</P></a>
      <a href="https://wa.me/5548988332008?text=Olá,%20tudo%20bem?%20gostaria%20de%20mais%20informaçõe%20sobre%20Fitness%20Point" target="_banck"><i class="material-icons">call</i><P>Ligar</P></a>
      <a href="https://www.google.com/maps/place/Rod.+Virg%C3%ADlio+V%C3%A1rzea,+1974+-+Saco+Grande,+Florian%C3%B3polis+-+SC,+88032-001/@-27.5434434,-48.5024523,17z/data=!3m1!4b1!4m5!3m4!1s0x95274768741beeb7:0xf79d3f0a49760c0b!8m2!3d-27.5434434!4d-48.5002636" target="_banck"><i class="material-icons">room</i><p>Localização</p></a>                      
  </div>
  <!--fim container header-->
  <!--header-->
    <header id="menu">
        <h1>
          <img src="img/logo3.jpeg"  alt="fitness point academia" title="Fitness Point Academia">
        </h1> 
      <!--button media screen javascript-->   
        <div class="hamIcon" onclick="toggleClass()">
          <h2>&#9776;</h2>
        </div>
      <!--fim button js-->
      <nav class="container-nav" id="mainMenu">
        <ul>
            <li><a href="plano.php">Planos</a></li>
            <li><a href="#1">Modalidade</a></li>
            <li class="visivel-list"><a href="#horario">Horários</a></li> 
            <li><a href="#metodologia">Metodologia de Trabalho</a></li>
        </ul>
      </nav>
    </header>
    <!--fim header-->
    <!--MAIN-->
    <main>
        <!--CAROUSEL-->
             <section class="imagen-section" id="galeria">
                    <img  class="foto" src="img/09.jpeg">
                    <img  class="foto" src="img/logo4.jpeg">               
                    <img  class="foto" src="img/maquina.jpeg">
                    <img  class="foto" src=""> 
                    <img  class="foto" src="">                   
             </section>
              <!--FIM CAROUSEL-->
              <!--SECTION-ENTRA-PLANO 1 -->
              <section class="section-plano" id="#planos">
                <h3>
                  Conheça os Planos de Musculação
                </h3>
                <p>
                  Nosso trabalho é deixa você satisfeito!<br>
                  Venha fazer parte da nossa Academia
                </p>
                <h2>
                  Fitness Point Academia
                </h2>
              </section>
              <!--outra section-->
              <section class="container-planos"> 
                <div class="container-plano-mlc plano-mlc">
                  <h4>Plano</h4>
                  <h4>3x/semana</h4>
                  <p>Musculação</p>
                  <div class="list-plano-mlc">
                      <ul>
                        <li><strong>&#x02713;</strong>Horário Livre</li>
                        <li><strong>&#x02713;</strong>12 Acessos/mês</li>
                      </ul>
                  </div>
                  <div  class="btn-plano-mcl">
                      <a href="#3">
                      <button type="button" class="btn btn-outline-dark">R$109,00</button>
                      </a>
                  </div>
                </div>
                <div class="container-plano-mlc">
                    <h4>Plano</h4>
                    <h4>Horário Econômico</h4>
                    <p>Musculação</p>
                    <div class="list-plano-mlc">
                      <ul>
                        <li><strong>&#x02713;</strong>Das 11:30 - 14:00</li>
                        <li><strong>&#x02713;</strong>Todos os dias</li>
                      </ul>
                    </div>
                    <div  class="btn-plano-mcl">
                        <a href="#3">
                        <button type="button" class="btn btn-outline-dark">R$89,00</button>
                        </a>
                    </div>
                  </div>
                  <div class="container-plano-mlc">
                      <h4>Plano</h4>
                      <h4>Mensal</h4>
                      <p>Musculação</p>
                      <div class="list-plano-mlc">
                        <ul>
                          <li><strong>&#x02713;</strong>Horário Livre</li>
                          <li><strong>&#x02713;</strong>Todos os dias</li>
                        </ul>
                      </div>
                      <div  class="btn-plano-mcl">
                          <a href="#3">
                          <button type="button" class="btn btn-outline-dark">129,00$</button>
                          </a>
                      </div>
                    </div>
              </section> 
              <!--fim section -->

              <!--button bootstrap 4-->
              <div class="btn-plano">
              <a href="plano.php">
                <button type="button" class="btn btn-primary">Mais planos >></button>
              </a>
              </div>
              <!--fim botton bootstrap 4-->
              <!--section planos-->
              <div id="plano-none">
              <section class="section-plano" >
                  <h3>
                    Nossos planos
                  </h3>
                  <p>
                    Trimestral, Semestral e Anual<br>
                    Tudo que você precisa, a nossa Academia tem!
                  </p>
                  <h2>
                    Tudo para você
                  </h2>
                </section>
                <section class="container-planos" >
                  <div class="container-plano-mlc">
                    <h4>Plano</h4>
                    <h4>Trimestral</h4>
                    <p>Fitness Point</p>
                    <div class="list-plano-mlc">
                        <ul>
                          <li><strong>&#x02713;</strong>Horário Livre</li>
                          <li><strong>&#x02713;</strong>Parcelado em até 3x</li>
                          <li><strong>&#x02713;</strong>Fidelidade</li>
                        </ul>
                    </div>
                    <div  class="btn-plano-mcl">
                        <a href="#3">
                          <button type="button" class="btn btn-outline-dark">R$327,00</button>
                        </a>
                    </div>
                  </div>
                  <div class="container-plano-mlc">
                      <h4>Plano</h4>
                      <h4>Semestral</h4>
                      <p>Fitness Point</p>
                      <div class="list-plano-mlc">
                        <ul>
                          <li><strong>&#x02713;</strong>Horário Livre</li>
                          <li><strong>&#x02713;</strong>Parcelado em até 6x</li>
                          <li><strong>&#x02713;</strong>Fidelidade</li>
                        </ul>
                      </div>
                      <div  class="btn-plano-mcl">
                          <a href="#3">
                            <button type="button" class="btn btn-outline-dark">R$594,00</button>
                          </a>
                      </div>
                    </div>
                    <div class="container-plano-mlc">
                        <h4>Plano</h4>
                        <h4>Anual</h4>
                        <p>Fitness Point</p>
                        <div class="list-plano-mlc">
                          <ul>
                            <li><strong>&#x02713;</strong>Horário Livre</li>
                            <li><strong>&#x02713;</strong>Parcelado em até 10x</li>
                            <li><strong>&#x02713;</strong>Fidelidade</li>
                          </ul>
                        </div>
                        <div  class="btn-plano-mcl">
                            <a href="#3">
                              <button type="button" class="btn btn-outline-dark">R$936,00</button>
                            </a>
                        </div>
                      </div>
                </section> 
                <!--section plano-->
              <section class="section-plano-h2">
                  <h2>
                    Venha treinar :)
                  </h2>
                </section>
                <section class="container-planos" id="#planos">
                  <div class="container-plano-mlc">
                    <h4>Plano</h4>
                    <h4>Treino Rápido</h4>
                    <p>Fitness Point</p>
                    <div class="list-plano-mlc">
                        <ul>
                          <li><strong>&#x02713;</strong>Todos os dias</li>
                          <li><strong>&#x02713;</strong>30 Minutos de duração</li>
                          <li><strong>&#x02713;</strong>Montagem do Treino</li>
                        </ul>
                    </div>
                    <div  class="btn-plano-mcl-1">
                        <a href="#3">
                          <button type="button" class="btn btn-outline-dark">R$69,00</button>
                        </a>
                    </div>
                  </div>
                  <div class="container-plano-mlc">
                      <h4>Plano</h4>
                      <h4>Smart</h4>
                      <p>Fitness Point</p>
                      <div class="list-plano-mlc">
                        <ul>
                          <li><strong>&#x02713;</strong>Horário Livre</li>
                          <li><strong>&#x02713;</strong>Treino Independente<strong>&#8902;</strong></li>                         
                        </ul>
                      </div>
                      <div  class="btn-plano-mcl-1">
                          <a href="#3">
                            <button type="button" class="btn btn-outline-dark">R$69,00</button>
                          </a>
                      </div>
                    </div>
                    <div class="container-plano-mlc">
                        <h4>Plano</h4>
                        <h4>Resultado Garantido</h4>
                        <p>Fitness Point</p>
                        <div class="list-plano-mlc">
                          <ul>
                            <li><strong>&#x02713;</strong>Inclui Avaliação Física</li>
                            <li><strong>&#x02713;</strong>Treino Personalizado</li>
                            <li><strong>&#x02713;</strong>Horário Livre</li>
                          </ul>
                        </div>
                        <div  class="btn-plano-mcl-1">
                            <a href="#3">
                              <button type="button" class="btn btn-outline-dark">R$189,00</button>
                            </a>
                        </div>
                      </div>
                </section> 
              </div>
               <!--fim plano--> 
                <!--SECTION HORA-->
                <section class="container-hr-gn">
                  <section class="container-ginastica">
                    <h4>Ginástica</h4>
                      <p>
                        Não temos aulas de ginástica, Somente musculação (dentro da academia).
                        Oferecemos a possibilidade de uma ou mais pessoas
                        formarem grupos para aulas de ginástica: treinamneto
                        funcional, alongamento e Fast Training.
                      </p>
                      <p class="paragrafo">
                        Venha fazer parte da nossa equipe.
                        Estamos lhe esperando :)
                      </p>
                  </section>
                  <section class="container-horas" id="horario"> 
                      <h4>Horário de Funcionamento</h4>
                        <p id="fechado"> <strong class="material-icone">  <i class="material-icons">schedule</i> </strong> domindo <strong class="fechado"> Fechado </strong> </p> 
                        <p id="verde"> <strong class="material-icone">  <i class="material-icons">schedule</i> </strong> segunda <strong class="horas"> 07:00 - 14:00 / 17:00 - 22:00 </strong> </p> 
                        <p id="verde"> <strong class="material-icone">  <i class="material-icons">schedule</i> </strong> terça <strong class="horas"> 07:00 - 14:00 / 17:00 - 22:00  </strong> </p> 
                        <p id="verde"> <strong class="material-icone">  <i class="material-icons">schedule</i> </strong> quarta <strong class="horas"> 07:00 - 14:00 / 17:00 - 22:00  </strong> </p> 
                        <p id="verde"> <strong class="material-icone">  <i class="material-icons">schedule</i> </strong> quinta <strong class="horas"> 07:00 - 14:00 / 17:00 - 22:00  </strong> </p> 
                        <p id="verde"> <strong class="material-icone">  <i class="material-icons">schedule</i> </strong> sexta <strong class="horas"> 07:00 - 14:00 / 17:00 - 22:00  </strong> </p> 
                        <p id="verde"> <strong class="material-icone">  <i class="material-icons">schedule</i> </strong> sábado <strong class="horas"> 09:00 - 12:00 </strong> </p> 
                  </section>
                </section>  
                <!--FIM HORAS-->
                <!--section 4-->
                <section class="container-section-4">
                   <div class="container-gympass">
                      <h3>
                        <strong>&#8902;</strong>  Gympass  <strong>&#8902;</strong> 
                      </h3>
                      <a href="https://www.gympass.com/negocios/fitness-point-academia-358d9123-ad0b-4161-8295-cfa7e0a96b10" target="_blank">
                        <button type="button" class="btn btn-danger">Clique aqui</button>
                      </a>
                    </div>
                    <p>
                      Aceitamos Gympass<br>
                      Venha Treinar com a Gente
                    </p>
                </section>
                <!--FIM-->  
                <!--container metodologia-->
                <section class="container-metodogia" id="metodologia">
                  <article>
                    <h3>Visão</h3>
                    <p>
                      Ser a academia referência em atendimento e resulatados na prática de
                      musculação de Florianópolis até 2022.
                    </p>
                  </article>
                  <article>
                      <h3>Missão</h3>
                      <p>
                        Oferecer atendimento personalizado e qualificado aos clientes,
                        proporcionando um ambiente agradável, descontraído e familiar
                        com resultados efetivos.
                      </p>
                    </article>
                    <article>
                        <h3>Valores</h3>
                        <P>
                          Comprometimento;
                          Respeito
                          Confiança
                          Notalidade nos serviços
                          Satisfação dos clientes.s
                        </P>  
                      </article>
                </section> 
                <!--fim metodolia--> 

                <!--formulario index-php-->
                <section class="container-formulario">
                  <h5>Cadastre-se suas informações e receba novidades e promoções</h5>
                  <?php
                    if(isset($_SESSION['msg'])) {
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                    }
                  ?>
                    <form method="POST" action="processa.php">
                      <label>Nome Completo:</label>
                          <input type="text" name="nome" placeholder="Nome Completo" maxlength="80" required>
                      <label>E-mail:</label>
                          <input type="email" name="email" placeholder="E-mail" required>
                        <input type="submit" value="enviar">
                    </form>
                </section>
                <!--fim formulario-->
    </main>
    <!--fim main-->
    <!--footer-->
    <footer>
      <!--aside 1-->
      <aside class="list-redes-social" id="redes-sociais" >
       <a href="https://www.facebook.com/fitnesspointacademia/" target="_banck"> <figure><img src="img/facebook_2.png">
          <figcaption>Facebook</figcaption>
        </figure></a>
       <a href="https://www.instagram.com/fitnesspointacademia/?hl=pt-br" target="_banck"> <figure><img src="img/instagram.png">
          <figcaption>Instagram</figcaption>
        </figure></a>
       <a href="index.php" target="_banck"> <figure><img src="img/home.png">
          <figcaption>Menu pricinpal</figcaption>
        </figure></a>
       <a href="https://www.google.com/maps/place/Rod.+Virg%C3%ADlio+V%C3%A1rzea,+1974+-+Saco+Grande,+Florian%C3%B3polis+-+SC,+88032-001/@-27.5434434,-48.5024523,17z/data=!3m1!4b1!4m5!3m4!1s0x95274768741beeb7:0xf79d3f0a49760c0b!8m2!3d-27.5434434!4d-48.5002636" target="_banck"> <figure><img src="img/pin_2.png">
          <figcaption>Localização</figcaption>
        </figure></a>
      </aside>

      <!--aside 2-->
      <aside class="endereco">
        <p><strong>&#8902;</strong> Professores <span> : </span> Calos Vasques (Totonho)</p>
        <p><strong>&#8902;</strong> Professores <span> : </span> Vinícius Fernandes (Vini)</p>
          <address>
           
      <p>Siga-nos nas redes sociais</p>
      <strong>Informativo</strong>
      <p><strong>&#8902;</strong>Cadatre-se para receber novidades e promoções em seu email</p>

      <strong>&#8902;</strong> Endereço: Rodovia Virgílio Várzea, 1974. Barrio: Saco Grande
          </address>
    </aside>

      <!--aside 3-->
      <aside class="aside-whats">
        <a href="https://wa.me/5548988332008?text=Olá,%20tudo%20bem?%20gostaria%20de%20mais%20informações%20sobre%20Fitness%20Point" target="_banck">
          <figure><img src="img/icons8-cor-50.png" alt="whatsapp" title="whatsapp">
            <figcaption><h5>Entre em contato via whatsapp<br> para obter mais informações.</h5></figcaption>
          </figure>
        </a>
        <aside class="pagseguro">
          <aside>
            <p><strong>Forma de pagamento</strong></p>
            <p>Parcele suas compras em até 12x</p>
            <p>
              O nossa academia oferece diversas formas de pagamento. 
              Escolha a melhor formar de pagamento para você!
            </p>
        </aside>
      </aside>
    </footer>
    <!--fim-footer-->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>