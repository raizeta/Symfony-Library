<?php

namespace EntitasBundle\Repositories;

/**
 * DendaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FosStrukorgRepository extends \Doctrine\ORM\EntityRepository
{
        public function findAllArray()
        {
			$query = $this->getEntityManager()
			        		->createQuery('
			        						SELECT mt.id as key,mt.namaJabatan as title,
			        						(CASE WHEN c.id IS NULL THEN 0 ELSE c.id END) as parent,
			        						prof.namaLengkap as name,prof.imageName as gambar,
			        						prof.id as profileid
			        						FROM EntitasBundle:FosStrukorg mt
			        						LEFT JOIN mt.parentJabatan c
			        						INNER JOIN mt.pjJabatan prof
										  ')
			        		->getArrayResult();
			return $query;            
        }
}