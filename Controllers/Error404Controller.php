<?php
namespace App\Controllers;

class Error404Controller implements Controller
{
    public function saitRepondre(): bool
    {
        return false;
    }
    public function repondre(): void
    {
        $template = '404';
        $title = 'Erreur 404';
        include(__DIR__ . '/../templates/base.php');
    }
}