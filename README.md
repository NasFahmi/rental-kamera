
PHP | Laravel | XAMPP |
--- | --- | --- |
v8.0.3 | v8.83.1 | v3.3.0 |

## Installation
**Install with Composer**
```
composer install
```
rename .env.example to .env, configure your env file

**Generate APP_KEY**
```
php artisan key:generate
```

**Databse Migration and Seeding**
```
php artisan migrate
php artisan db:seed
```

**Run**
```
php artisan serve
```

## Overview
![Dashboard](https://github.com/yogaiw/yogaiw.github.io/blob/master/content/kancilrentreadme/1.png)
![Memberarea](https://github.com/yogaiw/yogaiw.github.io/blob/master/content/kancilrentreadme/3.png)
![Schedule check](https://github.com/yogaiw/yogaiw.github.io/blob/master/content/kancilrentreadme/7.png)
![Admin Dashboard](https://github.com/yogaiw/yogaiw.github.io/blob/master/content/kancilrentreadme/4.png)
![Order Management](https://github.com/yogaiw/yogaiw.github.io/blob/master/content/kancilrentreadme/5.png)
![Admin](https://github.com/yogaiw/yogaiw.github.io/blob/master/content/kancilrentreadme/2.png)

## Status
Payment {1: Ditinjau, 2: Belum Bayar, 3: Pengambilan, 4: Selesai}
Order {1: Ditinjau, 2: ACC, 3: Ditolak}

## API
Android Retrofit Consume API example : https://github.com/yogaiw/rental-mobile <br>
***
**ENDPOINT** /api/v1 <br>

**GET** /alat
```json
{
    "message": "success",
    "data": [
        {
            "id": 1,
            "kategori_id": 1,
            "nama_alat": "Sony a7ii Body Only",
            "harga24": 200000,
            "harga12": 175000,
            "harga6": 125000,
            "nama_kategori": "Kamera"
        },
        {
            "id": 2,
            "kategori_id": 1,
            "nama_alat": "Sony a6000",
            "harga24": 100000,
            "harga12": 80000,
            "harga6": 50000,
            "nama_kategori": "Kamera"
        },
        ....
    ]
}
```
