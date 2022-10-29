## About Wise(Clone)

Wise allows you to transfer money abroad easily and quickly with low-cost money transfers. You can send money at the real exchange rate with no hidden fees. This web application features the  following:

1. A login page.
2. A registration page.
3. A dashboard page, where transactions will be listed.
4. A transaction page. 
5. API integration to get current exchange rate from Free Currency Converter API or any other free currency converter or a hand-coded list of exchange rates. 
6. A method to record failed transactions following the ACID database transaction principle.
7. A feature to refund the dollar account once it is completely exhausted.

## Features
- Money can be sent/converted into any of the three currencies to be sent to another user.
- Money can be sent/converted to any and every user who is registered on the app.
- The user to send the money to can be chosen from an input-dropdown list which shows all users if clicked on. (Tip: Create at least two users as dummy data.)
- A user cannot have a negative balance. All users start with 1000 USD worth of money given via an initial transaction when you create them.
- All users start with USD as their native currency but can receive EUR and your specified local currency.
- All database tables must have the `created_at` timestamp, which should be populated automatically.

## Wise Application Development Procedures

1. CD into the application root directory with your command prompt/terminal/git bash.

2. Run `cp .env.example .env`.

3. Inside `.env` file, setup database, mail and other configurations.

4. Run `composer install`.

5. Run `php artisan key:generate` command.

6. Run `php artisan migrate:fresh --seed` command.

7. Run `php artisan serve` command.

## Login credentials
Email: `user@abbyfuncode.com`
Password: `password`
