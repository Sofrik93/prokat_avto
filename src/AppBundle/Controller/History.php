<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Procat_info;
use AppBundle\Repository\Procat_infoRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\DBAL\DriverManager;


class History extends Controller
{

    /**
     * @Route("/history", name="history")
     */
    public function  historyAction ()
    {
        $history=$this->getDoctrine()->getRepository('AppBundle:Procat_info')->findAll(); //Ищем все данные в репозетроии

        return $this->render('@App/default/history.html.twig', ['history'=>$history]);//Передаем данные в представление
    }


    /**
     * @Route("/history/{id}", name="history_prokat", requirements={"id": "[0-9]+"})
     */
    public function  testingAction ($id)
    {
        $history_prokat=$this->getDoctrine()->getRepository('AppBundle:Procat_info')->find($id); //Ищем данные по id
        return $this->render('@App/default/history_show.html.twig', ['history'=>$history_prokat]); // Передаем данные в представление

    }







}