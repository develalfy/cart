<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="list_items")
     * @Method("GET")
     */
    public function indexCart()
    {
        $items = $this->getDoctrine()
            ->getRepository("AppBundle:Item")
            ->findAll();


        return $this->render('cart/list.html.twig', [
            'items' => $items,
        ]);
    }

}
