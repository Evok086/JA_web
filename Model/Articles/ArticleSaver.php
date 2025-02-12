<?php
namespace App\Model\Articles;

class ArticleSaver
{
    public function __construct(private ArticleProvider $articleProvider)
    {}

    public function save(Article $nvArticle): void
    {
        $liste = $this->articleProvider->findAll();
        $ajout = true;
        foreach ($liste as $key => $article) {
            if ($article->id === $nvArticle->id) {
                $liste[$key] = $nvArticle;
                $ajout = false;
            }
        }
        if ($ajout) {
            $liste[] = $nvArticle;
        }
        $this->writeJSON($liste);
    }

    public function remove(?Article $articleToRemove): void
    {
        $liste = $this->articleProvider->findAll();
        foreach ($liste as $key => $article) {
            if ($article->id === $articleToRemove->id) {
                unset($liste[$key]);
            }
        }
        $this->writeJSON($liste);
    }

    private function writeJSON(array $liste): void
    {
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
}
