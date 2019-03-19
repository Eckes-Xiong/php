<?php
class LoginModel extends Model {
    //添加注册用户信息
    public function getExec($fields){
        $pass = md5($fields['password']."eckes.cn.1989");

        $sql = "INSERT INTO ".$this->tb." (l_user, l_pass, l_phone, l_email) VALUES
                (
                '".$fields['user']."',
                '".$pass."',
                '".$fields['phone']."',
                '".$fields['email']."'
                )";
        $this->exec($sql);
    }

    //登录验证
    public function getSign($fields){
        $fields = json_decode($fields);
        $pass = md5($fields->password."eckes.cn.1989");
        $sql = "SELECT createDate,email,intro,lastDate,mobile,title,portrait FROM ".$this->tb." WHERE username='{$fields->user}' and password='{$pass}'";
        //print_r($fields);
        //echo $sql;
        return $this->getsqlOne($sql);
    }
}