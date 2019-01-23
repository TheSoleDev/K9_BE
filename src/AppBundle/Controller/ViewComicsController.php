<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use AppBundle\Entity\UserReadHistory;


class ViewComicsController extends Controller
{
    use \AppBundle\Helper\ControllerHelper;

    /**
     * @Route("/updateview/{user_id}/{comic_id}", name="update_view")
     * @Method("POST")
     */

    public function createAction(Request $request, $user_id,$comic_id)
    {


        $em = $this->getDoctrine()->getManager();

        $readHistory = new UserReadHistory();
        $readHistory->setUserId($user_id);
        $readHistory->setComicId($comic_id);
        $readHistory->setCreatedAt(date('Y-m-d H:i:s'));

        $em->persist($readHistory);

        $em->flush();

        $response = new Response($this->serialize(['success' => 'true']), Response::HTTP_CREATED);

        return $this->setBaseHeaders($response);
    }

    /**
     * @Route("/getreadhistory/{user_id}", name="getreadhistory")
     * @Method("POST")
     */
 
    public function listAction(Request $request, $user_id )
    {
        $readhistory = $this->getDoctrine()->getRepository('AppBundle:UserReadHistory')->findBy( array('user_id' => $user_id));
        $response = new Response($this->serialize(['readhistory' => $readhistory]), Response::HTTP_OK);

        return $this->setBaseHeaders($response);
    }

}
