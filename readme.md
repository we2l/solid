# SOLID

## 📜 Sobre:

Este repositório foi criado para armazenar meu estudo sobre os princípios de arquitetura SOLID utilizando PHP.

## 📦 Como rodar o ambiente:

1- Acesse a pasta do projeto referente ao que você quer testar.
2- Builda imagem utilizando o comando abaixo

```bash

  $ docker build -t [nome da imagem de sua preferência] .

```

3 - Rode o ambiente utilizando o comando abaixo:

```bash

  $ docker run -ti -v $(pwd)/:/var/www [nome da imagem que você escolheu para buildar] 

```

Se não houver nenhum erro, o projeto deverá rodar em seu terminal :) .