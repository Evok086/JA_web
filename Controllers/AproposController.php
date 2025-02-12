<?php

namespace App\Controllers;

class AproposController implements Controller, CallableController
{
    public function saitRepondre(): bool
    {
        return $_SERVER['REQUEST_URI'] === '/apropos';
    }
    public function repondre(): void
    {
        $template = 'apropos';
        $title = 'À Propos';
        include(__DIR__ . '/../templates/base.php');
    }
    public function construitUrl(array $params=[]): string
    {
        return '/apropos';
    }
}