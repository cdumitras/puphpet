<?php

namespace Puphpet\Extension\PerconaBundle\Controller;

use Puphpet\MainBundle\Extension;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller implements Extension\ControllerInterface
{
    public function indexAction(array $data, $extra = '')
    {
        return $this->render('PuphpetExtensionPerconaBundle:form:Percona.html.twig', [
            'percona' => $data,
        ]);
    }

    public function addDatabaseAction()
    {
        return $this->render('PuphpetExtensionPerconaBundle:form/sections:NewUserAndDatabase.html.twig', [
            'available_privileges' => $this->getData()['available_privileges'],
            'database'             => $this->getData()['empty_database'],
        ]);
    }

    /**
     * @return array
     */
    private function getData()
    {
        $config = $this->get('puphpet.extension.percona.configure');
        return $config->getData();
    }
}
