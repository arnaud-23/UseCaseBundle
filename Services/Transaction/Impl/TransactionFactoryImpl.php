<?php

namespace OpenClassrooms\Bundle\CleanArchitectureBundle\Services\Transaction\Impl;

use Doctrine\ORM\EntityManager;
use OpenClassrooms\Bundle\CleanArchitectureBundle\Services\Transaction\TransactionFactory;

/**
 * @author Romain Kuzniak <romain.kuzniak@openclassrooms.com>
 */
class TransactionFactoryImpl implements TransactionFactory
{
    /**
     * @return TransactionEntityManagerAdapter
     */
    public function createEntityManagerTransaction(EntityManager $entityManager)
    {
        return new TransactionEntityManagerAdapter($entityManager);
    }
}
