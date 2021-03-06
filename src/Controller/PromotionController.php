<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Repository\PromotionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/promotion')]
class PromotionController extends AbstractController
{
    #[Route('/', name: 'promotion_index', methods: ['GET'])]
    public function index(PromotionRepository $promotionRepository): Response
    {
        return $this->render('promotion/index.html.twig', [
            'promotions' => $promotionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'promotion_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $promotion = new Promotion();
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($promotion);
            $entityManager->flush();

            return $this->redirectToRoute('promotion_index');
        }

        return $this->render('promotion/new.html.twig', [
            'promotion' => $promotion,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'promotion_show', methods: ['GET'])]
    public function show(Promotion $promotion): Response
    {
        return $this->render('promotion/show.html.twig', [
            'promotion' => $promotion,
        ]);
    }

    #[Route('/{id}/edit', name: 'promotion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Promotion $promotion): Response
    {
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('promotion_index');
        }

        return $this->render('promotion/edit.html.twig', [
            'promotion' => $promotion,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'promotion_delete', methods: ['POST'])]
    public function delete(Request $request, Promotion $promotion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$promotion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($promotion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('promotion_index');
    }
   

    #[Route('/checkFlash', name: "checkFlash_api", methods: ["POST"])]
   public function checkFlash(Request $request)
   {
       $id = $request->query->get('id');
       $repository = $this->getDoctrine()->getRepository(Flash::class);
       $flash = $repository->findOneBy(array('id' => $id));
       if (!empty($flash)){
      $response = array(
        "code" => 0,
        "id" => $flush.getId(),
        "iscoupon" => $flush.getCoupon(),
        "errors" => null,
        
     );
     return new JsonResponse($response, Response::HTTP_OK);
           }
   else{
 $response = array(
        "code" => 1,
        "id" => $flush.getId(),
        "errors" => 'sorry ,id not found',
        
     );
     return new JsonResponse($response, Response::HTTP_NOT_FOUND);
   }
   }
}
