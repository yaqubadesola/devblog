<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About DevBlog (https://devblog.go.yj.fr/)

A simple blog app based on the demand that tracks the number of unique users that have visited the app. The app will also have blog posts where users will be able to create and read stories. Each story will also have a view count. That is, how many times the post was opened/read:



This DevBlog App was made with Laravel , Having already Known that Laravel is accessible, powerful, and provides tools required for large, robust applications. check it out (https://devblog.go.yj.fr/)

## DevBlog Features


<ul>
	<li>Track a Unique User to the site</li>
	<li>Allow User to create a post</li>
	<li>Allow User to reade a post</li>
	<li>Count the number of times A single post was visited</li>
	<li>Count the number of times the app was visited</li>
</ul>

## Installation on Your Local System


<ul type="1">
	<li>Clone GitHub repo for this project locally</li>
	<li>cd into your project to locate <i><b>dev_blog.sql</b></i> database</li>
	<li>create a database and import this <i><b>dev_blog.sql</b></i> database</li>
	<li>Open your terminal and cd to your project root folder</li>
	<li>Run composer install or php composer.phar install</li>
	<li>Update your <i><b>.env</b></i> to reflect your local changes</li>
	<li>Run php artisan key:generate </li>
	<li>Run php artisan migrate</li>
	<li>Run php artisan serve</li>
</ul>

###You can now access your project at localhost:8000 :)

### If for some reason your project stop working do these:
<ul>
	<li>composer install</li>
	<li>php artisan migrate</li>
</ul>

### Note 
 
 To see full functionalities of this devblog app it needs to be hosted..as at the time of this documention the free hosting used has not been fully propagated, once done it will be  update here. In view of this, You may have a limited unique user which is local IP. Thanks and enjoy your day. 

### You can now visit the devblog on production (https://devblog.go.yj.fr/)