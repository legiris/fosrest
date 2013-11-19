<?php

namespace Acme\BlogBundle\Controller;

class HomepageController extends BaseController
{
	
    /**
     * vybere a zobrazi vsechny clanky
     * @return array
     */
    public function indexAction()
    {	
        return $this->render('AcmeBlogBundle:Homepage:index.html.twig', array(
            'articles' => $this->getDoctrine()->getRepository('AcmeBlogBundle:Article')
                ->findBy(
                    array(),
                    array('id' => 'DESC')
                ),
        ));	
    }

}