<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\DTOs\BaseStationDTO;
use App\Entities\BaseStation;
//use Illuminate\Routing\Controller;
use App\Factories\BaseStationFactory;
use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Internal\Hydration\ObjectHydrator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use LaravelDoctrine\ORM\Facades\EntityManager;

class BaseStationController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(
        protected EntityManagerInterface $em,
        protected BaseStationFactory $factory
    ){}

    public function test(): string
    {
        $bs = $this->factory->build(new BaseStationDTO(name: 'desyatka'));
        //$r = $this->em->getRepository(BaseStation::class);
        //$b = $r->find(1);
        //$bb = $this->em->find(BaseStation::class, 1);
        //$this->em->persist($bs);
        //$this->em->flush();
        //$this->em->
        //var_dump($bs->validate());
        return '';
    }

    /**
     * BS info page
     *
     */
    public function show(int $id): Response
    {
        return Inertia::render('BaseStation/Info', [
            'baseStation' => $id,
        ]);
    }

    /**
     * BS list page
     *
     */
    public function list(): Response
    {
        $repository = $this->em->getRepository(BaseStation::class);
        /** @var BaseStation[] $baseStations */
        //$baseStations = $repository->findAll();

        $baseStations = $this->em->createQueryBuilder()
            ->select('b')
            ->from(BaseStation::class, 'b')
            ->getQuery()
            ->getResult(AbstractQuery::HYDRATE_ARRAY);

        return Inertia::render('BaseStation/List',[
            'baseStations' => $baseStations,
        ]);
    }
}
