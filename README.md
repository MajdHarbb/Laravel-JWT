<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Creating Back End API's Using Laravel & JTW

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects. 

What is JSON Web Token?

JSON Web Token (JWT) is an open standard (RFC 7519), and it represents a compact and self-contained method for securely transmitting information between parties as a JSON object. Digital signature makes the data transmission via JWT trusted and verified. JWTs built upon the secret HMAC algorithm or a public/private key pair using RSA or ECDSA.

## Content

This project contains: 

- **Database table migrations under database/migrations: create tables in your database**
- **Controllers that contain functions to initiate GET & POST requests**
- **Routes api to route every function inside the controllers to a specific link**


### Table Migration files:

Navigate to database/migrations to find migration files. 

Contacts table: 

![alt text](public/Assets/contacts-migration.png)

Users table: 

![alt text](public/Assets/users-mig.png)

### Controller files:

Navigate to App/Http/Controllers to find AuthController and ContactController. 

Contact Controller contains register, login, logout and update functions.

Register: 

![alt text](public/Assets/register.png) 

Login:

![alt text](public/Assets/login.png) 

Logout and user profile data: 

![alt text](public/Assets/logs.png) 

Update user info: 

![alt text](public/Assets/update.png) 

### Router file:

![alt text](public/Assets/routes.png) 

## Demo

To test your API's go to post man and apply the following: 

### User Registration API
Register a new user: 
![alt text](public/Assets/regPostman.png) 

### User Login API
On login a new JWT Token is generated: 
![alt text](public/Assets/loginPostman.png) 

### User Info API
Get all user data by his generated JWT: 
![alt text](public/Assets/dataPostman.png)

### Logout API
Destroy the JWT : 
![alt text](public/Assets/logoutpostman.png)