<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.RfM5EXj' shared service.

return $this->privates['.service_locator.RfM5EXj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'flightRepository' => ['privates', 'App\\Repository\\FlightRepository', 'getFlightRepositoryService.php', true],
], [
    'flightRepository' => 'App\\Repository\\FlightRepository',
]);