### 1. **Install Dependencies**

Run `composer install` to install the required PHP dependencies.

### 2. **Set Up the Environment**

Create a `.env` file by copying the example from `.env.example`.
`cp .env.example .env`

### 3. **Set Up the Database**

Make sure your MySQL server is running and create a database for the application. Update your `.env` file with your database credentials.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name(inisev)
DB_USERNAME=root
DB_PASSWORD=`

Run the migrations to create the necessary tables in your database.

`php artisan migrate`

### 4. **Seed Data (Optional)**

To populate the database with sample websites, posts, and subscriptions, run the seeder.

`php artisan db:seed`

### 5. **Configure Queues**

If you are using queues, ensure the queue configuration is set correctly. You can use the database driver for queues. In your `.env` file, update the queue configuration:

`QUEUE_CONNECTION=database`

Run the queue migration to set up the `jobs` table:

`php artisan queue:table
php artisan migrate``

### 6. **Configure Email (Optional)**

If you plan to send emails, configure your email settings in the `.env` file:

`MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=587
MAIL_USERNAME=your-mailtrap-username
MAIL_PASSWORD=your-mailtrap-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=no-reply@example.com
MAIL_FROM_NAME="${APP_NAME}"`

### 7. **Run the Application**

Start the Laravel development server:

`php artisan serve`

Your API will be available at `http://localhost:8000`.

### 8. **Running the Queue Worker**

If  using queues for background email processing, start the queue worker:

`php artisan queue:work`


### 11. **Testing the APIs**

You can test the API using tools like **Postman**. Here are the available API endpoints:




#### `POST /websites/posts`


-   Request Body (JSON):


    `{
        "title": "New Post Title",
        "description": "Description of the post.",
        "web_id": 1
    }` 


#### `POST /subscriptions`

Subscribe a user to a website.

-   Request Body (JSON):


    `{
        "email": "user@example.com",
        "web_id": 1
    }` 


### 12. **Scheduled Command**

The scheduled command `app:send-email-to-subscriber` sends email notifications to subscribers of new posts. It checks for new posts and ensures emails are not duplicated.

`php artisan app:send-email-to-subscriber` 



### Worked Done
- Use PHP 7.* or 8.*
- Write migrations for the required tables.
- Endpoint to create a "post" for a "particular website".
- Endpoint to make a user subscribe to a "particular website" with all the tiny validations included in it.
- Use of command to send email to the subscribers (command must check all websites and send all new posts to subscribers which haven't been sent yet).
- Use of queues to schedule sending in background.
- No duplicate stories should get sent to subscribers.
- Deploy the code on a public github repository.

OPTIONAL:-
- Seeded data of the websites.
- Open API documentation (or) Postman collection demonstrating available APIs & their usage.
