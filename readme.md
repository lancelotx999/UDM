<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Quickstart Running UDM
Make sure you have [Docker](https://www.docker.com/get-docker) installed and enabled, then on your console run the following:
```Dockerfile
# For database
docker run --name mariadb-udm -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=udm -p 3306:3306 -d mariadb
# For phpMyAdmin
docker run --name phpmyadmin-udm -d --link mariadb-udm:db -p 8080:80 phpmyadmin/phpmyadmin
```

The database is created inside the container titled `mariadb-udm`, migrate the database with Laravel's `artisan` command and wait for completion:
```php
// This will migrate the database, takes a moment. Go make a coffee while waiting!
php artisan migrate
```

Once migration is done, you can now serve the web application (default http://127.0.0.1:8000/):
```php
// Will serve the web app live
php artisan serve
```

Now download the CSV files from [here](https://drive.google.com/open?id=1zLgwCNJxv62V7NRsvSAAel_ckYG98dXJ) and extract the contents into your clone folder path: 
```
./UDM/public/[Extract the "data" folder to here]
```

Next, login as an adminstrator:
```
// Admins
Name => Sean Lee
Email => 4308131@UDM.com
Password => 4308131

Name => Kenneth Yeo
Email => 4332466@UDM.com
Password => 4332466
```

Finally, head to the **Upload** page and upload the following CSVs from `./UDM/public/data/NYC-bigData`:
1. `DOP_Juvenile_Intakes_by_Calendar_Year`
2. `DOP_Juvenile_Investigations_by_Calendar_Year`
3. `Natality`
4. `New_York_City_Population_by_Borough__1950_-_2040`
5. `New_York_City_Population_By_Community_Districts`
6. `Revenue_Actuals`
7. `Water_Consumption_In_The_New_York_City`

Once these are all uploaded, the chart page is ready to go as well as everything else. 

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
