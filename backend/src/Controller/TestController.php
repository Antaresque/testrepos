<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TestController{
    public function randomtest(){
        return mt_rand(0, 100);
    }

    /**
     * @Route("api/test/")
     */
    public function number(){
        for($i = 0; $i < 10; $i++) $response[] = $this->randomtest();

        return new Response(
            json_encode($response)
        );
    }
}