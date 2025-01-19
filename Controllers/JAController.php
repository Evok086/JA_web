<?php
namespace App\Controllers;

class JAController implements Controller, CallableController
{
    public function saitRepondre(): bool
    {
        return $_SERVER['REQUEST_URI'] === '/JA';
    }
    public function repondre(): void
    {
        $template = 'JA';
        $title = 'JA késako';
        include(__DIR__ . '/../templates/base.php');
    }
    public function construitUrl(array $params): string
    {
        return '/JA';
    }
}