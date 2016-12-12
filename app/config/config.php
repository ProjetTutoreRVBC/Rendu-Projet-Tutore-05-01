$container->loadFromExtension('framework', array(
    'db' => array(
        'driver' => 'pdo_mysql',
        'host' => 'dwarves.iut-fbleau.fr/phpmyadmin',
        'dbname' => 'brassele',
    ),
));