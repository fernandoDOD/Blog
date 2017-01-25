<?php

class PostsController extends Controller
{
	public function actionView($id){
        $id = explode('_', $id);
        $id = $id[0];

        $post = $this->loadModel($id);
        
        $this->render('view',array(
            'post'=>$post,
        ));
    }

    private function loadModel($id)
    {
        $model= Posts::model()->findByAttributes(array('id'=>$id, 'status'=>1));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
}