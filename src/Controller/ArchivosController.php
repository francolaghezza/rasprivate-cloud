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
                //Si el archivo pesa menos de 32 MB
                if ($kb <= 32768){
                    $file_name_with_full_path = realpath($file);
                    $api = '33264c168c4ceff990454fe7e562197da87a63e8feb68dbb3f1e06ed9e13f4bd';
                    $api_key = getenv('VT_API_KEY') ? getenv('VT_API_KEY') : $api;
                    $cfile = curl_file_create($file_name_with_full_path);
                    $post = array('apikey' => $api_key,'file'=> $cfile);
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'https://www.virustotal.com/vtapi/v2/file/scan');
                    curl_setopt($ch, CURLOPT_POST, True);
                    curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate'); // please compress data
                    curl_setopt($ch, CURLOPT_USERAGENT, "gzip, My php curl client");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER ,True);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                    $result=curl_exec ($ch);
                    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                    if ($status_code == 200) {
                        $js = json_decode($result, true);
                        $recurso = $js['resource'];
                        $post = array('apikey' => $api,'resource'=> $recurso);
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, 'https://www.virustotal.com/vtapi/v2/file/report');
                        curl_setopt($ch, CURLOPT_POST,1);
                        curl_setopt($ch, CURLOPT_VERBOSE, 1); // remove this if your not debugging
                        curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate'); // please compress data
                        curl_setopt($ch, CURLOPT_USERAGENT, "gzip, My php curl client");
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER ,true);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                        $result=curl_exec ($ch);
                        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                        if ($status_code == 200) { // OK
                            $js = json_decode($result, true);

                            //Antivirus que han detectado un virus
                            $respuesta = $js['positives'];

                            if ($respuesta == 0){ //Sin virus

                                $usuario = $this->getUser();
                                $nombre_usuario = $usuario->getUsername();
                                $almacenamientoActual = $usuario->getAlmacenamiento();
                                if($almacenamientoActual == 5242880 || $kb+$almacenamientoActual >= 5242880){
                                    $this->addFlash(
                                        'error_almacenamiento',
                                        'El archivo es demasiado grande para su espacio de almacenamiento'
                                    );
                                    return $this->redirectToRoute('nuevo');
                                }
                                else{
                                    try {
                                        $file->move(
                                            'uploads/archivos/'.$nombre_usuario,
                                            $aleatorio.'-'.$file->getClientOriginalName()
                                        );
                                    } catch (FileException $e) {
                                        $this->addFlash(
                                            'error_0',
                                            'No se ha podido subir el archivo'
                                        );
                                        return $this->redirectToRoute('nuevo');
                                    }
                                    $archivo->setNombre( $aleatorio.'-'.$file->getClientOriginalName());
                                    $archivo->setSize($kb);
                                    $usuario->setAlmacenamiento($almacenamientoActual+$kb);
                                    $archivo->setUsuario($usuario);
                                    $em = $this->getDoctrine()->getManager();
                                    $em->persist($archivo);
                                    $em->flush();
                                    $this->addFlash(
                                        'exito',
                                        $aleatorio.'-'.$file->getClientOriginalName().' se ha subido correctamente'
                                    );
                                    return $this->redirectToRoute('panel');
                                 }
                            }
                            else{ //Con virus
                                $this->addFlash(
                                    'error_malware',
                                    'Se ha detectado un archivo malicioso'
                                );
                                return $this->redirectToRoute('nuevo');

                            }
                        } else {
                            $this->addFlash(
                                'error_1',
                                'No se ha podido escanear el archivo en busca de virus'
                            );
                            return $this->redirectToRoute('nuevo');
                        }

                    } else {
                        $this->addFlash(
                            'error_2',
                            'Ha ocurrido un error'
                        );
                        return $this->redirectToRoute('nuevo');
                    }
                    curl_close ($ch);
                }
                //El archivo pesa más de 32 MB y menos de 5GB
                elseif($kb > 32769 && $kb <= 5242880){
                    $usuario = $this->getUser();
                    $nombre_usuario = $usuario->getUsername();
                    $almacenamientoActual = $usuario->getAlmacenamiento();
                    if($almacenamientoActual == 5242880 || $kb+$almacenamientoActual >= 5242880){
                        $this->addFlash(
                            'error_almacenamiento',
                            'El archivo es demasiado grande para su espacio de almacenamiento'
                        );
                        return $this->redirectToRoute('nuevo');
                    }
                    else{
                        try {
                            $file->move(
                                'uploads/archivos/'.$nombre_usuario,
                                $aleatorio.'-'.$file->getClientOriginalName()
                            );
                        } catch (FileException $e) {
                            $this->addFlash(
                                'error_3',
                                'No se ha podido subir el archivo'
                            );
                            return $this->redirectToRoute('nuevo');
                        }
                        $archivo->setNombre( $aleatorio.'-'.$file->getClientOriginalName());
                        $archivo->setSize($kb);
                        $usuario->setAlmacenamiento($almacenamientoActual+$kb);
                        $archivo->setUsuario($usuario);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($archivo);
                        $em->flush();
                        $this->addFlash(
                            'exito',
                            $aleatorio.'-'.$file->getClientOriginalName().' se ha subido correctamente'
                        );
                        return $this->redirectToRoute('panel');
                    }
                }
                //El archivo pesa más de 5GB
                else{
                    $this->addFlash(
                        'error_size',
                        'El archivo es demasiado grande'
                    );
                    return $this->redirectToRoute('nuevo');
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
            rename("uploads/archivos/$nombre_usuario/$nombre","uploads/archivos/$nombre_usuario/$new_nombre");
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
            unlink("uploads/archivos/$nombre_usuario/$nombre");
            $usuario-> setAlmacenamiento($almacenamiento-$size);
            $em->flush();
            return new JsonResponse(['id'=> $id]);
        }
        else{
            throw new \Exception("No puedes borrar este archivo");
        }
    }

    /**
     * @Route("/comprimir", options={"expose"=true}, name="comprimir")
     */
    public function comprimir(Request $request){
        if ($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            $usuario = $this->getUser();
            $id = $request->request->get('id');
            $archivo = $em->getRepository(Archivos::class)->find($id);
            $nombre = $archivo->getNombre();
            $nombre_usuario = $usuario->getUsername();
            $ext =  substr($nombre, -3);
            $nombre_archivo = substr($nombre,0,-5);
            $archivo_zip = $nombre_archivo.".zip";
            $ext_comprimido = array("cbr","jar","pit","rar","jar","tgz","dl_",'bz2','cbz','war',"zip",'z01');

            //Si el archivo ya está comprimido
            if (in_array($ext,$ext_comprimido)){
                $this->addFlash(
                        'error_zip',
                        'El archivo ya está comprimido'
                );
                return new JsonResponse(['id'=> $id]);
            }
            else{
                $zip = new \ZipArchive();
                $zip->open("uploads/archivos/$nombre_usuario/$archivo_zip",\ZipArchive::CREATE);
                $zip->addFile("uploads/archivos/$nombre_usuario/$nombre","$nombre");
                set_time_limit(300);
                $zip->close();
                $archivo->setNombre($archivo_zip);
                $archivo->setFecha(new \DateTime());
                $old_size = filesize("uploads/archivos/$nombre_usuario/$nombre");
                $old_kb = $old_size/1024;
                unlink("uploads/archivos/$nombre_usuario/$nombre");
                $almacenamiento = $usuario->getAlmacenamiento();
                $usuario-> setAlmacenamiento($almacenamiento-$old_kb);
                $new_size = filesize("uploads/archivos/$nombre_usuario/$archivo_zip");
                $kb = $new_size/1024;
                $archivo->setSize($kb);
                $almacenamiento = $usuario->getAlmacenamiento();
                $usuario-> setAlmacenamiento($almacenamiento+$kb);
                $em->flush();
                return new JsonResponse(['id'=> $id]);
            }
        }
        else{
            throw new \Exception("No puedes borrar este archivo");
        }

    }

}