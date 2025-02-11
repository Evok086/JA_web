<?php
namespace App\Model\Articles;

class ArticleSaver
{
    public function __construct(private ArticleProvider $articleProvider)
    {}

    public function save(Article $article): void
    {
        $liste = $this->articleProvider->findAll();
        $liste[] = $article;
        $articleAsArray = [];
        foreach($liste as $article){
            $articleAsArray[] = [
                'id' => $article->id,
                'title' => $article->title,
                'text' => $article->text,
                'link' => $article->link,
                'linkText' => $article->linkText,
                'image' => $article->image,
                'url' => $article->url,
                'template' => $article->template,
            ];
        }
        file_put_contents(
            $this->articleProvider->getFilePath(),
            json_encode($articleAsArray)
        );
    }

    public function find(string $template): ?Article
    {
        foreach ($this->findAll() as $article){
            if ($article->template === $template) {
                return $article;
            }
        }
        return null;
    }
}