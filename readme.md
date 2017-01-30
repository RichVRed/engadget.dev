![engadget](public/images/eng-logo-928x201.png)

### Security Vulnerabilities

Send an e-mail to Richard Vannauker at richard.vannauker@gmail.com
All security vulnerabilities will be promptly addressed.

### License

* The Laravel framework is licensed under the [MIT license](http://opensource.org/licenses/MIT).
* The Engadget blog is licensed under the [CC BY-NC-ND 4.0 license](https://creativecommons.org/licenses/by-nc-nd/4.0/).

### Deployment Process:

Download [Laradock](https://github.com/laradock/laradock.git)
```bash
git clone https://github.com/laradock/laradock.git
```
Navigate into cloned project and configure
```bash
cd laradock
```
Bring up Docker containers
```bash
docker-compose up -d nginx php-fpm mysql mongo memcached workspace
```
Enter workspace container
```bash
docker-compose exec workspace bash
```
Install Composer
```bash
composer install
```
Install npm
```bash
npm install
```
Mix npm
```bash
npm run dev
```
Publish vendor
```bash
php artisan vendor:publish
```

##
## REST API for Blog Application

### Objective
Write an example of a REST API for a blog application. Develop the api endpoints, database schema and sample classes that would run the application. 

### Guidelines/Limitations
* Use any backend language you prefer. We use PHP and Node.js, MySQL and MongoDB here, so they would be preferential over other languages and database systems.
* Write a shell of the classes and methods needed for the CRUD operations necessary for the blog app, leaving the logic in pseudocode.
* The article body must be saved as structured content, separating headers from text from images. How would you save the content to be client-agonistic, such that it can be consumed natively on mobile, web, etc?
* Reference or specify any libraries you might use outside of the pseudocode.
* Due to time constraints, feel free to pseudocode although we wouldn't object to code that we can run
* User authentication is managed outside of the application, i.e. with FB login
* For simplicity, user's data is stored, but they cannot update their profile

### Base Application Functionality
* Retrieve list of recent blog posts by date and user
* Create, read, update, delete individual blog posts
* Provide an example response or endpoint that returns an example response
* Provide a README with steps to run or step through your API
