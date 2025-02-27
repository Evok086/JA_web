<?php
namespace App\Controllers\Admin;

use App\Controllers\CallableController;
use App\Controllers\Controller;
use App\Model\Articles\Article;
use App\Model\Articles\ArticleProvider;
use App\Model\Articles\ArticleSaver;
use App\Model\Articles\ArticleValidator;
use App\Services\UriBuilder;

class ArticleSupprimator implements Controller, CallableController
{
    private ?Article $article;

    public function __construct(
        private readonly ArticleProvider $articleProvider,
        private readonly ArticleSaver $articleSaver,
        private readonly UriBuilder $uriBuilder,
    ) {
    }

    public function saitRepondre(): bool
    {
        if (!str_starts_with($_SERVER['REQUEST_URI'], '/admin/articles/')) {
            return false;
        }
        if (!str_ends_with($_SERVER['REQUEST_URI'], '/supprimer')) {
            return false;
        }
        preg_match('#\/articles\/([^\/]*)/supprimer#', $_SERVER['REQUEST_URI'], $matches, PREG_OFFSET_CAPTURE);
        $this->article = $this->articleProvider->find($matches[1][0]);

        return $this->article instanceof Article;
    }
    public function repondre(): void
    {
        $article = $this->article;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->articleSaver->remove($article);
        }
        header(sprintf("location:%s",$this->uriBuilder->build(ArticleListe::class)));
        die();
    }

    public function construitUrl(array $params = []): string
    {
        return sprintf('/admin/articles/%s/supprimer',$params['id']);
    }
}