<?php
namespace App\Controllers;

use App\Model\Articles\ArticleProvider;

class HomeController implements Controller, CallableController
{
    public function __construct(
        private ArticleController $articleController,
        private ArticleProvider $articleProvider,
    ) {
    }
    public function saitRepondre(): bool
    {
        return $_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/home';
    }
    public function repondre(): void
    {
        $template = 'home';
        $title = 'Accueil';
        $articles = [];
        foreach ($this->articleProvider->findAll() as $article) {
            if ($article->template) {
                $article->url = $this->articleController->construitUrl([
                    'id' => $article->template,
                ]);
            }
            $articles[] = $article;
        }
        include(__DIR__ . '/../templates/base.php');
    }
    public function construitUrl(array $params): string
    {
        return '/';
    }
}