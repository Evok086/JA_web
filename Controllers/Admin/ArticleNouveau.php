<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Controllers\CallableController;
use App\Model\Articles\Article;
use App\Model\Articles\ArticleSaver;
use App\Model\Articles\ArticleValidator;
use App\Services\UriBuilder;

class ArticleNouveau implements Controller, CallableController
{
    public function     __construct(
        private readonly ArticleSaver $articleSaver,
        private readonly ArticleValidator $articleValidator,
        private readonly UriBuilder $uriBuilder,

        )
    {}

    public function saitRepondre(): bool
    {
        return $_SERVER['REQUEST_URI'] === '/admin/articles/nouveau';
    }
    public function repondre(): void
    {
        $article = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $article = new Article(
                id: bin2hex(random_bytes(20)),
                title:$_REQUEST["title"],
                text:$_REQUEST["description"],
                link:$_REQUEST["lien"],
                linkText:'En Savoir Plus',

            );
            $rapport = $this->articleValidator->validate($article);
            if ($rapport === []){
                $this->articleSaver->save($article);
                header(sprintf("location:%s",$this->uriBuilder->build(ArticleListe::class)));
                die();
            }
        }
        $template = 'admin/article/nouveau';
        $title = 'Nouvel article';
        include(__DIR__ . '/../../templates/base.php');
    }
    public function construitUrl(array $params = []): string
    {
        return '/admin/articles/nouveau';
    }
}