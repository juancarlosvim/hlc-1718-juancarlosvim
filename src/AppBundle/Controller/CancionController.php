<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cancion;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CancionController extends Controller
{
    /**
     * @Route("/canciones", name="cancion_listar")
     */
    public function listarAction()
    {
        $canciones =$this->getDoctrine()->getRepository('AppBundle:Cancion')->findAll();

        return $this->render('cancion/listar.html.twig', ['canciones' => $canciones ]);
    }

    /**
     * @Route("/cancion/{id}", name="cancion_mostrar")
     */
    public function mostrarAction(Cancion $cancion)
    {
        return $this->render('cancion/mostrarCancion.html.twig',
            ['cancion' => $cancion]);
    }


}
