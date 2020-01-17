<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > Alternatif
Breadcrumbs::for('alternatif', function ($trail) {
    $trail->parent('home');
    $trail->push('Alternatif', route('alternatif'));
});

// Home > Kriteria
Breadcrumbs::for('kriteria', function ($trail) {
    $trail->parent('home');
    $trail->push('Kriteria', route('kriteria'));
});

// Home > Nilai Kriteria
Breadcrumbs::for('nilaikriteria', function ($trail) {
    $trail->parent('home');
    $trail->push('Nilai kriteria', route('nilaikriteria'));
});

// Home > Perhitungan
Breadcrumbs::for('perhitungan', function ($trail) {
    $trail->parent('home');
    $trail->push('Perhitungan', route('perhitungan'));
});

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function ($trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category->id));
// });

// Home > Blog > [Category] > [Post]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });