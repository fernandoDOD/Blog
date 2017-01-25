<?php

class CategoriasController extends Controller
{
	public function actionView($id){
        $id = explode('_', $id);
        $id = $id[0];

        $categorias = $this->loadModel($id);
        
        $this->render('view',array(
            'categorias'=>$categorias,
        ));
    }

    private function loadModel($id)
    {
        $model= Categories::model()->findByAttributes(array('id'=>$id, 'status'=>1));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
}