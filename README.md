<p align="center">
  <a href="https://laravel.com">
    <img src="https://img.shields.io/badge/laravel-7.3-brightgreen.svg" alt="vue">
  </a>
  <a href="https://github.com/vuejs/vue">
    <img src="https://img.shields.io/badge/vue-2.6.10-brightgreen.svg" alt="vue">
  </a>
  <a href="https://github.com/ElemeFE/element">
    <img src="https://img.shields.io/badge/element--ui-2.13.0-brightgreen.svg" alt="element-ui">
  </a>
</p>


## Empezar

### Instalar
#### Manual

```bash
# Clonar el proyecto y ejecuta composer
cd proyecto

# Migraciones y seeders  (Despues de configurar su archivo .env)
php artisan migrate --seed

# Instalar las dependencias con NPM
npm install

# Para modo desarrollador
npm run dev # o npm run watch

# Contruir para producción
npm run production
```

#### Docker
```sh
docker-compose up -d --build
```
Cree archivos estáticos dentro del contenedor Laravel con npm
```sh
# Obtenga la identificación del contenedor de laravel docker de la lista de contenedores
docker ps

docker exec -it <ID del contenedor> npm run dev # or npm run watch
# Donde <ID del contenedor> es el nombre del contenedor "laravel", por ejemplo: ptransp
```
Abra http://localhost:8000 (puerto de contenedor de laravel declarado en `docker-compose.yml`) para acceder a Proyecto

