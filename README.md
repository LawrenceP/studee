Instructions:

Clone the repo

run `cp .env.example .env`

cd into the 'laradock' directory

run `git clone https://github.com/Laradock/laradock.git .`

run `cp env-example .env` (from inside the 'laradock' directory)

run `docker-compose up -d nginx mysql phpmyadmin redis workspace` (This may take a long time)

add '127.0.0.1    studee.test' to your hosts file


the mysql details are:

host: localhost

user: root

password: root

port: 3306 



create a database table called 'studee'



open a new tab and run `docker exec -it laradock_workspace_1 bash`

run `composer install`

run `php artisan key:generate`

run `php artisan migrate`



import 'data.csv' into the 'commodities' table


Postman routes:

Index: GET http://studee.test/api/commodities

Store: POST http://studee.test/api/commodity?segment=11111111&segment_name=Test+Segment&family=22222222&family_name=Test+Family&class=33333333&class_name=Test+Class&commodity=44444444&commodity_name=Test+Commodity

Show: GET http://studee.test/api/commodity/1

Update: PATCH http://studee.test/api/commodity/1?segment_name=new+name

Destroy: DELETE http://studee.test/api/commodity/1
