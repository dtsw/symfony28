<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('goshortcutuser_index', new Route(
    '/',
    array('_controller' => 'AppBundle:GoShortcutUser:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('goshortcutuser_show', new Route(
    '/{id}/show',
    array('_controller' => 'AppBundle:GoShortcutUser:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('goshortcutuser_new', new Route(
    '/new',
    array('_controller' => 'AppBundle:GoShortcutUser:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('goshortcutuser_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'AppBundle:GoShortcutUser:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('goshortcutuser_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'AppBundle:GoShortcutUser:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
