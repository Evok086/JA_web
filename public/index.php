<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|webp)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}
require "../Model/Articles/Article.php";
require "../Model/Articles/ArticleProvider.php";
require "../Model/Articles/ArticleValidator.php";
require "../Model/Articles/ArticleSaver.php";
require "../Model/Evenements/Evenement.php";
require "../Model/Evenements/EvenementProvider.php";
require "../Controllers/Controller.php";
require "../Controllers/CallableController.php";
require "../Controllers/HomeController.php";
require "../Controllers/Error404Controller.php";
require "../Controllers/AproposController.php";
require "../Controllers/ArticleController.php";
require "../Controllers/JAController.php";
require "../Controllers/PlanningController.php";
require "../Controllers/PhotoController.php";
require "../Controllers/Admin/ArticleNouveau.php";
require "../Controllers/Admin/ArticleListe.php";
require "../Controllers/Admin/ArticleEditor.php";
require "../Controllers/Admin/ArticleSupprimator.php";
require "../Services/UriBuilder.php";

$uriBuilder = new App\Services\UriBuilder();
$articleProvider = new App\Model\Articles\ArticleProvider();
$articleController = new App\Controllers\ArticleController($articleProvider);
$articleSaver = new App\Model\Articles\ArticleSaver($articleProvider);
$articleValidator = new App\Model\Articles\ArticleValidator();
$articleEditor = new App\Controllers\Admin\ArticleEditor($articleProvider, $articleSaver, $articleValidator, $uriBuilder);
$articleListe = new App\Controllers\Admin\ArticleListe($articleProvider, $uriBuilder);
$listeControllers = [
    new App\Controllers\Admin\ArticleSupprimator($articleProvider, $articleSaver, $uriBuilder),
    new App\Controllers\HomeController($articleController, $articleProvider),
    new App\Controllers\AproposController(),
    new App\Controllers\Admin\ArticleNouveau($articleSaver, $articleValidator, $uriBuilder),
    $articleListe,
    new App\Controllers\JAController(),
    $articleController,
    new App\Controllers\PlanningController(),
    new App\Controllers\PhotoController(),
    $articleEditor,
];

$uriBuilder->setControllers($listeControllers);

$controller = null;
foreach ($listeControllers as $unController) {
    if ($unController->saitRepondre()) {
        $controller = $unController;
        break;
    }
}
if (null === $controller) {
    $controller = new App\Controllers\Error404Controller();
}
$templateRoot = __DIR__ . '/../templates';
$controller->repondre();