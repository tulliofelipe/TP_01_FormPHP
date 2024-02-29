<html>
<head>
   <title> quiz </title>
</head>
<body>
        <style>
            .campoTexto{
                color: blue;
                border: 5;
            }
        </style>

      <form action="showname.php" method="get">
                  <br>
                  <label for="nome">nome:</label>
                  <input  type ="text"name="nome" class="campoTexto">
                  </Br>
                  <br>
                  <label for="nome"> 1: qual o nome de 3 filmes da marvel?</label>
                  <input  type ="text"name="nome" class="campoTexto"> 
                  </Br>
                  <br>
                  <label for="nome"> 2:qual o nome de 3 filmes de vampiro?</label>
                  <input  type ="text"name="nome" class="campoTexto">
                  </Br>
                  <br>
                  <label for="nome"> 3:qual o nome de 2 filmes de holliwood?</label>
                  <input  type ="text"name="nome">
                  </BR>
                  <Br>
                 <label for="question04">4: qual o nome de um diretor de holliwood?</label><br>
                  </br>
                  <br>
                  <select name="question04">
                     <option value="steven spiielberg" >steven spiielberg</option>
                     <option value="quentin tarantino">quentin tarantino</option>
                     <option value="alfred hitchcock">alfred hitchcock</option>
                     </Br>
                     <br>
                     <label for="question05">qual o nome de um filme de holliwood?</label>
                  </select>
                    </br>
                    <br>
                    <label for="question05">qual o nome de uma atriz de hollywood?</label>
                  <select name="question05">
                     <option value="jenna ortega" >jenna ortega</option>
                     <option value="angelina jiole">angelina jiole</option>
                     <option value="emma roberts">emma roberts</option>
                     </select>   
                    <br>
              
                     <label for="question06">6:qual o nome de um ator de hollywood?</label>
                     <select name="question06">
                     <option value="morgan freeman" >morgan freeman</option>
                     <option value="tom cruise">tom cruise</option>
                     <option value="jonny deep">jonny deep</option>
                
                     <!--option > 2: qual o nome de uma atriz de holliwood?</!--option>
                     <option-- > 3: qual o nome de dois atores de holliwood?</option-->
                  </select>
                  </Br>

                  <button  type ="submit">exibir</button>
      </form>
   </body>
</html>