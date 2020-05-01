<?php

namespace App\Controller;
use App\Entity\Usuarios;
use App\Entity\Archivos;
use Knp\Component\Pager\PaginatorInterface;
use mysql_xdevapi\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PanelController extends AbstractController
{
    /**
     * @Route("/panel", name="panel")
     */
    public function index(PaginatorInterface $paginator, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->getUser();
        $query = $em->getRepository(Archivos::class)->findBy(['usuario'=>$usuario]);
        $almacenamiento = $em->getRepository(Usuarios::class)->almacenamiento($usuario);
        $paginacion = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1), /*Número de página*/
        9 /*Límite de registros por página*/
        );
        return $this->render('panel/index.html.twig',[
            'pagination' => $paginacion,
            'almacenamiento'=> $almacenamiento
        ]);
    }
}
