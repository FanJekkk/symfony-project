<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.K7rw.SZ' shared service.

return $this->privates['.service_locator.K7rw.SZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'connection' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
], [
    'connection' => '?',
]);
