@include('pages.header')
    <article>
        <h1 id="h1"> About </h1>
        <p>Laravel is an open-source web framework written in PHP that follows the model–view–controller (MVC) architectural pattern. It is intended for the development of web applications following the principles of model–view–controller (MVC) architecture. Laravel is free and open-source and released under the terms of the MIT License..</p>
        <p>Features of Laravel include:</p>
        <p>
            <ul>
                <li><h3 align="left" style="background-color: black;color:green;">Template Engine:</h3> Laravel includes a templating system called Blade. The blade allows you to write plain PHP code in your views, but it also provides convenient shortcuts for common tasks such as displaying data, creating forms, and paginating records.
                    .</li>
                <li><h3 align="left" style="background-color: black;color:green;">Routing:</h3> Laravel provides an easy and intuitive way to define routes in your application. Routing allows you to map URLs to specific actions, such as displaying a view, making an API call, or sending an email.</li>
                <li><h3 align="left" style="background-color: black;color:green;">Eloquent ORM: </h3> Eloquent is Laravel’s built-in Object Relational Mapper (ORM). It provides an easy way to define relationships between models and allows you to perform database operations in an object-oriented manner.</li>
                <li><h3 align="left" style="background-color: black;color:green;">Security:</h3> Laravel includes several security features such as input validation, password hashing, and user authentication.</li>
                <li><h3 align="left" style="background-color: black;color:green;">Artisan:</h3>Artisan is a command line interface that comes bundled with Laravel. It allows you to perform common tasks such as database migrations, database seeding, and package installation.</li>
                <li><h3 align="left" style="background-color: black;color:green;">Testing: </h3>Laravel includes a built-in testing framework that allows you to easily test your application. It also provides convenient methods for mocking and stubbing external services.</li>
                <li><h3 align="left" style="background-color: black;color:green;">Database Migrations: </h3>Database migrations enable developers to easily modify the structure of their database without having to write SQL queries.</li>
                <li><h3 align="left" style="background-color: black;color:green;">Libraries and Modular: </h3> It contains a number of pre-installed libraries and modular which helps to create a user-friendly web application.
                </li>
                <li><h3 align="left" style="background-color: black;color:green;">Maintenance: </h3> It provides a maintenance mode that helps to keep the application in maintenance mode while updating or changing the web application.
                </li>
                <li><h3 align="left" style="background-color: black;color:green;">Database Migration: </h3>It helps to keep the database in sync across multiple development environments.
                </li>
                <li><h3 align="left" style="background-color: black;color:green;">Unit Testing: </h3>It provides a unit testing library that helps to test the application without any manual effort.
                </li>
            </ul>
        </p>
    </article>
   @include('pages.sidebar')
   @include('pages.footer')
