## INSTALASI
Berikut data install
## DOCKER

Instalasi docker

## CLONE PROJECT
```sh

git clone https://github.com/niomictomi/dkpp-test.git

cp .env.example .env

docker compose up --build -d
```

## MASUK CONTAINER

```sh
docker ps

#cek ID container dkpp-app

docker exec -it f6d60fcbf801 bash #f6d60fcbf801 ini punya saya

composer install

php artisan key:generate  #buat generate APP_KEY

npm install

npm run build

cd /database

mv database.sqlite.backup database.sqlite

docker compose up --build -d
```


Akses url  via browser
```shhttp://localhost:8888```