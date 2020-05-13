<?php

namespace App\Repository;

use App\Entity\Archivos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Archivos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Archivos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Archivos[]    findAll()
 * @method Archivos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArchivosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Archivos::class);
    }

    public function buscarArchivos(){
        return $this->getEntityManager()
            ->createQuery('
            SELECT archivos.nombre, archivos.size, archivos.fecha
            FROM App:Archivos archivos
            ');
    }

    public function eliminaArchivos($usuario_id){
        return $this->getEntityManager()
            ->createQuery('
            DELETE FROM App:Archivos a
            WHERE a.usuario = :usuario')->setParameter('usuario',$usuario_id)->getResult();
    }

    // /**
    //  * @return Archivos[] Returns an array of Archivos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Archivos
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
