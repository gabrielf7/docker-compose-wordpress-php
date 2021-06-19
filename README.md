<div align="center">
  <h3>Bem vindos ao Docker Compose</h3>
<div>

#### Comando do Docker para inserir dados no banco de dados:
- docker exec -i mysql-container mysql -uroot -pdevjg < server/db/dados.sql

#### Comandos de Docker-Compose:
```
# Criar e levantar os containers
docker-compose up -d

# Iniciar o container Docker
docker-compose start

# Parar o container Docker
docker-compose stop

# Parar e remover containers da máquina
docker-compose down
```
