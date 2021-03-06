<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h1>Video Game Blog</h1>
<img src="https://cdn.glitch.global/cd543e2f-5e90-430c-ab6e-370dbc407615/Home%20-%20Video%20Game%20Blog%20-%20Google%20Chrome%205_12_2022%201_25_20%20PM.png?v=1652406947811">


## About My Project

My project is a blog for reviewing video games. A user who has not been registered has access to the home page where they can see the four latest blog posts. They also have access to the blog page where they can search a blog. The search works as follows, the user can search any word/phrase they want and if a blog has that word/phrase in the title then they will be displayed. If not then they will recieve a message stating that there is no such blog that exists. The user can also filter blogs according to their categories. When the user selects a blog they are redirected to that blog which displays an image, how long ago it was created, who created it, the title, and the body of text. Below the body of text the user can also select 3 blog posts that relate to the one they are currently seeing. If a user wishes to create a blog post then they must have an account. To create an account the user can click on register in the side bar where they are then redirected to the register page. Once a user has registered they are redirected to their dashboard where they have the ability to create a post, create a category, and see the category list. The user should first create a category they wish to categorize their blog with. Then they can head into creating a blog post where they can input a title, choose an image, choose a category, and then write their review. Upon clicking the submit button then they have successsfully created a blog. If the user wishes to edit or delete a post then they should visit the blog page where an edit/delete button is placed on top of their blog.

## Technologies Used 

- Uses laravel, docker, mySQL
- Uses laravel breeze for authentication
- mySQL workbench to connect to the database 

## How to deploy
- To deploy use `./vendor/bin/sail up` 
- Migrate database `./vendor/bin/sail artisan migrate`
- to see images that you???ve uploaded `./vendor/bin/sail storage:link` 
- All commmands should be done in the directory where files are located

## Laravel breeze(DO NOT DO THIS IF EVERYTHING WORKS AFTER DEPLOYING)
- First `./vendor/bin/sail artisan migrate` to run database migrations (if already done ingnore)
- Second `composer require laravel/breeze --dev` laravel breeze package
- Third `./vendor/bin/sail artisan breeze:install` publishes the authentication views, routes, controllers, and other resources to your application
- Fourth `npm intall && npm run dev` command to build your assets
- All commmands should be done in the directory where files are located 

## How to  test with seeds
- First `./vendor/bin/sail artisan migrate:fresh` to reset database
- Second `./vendor/bin/sail artisan db:seed --class=UsersSeeder` to generate users
- Third `./vendor/bin/sail artisan db:seed --class=CategorySeeder` to generate categories for blogs
- Fourth `./vendor/bin/sail artisan db:seed --class=BlogSeeder` to create blog posts
- All commmands should be done in the directory where files are located 

## How it Works
- Register an account on the Register page
- Takes you to the dashboard 
- Create a category you want your blog to be about
- Create a post 
- Fill in all the fields and submit 
- Click Blog on the side bar to see your blog
- You can filter out blogs by clicking on a category 
- You can search for a blog(title that has a word/phrase)
- You can edit/delete your blog on the Blog page(shows on the top left of your blog)
- You can log out by going into the Dashboard page. On the top right click your name and log out.

## Design
<h3 align=center>Blog Page</h3>
<img src="https://cdn.glitch.global/cd543e2f-5e90-430c-ab6e-370dbc407615/Home%20-%20Video%20Game%20Blog%20-%20Google%20Chrome%205_12_2022%206_56_18%20PM.png?v=1652407875991">
<h3 align=center>Selected Blog</h3>
<img src="https://cdn.glitch.global/cd543e2f-5e90-430c-ab6e-370dbc407615/Home%20-%20Video%20Game%20Blog%20-%20Google%20Chrome%205_12_2022%206_56_45%20PM.png?v=1652407245919">
<h3 align=center>Login Page</h3>
<img src="https://cdn.glitch.global/cd543e2f-5e90-430c-ab6e-370dbc407615/Home%20-%20Video%20Game%20Blog%20-%20Google%20Chrome%205_12_2022%206_56_27%20PM.png?v=1652407339498">
<h3 align=center>Register Page</h3>
<img src="https://cdn.glitch.global/cd543e2f-5e90-430c-ab6e-370dbc407615/Home%20-%20Video%20Game%20Blog%20-%20Google%20Chrome%205_12_2022%206_56_35%20PM.png?v=1652407306814">
<h3 align=center>Dashboard Page</h3>
<img src="https://cdn.glitch.global/cd543e2f-5e90-430c-ab6e-370dbc407615/Home%20-%20Video%20Game%20Blog%20-%20Google%20Chrome%205_12_2022%209_46_17%20PM.png?v=1652417373989">
<h3 align=center>Create A Category</h3>
<img src="https://cdn.glitch.global/cd543e2f-5e90-430c-ab6e-370dbc407615/Home%20-%20Video%20Game%20Blog%20-%20Google%20Chrome%205_12_2022%209_52_56%20PM.png?v=1652417663642">
<h3 align=center>Create A Blog</h3>
<img src="https://cdn.glitch.global/cd543e2f-5e90-430c-ab6e-370dbc407615/Home%20-%20Video%20Game%20Blog%20-%20Google%20Chrome%205_12_2022%209_46_26%20PM.png?v=1652417411975">
<h3 align=center>Category List</h3>
<img src="https://cdn.glitch.global/cd543e2f-5e90-430c-ab6e-370dbc407615/Home%20-%20Video%20Game%20Blog%20-%20Google%20Chrome%205_12_2022%209_46_37%20PM.png?v=1652417437643">

## Contributors 
- Eric Aragon




