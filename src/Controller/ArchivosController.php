<?php

namespace App\Controller;

use App\Entity\Archivos;
use App\Entity\Usuarios;
use App\Form\ArchivosType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class ArchivosController extends AbstractController
{
    /**
     * @Route("/nuevo", name="nuevo")
     */
    public function index(Request $request)
    {
        $archivo = new Archivos();
        $form = $this->createForm(ArchivosType::class,$archivo);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('nombre')->getData();
            if ($file) {
                $size = filesize($file);
                $mb = $size/1048576;
                $usuario = $this->getUser();
                $almacenamientoActual = $usuario->getAlmacenamiento();
                if($almacenamientoActual == 5000 || $mb+$almacenamientoActual >= 5000){
                    return $this->render('panel/index.html.twig');
                }
                else{
                    try {
                        $file->move(
                            'uploads/archivos',
                            $file->getClientOriginalName()
                        );
                    } catch (FileException $e) {
                        // handle exception..
                    }
                    $archivo->setNombre($file->getClientOriginalName());
                    $archivo->setSize($mb);
                    $usuario->setAlmacenamiento($almacenamientoActual+$mb);
                    $archivo->setUsuario($usuario);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($archivo);
                    $em->flush();
                    return $this->redirectToRoute('panel');
                }
            }
        }
        return $this->render('archivos/index.html.twig', [
            'formulario' => $form->createView()
        ]);
    }
}
