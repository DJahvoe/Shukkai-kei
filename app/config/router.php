<?php

$router = $di->getRouter();

// Define your routes here

// START INDEX
$router->add(
    '/about',
    [
        'controller' => 'Index',
        'action' => 'about',
    ]
);

$router->add(
    '/contact',
    [
        'controller' => 'Index',
        'action' => 'contact',
    ]
);
// END INDEX

// START AUTH
$router->add(
    '/login',
    [
        'controller' => "Auth",
        'action' => 'login',
    ]
);

$router->add(
    '/signin',
    [
        'controller' => "Auth",
        'action' => 'singin',
    ]
);

$router->add(
    '/register',
    [
        'controller' => "Auth",
        'action' => "register"
    ]
);

$router->add(
    '/store',
    [
        'controller' => "Auth",
        'action' => 'store',
    ]
);

$router->add(
    '/logout',
    [
        'controller' => "Auth",
        'action' => 'logout',
    ]
);

// END AUTH

// START BLOG
$router->add(
    '/blog',
    [
        'controller' => "Blog",
        'action' => 'index',
    ]
);

$router->add(
    '/blog/{id:[0-9]+}',
    [
        'controller' => "Blog",
        'action' => 'show',
    ]
);
// END BLOG

// START POSTS
$router->add(
    '/dashboard/posts',
    [
        'controller' => "Posts",
        'action' => 'index',
    ]
);

$router->add(
    '/dashboard/posts/create',
    [
        'controller' => "Posts",
        'action' => 'create',
    ]
);

$router->add(
    '/dashboard/posts/store',
    [
        'controller' => "Posts",
        'action' => 'store',
    ]
);

$router->add(
    '/dashboard/posts/{id:[0-9]+}/edit',
    [
        'controller' => "Posts",
        'action' => 'edit',
    ]
);

$router->add(
    '/dashboard/posts/{id:[0-9]+}/update',
    [
        'controller' => "Posts",
        'action' => 'update',
    ]
);

$router->add(
    '/dashboard/posts/{id:[0-9]+}/delete',
    [
        'controller' => "Posts",
        'action' => 'delete',
    ]
);
// END POSTS

// START MEMBERS
$router->add(
    '/dashboard/members',
    [
        'controller' => "Members",
        'action' => 'index',
    ]
);

$router->add(
    '/dashboard/members/{id:[0-9]+}/update',
    [
        'controller' => "Members",
        'action' => 'update',
    ]
);
// END MEMBERS

// START COMMENTS
$router->add(
    '/dashboard/comments',
    [
        'controller' => "Comments",
        'action' => 'index',
    ]
);

$router->add(
    '/dashboard/comments/create',
    [
        'controller' => "Comments",
        'action' => 'create',
    ]
);

$router->add(
    '/dashboard/comments/{id:[0-9]+}/delete',
    [
        'controller' => "Comments",
        'action' => 'delete',
    ]
);
// END COMMENTS

// START FEEDBACKS
$router->add(
    '/dashboard/feedbacks',
    [
        'controller' => "Feedbacks",
        'action' => 'index',
    ]
);

$router->add(
    '/dashboard/feedbacks/create',
    [
        'controller' => "Feedbacks",
        'action' => 'create',
    ]
);

$router->add(
    '/dashboard/feedbacks/{id:[0-9]+}/delete',
    [
        'controller' => "Feedbacks",
        'action' => 'delete',
    ]
);
// END FEEDBACKS

// START CHANGELOGS
$router->add(
    '/dashboard/changelogs',
    [
        'controller' => "Changelogs",
        'action' => 'index',
    ]
);

$router->add(
    '/dashboard/changelogs/create',
    [
        'controller' => "Changelogs",
        'action' => 'create',
    ]
);

$router->add(
    '/dashboard/changelogs/store',
    [
        'controller' => "Changelogs",
        'action' => 'store',
    ]
);

$router->add(
    '/dashboard/changelogs/{id:[0-9]+}/edit',
    [
        'controller' => "Changelogs",
        'action' => 'edit',
    ]
);

$router->add(
    '/dashboard/changelogs/{id:[0-9]+}/update',
    [
        'controller' => "Changelogs",
        'action' => 'update',
    ]
);

$router->add(
    '/dashboard/changelogs/{id:[0-9]+}/delete',
    [
        'controller' => "Changelogs",
        'action' => 'delete',
    ]
);

$router->add(
    '/dashboard/changelogs/{id:[0-9]+}/set',
    [
        'controller' => "Changelogs",
        'action' => 'set',
    ]
);

$router->add(
    '/dashboard/changelogs/unset',
    [
        'controller' => "Changelogs",
        'action' => 'unset',
    ]
);
// END CHANGELOGS

$router->handle($_SERVER['REQUEST_URI']);
