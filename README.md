
## Online Library Management System Prototype

<p>The simplest API written in Laravel to manage offline library.</p>

## Stack

<ul>
    <li>PHP 8</li>
    <li>Laravel 8</li>
    <li>MySQL 8</li>
</ul>

## Peculiarities

<ul>
    <li>Repository-Service Pattern</li>
    <li>Type hinting</li>
</ul>

## Basic Setup

<ul>
    <li>cp .\.env.example .\.env</li>
    <li>Add your own mysql db credentials in <strong>.env</strong></li>
    <li>Create database named library (as it's like this in <strong>.env.example</strong>)</li>
    <li>php artisan key:generate</li>
    <li>composer install</li>
    <li>npm install</li>
    <li>php artisan migrate:fresh --seed</li>
</ul>

## Functionality

<ul>
    <li>Using the library card (<strong>api_token, sent over bearer token</strong>), user can borrow new books</li>
    <li>If the book is already borrowed, the error message is shown</li>
    <li>Each librarian is working in 1/1 shifts</li>
    <li>User can borrow the book from specific librarian if it's his/her shift, otherwise error is shown</li>
    <li>If user has delayed books, he/she would not be able to borrow the new ones</li>
    <li>For each month, the most lent books by the specific librarian is shown</li>
</ul>
