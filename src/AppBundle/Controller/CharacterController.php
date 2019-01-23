<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use AppBundle\Entity\Character;


class CharacterController extends Controller
{
    use \AppBundle\Helper\ControllerHelper;

    /**
     * @Route("/getcharacters", name="get_characters")
     * @Method("POST")
     */
    public function listAction(Request $request)
    {
        $characters = $this->getDoctrine()->getRepository('AppBundle:Character')->findAll();
        $response = new Response($this->serialize(['characters' => $characters]), Response::HTTP_OK);

        return $this->setBaseHeaders($response);
    }

}
