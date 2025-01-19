<?php
namespace App\Model\Evenements;

class EvenementProvider
{
    public function findAll(): array
    {
        return [
            new Evenement(
                title: 'AMEB',
                date: new \DateTime('2025-01-25'),
                description: 'Après-midi Enigme Biblique ',
                link: '/article/04.ameb',
            ),
            new Evenement(
                title: 'Soirée JA',
                date: new \DateTime('2025-01-25'),
                description: 'Soirée Pain Beurre et Galette des Rois',
            ),
            new Evenement(
                title: 'Camp à St Gildas',
                date: new \DateTime('2025-02-01'),
                dateEnd: new \DateTime('2025-02-02'),
                description: 'Pour les Compagnons et le Ambassadeurs',
            ),
            new Evenement(
                title: 'Réunion JA',
                date: new \DateTime('2025-02-01'),
                description: '16h pour les aventuriers et les explorateurs',
            ),
            new Evenement(
                title: 'Réunion JA',
                date: new \DateTime('2025-02-02'),
                description: '10h pour les aventuriers et les explorateurs',
            ),
            new Evenement(
                title: 'Réunion JA',
                date: new \DateTime('2025-02-22'),
                description: '14h30 pour les compagnons et 16h pour les aventuriers et les explorateurs',
            ),
        ];
    }
}