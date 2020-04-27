<?php

namespace App\Controller;
use App\Entity\Usuarios;
use App\Entity\Archivos;
use Knp\Component\Pager\PaginatorInterface;
use mysql_xdevapi\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
        $query2 = $em->getRepository(Usuarios::class)->almacenamiento($usuario);
        $paginacion = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1), /*Número de página*/
        10 /*Límite de registros por página*/
        );
        return $this->render('panel/index.html.twig',[
            'pagination' => $paginacion,
            'almacenamiento'=> $query2
        ]);
    }

    /**
     * @Route("/panel/editar", options={"expose"=true}, name="editar")
     */
    public function editar(Request $request){
        if ($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            $new_nombre = $request->request->get('nombre');
            $id = $request->request->get('id');
            $archivo = $em->getRepository(Archivos::class)->find($id);
            $nombre = $archivo->getNombre();
            $archivo->setNombre($new_nombre);
            $em->flush();
            return new JsonResponse(['nombre'=> $nombre]);
        }
        else{
            throw new \Exception("No puedes editar este archivo");
        }
    }
}
