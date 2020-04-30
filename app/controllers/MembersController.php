<?php

declare(strict_types=1);

class MembersController extends ControllerBase
{

    public function indexAction()
    {
        $phql = "SELECT * FROM Users";

        $records = $this->modelsManager->executeQuery($phql);
        $this->view->setVar('records', $records);

        $this->view->pick('dashboard/members/index');
    }

    public function updateAction()
    {
        $id = $this->dispatcher->getParam('id');

        $phql = "SELECT * FROM Users WHERE id = :id:";

        $records = $this->modelsManager->executeQuery($phql, ['id' => $id]);

        $update_phql = "UPDATE Users SET active = :active: WHERE id = :id:";

        $new_status = 0;
        if ($records[0]->active == 1) {
            $new_status = 0;
        } else {
            $new_status = 1;
        }

        $success = $this->modelsManager->executeQuery($update_phql, [
            'active' => $new_status,
            'id' => $id
        ]);

        if ($success) {
            $this->flashSession->success("Member's status successfully updated");
        } else {
            $this->flashSession->error("Failed to update member's status");
        }

        $this->response->redirect('/dashboard/members');
    }
}
