<?php

namespace App\Controller;

use App\Entity\Archivos;
use App\Entity\Usuarios;
use App\Form\ArchivosType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ArchivosController extends AbstractController
{
    /**
     * @Route("/nuevo", name="nuevo")
     * @throws \Exception
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
                //Almaceno la información en Kilobytes
                $kb = $size/1024;
                //Genero un número aleatorio para que ningún archivo se repita
                $aleatorio = mt_rand(0,30000);
                $usuario = $this->getUser();
                $nombre_usuario = $usuario->getUsername();
                $almacenamientoActual = $usuario->getAlmacenamiento();
                if($almacenamientoActual == 5242880 || $kb+$almacenamientoActual >= 5242880){
                    throw new \Exception("No puedes subir más archivos");
                }
                else{
                    try {

                        $file->move(

                            'uploads/archivos/'.$nombre_usuario,
                            $aleatorio.'-'.$file->getClientOriginalName()
                        );
                    } catch (FileException $e) {
                        throw new \Exception("No se ha podido guardar el archivo");
                    }
                    $archivo->setNombre( $aleatorio.'-'.$file->getClientOriginalName());
                    $archivo->setSize($kb);
                    $usuario->setAlmacenamiento($almacenamientoActual+$kb);
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

    /**
     * @Route("/editar", options={"expose"=true}, name="editar")
     */
    public function editar(Request $request){
        if ($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            $usuario = $this->getUser();
            $nombre_usuario = $usuario->getUsername();
            $new_nombre = $request->request->get('nombre');
            $id = $request->request->get('id');
            $archivo = $em->getRepository(Archivos::class)->find($id);
            $nombre = $archivo->getNombre();
            $archivo->setNombre($new_nombre);
            $archivo->setFecha(new \DateTime());
            rename("C:/xampp/htdocs/proyecto/public/uploads/archivos/$nombre_usuario/$nombre","C:/xampp/htdocs/proyecto/public/uploads/archivos/$nombre_usuario/$new_nombre");
            $em->persist($archivo);
            $em->flush();
            return new JsonResponse(['nombre'=> $nombre]);
        }
        else{
            throw new \Exception("No puedes editar este archivo");
        }
    }

    /**
     * @Route("/borrar", options={"expose"=true}, name="borrar")
     */
    public function borrar(Request $request){
        if ($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            $id = $request->request->get('id');
            $archivo = $em->getRepository(Archivos::class)->find($id);
            $nombre = $archivo->getNombre();
            $size = $archivo->getSize();
            $usuario = $this->getUser();
            $nombre_usuario = $usuario->getUsername();
            $almacenamiento = $usuario->getAlmacenamiento();
            $em->remove($archivo);
            unlink("C:/xampp/htdocs/proyecto/public/uploads/archivos/$nombre_usuario/$nombre");
            $usuario-> setAlmacenamiento($almacenamiento-$size);
            $em->flush();
            return new JsonResponse(['id'=> $id]);
        }
        else{
            throw new \Exception("No puedes borrar este archivo");
        }
    }
}
