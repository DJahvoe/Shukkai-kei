<?php

declare(strict_types=1);

class DashboardController extends ControllerBase
{

    public function indexAction()
    {
        $posts_phql = "SELECT * FROM Posts";
        $users_phql = "SELECT * FROM Users";
        $comments_phql = "SELECT * FROM Comments";
        $feedbacks_phql = "SELECT * FROM Feedbacks";


        $posts = $this->modelsManager->executeQuery($posts_phql);
        $users = $this->modelsManager->executeQuery($users_phql);
        $comments = $this->modelsManager->executeQuery($comments_phql);
        $feedbacks = $this->modelsManager->executeQuery($feedbacks_phql);

        $this->view->setVar('posts', $posts);
        $this->view->setVar('users', $users);
        $this->view->setVar('comments', $comments);
        $this->view->setVar('feedbacks', $feedbacks);
    }


    public function commentsAction()
    {
    }

    public function feedbacksAction()
    {
    }

    public function changelogsAction()
    {
    }
}
