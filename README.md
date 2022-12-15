# **Movie Quotes Assignment**

Second assignment in Redberry bootcamp. This is a corona statistics website, where you can register and see daily statistics of corona around the world.

#

## **Table of Contents**

<!-- TODO -->

-   [Prerequisites](#prerequisites)
-   [Tehc Stack](#tech-stack)
-   [Start Locally](#getting-started)

#

## **Prerequisites**

-   PHP
-   NPM
-   Composer
-   Mysql
-   Spatie

#

## **Tech Stack**

-   Laravel 9
-   CS Fixer
-   Tailwind
-   Spatie Translatable

#

## **Start Locally**

1\. Clone git repository:

```bash
git clone https://github.com/RedberryInternship/kakha-chankseliani-coronatime.git
```

2\. Install composer & npm dependencies

```bash
composer install
npm install
```

3\. Create database

```mysql
create database DB_NAME;
```

4\. Copy env.example in .env and generate key

```bash
cp .env.example .env
php artisan key:generate
```

5\. Change this fields in .env to connect to your database and enable mail services

```env
DB_CONNECTION=mysql

DB_DATABASE=DB_NAME
DB_USERNAME=USERNAME
DB_PASSWORD=PASSWORD

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT= /YOUR SETTINGS/
MAIL_USERNAME=/YOUR SETTINGS/
MAIL_PASSWORD=/YOUR SETTINGS/
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=/SENDER EMAIL NAME/
MAIL_FROM_NAME="${APP_NAME}"
```

6\. Migrate tables & fetch data from api

```bash
php artisan migrate
php artisan fetch:countries
```

OPTIONAL - you can run php artisan schedule:work after this to automaticly update statistics every day

```bash
php artisan schedule work
```

7\. Run the server

```bash
npm run build
php artisan serve
```

8\. Register and verify user to see the statistics
