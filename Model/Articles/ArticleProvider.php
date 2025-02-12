<?php
namespace App\Model\Articles;

class ArticleProvider
{
    public function getFilePath(): string
    {
        return __DIR__.'/../../Data/articles.json';
    }
    public function findAll(): array
    {
        $articlesAsArray = file_get_contents($this->getFilePath());
        $articlesAsArray = json_decode($articlesAsArray,true);
        $articles = [];
        foreach($articlesAsArray as $articleAsArray){
            $articles[] = new Article(
                id: $articleAsArray['id'],
                title: $articleAsArray['title'],
                text: $articleAsArray['text'],
                link: $articleAsArray['link'],
                linkText: $articleAsArray['linkText'],
                image: $articleAsArray['image'],
                url: $articleAsArray['url'],
            );
        }
        return $articles;
    }

    public function find(string $id): ?Article
    {
        foreach ($this->findAll() as $article){
            if ($article->id === $id) {
                return $article;
            }
        }
        return null;
    }
}