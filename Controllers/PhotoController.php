<?php 
namespace App\Controllers;

class PhotoController implements Controller
{
    public function saitRepondre(): bool 
    {
        if (!str_starts_with($_SERVER['REQUEST_URI'], '/photo')) {
            return false;
        }
       return true;
    }

    public function repondre(): void
    {
        //annees
        $fichiers = scandir(__DIR__."/../Images/Photos");
        $annees=[];
        foreach ($fichiers as $fichier){
            if (str_starts_with($fichier,'.')){continue;}
            $annees[]=$fichier; 
        }


        // photos
        $annee=$_GET['annee'] ?? 2024; 
        $photoParPage=2; 
        $pagination=$_GET['pagination'] ?? 1; 
        $premierePhoto=$photoParPage*($pagination-1)+1 ;
        $dernierePhoto=$photoParPage*$pagination ;
        $fichiers = scandir(__DIR__."/../Images/Photos/$annee");
        $photos=[];
        $compteur=0;
        foreach ($fichiers as $fichier){
            if (str_starts_with($fichier,'.')){continue;}
            $compteur++;
            if ($compteur>=$premierePhoto && $compteur<=$dernierePhoto){
                $photos[]=$fichier;        
            }
        }
        $template = 'photo';
        $title = 'Photo';
        $dernierePagination=ceil($compteur/$photoParPage); 
        include(__DIR__ . '/../templates/base.php');
    }
}