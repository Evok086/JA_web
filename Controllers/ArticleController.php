<?php
namespace App\Controllers;

use App\Model\Articles\Article;
use App\Model\Articles\ArticleProvider;

class ArticleController implements Controller, CallableController
{
    private ?Article $article;

    public function __construct(
        private ArticleProvider $articleProvider,
    ) {        
    }

    public function saitRepondre(): bool
    {
        if (!str_starts_with($_SERVER['REQUEST_URI'], '/article/')) {
            return false;
        }

        preg_match('#\/article\/([^\/]*)#', $_SERVER['REQUEST_URI'], $matches, PREG_OFFSET_CAPTURE);
        $this->article = $this->articleProvider->find($matches[1][0]);        

        return $this->article instanceof Article;
    }
    public function repondre(): void
    {
        $article = $this->article;
        $template = sprintf('articles/%s', $article->template);

        include(__DIR__ . '/../templates/base.php');
    }
    public function construitUrl(array $params): string
    {
        return sprintf('/article/%s',$params['id']);
    }
}