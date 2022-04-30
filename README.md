<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h1>Video Game Blog</h1>

## About My Project and How it Works

My project is a blog for reviewing video games. A user who has not been registered has access to the home page where they can see the four latest blog posts. They also have access to the blog page where they can search a blog. The search works as follows, the user can search any word/phrase they want and if a blog has that word/phrase in the title then they will be displayed. If not then they will recieve a message stating that there is no such blog that exists. The user can also select a certain category that they wish to see. When the user selects a blog they are redirected to that blog which displays an image, how long ago it was created, who created it, the title, and the body of text. Below the body of text the user can also select 3 blog posts that relate to the one they are currently seeing. If a user wishes to create a blog post then they must have an account. To create an account the user can click on register in the side bar where they are then redirected to the register page. Once a user has registered they are redirected to their dashboard where they have the ability to create a post, create a category, and see the category list. The user should first create a category they wish to categorize their blog with. Then they can head into creating a blog post where they can input a title, choose an image, choose a category, and then write their review. Upon clicking the submit buttonm then they have successsfully created a blog. If the user wishes to edit or delete a post then they should visit the blog page where an edit/delete button is placed on top of their blog.

## Technologies Used 

- Uses laravel, docker, mySQL
- Uses laravel breeze for authentication
- 

## How to deploy
- To deploy use `./vendor/bin/sail up` in the videogameblog directory
- If images do not work you may need to run `./vendor/bin/sail storage:link` in the videogameblog directory

## How to run seed
- 
## Contributers
- Eric Aragon



