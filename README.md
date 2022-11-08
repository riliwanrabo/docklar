# fincra-api-logs

Docklar: Dockerized Laravel Boilerplate

## Instructions

```
cp .env.example .env

docker-compose up -d

docker-compose exec webapp composer install

docker-compose exec webapp php artisan key:generate

docker-compose exec webapp php artisan migrate:fresh --seed
```

## Health Endpoint
`/api/health`
