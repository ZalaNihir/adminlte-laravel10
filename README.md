<p align="center"><a href="https://github.com/Nihirz/laravel-10-adminlte" target="_blank"><img src="https://adminlte.io/wp-content/uploads/2021/03/logo.png" width="400" alt="Admin LTE Logo"></a></p>

## About This Repo

This project is made in Laravel version 10. In this project, I used an Admin LTE with a breeze installation. Users do have not to worry about assets & folder paths for the admin side. Created for basic e-commerce project admin.Added the basic modules. Don't forget to give star to this repository ⭐.

## Installation & usage
- For Install you have to clone this repo or you can fire this command as well.

```php
git clone https://github.com/Nihirz/laravel-10-adminlte.git
```

- Go into folder

```php
cd laravel-10-adminlte
```

- After the installation you have to update the vendor folder you can update the vendor folder using this command.

```php
composer update
```

- After the updation you have to create the ```.env``` file via this command.

```php
cp .env.example .env
```

- Now you have to generate the product key.

```php
php artisan key:generate
```

- Now migrate the tables & seed the database.

```php
php artisan migrate --seed
```

- We are done here. Now you have to just serve your project.

```php
php artisan serve
```

- This is the updated code of admin.

# Update

- Added the Light/Dark mode in profile section at top nav.

- Added the Categoy module.

- Added the Subcategory module.

- Added the product module which have basic detail & take multiple images.

- Added the Role Module.

- Added the permission Module.

- Added the collection Module for PDFs.

- Added the Country, State & city seeder with the relationship

- if you want to use the admin side but you have no idea about component & how here things are work. so that you just have to create file & put your code.

# Toast

- Added the toastr which have 4 class success, info, warning & error. you can use it own it.

```php
<x-admin>
    {{ 'Put your blade code here' }}
</x-admin>
```

- For the page title use a section method Like this.

```php
    @section('title')
        {{'Your Titlte'}}
    @endsection
```

# Alerts

- I added the alerts. You just have to call like this.

```php
->with('success', 'Success message');
->with('danger', 'danger message');
->with('info', 'info message');
->with('dark', 'dark message');
->with('warning', 'warning message');
->with('light', 'light message');
```

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to Nihir Zala via [testnihir@gmail.com](mailto:testnihir@gmail.com). All security vulnerabilities will be promptly addressed.If you find any issue or bug you can mail me.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Friendly Note

- if you have any query about this package face some error or need support to update simply mail me<a href="mailto:testnihir@gmail.com"> here</a>.
- Sorry for my English & this type of short instruction. I'm learning if you are an expert please help me to improve.

# Connect with me
[![Twitter URL](https://img.shields.io/badge/Follow%20%40NihirZala-1DA1F2?style=social&logo=twitter)](https://twitter.com/NihirZala)

[![LinkedIn URL](https://img.shields.io/badge/Connect%20%40nihirzala-0077B5?style=social&logo=linkedin)](https://www.linkedin.com/in/nihirzala/)

[![Instagram URL](https://img.shields.io/badge/Follow%20%40inihirzala-ff69b4?style=social&logo=instagram)](https://www.instagram.com/inihirzala/)
