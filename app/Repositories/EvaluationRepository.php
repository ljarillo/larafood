<?php

namespace App\Repositories;

use App\Models\Evaluation;
use App\Repositories\Contracts\EvaluationRepositoryInterface;

class EvaluationRepository implements EvaluationRepositoryInterface
{
    protected $entity;

    public function __construct(Evaluation $evaluation)
    {
        $this->entity = $evaluation;
    }

    public function newEvaluationOrder(int $idOrder, int $idClient, array $evaluation)
    {
        $data = [
            'client_id' => $idClient,
            'order_id' => $idOrder,
            'stars' => $evaluation['stars'],
            'comment' => $evaluation['comment'] ?? ''
        ];

        return $this->entity->create($data);
    }

    public function getEvaluationsByOrder(int $idOrder)
    {
        return $this->entity->where('order_id', $idOrder)->get();
    }

    public function getEvaluationsByClient(int $idClient)
    {
        return $this->entity->where('client_id', $idClient)->get();
    }

    public function getEvaluationById(int $idEvaluation)
    {
        return $this->entity->find($idEvaluation);
    }

    public function getEvaluationByClientIdByOrderId(int $idClient, int $idOrder)
    {
        return $this->entity
            ->where('client_id', $idClient)
            ->where('order_id', $idOrder)
            ->first();
    }
}
