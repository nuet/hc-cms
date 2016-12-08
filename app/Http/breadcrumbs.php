<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push(ucfirst(trans('sidebar.home')), route('backend.news.index'));
});
Breadcrumbs::register('products', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Products', route('backend.product.index'));
});
Breadcrumbs::register('productcreate', function($breadcrumbs) {
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Create Product', route('backend.product.create'));
});
Breadcrumbs::register('productedit', function($breadcrumbs) {
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Edit Product', route('backend.product.edit'));
});
Breadcrumbs::register('category', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(ucfirst(trans('sidebar.categories')), route('backend.category.index'));
});
Breadcrumbs::register('categorycreate', function($breadcrumbs) {
    $breadcrumbs->parent('category');
    $breadcrumbs->push(ucfirst(trans('sidebar.add')).' '.trans('sidebar.categories'), route('backend.category.create'));
});
Breadcrumbs::register('categoryedit', function($breadcrumbs) {
    $breadcrumbs->parent('category');
    $breadcrumbs->push(ucfirst(trans('sidebar.edit')).' '.trans('sidebar.categories'), route('backend.category.edit'));
});
Breadcrumbs::register('menu', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(ucfirst(trans('sidebar.menu')), route('backend.page.index'));
});
Breadcrumbs::register('menucreate', function($breadcrumbs) {
    $breadcrumbs->parent('menu');
    $breadcrumbs->push(ucfirst(trans('sidebar.add')).' '.trans('sidebar.menu'), route('backend.page.create'));
});
Breadcrumbs::register('menuedit', function($breadcrumbs) {
    $breadcrumbs->parent('menu');
    $breadcrumbs->push(ucfirst(trans('sidebar.edit')).' '.trans('sidebar.menu'), route('backend.page.edit'));
});
Breadcrumbs::register('newslist', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(ucfirst(trans('sidebar.news')), route('backend.news.index'));
});
Breadcrumbs::register('newscreate', function($breadcrumbs) {
    $breadcrumbs->parent('newslist');
    $breadcrumbs->push(ucfirst(trans('sidebar.add')).' '.trans('sidebar.news'), route('backend.news.create'));
});
Breadcrumbs::register('newsedit', function($breadcrumbs) {
    $breadcrumbs->parent('newslist');
    $breadcrumbs->push(ucfirst(trans('sidebar.edit')).' '.trans('sidebar.news'), route('backend.news.edit'));
});
Breadcrumbs::register('user', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(ucfirst(trans('sidebar.users')), route('backend.user.index'));
});
Breadcrumbs::register('usercreate', function($breadcrumbs) {
    $breadcrumbs->parent('user');
    $breadcrumbs->push(ucfirst(trans('sidebar.add')).' '.trans('sidebar.users'), route('backend.user.create'));
});
Breadcrumbs::register('useredit', function($breadcrumbs) {
    $breadcrumbs->parent('user');
    $breadcrumbs->push(ucfirst(trans('sidebar.edit')).' '.trans('sidebar.users'), route('backend.user.edit'));
});
Breadcrumbs::register('rolecreate', function($breadcrumbs) {
    $breadcrumbs->parent('user');
    $breadcrumbs->push(ucfirst(trans('sidebar.add')).' '.trans('sidebar.role'), route('backend.role.create'));
});
Breadcrumbs::register('roleedit', function($breadcrumbs) {
    $breadcrumbs->parent('user');
    $breadcrumbs->push(ucfirst(trans('sidebar.edit')).' '.trans('sidebar.role'), route('backend.role.edit'));
});
Breadcrumbs::register('slideshow', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(ucfirst(trans('sidebar.slideshow')), route('backend.slideshow.index'));
});
Breadcrumbs::register('slideshowcreate', function($breadcrumbs) {
    $breadcrumbs->parent('slideshow');
    $breadcrumbs->push(ucfirst(trans('sidebar.add')).' '.trans('sidebar.slideshow'), route('backend.slideshow.create'));
});
Breadcrumbs::register('slideshowedit', function($breadcrumbs) {
    $breadcrumbs->parent('slideshow');
    $breadcrumbs->push(ucfirst(trans('sidebar.edit')).' '.trans('sidebar.slideshow'), route('backend.slideshow.edit'));
});
Breadcrumbs::register('options', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(ucfirst(trans('sidebar.options')), url('backend/options'));
});