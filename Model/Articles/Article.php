<?php
namespace App\Model\Articles;

class Article
{
    public function __construct(
        public string $id,
        public string $title,
        public string $text,
        public ?string $link = null,
        public ?string $linkText = null,
        public ?string $image = null,
        public ?string $url = null,
        public ?string $urlEditor = null,
        public ?string $urlSupprimator = null,
    ) {
    }

    public function titleUpper()
    {
        return strtoupper($this->title);
    }
}