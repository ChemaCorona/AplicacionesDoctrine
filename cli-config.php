<?php
// cli-config.php
// require_once '../../bootstrap.php';
require_once 'bootstrap.php';
// Any way to access the EntityManager from  your application
// $em = $this->getDoctrine()->getEntityManager();

// $helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
//    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
//    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
// ));

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
));
return $helperSet;
