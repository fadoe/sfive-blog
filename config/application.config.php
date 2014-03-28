<?php

return array(
    'service_manager' => array(
        'invokables' => array(
            'Sfive\Entity\Author' => 'Sfive\Entity\Author',
            'Request' => 'Zend\Http\PhpEnvironment\Request',
            'Response' => 'Zend\Http\PhpEnvironment\Response',
        ),
        'factories' => array(
            'Sfive\Repository\Author' => 'Sfive\Repository\AuthorFactory',
        ),
    ),
);

