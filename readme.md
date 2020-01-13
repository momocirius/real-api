<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## How to test the api
Composer install  <br>
cd database/  <br>

# Pour pouvoir tester sans mettre en place une base de données 
touch database.sqlite <br>
cd .. <br>
 <br>
php artisan migrate <br>
php artisan passport:install <br>
php artisan passport:client --personal <br>
 <br>
php artisan serve <br>

# Exemple de requete post
http://127.0.0.1:8000/api/register?email=az1aa%40az1.com&password=azerty&password_confirmation=azerty&role=2&school=ipssi
https://whispering-harbor-79661.herokuapp.com/api/login?email=az1%40az1.com&password=azerty  <br>

#autre param pour the registration
<<<<<<< HEAD
"name", "email", "school", "auth_token", "firstname", "lastname", "birthDay", "role", "gender", "phone", "adress", "company"
pour Role [1-5]
pour school ["etna", "f2i", "ipssi"]

# Ex Requete GET
http://127.0.0.1:8000/api/user
=======
"name", "email", "school", "auth_token", "firstname", "lastname", "birthDay", "role", "gender", "phone", "adress", "company" <br>
pour Role [1-5] <br>
pour school ["etna", "f2i", "ipssi"] <br>
 <br>
# Requete GET
http://127.0.0.1:8000/api/user <br>
>>>>>>> 5de90badc9927287d20752174025300b9b90bc9a

#Link sur Heroku
Attention bdd gratuite trouvé sur internet donc pas de controle dessus donc ne pas mettre des informations sensible
https://whispering-harbor-79661.herokuapp.com

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
