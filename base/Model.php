<?php
/**
 * 公共模型类，便于自定义Model调用Db
 * 主要完成数据库连接，封装通用操作方法
 */
header('Content-Type: text/html; charset=utf-8');
class Model {
    //protected只给本类和子类使用
    protected $db=null;

    public $tb=null;
    public $num = null;
    public $insertId = null;
    /* @$html[]
     * 储存页面head数据
     * */
    public $html = null;

    public function __construct($tb=null){
        $this->tb = $tb;
        //完成数据库连接。
        $this->init();
    }

    private function init(){
        //初始化Db
        $this->db = Db::getInstance($GLOBALS['config']['db']);
    }

    /* @getCount()
     * 查询数据条数
     * */
    public function getCount($field, $where){
        $sql = 'SELECT '.$field.' FROM '.$this->tb.' '.$where;
        return $this->db->rowCount($sql);
    }
    /* @exec()
     * 通用操作
     * */
    public function exec($sql){
        $this->db->exec($sql);
        $this->insertId = $this->db->lastId;
        //操作的数据条数
        $this->num = $this->db->num;
    }
    /* @getOne()
     * 查询单条数据
     * */
    public function getsqlOne($sql){
        return $this->db->fetch($sql);
    }
    /* @getAll()
     * 通用查询，全部数据
     * */
    public function getAll(){
        $sql = 'SELECT * FROM '.$this->tb;
        //echo '<script>console.log("getAll()'.$sql.'")</script>';
        return $this->db->fetchAll($sql);
    }
    /* @getSqlAll()
     * 通过sql查询所有数据
     * */
    public function getSqlAll($sql){
        return $this->db->fetchAll($sql);
    }
    /* @getField()
     * 通用查询，单条数据
     * @params
     *   $fieldName 字段名
     *   $field 字段值
     * @return row[]
     * */
    public function getField($fieldName,$field){
        $sql = 'SELECT * FROM '.$this->tb.' WHERE '.$fieldName.'="'.$field.'"';
        return $this->db->fetch($sql);
    }

    /* @getHtml()
     * 获取网页中的title，keyword，description等数据
     * @table
     *   数据表：Base.php ->loadConfig() ->$GLOBALS['config']['app']['html_tb']
     * @params
     *   $fieldName 字段名
     *   $value 字段值
     * */
    public function getHtml($fieldName,$value){
        $tb = $GLOBALS['config']['app']['html_tb'];
        $sql = 'SELECT * FROM '.$tb.' WHERE '.$fieldName.'=\''.$value.'\'';
        //echo '<script>console.log("getHtml():'.$sql.'")</script>';
        return $this->db->fetch($sql);
    }

    /* @getView()
     *  导入网站模版
     * @params
     *   $sign 获取数据表中的数据指针[对应的数据表名称]
     *   $view 当前模块的模版名称
     * */
    public function getView($sign,$view){
        //获取html数据
        $this->html = $this->getHtml('h_sign',$sign);
        $navlist = $this->db->fetchAll("SELECT * FROM ".$GLOBALS['config']['tb']['nav_a_list']);
        //通用html head
        require_once VIEW_PATH.'/'.$GLOBALS['config']['app']['html_head_view'].'.php';
        //page body
        require_once VIEW_PATH.'/'.PLATEFORM.'/'.$view.'.php';
        //通用html foot
        require_once VIEW_PATH.'/'.$GLOBALS['config']['app']['html_foot_view'].'.php';
    }
    /* @pregSpace()
     *  替换字符串
     *  默认 去除多余空格
     * @params
     *   $pattern : 需要匹配的正则表达式
     *   $replace : 替换成的表达式
     *   $arr     : 需要替换的字符串 或 数组
     * */
    public function pregReplace($arr, $pa='/\s\s+/', $re=' '){
        return preg_replace($pa,$re,$arr);
    }
    /* @getJsonData()
     *  组织数据结构
     *  默认 去除多余空格
     * @params
     *   $code : code
     *   $message : message
     *   $data    : data
     * */
    public function getJsonData($code,$message = '',$data = array())
    {
        if (!is_numeric($code)){
            return '错误';
        }
        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data
        );
        echo json_encode($result);
        exit;
    }
    /* @json2Array()
     *  json to array
     * */
    public function json2Array($json)
    {
        return json_decode($json,true);
    }
} 