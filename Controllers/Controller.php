<?php
namespace App\Controllers;

interface Controller
{
    public function saitRepondre(): bool;
    public function repondre(): void;
}