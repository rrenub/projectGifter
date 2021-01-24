# Gifter

Gifter is a eCommerce web application for buying gifts. It has a interface Amazon-like to view and filter all the gifts that are being offered

<p align="center">
    <img src="https://i.imgur.com/YNzpqpj.png" alt="Gifter homepage" width="460" height="auto">
</p>

## Features

- Authetication via log-in and register
- Buying Gifts using Paypal API and shopping cart to pick each item
- Filter by name and category
- On sale products
- Administrate the products offered logging in as admin@admin.com 

## Behind the scenes

Gifter was made using Laravel (PHP) and for the styling we used TailwindCSS for better and fast prototyping of the frontend.

## Installation

Firstly, cloning the project

```
git clone https://github.com/rrenub/projectGifter.git
```

Install composer dependencies for Laravel

```
composer install
```

Install Laravel Mix dependencies

```
npm install
```

And run it:

```
npm run dev
```

After the installation, in the .env file add the name of the database you have created and the Paypal API keys for the payments

```
...
PAYPAL_CLIENT_ID= ...
PAYPAL_SECRET= ...
PAYPAL_MODE=sandbox
....

```

(Optional) To populate the database with mock data, run the seeders to generate the data for the tables:

```
php artisan db:seed
```




