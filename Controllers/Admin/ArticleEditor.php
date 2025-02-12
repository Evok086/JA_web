<?php
namespace App\Controllers\Admin;

use App\Controllers\CallableController;
use App\Controllers\Controller;
use App\Model\Articles\Article;
use App\Model\Articles\ArticleProvider;
use App\Model\Articles\ArticleSaver;
use App\Model\Articles\ArticleValidator;
use App\Services\UriBuilder;

class ArticleEditor implements Controller, CallableController
{
    private ?Article $article;

    public function __construct(
        private readonly ArticleProvider $articleProvider,
        private readonly ArticleSaver $articleSaver,
        private readonly ArticleValidator $articleValidator,
        private readonly UriBuilder $uriBuilder,
    ) {
    }

    public function saitRepondre(): bool
    {
        if (!str_starts_with($_SERVER['REQUEST_URI'], '/admin/articles/')) {
            return false;
        }

        preg_match('#\/articles\/([^\/]*)#', $_SERVER['REQUEST_URI'], $matches, PREG_OFFSET_CAPTURE);
        $this->article = $this->articleProvider->find($matches[1][0]);

        return $this->article instanceof Article;
    }
    public function repondre(): void
    {
        $article = $this->article;
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $article->title = $_REQUEST["title"];
            $article->text = $_REQUEST["description"];
            $article->link = $_REQUEST["lien"];
            $rapport = $this->articleValidator->validate($article);
            if ($rapport === []){
                $this->articleSaver->save($article);
                header(sprintf("location:%s",$this->uriBuilder->build(ArticleListe::class)));
                die();
            }
        }
        $template = 'admin/article/editor';

        include($GLOBALS['templateRoot'] . '/base.php');
    }
    public function construitUrl(array $params = []): string
    {
        return sprintf('/admin/articles/%s',$params['id']);
    }
}