<?php
namespace App\Controllers;

interface CallableController
{
    public function construitUrl(array $params): string;
}