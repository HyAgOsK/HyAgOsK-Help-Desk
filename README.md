# HyAgOsK-Help-Desk
HyAgOsK Help Desk descreve Ordens de serviço para pessoas previamente cadastrada, podemos com adm e usuários, acessar a aplicação. Códigos utilizando CSS6 (bootstrap) HTML5, PHP e Apache, com XAMPP, no caso estas pastas todas estariam dentro do diretório XAMPP.

#### Esta aplicação permite visualização ordenada dos dados salvos por último, de cada usuário, que possui seu login registrado em hardcode, onde teríamos para cada usuário comum a visualização das suas OS Ordens de Serviço que foram registradas por elas mesmo, sem visualizar a do próximo e apenas os adms, que também possuem login registrado em hardcode possui visualização global de todos os registros que foram salvos pelos usuários.

## Você consegue com esta aplicação: inserir os dados | Consultar os dados 
obs: futuramente penso em colocar para deletar

### Segurança básica de arquivos

 - 1° Passo: Foi fazer com que a requisição direta caso a entrada esteja vazia ou com informações inválidas do login, redirecione para um erro de página e retorne para o index.php, assim fazendo com que entre com o usuário e senha, a página de consulta e inserção não ficam disponíveis para caso deseje acessar diretamente. 
 
 - 2° Passo: Foi retirar os arquivos do diretório público htdocs do APACHE e colocar em um diretório qualquer fora deste público e assim privado, onde não teria acesso por requisições HTTP para servidor, acessando estes arquivos sigilosos e de negócios.
 
 - 3° Passo: Foi utilizar o require do PHP para acessar o arquivo e ter o script rodando naturalmente nas páginas que necessitam deste scritp e que estão no diretório público, também para a leitura e escrita dos arquivos em PHP foi feita a aquisição do diretório fora de htdocs.
 
 obs: isto é uma segurança que o prórpio sistema operacional visa, com Firewall, protegendo o serviço de diretórios privados e visualizando diretorios públicos.
 
 Qualquer melhoria é muito bem vinda, potanto fique a vontade em comentar ou entrar em contato 📕📗📘📚.
