<?php
namespace App\Controllers;

use App\Model\Evenements\EvenementProvider;

class PlanningController implements Controller, CallableController
{
    public function saitRepondre(): bool
    {
        return $_SERVER['REQUEST_URI'] === '/planning';
    }
    public function repondre(): void
    {
        $template = 'planning';
        $title = 'Planning';
        $provider = new EvenementProvider();
        $evenements = $provider->findAll();
        include(__DIR__ . '/../templates/base.php');
    }
    public function construitUrl(array $params): string
    {
        return '/planning';
    }
}