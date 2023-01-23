
### Installation

`composer install`

`mv .env.example .env`

fill requried env variables to make work mailer service, otherwise not run `php artisan queue:work` command 
```
DB_PASSWORD
MAIL_USERNAME
MAIL_PASSWORD
MAIL_FROM_ADDRESS
MAIL_ENCRYPTION
MAILGUN_DOMAIN
MAILGUN_SECRET
```

`php artisan key:generate`

`php artisan migrate`

`php artisan db:seed`

`php artisan voyager:install`

`php artisan voyager:admin your@email.com --create`

`php artisan queue:work`

`php artisan serve`

`npm install`

`npm run dev`
