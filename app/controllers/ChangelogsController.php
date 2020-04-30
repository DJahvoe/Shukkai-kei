<?php

// declare(strict_types=1);

class ChangelogsController extends ControllerBase
{

    public function indexAction()
    {
        $phql = "SELECT * FROM Changelogs";
        $records = $this->modelsManager->executeQuery($phql);
        $this->view->setVar('records', $records);

        $this->view->pick('dashboard/changelogs/index');
    }

    public function createAction()
    {
        $phql = "SELECT * FROM Posts";
        $posts = $this->modelsManager->executeQuery($phql);
        $this->view->setVar('posts', $posts);
        $this->view->pick('dashboard/changelogs/create');
    }

    public function storeAction()
    {
        $request = $this->request->getPost();

        $current_user = Users::findFirst([
            'conditions' => 'username = :username:',
            'bind' => [
                'username' => $this->session->get('auth')['username']

            ],
        ]);

        $new_changelogs = new Changelogs();
        $new_changelogs->username = $current_user->username;
        $new_changelogs->title = $request['title'];
        $new_changelogs->activated_pages = json_encode($request['activated_pages']);
        $success = $new_changelogs->save();


        if ($success) {
            $this->flashSession->success('New changelog successfully added');
        } else {
            $this->flashSession->error('Failed to add new changelog');
        }
        $this->response->redirect('/dashboard/changelogs');
    }

    public function editAction()
    {
        $id = $this->dispatcher->getParam('id');

        $phql = "SELECT * FROM Changelogs WHERE id = :id:";
        $record = $this->modelsManager->executeQuery($phql, ['id' => $id]);

        $phql = "SELECT * FROM Posts";
        $posts = $this->modelsManager->executeQuery($phql);

        $this->view->setVar('posts', $posts);
        $this->view->setVar('record', $record);
        // var_dump($record);
        $this->view->pick('dashboard/changelogs/edit');
    }

    public function updateAction()
    {
        $request = $this->request->getPost();

        $phql = "UPDATE Changelogs SET title = :title:, activated_pages = :activated_pages: WHERE id = :id:";
        $record = $this->modelsManager->executeQuery($phql, [
            'title' => $request['title'],
            'activated_pages' => json_encode($request['activated_pages']),
            'id' => $request['id']
        ]);

        if ($record) {
            $this->flashSession->success('Changelogs successfully updated');
        } else {
            $this->flashSession->error('Failed to update changelogs');
        }
        $this->response->redirect('/dashboard/changelogs');
    }

    public function deleteAction()
    {
        $id = $this->dispatcher->getParam('id');

        $phql = "DELETE FROM Changelogs WHERE id = :id:";
        $record = $this->modelsManager->executeQuery($phql, ['id' => $id]);

        if ($record) {
            $this->flashSession->success('Changelog successfully deleted');
        } else {
            $this->flashSession->error('Failed to delete changelog');
        }
        $this->response->redirect('/dashboard/changelogs');
    }


    public function setAction()
    {
        $id = $this->dispatcher->getParam('id');

        // RESET ALL SETTINGS TO DEFAULT
        $posts_reset_phql = "UPDATE Posts SET active = 0";
        $this->modelsManager->executeQuery($posts_reset_phql);

        $changelogs_reset_phql = "UPDATE Changelogs SET setted = 0";
        $this->modelsManager->executeQuery($changelogs_reset_phql);

        // SETUP VERSION
        $select_changelogs_data = "SELECT * FROM Changelogs WHERE id = :id:";
        $records = $this->modelsManager->executeQuery($select_changelogs_data, ['id' => $id]);

        $posts_phql = "UPDATE Posts SET active = 1 WHERE id IN (" . implode(',', json_decode($records[0]->activated_pages)) . ")";
        $test = $this->modelsManager->executeQuery($posts_phql);
        // var_dump($test);

        $changelogs_phql = "UPDATE Changelogs SET setted = 1 WHERE id = :id:";
        $this->modelsManager->executeQuery($changelogs_phql, ['id' => $id]);


        $this->flashSession->success('Version successfully updated');

        $this->response->redirect('/dashboard/changelogs');
    }

    public function unsetAction()
    {
        // RESET ALL SETTINGS TO DEFAULT
        $posts_reset_phql = "UPDATE Posts SET active = 0";
        $this->modelsManager->executeQuery($posts_reset_phql);

        $changelogs_reset_phql = "UPDATE Changelogs SET setted = 0";
        $this->modelsManager->executeQuery($changelogs_reset_phql);

        $this->flashSession->success('Version successfully reset');

        $this->response->redirect('/dashboard/changelogs');
    }
}
