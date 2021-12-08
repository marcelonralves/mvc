<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router("https://localhost");

/**
 * routes
 * The controller must be in the namespace Test\Controller
 * this produces routes for route, route/$id, route/{$id}/profile, etc.
 */
$router->namespace("Source\App");

$router->get("/", "Web:home");

/**
 * group by routes and namespace
 * this produces routes for /admin/route and /admin/route/$id
 * The controller must be in the namespace Dash\Controller
 */
$router->group("admin")->namespace("Dash");
$router->get("/route", "Controller:method");
$router->post("/route/{id}", "Controller:method");

/**
 * Group Error
 * This monitors all Router errors. Are they: 400 Bad Request, 404 Not Found, 405 Method Not Allowed and 501 Not Implemented
 */
$router->group("error")->namespace("Test");
$router->get("/{errcode}", "Coffee:notFound");

/**
 * This method executes the routes
 */
$router->dispatch();

/*
 * Redirect all errors
 */
if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}