<?php

namespace Massil\MedicalBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * salleAttenteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SalleAttenteRepository extends EntityRepository
{
	public function getPatients()
	{
		$query=$this->createQueryBuilder('s')
					->leftJoin('s.patientSalleAttentes', 'ps')
					->addSelect('ps')
					->leftJoin('ps.patient', 'p')
					->addSelect('p')
					->getQuery()
					->getResult();
					
		return $query;
	}
	
	public function getSalleAttente()
	{
		$today = new \DateTime();
		$today = $today->format('Y-m-d');
		
		$query=$this->createQueryBuilder('s')
					->where('s.date = :day')
					->setParameter(':day', $today)
					;
					
		return $query->getQuery()
					->getResult();
	}
}
