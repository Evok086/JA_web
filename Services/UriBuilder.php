<?php

namespace App\Services;

class UriBuilder
{
    private array $controllers = [];

    public function build(string $controllerClass,array $params=[]): string
    {
        foreach ($this->controllers as $controller) {
            if (get_class($controller) === $controllerClass) {
                return $controller->construitUrl($params);
            }
        }
        throw new \Exception("Controller {$controllerClass} not found");
    }

    public function setControllers(array $listeControllers)
    {
        $this->controllers = $listeControllers;
    }

}