<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Application\Settings\Database;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });
    $app->group('/swap-mart', function (Group $parentgroup) {
        $parentgroup->get('/', function (Request $request, Response $response) {
            $db = new Database();
            $db->query();
            $response->getBody()->write('Hello world!');
            return $response;
        });
                // $parentgroup->group('/user', function (Group $group) {
        //     $group->get('/', ListUsersAction::class);
        //     $group->get('/{id}', ViewUserAction::class);
        // });
        // $parentgroup->group('/auth', function (Group $group) {
        //     $group->post('/send-otp', ListUsersAction::class);
        //     $group->post('/check-otp', ViewUserAction::class);
        //     $group->post('/signup', ViewUserAction::class);
        //     $group->post('/signin', ViewUserAction::class);
        // });
        // $parentgroup->group('/bookmark', function (Group $group) {
        //     $group->get('/{id}', ListUsersAction::class);
        //     $group->post('/save/{id}', ViewUserAction::class);
        // });
        // $parentgroup->group('/category', function (Group $group) {
        //     $group->get('/', ListUsersAction::class);
        //     $group->get('/get-by-slug/{slug}', ListUsersAction::class);
        //     $group->get('/get-children-by-slug/{slug}', ListUsersAction::class);
        //     $group->get('/search/{q}', ListUsersAction::class);
        //     $group->post('/create', ViewUserAction::class);
        // });
        // $parentgroup->group('/note', function (Group $group) {
        //     $group->get('/', ListUsersAction::class);
        //     $group->post('/create', ViewUserAction::class);
        //     $group->delete("/delete/{id}, ViewUserAction::class);
        // });
        // $parentgroup->group('/option', function (Group $group) {
        //     $group->get('/{id}', ListUsersAction::class);
        //     $group->post('/save/{id}', ViewUserAction::class);
        //     $group->put('/update/{id}', ViewUserAction::class);
        //     $group->delete('/delete/{id}', ViewUserAction::class);
        //     $group->get('/{id}', ViewUserAction::class);
        //     $group->get('/by-category-id/{categoryId}', ViewUserAction::class);
        //     $group->get('/by-category-slug/{slug}', ViewUserAction::class);
        // });
        // $parentgroup->group('/post', function (Group $group) {
        //     $group->post("/", ListUsersAction::class);
        //     $group->get("/:slug", ViewUserAction::class);
        //     $group->post("/create", ViewUserAction::class);
        //     $group->put("/update/:id", ViewUserAction::class);
        //     $group->delete("/:id", ViewUserAction::class);
        // });
        // $parentgroup->group('/user', function (Group $group) {
        //     $group->get("/info", ListUsersAction::class);
        //     $group->get("/my-post", ViewUserAction::class);
        //     $group->get("/my-saved", ViewUserAction::class);
        //     $group->get("/my-note", ViewUserAction::class);
        //     $group->get("/my-seen", ViewUserAction::class);
        // });

    });
};
