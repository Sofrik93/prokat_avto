<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form=$this->createForm('AppBundle\Form\Procat_infoType');
        $form->add('Отправить', SubmitType::class);
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid())
        {
            $prokat= $form->getData();
            $em= $this->getDoctrine()->getManager();


            $em->persist($prokat);
            $em->flush();


            $this->addFlash('success', 'Заброниравно');

            return $this->redirectToRoute('homepage');


        }



        return $this->render('@App/default/index.html.twig', ['prokat_form'=>$form->createView()]);


    }

    /**
     * @Route("/", name="ajax")
     */
    public function ajaxAction(Request $request) {
        $ajax_form = $this->getDoctrine()
            ->getRepository('AppBundle:Procat_info')
            ->findAll();

        if ($request->isXmlHttpRequest() || $request->query->get('showJson') == 1) {
            $jsonData = array();
            $idx = 0;
            foreach($ajax_form as $data) {
                $temp = array(
                    'markaAvto' => $data->getMarkaAvto(),
                    'modelAvto' => $data->getModelAvto(),
                );
                $jsonData[$idx++] = $temp;
            }
            return new JsonResponse($jsonData);
        } else {
            return $this->render('@App/default/index.html.twig', ['data'=>$data]);
        }
    }


}
