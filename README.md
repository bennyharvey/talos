## installation
```shell
docker run --rm -v $(pwd):/app composer install
sudo chown -R $USER:$USER $(pwd)
npm ci
npm run dev
npm run watch
docker exec -ti $(basename "$PWD")_app_1 php artisan doctrine:schema:create
```

## Database
```shell
docker exec -ti $(basename "$PWD")_app_1 php artisan doctrine:info
docker exec -ti $(basename "$PWD")_app_1 php artisan doctrine:schema:update
```
