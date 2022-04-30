## installation
```
docker run --rm -v $(pwd):/app composer install
sudo chown -R $USER:$USER $(pwd)
npm ci
npm run dev
```
