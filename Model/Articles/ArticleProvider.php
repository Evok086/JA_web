<?php
namespace App\Model\Articles;

class ArticleProvider
{
    public function findAll(): array
    {
        return [
            new Article(
                id: '01',
                title: 'Prochaine réunion',
                text: 'Le 14 décembre à 14h30 pour les compagnons et 16h pour les aventuriers et les explos',
            ),
            new Article(
                id: '02',
                title: 'Prochaine sortie',
                text: 'Marché le 15 décembre',
                linkText: 'Voir plus de détails',
                template: '02.sortie',
            ),
            new Article(
                id: '03',
                title: 'AMEB',
                text: 'Après-Midi énigme biblique',
                image: '/Images/AMEB.jpeg',
                template: '04.ameb',
            ),
        ];
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