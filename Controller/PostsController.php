<?php
App::uses('AppController', 'Controller');
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    // 投稿記事の一覧表示
    public function index() {
        //$this->PostでPostモデルを呼び出す
        $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null){
        if(!$id){
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if(!$post){
            throw new NotFoundException(__('Invalid post'));
        }
        //特定のidの投稿が入った変数（$post）をpostとして使えるようにした。
        $this->set('post', $post);
    }

    public function add(){
        //postで送信された場合
        if($this->request->is('post')){
            $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            //postで送信されて、かつデータが含まれている場合はsaveで保存
            if($this->Post->save($this->request->data)){
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    }

    public function edit($id = null) {
        if(!$id){
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if(!$post){
            throw new NotFoundException(__('Invalid post'));
        }

        if($this->request->is(array('post', 'put'))){
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)){
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }
        if(!$this->request->data){
            $this->request->data = $post;
        }
    }

    public function delete($id){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        if($this->Post->delete($id)){
            $this->Flash->success(__('The post with id: %s has been deleted.', h($id))
        );
        } else {
            $this->Flash->error(__('The post with id: %s could not be deleted.', h($id))
        );
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function isAuthorized($user){
        // 登録済ユーザーは投稿できる
        if($this->action === 'add'){
            return true;
        }

        // 投稿のオーナーは編集や削除ができる
        if(in_array($this->action, array('edit', 'delete'))){
            $postId = (int)$this -> request->params['pass'][0];
            if($this->Post->isOwnedBy($postId, $user['id'])){
                return true;
            }
        }
        return parent::isAuthorized($user);
    }
}

?>

