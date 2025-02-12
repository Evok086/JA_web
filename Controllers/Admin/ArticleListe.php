<?php

namespace App\Controllers\Admin;

use App\Controllers\CallableController;
use App\Controllers\Controller;
use App\Model\Articles\Article;
use App\Model\Articles\ArticleProvider;
use App\Services\UriBuilder;

class ArticleListe implements Controller, CallableController
{
    public function __construct(
        private readonly ArticleProvider $articleProvider,
        private readonly UriBuilder      $uriBuilder,
    )
    {
    }

    public function saitRepondre(): bool
    {
        return $_SERVER['REQUEST_URI'] === '/admin/articles';
    }

    public function repondre(): void
    {
        $template = 'admin/article/liste';
        $title = 'Articles';
        $articles = [];
        /** @var Article $article */
        foreach ($this->articleProvider->findAll() as $article) {
            $article->urlEditor = $this->uriBuilder->build(
                ArticleEditor::class,
                [
                    'id' => $article->id,
                ]
            );
            $article->urlSupprimator = $this->uriBuilder->build(
                ArticleSupprimator::class,
                [
                    'id' => $article->id,
                ]

            );
            $articles[] = $article;
        }
        include(__DIR__ . '/../../templates/base.php');
    }

    public function construitUrl(array $params = []): string
    {
        return '/admin/articles';
    }
}