<?php

namespace Crgourmetcoffee\Bundle\RegionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
    public function indexAction(){
        return $this->render('CrgourmetcoffeeRegionBundle:Default:index.html.twig');
    }

    public function regionListAction( ){
		$em = $this->getDoctrine()->getManager();
    	$regions = $em->getRepository('CrgourmetcoffeeRegionBundle:Region')->findAll();
        return $this->render('CrgourmetcoffeeRegionBundle:Default:regions.html.twig',array('regions' => $regions));
    }
}
