<?php
include_once("conexao.php");
if(!isset($_SESSION)){
   session_start();

   
}

   $nome = $_POST['nome'];
   $idade = $_POST['idade'];
   $endereco = $_POST['endereco'];
   $cep = $_POST['cep'];
   $bairro = $_POST['bairro'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];
   $dataNasc = $_POST['dataNasc'];
   $profissao = $_POST['profissao'];
   $estadoCivil = $_POST['estadoCivil'];
   $cel = $_POST['cel'];
   $email =$_POST['email'];
  // $sexo = $_POST['sexo'];    

  $result =  "INSERT INTO ficha_anamnese(nome, idade, endereco, cep, bairro, cidade, estado, dataNasc, profissao, estadoCivil, cel, email) 
               VALUES('$nome', '$idade', '$endereco', '$cep', '$bairro', '$cidade', '$estado', '$dataNasc', '$profissao', '$estadoCivil', '$cel', '$email')";
  $resultado = mysqli_query( $mysqli, $result);
//} 
//http://localhost/projetoAnamnese/index.php https://www.phpmyadmin/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anamnese Projeto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #ebeff3;">
    <!-- cabecalho  -->
        <header>
            <h1>ficha de anamnese</h1>
        </header>
        <!-- conteudo principal -->
        <main>
            <form action="index.php" method="POST" name="formAnamnese" id="formAnamnese">
                       <!-- inicio da box -->
                 <div class="box">
                              <h2>dados pessoais</h2>
                            <!-- inicio componentes 1 -->
                          <div class="position">
                               <div class="componente">
                                  <label for="nome">Nome</label>
                                  <input type="text" id="nome" value="" class="componente-input1" name="nome" required>
                              </div>
                              <div>
                                  <label for="idade">Idade</label>
                                  <input type="text" id="idade" value="" class="componente-input2" name="idade" required>
                              </div>
                          </div>

                           <div>
                            <div class="position">
                               <div class="componente">
                                  <label for="endereco">Endereço</label>
                                  <input type="text" id="endereco" value="" class="componente-input1" name="endereco" required>
                              </div>
                            
                              <div>
                                  <label for="cep">CEP</label>
                                  <input type="text" id="cep" value="" class="componente-input1"  name="cep" required>
                              </div>
                            </div>
                           </div>
                         
                             
                         <div class="position">
                               <div class="componente">
                                  <label for="bairro">Bairro</label>
                                  <input type="text" id="bairro" value=""  class="componente-input1" name="bairro" required>
                              </div>
                            
                              <div class="componente">
                                 <label for="">cidade</label>
                                 <input type="text" id="cidade" value=""  class="componente-input1" name="cidade" required>
                             </div>
                           
                             <div>
                                 <label for="ESTADO">Estado</label>
                                 <select name="estado" id="estado" class="componente-select1" name="estado">
                                  <option value="">selecione...</option>
                                  <option value="RS">RS</option>
                                  <option value="RJ">RJ</option>
                                  <option value="SP">SP</option>
                                  <option value="MG">MG</option>
                                 </select>
                             </div>
                         </div>
                      
                        <div class="position">
                               <div class="componente">
                                <label for="">Data de Nasc</label>
                                <input type="date" id="data" value="" name="dataNasc" required>
                              </div>
                            
                             <div class="componente">
                               <label for="profissao">Profissão</label>
                               <input type="text" id="profissao" value="" class="componente-input1"  name="profissao" required>
                            </div>
                          
                            <div>
                              <label for="">Estado Cívil</label>
                              <input type="text" id="estado civil" value="" class="componente-input1"   name="estadoCivil" required>
                           </div>
                        </div>
                        
                        <div class="position">
                              <div class="componente">
                                   <label for="cel">Cel</label>
                                   <input type="tel" id="cel" value=""  placeholder="(55) 11 99999-9999" class="componente-input1" name="cel" required>
                               </div>
                             
                               <div class="componente">
                                  <label for="email">Email</label>
                                  <input type="email" id="email" value="" class="componente-input1" name="email" required>
                               </div> 
                               
                                <!-- <div>
                                  <label for="sexo">Sexo</label>
                                  <select name="estado" id="estado" class="componente-select1" name="sexo">
                                   <option value="">selecione...</option>
                                   <option value="masculino">Masculino</option>
                                   <option value="feminino">Feminino</option>
                                  </select>
                              </div> -->
                               <!-- fim componentes 1 -->
                        </div>
                        <h2>hábitos diários</h2>
                         <!-- inicio componentes 2 -->
                         <div>
                              <label for="tratamento-estetico">Tratamento estético anterior</label>
                              <input type="radio" value="sim" name="yesOrNo" id="preenchimentoSim" onClick="preenchimento()">
                              <label for="sim">Sim</label>
                              <input type="radio" value="nao" name="yesOrNo" id="PreenchimentoNao" onClick="preenchimento()">
                              <label for="nao">Não</label>
                              <label for="" class="empurra">Qual</label>
                              <input type="text" name="" id="qualText" class="componente-input1" onClick="preenchimento()"> 
                         </div> <br>

                         <div>
                            <label for="tratamento-estetico">Uso de lentes de contato</label>
                            <input type="radio" value="sim" name="yesOrNo2">
                            <label for="sim">Sim</label>
                            <input type="radio" value="nao" name="yesOrNo2">
                            <label for="nao">Não</label>
                       </div> <br>

                       <div>
                          <label for="UtilizaçãoCosm">Utilização de cosméticos</label>
                          <input type="radio" value="sim" name="yesOrNo3" id="preenchimentoSim2" onClick="preenchimento2()">
                          <label for="sim">Sim</label>
                          <input type="radio" value="nao" name="yesOrNo3" id="PreenchimentoNao2" onClick="preenchimento2()">
                          <label for="nao">Não</label>
                          <label for="" class="empurra">Qual</label>
                          <input type="text" name="" id="qualText2" class="componente-input1" onClick="preenchimento2()">
                       </div> <br>

                       
                       <div>
                        <label for="tratamento-estetico">Exposição ao sol</label>
                        <input type="radio" value="sim" name="yesOrNo4">
                        <label for="sim">Sim</label>
                        <input type="radio" value="nao" name="yesOrNo4">
                        <label for="nao">Não</label>
                        <label for="" class="empurra">Frequência</label>
                        <input type="text" name="" id="" class="componente-input2">
                     </div> <br>

                     <div>
                        <label for="tratamento-estetico">Tabagismo</label>
                        <input type="radio" value="sim" name="yesOrNo5">
                        <label for="sim">Sim</label>
                        <input type="radio" value="nao" name="yesOrNo5">
                        <label for="nao">Não</label>
                        <label for="" class="empurra">Quantidade de cugarros/dia</label>
                        <input type="text" name="" id="" class="componente-input2">
                     </div> <br>

                     <div>
                        <label for="tratamento-estetico">Ingere bebida alcocólica</label>
                        <input type="radio" value="sim" name="yesOrNo6">
                        <label for="sim">Sim</label>
                        <input type="radio" value="nao" name="yesOrNo6">
                        <label for="nao">Não</label>
                        <label for="" class="empurra">Frequência</label>
                        <input type="text" name="" id="" class="componente-input2">
                     </div> <br>

                     <div>
                        <label for="tratamento-estetico">Funcionamento Intestinal</label>
                        <input type="radio" value="sim" name="yesOrNo7">
                        <label for="sim">1-2vezes/semana</label>
                        <input type="radio" value="nao" name="yesOrNo7">
                        <label for="nao">3-4vezes/semana</label>
                        <input type="radio" value="nao" name="yesOrNo7">
                        <label for="nao">1-2vezes/dia</label>
                        <input type="radio" value="nao" name="yesOrNo7">
                        <label for="nao">mais de 3 vezes / dia</label>
                        
                     </div> <br>

                     
                     <div>
                        <label for="tratamento-estetico">Qualidade do sono</label>
                        <input type="radio" value="sim" name="yesOrNo8">
                        <label for="sim">Boa</label>
                        <input type="radio" value="nao" name="yesOrNo8">
                        <label for="nao">Regular</label>
                        <input type="radio" value="nao" name="yesOrNo8">
                        <label for="nao">Péssima</label >
                        <label for="" class="empurra">Quantas horas/noite</label>
                        <input type="text" name="" id="" class="componente-input2">
                     </div> <br>

                     <div>
                         <label for="">Ingestão de água (copos / dia)</label>
                        <input type="text" name="" id="" class="componente-input2">
                        <label for="tratamento-estetico" class="empurra">Alimentação</label>
                        <input type="radio" value="sim" name="yesOrNo9">
                        <label for="sim">Boa</label>
                        <input type="radio" value="nao" name="yesOrNo9">
                        <label for="nao">Regular</label>
                        <input type="radio" value="nao" name="yesOrNo9">
                        <label for="nao">Péssima</label>
                     </div> <br>

                     <div>
                        <label for="">Alimentos de preferência</label>
                       <input type="text" name="" id="" class="componente-input1">
                       <label for="tratamento-estetico" class="empurra">Pratica Atividade física?</label>
                       <input type="radio" value="sim" name="yesOrNo10">
                       <label for="sim">Sim</label>
                       <input type="radio" value="nao" name="yesOrNo10">
                       <label for="nao">Não</label>
                    </div> <br>

                    <div>
                        <label for="">Que Tipo?</label>
                       <input type="text" name="" id="" class="componente-input1">
                       <label for="" class="empurra">Qual Frequência</label>
                       <input type="text" name="" id=""class="componente-input2">
                    </div> <br>

                        
                    <div>
                        <label for="tratamento-estetico">Uso de anticoncepcional</label>
                        <input type="radio" value="sim" name="yesOrNo11">
                        <label for="sim">Sim</label>
                        <input type="radio" value="nao" name="yesOrNo11">
                        <label for="nao">Não</label>
                        <label for="">Qual</label>
                        <input type="text" name="" id=""class="componente-input1">
                     </div> <br>

                           
                    <div>
                        <label for="tratamento-estetico">Dara do primeiro dia da última menstruação</label>
                        <input type="date" id="data" value="data" required>
                        <label for="tratamento-estetico" class="empurra">Gestante:</label>
                        <input type="radio" value="sim" name="yesOrNo12">
                        <label for="sim">Sim</label>
                        <input type="radio" value="nao" name="yesOrNo12">
                        <label for="nao">Não</label>
                     </div> <br>

                     <div>
                        <label for="tratamento-estetico">Gestações</label>
                        <input type="radio" value="sim" name="yesOrNo13"> 
                        <label for="sim">Sim</label>
                        <input type="radio" value="nao" name="yesOrNo13">
                        <label for="nao">Não</label>
                        <label for="" class="empurra">Quantas</label>
                        <input type="text" name="" id="" class="componente-input2">
                        <label for="" class="empurra">A quanto tempo</label>
                        <input type="text" name="" id="" class="componente-input2">
                     </div> <br>

                     <div>
                        <label for="">Anotações</label> <br>
                        <input type="text" name="" id="text-anotacao">
                     </div> <br>

                        <div> <br>
                            <button class="btn"><b> Enviar</b> </button>
                        </div>
               <!-- fim box  -->      
                </div>   
            </form>
        </main>
        <!-- Rodapé  -->
        <footer>
            <p>Site criado por <a href="https://github.com/JoaoSald" target="_blank">João Saldanha</a></p>
        </footer>

        <script src="app.js"></script>
</body>
</html>