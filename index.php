<!-- scp -i ~/Documentos/Projeto-PHP/ssh/apache1.pem -r ~/Documentos/Projeto-PHP/* ubuntu@ec2-54-209-103-111.compute-1.amazonaws.com:/var/www/html/ -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imersão PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&family=Luckiest+Guy&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }
        h1 {
            font-family: 'Bungee Spice', sans-serif;
            font-size: 40px;
        }
        header {
            height: 50vh;
            background-color: #1D3557;
            color: #fff;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 50px;
        }
        @media screen and (max-width: 1000px){
            header {
                height: 100vh;
                display: flex;
                flex-direction: column;
                overflow: hidden;
            }
            h1 {
                width: max-content;
               
            }

            #img5onda {
                width: 50vh;
            }

            #descubra-php div {
                height: 100vh;
                display: flex;
                flex-direction: column;
                overflow: hidden;
                align-items: center;
                justify-content: center;
            }

            #imgPHP {
                width: 10%;
                align-items: center;
                justify-content: center;
                
            }

            #o-que-aprendera div {
                height: 100vh;
                display: flex;
                flex-direction: column;
                overflow: hidden;
            }
            
        }

        #titulo1 {
            display: flex;
            flex-direction: column;
            width: 70vh;
            align-items: center;
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
            text-align: center;
            color: #000; 
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        #descubra-php {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #e0e0e0;
        }

        #imgPHP {
            width: 70%;
        }

        #descubra-php h2 {
            font-family: 'Bungee', sans-serif;
            font-size: 40px;
            margin-bottom: 20px;
            color: #363254;
            -webkit-text-stroke: 2px #fff;
            text-stroke: 3px #fff;
            font-weight: 800;
        }

        #descubra-php01 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 50px;
            box-sizing: border-box;
        }

        #descubra-php01 div {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        #descubra-php01 img {
            width: 100%;
            max-width: 600px;
            border-radius: 10px; /* Adicionei uma borda arredondada à imagem */
        }

        #descubra-php01 h3 {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
        }

        /* Adicionei um estilo para destacar a seção de descrição do PHP */
        #descubra-php01 div:last-child {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style-type: disc;
            margin-bottom: 20px;
        }

        li {
            margin-bottom: 8px;
        }
        ul {
            list-style-type: disc;
            margin-bottom: 20px;
        }

        li {
            margin-bottom: 8px;
        }

        #o-que-aprendera {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #000;
            color: #fff;
        }

        #o-que-aprendera01 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 100px;
            box-sizing: border-box;
        }

        #o-que-aprendera div {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        #o-que-aprendera h2 {
            font-family: 'Bungee Spice', sans-serif;
            font-size: 40px;
            margin: 50px 5px 5px;
        }

        #o-que-aprendera01 img {
            width: 80%;
        }

        #o-que-aprendera01 div {
            flex: 1;
        }

        #o-que-aprendera01 h3 {
            color: #ffcc00; /* Cor amarela para os títulos */
            margin-bottom: 10px;
        }

        #o-que-aprendera p {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        /* Estilo para a lista dentro dos h3 */
        #o-que-aprendera01 ul {
            list-style-type: circle;
            margin-bottom: 20px;
        }

        #o-que-aprendera01 li {
            margin-bottom: 8px;
        }
        footer {
            height: 50vh;
            background-color: rgba(0, 0, 0, 0.87);
            color: rgb(143, 146, 150);
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
        #footer1 {
            width: 50vh;
        }
        #input-footer {
            height: 100px;
            width: 50vh;
        }
        #footer2 {
            width: 50vh;
        }
    </style>
