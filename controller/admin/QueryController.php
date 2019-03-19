<?php
class QueryController {

    public $model = null;
    public $table = null;

    public function __construct($table){
        //实例化model
        $this->table = $table?$table:'e_blog_list';
        $this->model = new QueryModel($this->table);// 在model中通过 $this->tb 获取
    }
    //查询所有文章列表
    public function toQueryList(){
        $list = $this->model->getAll();
        return $this->model->getJsonData(1,'成功',$list);
    }
    //查询1条文章
    public function toQueryOne($id){
        $one = $this->model->getField('id',$id);
        return $this->model->getJsonData(1,'成功',$one);
    }
}