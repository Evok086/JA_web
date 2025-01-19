<?php
namespace App\Model\Articles;

class Article
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $text,
        public readonly ?string $link = null,
        public readonly ?string $linkText = null,
        public readonly ?string $image = null,
        public ?string $url = null,
        public ?string $template = null,
    ) {
    }

    public function titleUpper()
    {
        return strtoupper($this->title);
    }
}