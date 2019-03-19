<?php
class LoginController {

    public $model = null;
    public $table = null;
    public $view = null;

    public function __construct($table,$view){
        //实例化model
        $this->table = $table?$table:'e_users_info';
        $this->view = $view;
        $this->model = new LoginModel($this->table);
    }

    //初始化当前视图view
    public function showPageAction(){
        $this->model->getView($this->table,$this->view);
    }

    //查询注册记录是否存在, 不存在返回0
    public function toTestRecord($fieldName,$field){
        $where = "where ".$fieldName."='".$field."'";
        return $this->model->getCount($fieldName, $where);
    }
    //添加数据
    public function toInsert($fields){
        $this->model->getExec($fields);
    }
    //登录验证
    public function toSignIn($fields){
        $num = $this->model->getSign($fields);
        if(!empty($num)){
            $_SESSION['u_id']=md5($fields['user'].'eckes');
            return $this->model->getJsonData(1,'登陆成功');
        }else{
            return $this->model->getJsonData(10103,'账号或密码错误！');
        }
    }
    //注销
    public function toSignOut(){
        unset($_SESSION['uid']);
        session_destroy();
        return $this->model->getJsonData(1,'注销成功！');
    }
    //获取缓存状态//和数据
    public function getSession(){
        if($_SESSION['u_id']){
            $data = $this->model->getField('u_id',$_SESSION['u_id']);
            return $this->model->getJsonData(1,'欢迎回来',$data);
        }else{
            header('status: 401 Unauthorized');
            exit();
        }
    }
} 