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


    /**
     * @Route("/add", name="add_item_get")
     * @Method("GET")
     */
    public function addItemGet()
    {
        return $this->render('cart/add.html.twig');
    }


    /**
     * @Route("/add", name="add_item_post")
     * @Method("POST")
     * @param Request $request
     * @return Response
     */
    public function addItemPost(Request $request)
    {
        $item = new Item();
        $item->setTitle($request->get('title'));

        $em = $this->getDoctrine()->getManager();

        $em->persist($item);
        $em->flush();

        return $this->redirectToRoute('list_items');
    }


    /**
     * @Route("/delete/{itemId}", name="delete_item")
     * @Method("GET")
     * @param $itemId
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteItem($itemId)
    {
        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository('AppBundle:Item')->find($itemId);

        $em->remove($item);
        $em->flush();
        
        return $this->redirectToRoute('list_items');
    }


    /**
     * @Route("/edit/{itemId}", name="edit_item_get")
     * @Method("GET")
     * @param $itemId
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function editItemGet($itemId)
    {
        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository('AppBundle:Item')->find($itemId);

        return $this->render('cart/edit.html.twig', [
            'item' => $item,
        ]);
    }


    /**
     * @Route("/edit/{itemId}", name="edit_item_post")
     * @Method("POST")
     * @param $itemId
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @internal param $itemId
     */
    public function editItemPost($itemId, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository('AppBundle:Item')->find($itemId);

        $item->setTitle($request->get('title'));
        $em->flush();

        return $this->redirectToRoute('list_items');
    }


    /**
     * @Route("/empty", name="empty_cart")
     * @Method("GET")
     */
    public function emptyCart()
    {
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("AppBundle:Item")->findAll();

        // delete all items
        foreach ($items as $item) {
            $em->remove($item);
        }

        $em->flush();

        return $this->redirectToRoute('list_items');
    }
}
