<?php

namespace App\Controller;

use App\Entity\Archivos;
use App\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PerfilController extends AbstractController
{
    /**
     * @Route("/perfil", name="perfil")
     */
    public function index()
    {
        return $this->render('perfil/index.html.twig', [
            'controller_name' => 'PerfilController',
        ]);
    }

    /**
     * @Route("/email", options={"expose"=true}, name="email")
     */
    public function buscarEmail(Request $request){
        if ($request->isXmlHttpRequest()){
            $email = $request->request->get('email');
            $buscar = $this->getDoctrine()
                ->getRepository(Usuarios::class)
                ->email($email);
            if (!$buscar){
                return new JsonResponse(['email'=> $email]);
            }
            else{
                return new JsonResponse(['email'=> 0]);
            }
        }
        else{
            throw new \Exception("No puedes cambiar tu email");
        }
    }

    /**
     * @Route("/c_email", options={"expose"=true}, name="c_email")
     */
    public function cambiarEmail(Request $request){
        $email = $request->request->get('email');
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->getUser();
        $usuario->setEmail($email);
        $em->flush();
        return new JsonResponse(['email'=> $email]);
    }

    /**
     * @Route("/usuario", options={"expose"=true}, name="usuario")
     */
    public function buscarUsuario(Request $request){
        if ($request->isXmlHttpRequest()){
            $nombre_usuario = $request->request->get('usuario');
            $buscar = $this->getDoctrine()
                ->getRepository(Usuarios::class)
                ->usuario($nombre_usuario);
            if (!$buscar){
                return new JsonResponse(['usuario'=> $nombre_usuario]);
            }
            else{
                return new JsonResponse(['usuario'=> 0]);
            }
        }
        else{
            throw new \Exception("No puedes cambiar tu nombre de usuario");
        }
    }

    /**
     * @Route("/c_usuario", options={"expose"=true}, name="c_usuario")
     */
    public function cambiarUsuario(Request $request){
        $nombre_usuario = $request->request->get('usuario');
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->getUser();
        $oldname = $usuario->getUsername();
        $usuario->setUsuario($nombre_usuario);
        rename('uploads/archivos/'.$oldname,'uploads/archivos/'.$nombre_usuario);
        $em->flush();
        return new JsonResponse(['usuario'=> $nombre_usuario]);
    }

    /**
     * @Route("/pass", options={"expose"=true}, name="pass")
     */
    public function compruebaPass(Request $request){
        if ($request->isXmlHttpRequest()){
            $pass = $request->request->get('pass');
            $usuario = $this->getUser();
            $pass_usuario = $usuario->getPassword();
            if (password_verify($pass, $pass_usuario)) {
                return new JsonResponse(['pass'=> $pass]);
            }
            else{
                return new JsonResponse(['pass'=> 0]);
            }
        }
        else{
            throw new \Exception("No puedes cambiar tu contraseña");
        }
    }

    /**
     * @Route("/c_pass", options={"expose"=true}, name="c_pass")
     */
    public function cambiarPass(Request $request,UserPasswordEncoderInterface $encoder){
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->getUser();
        $pass = $request->request->get('pass');
        $encoded = $encoder->encodePassword($usuario, $pass);
        $usuario->setPassword($encoded);
        $em->flush();
        return new JsonResponse(['usuario'=> $encoded]);
    }

    /**
     * @Route("/e_user", options={"expose"=true}, name="e_user")
     */
    public function eliminarUsuario(Request $request){
        $em = $this->getDoctrine()->getManager();
        $usuario_id = $request->request->get('usuario_id');
        $nombre_usuario = $request->request->get('usuario');
        $this->getDoctrine()->getRepository(Archivos::class)->eliminaArchivos($usuario_id);
        $this->getDoctrine()->getRepository(Usuarios::class)->eliminaUsuario($nombre_usuario);
        $path = 'uploads/archivos/'.$nombre_usuario;
        function removeDirectory($path) {
            $files = glob($path . '/*');
            foreach ($files as $file) {
                is_dir($file) ? removeDirectory($file) : unlink($file);
            }
            rmdir($path);
            return;
        }
        removeDirectory($path);
        $em->flush();
        return new JsonResponse(['usuario'=> $nombre_usuario]);
    }

}
