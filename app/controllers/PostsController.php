<?php

declare(strict_types=1);

class PostsController extends ControllerBase
{

    public function indexAction()
    {
        $phql = "SELECT * FROM Posts";

        $records = $this->modelsManager->executeQuery($phql);
        $this->view->setVar('records', $records);

        $this->view->pick('dashboard/posts/index');
    }

    public function createAction()
    {
        $this->view->pick('dashboard/posts/create');
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

        $new_post = new Posts();
        $new_post->username = $current_user->username;
        $new_post->title = $request['title'];
        $new_post->subtitle = $request['subtitle'];
        $new_post->content = $request['content'];
        $success = $new_post->save();

        if ($success) {
            $this->flashSession->success('New post successfully added');
        } else {
            $this->flashSession->error('Failed to add new post');
        }
        $this->response->redirect('/dashboard/posts');
    }

    public function editAction()
    {
        $id = $this->dispatcher->getParam('id');

        $phql = "SELECT * FROM Posts WHERE id = :id:";
        $record = $this->modelsManager->executeQuery($phql, ['id' => $id]);
        $this->view->setVar('record', $record);
        // var_dump($record);
        $this->view->pick('dashboard/posts/edit');
    }

    public function updateAction()
    {
        $request = $this->request->getPost();

        $phql = "UPDATE Posts SET title = :title:, subtitle = :subtitle:, content = :content: WHERE id = :id:";
        $record = $this->modelsManager->executeQuery($phql, [
            'title' => $request['title'],
            'subtitle' => $request['subtitle'],
            'content' => $request['content'],
            'id' => $request['id']
        ]);

        if ($record) {
            $this->flashSession->success('Post successfully updated');
        } else {
            $this->flashSession->error('Failed to update post');
        }
        $this->response->redirect('/dashboard/posts');
    }

    public function deleteAction()
    {
        $id = $this->dispatcher->getParam('id');

        $phql = "DELETE FROM Posts WHERE id = :id:";
        $record = $this->modelsManager->executeQuery($phql, ['id' => $id]);

        if ($record) {
            $this->flashSession->success('Post successfully deleted');
        } else {
            $this->flashSession->error('Failed to delete post');
        }
        $this->response->redirect('/dashboard/posts');
    }
}
