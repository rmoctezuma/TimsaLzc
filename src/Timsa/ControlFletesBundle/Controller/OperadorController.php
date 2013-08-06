<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Timsa\ControlFletesBundle\Entity\Operador;
use Timsa\ControlFletesBundle\Form\OperadorType;

class OperadorController extends Controller{

	public function indexAction(){
		/*$operador = new Operador();
		$operador->setNombre("Chavuca");
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($operador);
		$em->flush();
		*/
		return $this->render("TimsaControlFletesBundle:Operador:operadores.html.twig");
	}

	public function createAction(){
		$operador 	= new Operador();
		$operador->setNombre("Raul");
		$form 		= $this->createForm(
										new OperadorType(), 
										$operador, 
										array('action' => $this->generateUrl('_homepage'))
										);

		return $this->render("TimsaControlFletesBundle:Operador:form_operador.html.twig",
							array( 
								"action" => "Crear Operador",
								"form" => $form->createView() 
								));
	}
}