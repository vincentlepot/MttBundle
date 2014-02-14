<?php

namespace CanalTP\MethBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TimetableRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TimetableRepository extends EntityRepository
{
    /*
     * @function init timetable object, if not found in dbb create a non persistent yet entity
     */
    public function getTimetableByRouteExternalId($externalRouteId)
    {
        $timetable = $this->findOneByExternalRouteId($externalRouteId);
        // not found then insert it
        if (empty($timetable))
        {
            $timetable = new Timetable();
            $timetable->setExternalRouteId($externalRouteId);
            $this->getEntityManager()->persist($timetable);
            $this->getEntityManager()->flush();
        }
        return $timetable;
    }
}
