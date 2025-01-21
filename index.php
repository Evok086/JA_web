<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|webp)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}
require "Model/Articles/Article.php";
require "Model/Articles/ArticleProvider.php";
require "Model/Evenements/Evenement.php";
require "Model/Evenements/EvenementProvider.php";
require "Controllers/Controller.php";
require "Controllers/CallableController.php";
require "Controllers/HomeController.php";
require "Controllers/Error404Controller.php";
require "Controllers/AproposController.php";
require "Controllers/ArticleController.php";
require "Controllers/JAController.php";
require "Controllers/PlanningController.php";
$articleProvider = new App\Model\Articles\ArticleProvider();
$articleController = new App\Controllers\ArticleController($articleProvider);

$listeControllers = [
    new App\Controllers\HomeController($articleController,$articleProvider),
    new App\Controllers\AproposController(),
    new App\Controllers\JAController(),
    $articleController,
    new App\Controllers\PlanningController(),
];

$controller = null;
foreach ($listeControllers as $unController) {
    if ($unController->saitRepondre()) {
        $controller = $unController;
    }
}
if (null === $controller) {
    $controller = new App\Controllers\Error404Controller();
}
$controller->repondre();