</head>
<body>
    <header>
        <div id="titulo1">
            <div>
            <h1>IMERSÃO PHP SEM MISTÉRIOS</h1>
                <h3>Uma jornada intensiva e imersiva no universo da programação web. Durante esse período concentrado, os participantes têm a oportunidade de aprimorar suas habilidades no desenvolvimento de aplicações dinâmicas usando PHP, uma linguagem versátil e amplamente utilizada.</h3>
            </div>
            <p>Deixe seu e-mail para receber mais informações.</p>
            <div>
                <form method="post" action="cad.php">
                    <input name="name" id="name" type="text" placeholder="Nome">

                    <input name="email" id="email" type="text" placeholder="E-mail">

                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
        <div>
            <img id="img5onda" src="https://www.5onda.com.br/images/logo.png" alt="5Onda">
        </div>
    </header>

    <section id="descubra-php">
        <div><h2>Descubra o Poder do PHP</h2></div>
        <div id="descubra-php01">
            <div><img id="imgPHP" src="https://repository-images.githubusercontent.com/431991980/6f97d8ac-6eb3-453a-96d4-372434e07ddb" alt=""></div>
            <div style="background: linear-gradient(to right, #c9cdea, #505e9b);"><h3>O PHP é uma linguagem de programação versátil focada principalmente em scripts do lado do servidor. Oferece flexibilidade, sendo utilizado em três principais áreas: scripts do lado do servidor, scripts de linha de comando e até mesmo para escrever aplicações desktop com o PHP-GTK. O PHP é compatível com diversos sistemas operacionais e servidores web, proporcionando liberdade de escolha. Além de gerar HTML, o PHP pode manipular diversos tipos de arquivos, interagir com bancos de dados, comunicar-se com outros serviços e oferece recursos para processamento de texto, como expressões regulares. Seus recursos são vastos e abrangem uma ampla variedade de aplicações, tornando-o uma escolha poderosa para desenvolvimento web.</h3></div>
        </div>
    </section>

    <section id="o-que-aprendera">
        <div><h2 style="font-family: 'Bungee Spice', sans-serif; font-size: 40px; margin: 50px 5px 5px;">Descubra o que você aprenderá nesta Imersão em PHP!</h2></div>
        <div id="o-que-aprendera01">
            <div>
            <h3>Scripts no lado do servidor (Server-Side):</h3>
        <ul>
            <li>Aprenda a criar scripts PHP tradicionais, o pilar fundamental desta linguagem.</li>
            <li>Explore a instalação e configuração do ambiente de desenvolvimento, incluindo o interpretador PHP e um servidor web.</li>
            <li>Compreenda como executar scripts PHP em servidores web, interagindo com navegadores para gerar páginas dinâmicas e coletar dados de formulários.</li>
        </ul>

        <h3>Scripts de Linha de Comando:</h3>
        <ul>
            <li>Descubra como desenvolver scripts PHP que podem ser executados sem a necessidade de um servidor ou navegador.</li>
            <li>Ideal para tarefas automatizadas usando cron (Unix, Linux) ou o Agendador de Tarefas (Windows).</li>
            <li>Aprofunde-se na utilização do PHP em ambientes de linha de comando para rotinas de processamento de texto.</li>
        </ul>

        <h3>Aplicações Desktop com PHP-GTK:</h3>
        <ul>
            <li>Explore a possibilidade de escrever aplicações desktop utilizando o PHP-GTK.</li>
            <li>Entenda como aproveitar os recursos avançados do PHP para criar programas interativos, mesmo que PHP não seja a escolha tradicional para interfaces gráficas.</li>
        </ul>

        <p>Além dessas áreas principais, durante a imersão, você terá a chance de:</p>

        <h3>Trabalhar com Diversos Bancos de Dados:</h3>
        <ul>
            <li>Utilize extensões específicas de banco de dados, como MySQL, ou camadas de abstração como PDO, para interagir com bancos de dados.</li>
            <li>Experimente conectar-se a qualquer banco de dados compatível com o padrão "Open Database Connection" usando a extensão ODBC.</li>
        </ul>

        <h3>Comunicação com Outros Serviços:</h3>
        <ul>
            <li>Explore o PHP em comunicação com protocolos como LDAP, IMAP, SNMP, NNTP, POP3, HTTP, e outros.</li>
            <li>Abra sockets de rede e interaja diretamente usando diferentes protocolos.</li>
        </ul>

        <h3>Processamento de Texto e XML:</h3>
        <ul>
            <li>Utilize recursos avançados para processamento de texto, como expressões regulares compatíveis com Perl (PCRE).</li>
            <li>Padronize extensões XML, como SimpleXML, XMLReader e XMLWriter, para análise e manipulação eficiente de documentos XML.</li>
        </ul>
            </div>
            <div><img src="https://blog.4linux.com.br/wp-content/uploads/2018/02/Curso-de-PHP-Desenvolvimento-Web.png" alt="" style="width: 80%;"></div>
        </div>
    </section>

    <footer>
        <div id="footer1">
            <form method="post" action="cad.php">
                <input name="msgUsuario" id="input-footer" type="text" placeholder="Fala comigo!">
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div id="footer2">
            <h2>Sobre a 5ª Onda</h2>
            <p>Uma onda tecnológica é um período de mudança significativa na sociedade causada pela adoção em larga escala de uma nova tecnologia ou ideia disruptiva. Após a onda, a sociedade deve se adaptar para aproveitar as oportunidades criadas pela mudança.</p>
        </div>
    </footer>
</body>
</html>
<!-- https://www.youtube.com/watch?v=y-EAlMQs29E -->
<!-- https://www.youtube.com/watch?v=4tBeeMcw2sM -->
<!-- https://stackoverflow.com/questions/69207368/constant-filter-sanitize-string-is-deprecated -->
<!-- http://localhost/phpmyadmin/index.php?route=/sql&db=data&table=usuarios&pos=0 -->