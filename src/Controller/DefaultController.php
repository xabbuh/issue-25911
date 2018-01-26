<?php
/**
 * First interaction with Symfony's 4
 *
 * @author José Jaime Ramírez Calvo <jaime@osmos.mx>
 * @version 0.1
 * @date 2018-01-22
 */

namespace App\Controller;


use Doctrine\ORM\EntityManager;
use App\Report\AbstractReport;
use App\Report\AccoutingAccountReport;
use App\Repository\PaysheetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Util\HttpUtil;

/**
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController extends Controller
{
    /**
 * @Route("/index.{_format}", methods={"GET"}, defaults={"_format": "json"})
 * @return JsonResponse
 * @throws \Exception
 */
    public function isHereAction()
    {
        return $this->json([
            "here"  => "here",
        ]);
    }

    /**
     * @Route("/report/{paysheet}")
     *
     * @param $paysheet
     * @return JsonResponse
     */
    public function accoutingAccountReport($paysheet)
    {
        return new JsonResponse(['foo' => 'bar']);
    }
}
