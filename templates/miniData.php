<?php
class miniData {
    public function __construct(
        public readonly string $title,
        public readonly string $text,
        public readonly ?string $link = null,
        public readonly ?string $linkText = null,
        public readonly ?string $image = null,
    ) {
    }

    public function titleUpper() {
        return strtoupper($this->title);
    }
}