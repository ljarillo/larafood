<?php

namespace App\Repositories\Contracts;

interface EvaluationRepositoryInterface
{
    /**
     * @param int $idOrder
     * @param int $idClient
     * @return mixed
     */
    public function newEvaluationOrder(int $idOrder, int $idClient);

    /**
     * @param int $idOrder
     * @return mixed
     */
    public function getEvaluationsByOrder(int $idOrder);

    /**
     * @param int $idClient
     * @return mixed
     */
    public function getEvaluationsByClient(int $idClient);

}
