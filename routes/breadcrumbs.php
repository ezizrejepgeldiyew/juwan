<?php

use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Diglactic\Breadcrumbs\Breadcrumbs;

// Home


Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(__('Home'), route('index'));
});

// Home > Profile
Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Profile'), route('profile.index'));
});

// Home > Permission
Breadcrumbs::for('permissions', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Permissions'), route('permissions.index'));
});

// Home > Role
Breadcrumbs::for('roles', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Roles'), route('roles.index'));
});

// Home > Author
Breadcrumbs::for('authors', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Authors'), route('authors.index'));
});

// Home > Genre
Breadcrumbs::for('genres', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Genres'), route('genres.index'));
});

// Home > Book
Breadcrumbs::for('books', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Books'), route('books.index'));
});

// Home > Category
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Categories'), route('categories.index'));
});

// Home > Otp
Breadcrumbs::for('otps', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Otpler', route('otps.index'));
});

// Home > Podkast
Breadcrumbs::for('podkasts', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Podcasts'), route('podkasts.index'));
});

// Home > Favorit
Breadcrumbs::for('favorites', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Favorites'), route('favorites.index'));
});

// Home > Post
Breadcrumbs::for('posts', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Posts'), route('posts.index'));
});


// Home > Posts > Videos
Breadcrumbs::for('videos', function (BreadcrumbTrail $trail) {
    $trail->parent('posts');
    $trail->push(__('Videos'), route('videos.index'));
});

// Home > Posts > Books
Breadcrumbs::for('post_books', function (BreadcrumbTrail $trail) {
    $trail->parent('posts');
    $trail->push(__('Books'), route('postbooks.index'));
});

// Home > Posts > Books > Select Store
Breadcrumbs::for('select_store_post_books', function (BreadcrumbTrail $trail) {
    $trail->parent('post_books');
    $trail->push('Kitaplary Goşmak', route('post_books.select_books'));
});

// Home > Posts > Photos
Breadcrumbs::for('photos', function (BreadcrumbTrail $trail) {
    $trail->parent('posts');
    $trail->push(__('Photos'), route('photos.index'));
});

// Home > Blog
Breadcrumbs::for('category', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Category', route('category.index'));
});

// Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category));
// });
