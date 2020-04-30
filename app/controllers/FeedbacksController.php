<?php

declare(strict_types=1);

class FeedbacksController extends ControllerBase
{

    public function indexAction()
    {
        $phql = "SELECT * FROM Feedbacks";

        $records = $this->modelsManager->executeQuery($phql);
        $this->view->setVar('records', $records);

        $this->view->pick('dashboard/feedbacks/index');
    }

    public function createAction()
    {
        $request = $this->request->getPost();

        $new_feedbacks = new Feedbacks();
        $new_feedbacks->name = $request['name'];
        $new_feedbacks->email = $request['email'];
        $new_feedbacks->phone = $request['phone'];
        $new_feedbacks->content = $request['content'];
        $success = $new_feedbacks->save();

        // if ($success) {
        //     alert('New comment successfully added');
        // } else {
        //     alert('Failed to add new comment');
        // }
        $this->response->redirect('/contact');
    }

    public function deleteAction()
    {
        $id = $this->dispatcher->getParam('id');

        $phql = "DELETE FROM Feedbacks WHERE id = :id:";
        $record = $this->modelsManager->executeQuery($phql, ['id' => $id]);

        if ($record) {
            $this->flashSession->success('Feedback successfully deleted');
        } else {
            $this->flashSession->error('Failed to delete feedback');
        }
        $this->response->redirect('/dashboard/feedbacks');
    }
}
