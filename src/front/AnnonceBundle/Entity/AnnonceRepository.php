<?php

namespace front\AnnonceBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AnnonceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnnonceRepository extends EntityRepository
{

    public function filtre($page, $region, $ville, $categorie, $service, $search, $orderby, $desc)
    {
        $query = $this->createQueryBuilder('a');
        if ($service != 0)
        {
            $query->join("a.services", "s");
            $query->where('s.id=:service')->setParameter('service', $service);
        }
        elseif ($categorie != 0)
        {
            $query->join("a.services", "s");
            $query->where('s.Categorie=:categorie')->setParameter('categorie', $categorie);
        }
        $query->andWhere('a.etat=:abc')->setParameter('abc', 1);
        if ($region != 0)
            $query->andWhere('a.region = :region')->setParameter('region', $region);
        if ($ville != 0)
            $query->andWhere('a.ville = :ville')->setParameter('ville', $ville);
        if ($search != "_")
        {
            $query->andWhere(
                    $query->expr()->orX(
                            $query->expr()->like("a.titre", ":seach"), $query->expr()->like("a.texte", ":seach"), $query->expr()->like("a.prix", ":seach")
                    )
            )->setParameter('seach', '%' . $search . '%');
        }
        if ($orderby != "_")
        {

            $query->orderBy("a." . $orderby, $desc);
        }
        $offset = ($page - 1) * 20;
        $limit = $page * 20;
        $query->setFirstResult($offset);
        $query->setMaxResults($limit);
        return $query->getQuery()->getResult();
    }

    public function filtreCount($page, $region, $ville, $categorie, $service, $search, $orderby, $desc)
    {
        $query = $this->createQueryBuilder('a');
        if ($service != 0)
        {
            $query->join("a.services", "s");
            $query->where('s.id=:service')->setParameter('service', $service);
        }
        elseif ($categorie != 0)
        {
            $query->join("a.services", "s");
            $query->where('s.Categorie=:categorie')->setParameter('categorie', $categorie);
        }
        $query->andWhere('a.etat=:etat')->setParameter('etat', 1);
        if ($region != 0)
            $query->andWhere('a.region = :region')->setParameter('region', $region);
        if ($ville != 0)
            $query->andWhere('a.ville = :ville')->setParameter('ville', $ville);
        if ($search != "_")
        {
            $query->andWhere(
                    $query->expr()->orX(
                            $query->expr()->like("a.titre", ":seach"), $query->expr()->like("a.texte", ":seach"), $query->expr()->like("a.prix", ":seach")
                    )
            )->setParameter('seach', '%' . $search . '%');
        }
        return count($query->getQuery()->getResult());
    }

}
