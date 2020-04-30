<?php

declare(strict_types=1);

class BlogController extends ControllerBase
{

    public function indexAction()
    {
        $phql = "SELECT * FROM Posts WHERE active = 1";

        $records = $this->modelsManager->executeQuery($phql);
        $this->view->setVar('records', $records);
    }

    public function showAction()
    {
        $id = $this->dispatcher->getParam('id');

        $phql = "SELECT * FROM Posts WHERE id = :id: AND active = 1";

        $records = $this->modelsManager->executeQuery($phql, ['id' => $id]);

        $comment_phql = "SELECT * FROM Comments WHERE post_id = :id:";

        $comments = $this->modelsManager->executeQuery($comment_phql, ['id' => $id]);

        $this->view->setVar('records', $records);
        $this->view->setVar('comments', $comments);
    }
}
