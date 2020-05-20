<?php

namespace App\Repository;

use App\Entity\Usuarios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method Usuarios|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usuarios|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usuarios[]    findAll()
 * @method Usuarios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuariosRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Usuarios::class);
    }
    public function almacenamiento($usuario){

       return $this->getEntityManager()
            ->createQuery('
            SELECT u.almacenamiento
            FROM App:Usuarios u
            WHERE u.id = :id')->setParameter('id',$usuario)->getResult();
    }

    public function email($email){
        return $this->getEntityManager()
            ->createQuery('
            SELECT u.email
            FROM App:Usuarios u
            WHERE u.email = :email')->setParameter('email',$email)->getResult();
    }

    public function usuario($nombre_usuario){
        return $this->getEntityManager()
            ->createQuery('
            SELECT u.usuario
            FROM App:Usuarios u
            WHERE u.usuario = :usuario')->setParameter('usuario',$nombre_usuario)->getResult();
    }

    public function setToken($nombre_usuario,$token){
        return $this->getEntityManager()
            ->createQuery('
            UPDATE App:Usuarios u
            SET u.token = :token
            WHERE u.usuario = :usuario')->setParameters(array("usuario" => $nombre_usuario,"token" => $token))->getResult();
    }

    public function getToken($token){
        return $this->getEntityManager()
            ->createQuery('
            SELECT u.usuario
            FROM App:Usuarios u
            WHERE u.token = :token')->setParameter('token',$token)->getResult();
    }

    public function setPass($nombre_usuario,$hash){
        return $this->getEntityManager()
            ->createQuery('
            UPDATE App:Usuarios u
            SET u.password = :hash
            WHERE u.usuario = :usuario')->setParameters(array("usuario" => $nombre_usuario,"hash" => $hash))->getResult();
    }

    public function obtenUsuario($direccion_email){
        return $this->getEntityManager()
            ->createQuery('
            SELECT u.usuario
            FROM App:Usuarios u
            WHERE u.email = :email')->setParameter('email',$direccion_email)->getResult();
    }

    public function eliminaUsuario($nombre_usuario){
        return $this->getEntityManager()
            ->createQuery('
            DELETE FROM App:Usuarios u
            WHERE u.usuario = :usuario')->setParameter('usuario',$nombre_usuario)->getResult();
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof Usuarios) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    // /**
    //  * @return Usuarios[] Returns an array of Usuarios objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Usuarios
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
