<?php

return array(
    'service_manager' => array(
        'invokables' => array(
            'Sfive\Entity\Author' => 'Sfive\Entity\Author',
        ),
        'factories' => array(
            'Sfive\Repository\Author' => 'Sfive\Repository\AuthorFactory',
        ),
    ),
);

