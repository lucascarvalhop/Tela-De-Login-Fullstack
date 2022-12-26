# Tela-De-Login-Fullstack

# Sobre o projeto

https://blank-compartments.000webhostapp.com/index.php

Nesse projeto foi simulada uma tela de login de um sistema qualquer, onde o usuário tem a opção de efetuar o login caso já seja cadastrado ou então se cadastrar
caso não seja.

# Layout da tela de login
![login](https://user-images.githubusercontent.com/88468443/209493684-890b5d82-861e-43fd-b0cc-a307d5250ac7.png)

# Layout da tela de cadastro

![cadastro](https://user-images.githubusercontent.com/88468443/209493781-c242e5f8-28a6-46b1-b8e1-b2cca035a540.png)

# Detalhes sobre o projeto

O processo de login / cadastro é realmente funcional, quando o usuário tenta logar inserindo um email e senha é feita uma consulta no banco de dados onde caso
seja encontrado esse email e senha, é autorizado o login. <br> Já no processo de cadastro o usuário insere um email e senha e posteriormente consegue fazer o login
com o email e senha cadastrados. <br>
Além do backend funcional, a tela de login também conta com validação no frontend, em caso do usuário enviar algum campo que não cumpre o critério pedido
ou enviar campos em branco, são retornado erros específicos indicando o que ele precisa corrigir, como no exemplo abaixo:

![image](https://user-images.githubusercontent.com/88468443/209495104-f1d8ee8b-f6e1-47a9-99f2-04ec7d1a02be.png)

## Tecnologias utilizadas

- Front end: HTML, CSS, JavaScript
- Backend: Php, Mysql

## Observações
Em um sistema real, teria que ser exigido que o usuário tenha habilitado em seu navegador o JavaScript, para evitar que as validações do frontend sejam burladas, porém
como esse é apenas um caso de estudo, eu preferi deixar somente as validações no backend então em caso do javascript ser desabilitado propositalmente, o banco de
dados só é manipulado quando cumprido alguns critérios.

## Autor
Lucas Carvalho
https://www.linkedin.com/in/lucaspcarvalho/
