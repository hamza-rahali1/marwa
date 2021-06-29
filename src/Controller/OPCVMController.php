<?php

namespace App\Controller;

use App\Entity\OPCVM;
use App\Form\OPCVMType;
use App\Entity\OPCVMSearch;
use App\Form\OPCVMSearchType;
use App\Repository\OPCVMRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/opcvm")
 */
class OPCVMController extends AbstractController
{
    /**
     * @Route("/", name="o_p_c_v_m_index", methods={"GET"})
     */
    public function index(OPCVMRepository $oPCVMRepository,  Request $request): Response
    {
        
        $search = new OPCVMSearch();
        $form = $this->createForm(OPCVMSearchType::class,$search);
        $form->handleRequest($request);

        return $this->render('opcvm/index.html.twig', [
            'o_p_c_v_ms' => $oPCVMRepository->findAllVisibleQuery($search),
            'form'  => $form->createView()
        ]);
    }

    /**
     * @Route("/new", name="o_p_c_v_m_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $oPCVM = new OPCVM();
        $form = $this->createForm(OPCVMType::class, $oPCVM);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($oPCVM);
            $entityManager->flush();

            return $this->redirectToRoute('o_p_c_v_m_index');
        }

        return $this->render('opcvm/new.html.twig', [
            'o_p_c_v_m' => $oPCVM,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="o_p_c_v_m_show", methods={"GET"})
     */
    public function show(OPCVM $oPCVM): Response
    {
        return $this->render('opcvm/show.html.twig', [
            'o_p_c_v_m' => $oPCVM,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="o_p_c_v_m_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, OPCVM $oPCVM): Response
    {
        $form = $this->createForm(OPCVMType::class, $oPCVM);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('o_p_c_v_m_index');
        }

        return $this->render('opcvm/edit.html.twig', [
            'o_p_c_v_m' => $oPCVM,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="o_p_c_v_m_delete", methods={"POST"})
     */
    public function delete(Request $request, OPCVM $oPCVM): Response
    {
        if ($this->isCsrfTokenValid('delete'.$oPCVM->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($oPCVM);
            $entityManager->flush();
        }

        return $this->redirectToRoute('o_p_c_v_m_index');
    }
}
