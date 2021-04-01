<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

// class DefaultController {
class DefaultController extends AbstractController {

    public function index() {
        return new Response('Hello!');

// отправить содержание файла и заставить браузер скачать его
//        return $this->file('/path/to/some_file.pdf');
//        
//        // загрузить файл из файловой системы
//        $file = new File('/path/to/some_file.pdf');
//
//        return $this->file($file);
//
//        // переименовать скачанный файл
//        return $this->file($file, 'custom_name.pdf');
//
//        // отобразить содержание файла в браузере вместо скачивания
//        return $this->file('invoice_3241.pdf', 'my_invoice.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
    }

    // #//[Route('/api/{page<\d+>}', name: 'name_api_v1')]

    /**
     * @Route("/zapi_v1/{page}/{page2}/", name="blog_list", requirements={"page"="\d+"})
     */
    public function api_v1($page) {
        return $this->json(['username' => 'jane.doe']);
//        return new Response('Hello '.$page.' !');
    }

    /**
     * @Route("/test_api_json/{page}/{page2}/", name="blog_list", requirements={"page"="\d+"})
     */
    public function test_api_json($page) {
        return $this->json(['username' => 'test_api_json']);
    }    
    
    public function hello($name) {
//        return new Response('Hello ' . $name . ' !');
        return $this->render('base.html.twig', [
                    'name' => $name,
        ]);
    }

    public function contact() {

        return $this->render('pages/contact.html.twig', [
                    'name' => $name ?? 'x',
        ]);

        // return new Response('contact !');
    }

}
