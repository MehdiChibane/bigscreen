<?php

namespace App\Enum;

class QuestionEnum
{
    public static function getQuestions()
    {
        return [
            [
                'question' => 'Question 1/20',
                'label' => 'Votre adresse mail',
                'type' => 'B'
            ],
            [
                'question' => 'Question 2/20',
                'label' => 'Votre âge',
                'type' => 'B'
            ],
            [
                'question' => 'Question 3/20',
                'label' => 'Votre sexe',
                'type' => 'A (Homme, Femme, Préfère de pas répondre)'
            ],
            [
                'question' => 'Question 4/20',
                'label' => 'Nombre de personne dans votre foyer (adulte & enfants)',
                'type' => 'C'
            ],
            [
                'question' => 'Question 5/20',
                'label' => 'Votre profession',
                'type' => 'B'
            ],
            [
                'question' => 'Question 6/20',
                'label' => 'Quel marque de casque VR utilisez vous ?',
                'type' => 'A (Occulus Rift/s, HTC Vive, Windows Mixed Reality, PSVR)'
            ],
            [
                'question' => 'Question 7/20',
                'label' => 'Sur quel magasin d’application achetez vous des contenus VR ?',
                'type' => 'A (SteamVR, Occulus store, Viveport, Playstation VR, Google Play, Windows store)'
            ],
            [
                'question' => 'Question 8/20',
                'label' => 'Quel casque envisagez-vous d’acheter dans un futur proche ?',
                'type' => 'A (Occulus Quest, Occulus Go, HTC Vive Pro, Autre, Aucun)'
            ],
            [
                'question' => 'Question 9/20',
                'label' => 'Au sein de votre foyer, combien de personnes utilisent votre casque VR pour regarder Bigscreen ?',
                'type' => 'C'
            ],
            [
                'question' => 'Question 10/20',
                'label' => 'Vous utilisez principalement Bigscreen pour :',
                'type' => 'A (regarder des émissions TV en direct, regarder des films, jouer en solo, jouer en team)'
            ],
            [
                'question' => 'Question 11/20',
                'label' => 'Combien donnez-vous de points pour la qualité de l’image sur Bigscreen ?',
                'type' => 'C'
            ],
            [
                'question' => 'Question 12/20',
                'label' => 'Combien donnez-vous de points pour le confort d’utilisation de l’interface Bigscreen ?',
                'type' => 'C'
            ],
            [
                'question' => 'Question 13/20',
                'label' => 'Combien donnez-vous de points pour la connexion réseau de Bigscreen ?',
                'type' => 'C'
            ],
            [
                'question' => 'Question 14/20',
                'label' => 'Combien donnez-vous de points pour la qualité des graphismes 3D dans Bigscreen ?',
                'type' => 'C'
            ],
            [
                'question' => 'Question 15/20',
                'label' => 'Combien donnez-vous de points pour la qualité audio dans Bigscreen ?',
                'type' => 'C'
            ],
            [
                'question' => 'Question 16/20',
                'label' => 'Aimeriez-vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
                'type' => 'A (Oui, Non)'
            ],
            [
                'question' => 'Question 17/20',
                'label' => 'Aimeriez-vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
                'type' => 'A (Oui, Non)'
            ],
            [
                'question' => 'Question 18/20',
                'label' => 'Aimeriez-vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
                'type' => 'C'
            ],
            [
                'question' => 'Question 19/20',
                'label' => 'Aimeriez-vous jouer à des jeux exclusifs sur votre Bigscreen ?',
                'type' => 'C'
            ],
            [
                'question' => 'Question 20/20',
                'label' => 'Quelle nouvelle fonctionnalité de vos rêves devrait exister sur Bigscreen ?',
                'type' => 'B'
            ]
        ];
    }
}
