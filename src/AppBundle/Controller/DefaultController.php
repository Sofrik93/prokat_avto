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

        $form=$this->createForm('AppBundle\Form\Procat_infoType'); //Создание формы, используя данные из сущности Entity-Procat_info
        $form->add('Отправить', SubmitType::class); //Добавляем кнопку Отправить
        $form->handleRequest($request); //Обработка формы с помощью метода handRequest


        if($form->isSubmitted() && $form->isValid()) //Если кнопка отправить и поля введены вверно
        {
            $prokat= $form->getData(); //Помещаем данные в переменную
            $em= $this->getDoctrine()->getManager(); //Подключаем менеджера Doctrine


            $em->persist($prokat); //Обрабатываем данные в переменной
            $em->flush(); //Заносим данные в базу


            $this->addFlash('success', 'Заброниравно'); //Выводим сообщение об успешной брони


            return $this->redirectToRoute('homepage'); //После отправки формы, возращаем на страницу


        }



        return $this->render('@App/default/index.html.twig', ['prokat_form'=>$form->createView()]); //Передаем в представление данные из переменной


    }


}
