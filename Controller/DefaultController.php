<?php

namespace crgourmetcoffee\bundles\RegionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction( $id ){
		$em = $this->getDoctrine()->getManager();
    	$region = $em->getRepository('crgourmetcoffeebundlesRegionBundle:Region')->find($id);
        return $this->render('crgourmetcoffeebundlesRegionBundle:Default:region_information.html.twig',array('region' => $region));
    }
}