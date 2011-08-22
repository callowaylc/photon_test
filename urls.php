<?php
/* -*- tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- */
/**
 * The project URLs file "includes" the urls of your apps at the right
 * points in the URL space of your project.
 */

// As an example, we make a very small response for the base of the
// demo directly available through a closure. This shows that the
// view parameter of a mapping is just a callable.

$url = $http = array(
              array('regex' => '#^/$#',
                    'view'  => array('\home\views\Views', 'index'),
              		'name'  => 'default_index'
              ),
              array('regex' => '#^/home#',
                    'sub' => include __DIR__ . '/apps/home/urls.php'
              )
);


return array_merge($http);