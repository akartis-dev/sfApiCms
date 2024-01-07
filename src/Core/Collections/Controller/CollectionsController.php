<?php
/**
 * @author <akartis-dev>
 */

namespace App\Core\Collections\Controller;

use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/core/collections')]
#[OA\Tag('Collections')]
class CollectionsController extends AbstractController
{
    /**
     * Get all collections
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[Route('/', name: "collection_find_all", methods: Request::METHOD_GET)]
    public function findAll()
    {
        return $this->json(['status' => Response::HTTP_OK, 'data' => "Test collection"]);
    }

    /**
     * Create a new collection
     *
     * @return void
     */
    #[Route('/', name: "collection_create", methods: Request::METHOD_POST)]
    public function create()
    {
    }
}
