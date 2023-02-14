# **Desafio Back-End - Lista de Pokémons**

## Descrição do Projeto

<p align="center">Listagem simples de pokemons monstrandos os dados como nome, peso, algura, habilidades e tipo e tendo como buscar por tipo e habilidades</p>
<br>

### Pré-requisitos


Antes de começar, você irá precisar do docker composer e algum aplicativo de request http(postman, insomnia e etc)

```bash
# Clone este repositório
$ git clone https://github.com/IagoGondim/prova-est-back-iago-gondim.git

# Permissão para rodar o executável
$ sudo chmod +x run.sh

# Rodando o projeto
./run.sh

# Rodar migrate
php artisan migrate

# Popular o banco com seeders
php artisan db:seed

```
## Rotas

Possivel realizar listagem de todos os pokemons, buscar por nome, tipo e habilidade.

1. http://localhost:8080/api/pokemons rota para listar todos os pokemons

2. http://localhost:8080/api/pokemons?page=1 rota parar listar todos os pokemons com um limite de 15 pokemons por página.

3. http://localhost:8080/api/pokemons?name='nome-do-pokemon' rota para busca especifica de um único pokemon.

4. http://localhost:8080/api/pokemons?type='nome-do-tipo' rota para buscar por tipo de pokemons

5. http://localhost:8080/api/pokemons?ability='nome-da-habilidade' rota para buscar uma habilidade.


