<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('goshortcut_index', new Route(
    '/',
    array('_controller' => 'AppBundle:GoShortcut:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('goshortcut_show', new Route(
    '/{id}/show',
    array('_controller' => 'AppBundle:GoShortcut:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('goshortcut_new', new Route(
    '/new',
    array('_controller' => 'AppBundle:GoShortcut:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('goshortcut_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'AppBundle:GoShortcut:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('goshortcut_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'AppBundle:GoShortcut:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
