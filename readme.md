#### App that return geo coordinates according to ip address given in get query request.

Build on Laravel 5.6  

`example`:

domain/api/ip2geo?ip=199.163.160.216  
 
{  
   "latitude" => "55° 45",  
   "longitude" => "37° 37",  
   "city" => "Moscow",  
   "country" => "Russia",  
}

`Database`  

Ip addresses in db

1. 199.163.160.216  
2. 171.55.23.241
3. 145.218.32.235
4. 87.154.249.245
5. 89.96.39.45

`Requirements`

1. ^PHP 7.1.3
2. MySQL 5.7

`Deploying app`

1. git clone git@github.com:victoratsuta/geoip.git .  
2. copy .emv.example to .env  
    2.1 Create database with name 'somename', 'geoip' for example   
    2.2 Set name of this database to DB_DATABASE in .env    
    2.3 Set db pass and username in DB_PASSWORD, DB_USERNAME   
2. composer update  
3. php artisan migrate:refresh    
4. php artisan db:seed  
5. set settings for web server

