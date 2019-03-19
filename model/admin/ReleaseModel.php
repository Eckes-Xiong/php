<?php
class ReleaseModel extends Model {

    //添加数据，修改数据
    public function getExec($fields){

        if($fields['type']=='insert'){

            $sql = "INSERT INTO ".$this->tb."(title, className, content, createDate) VALUES ('".$fields['title']."', '".$fields['className']."', '".$fields['content']."','".date("Y-m-d H:i:s")."')";

        }else if($fields['type']=='update'){
            $sql = "";
        }

        $this->exec($sql);
        //echo $sql;
    }

    //添加数据之后，创建文件
    public function creatPage($dir){
        /**
         * 创建文件
         * dirname => 文件目录
         * dirfile => 文件名
         * templat => 替换的模版
         **/
        $dirpath = HOME_PATH."/release/".$dir;
        $filename = date("Ymd").$this->insertId.".php";
        $view = LIB_PATH.'/admin/release/'.$this->tb.".php";//release_info.php

        if (!file_exists($dirpath) && !mkdir($dirpath, 0777, true)){ echo "无法创建目录"; exit; }
        else if (!is_writeable($dirpath)) { echo "目录不可写"; exit; }

        //创建文件
        $create = fopen( $dirpath."/".$filename , "w+");

        //打开模版,读取模版内容,替换需要更改的内容
        $temp = fopen($view,"r");
        $content = fread($temp,filesize($view));
        $content = str_replace("{latest_id}",$this->insertId,$content);

        //写入内容到新文件
        if(!fwrite($create,$content)){ echo "无法写入文件"; exit; }
        //更新数据库文件url
        $sql = "update ".$this->tb." set i_url = '/release/".$dir."/".$filename."' where i_id='".$this->insertId."'";
        $this->exec($sql);
    }
    //判断数据为空
    public function isEmpty($data){
        $_data = $this->json2Array($data);
        $_data = $this->pregReplace($this->pregReplace($_data),'/\'/', '\\\'');
        if(empty($_data['title'])){
            $this->getJsonData(10301,'title不可以为空');
        }else if(empty($_data['className'])){
            $this->getJsonData(10302,'className不可以为空');
        }else if(empty($_data['content'])){
            $this->getJsonData(10303,'content不可以为空');
        }else{
            $this->getExec($_data);
        }
    }
}