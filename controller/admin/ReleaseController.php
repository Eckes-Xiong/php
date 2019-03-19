<?php
class ReleaseController {

    public $model = null;
    public $table = null;

    public function __construct($table){
        //实例化model
        $this->table = $table?$table:'e_blog_list';
        $this->model = new ReleaseModel($this->table);// 在model中通过 $this->tb 获取
    }
    /**
     * @params
     *   $fields => $_POST
     * */
    public function getExec($fields){
        $this->model->isEmpty($fields);

        //insert 创建页面
        if($this->model->insertId != null && $this->model->insertId != 0){
            //$this->model->creatPage($fields['operate']);
            $this->model->getJsonData(1,'添加成功！');
        }
    }

} 