<?php

namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SoftUniBlogBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    /**
     * @Route("/category/{id}/articles", name="articles_in_category")
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($id)
    {
        $category = $this->getDoctrine()->getRepository(Category::class)->find($id);

        return $this->render("category/articles.html.twig", ['category' => $category]);
    }
}
