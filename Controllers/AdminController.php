<?php

namespace App\Controllers;

class AdminController implements Controller, CallableController
{
    public function __construct(private \App\Model\Articles\ArticleSaver $articleSaver)
    {}

    public function saitRepondre(): bool
    {
        return $_SERVER['REQUEST_URI'] === '/admin';
    }
    public function repondre(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $article = new \App\Model\Articles\Article(
                id: bin2hex(random_bytes(20)),
                title:$_REQUEST["title"],
                text:$_REQUEST["description"],
                link:$_REQUEST["lien"],
                linkText:'En Savoir Plus',
                
            );
            $this->articleSaver->save($article);
            header("Location: /myOtherPage.php");
            die();
        }
        $template = 'admin';
        $title = 'Page Admin';
        include(__DIR__ . '/../templates/base.php');
    }
    public function construitUrl(array $params): string
    {
        return '/admin';
    }
}