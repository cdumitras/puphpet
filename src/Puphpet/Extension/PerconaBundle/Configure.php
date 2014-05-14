<?php

namespace Puphpet\Extension\PerconaBundle;

use Puphpet\MainBundle\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class Configure extends Extension\ExtensionAbstract
{
    protected $name = 'Percona';
    protected $slug = 'percona';
    protected $targetFile = 'puphpet/puppet/manifest.pp';


    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->dataLocation = __DIR__ . '/Resources/config';

        parent::__construct($container);
    }

    public function getFrontController()
    {
        return $this->container->get('puphpet.extension.percona.front_controller');
    }

    public function getManifestController()
    {
        return $this->container->get('puphpet.extension.percona.manifest_controller');
    }
}
