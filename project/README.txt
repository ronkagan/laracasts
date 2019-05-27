1. We have learned that we register routes within a route/web.php class.
2. We've learned that within an app's http director, we can store any number of controllers, which we can make with php artisan make:controller.
3. Within the resoures directory we can store JS, CSS, Views, and HTML.

So, we have our:
- Routing layer
- Controller layer
- View Layer

We're moving onto our model layer now.
We will register eloquent models that represent a row within a database. This is the active record pattern but you're not limited to it although most Laravel projects follow it.

.env will have your DB_PASSWORD, how you want to send and configure mail and more. We want our efault DB_CONNECTION to be mysql and we'll connect to our local host on port 3306.