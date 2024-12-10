## INSTALASI
Berikut data install
## DOCKER

Instalasi docker

## CLONE PROJECT
```sh

git clone https://github.com/niomictomi/dkpp-test.git

cp .env.example .env

docker compose up --build -d

docker ps

#cek ID container dkpp-app

docker exec -it f6d60fcbf801 bash #f6d60fcbf801 ini punya saya

php artisan key:generate  #buat generate APP_KEY

docker compose -up --build -d
```


Akses url  via browser
```shhttp://localhost:8888```