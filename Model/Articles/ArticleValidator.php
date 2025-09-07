<?php

namespace App\Model\Articles;

class ArticleValidator
{
    private array $errors = [];
    public function validate(Article $article): array
    {
        if (empty($article->title)) {
            $this->addError('Le champ Titre est obligatoire','title');
        }
        if (preg_match('#[@%$£&"\']#',$article->title)) {
            $this->addError('Caractère interdits : @,%,$,£,&','title');
            }
        if (empty($article->text)) {
            $this->addError('Le champ Description est obligatoire','text');
        }
        if (!filter_var($article->link, FILTER_VALIDATE_URL)) {
            $this->addError('Entrez un lien !!!!!','link');
        }
        return $this->errors;
    }
    private function addError(string $message,string $champ): void
    {
        if (isset($this->errors[$champ])){
            $this->errors[$champ][] = $message;
        }
        else {
            $this->errors[$champ] = [$message];
        }
    }
}