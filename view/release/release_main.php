<section class="default-content news-exhb exhb-photo17" role="news-exhibition">
    <div class="container default-box news-content">
        <div class="nav-line">
            <ol class="breadcrumb">
                <li><a href="/">首页</a></li>
                <li><a href="/news.php">新闻 & 动态</a></li>
                <li class="active">SAHINLER赛乐新闻</li>
            </ol>
        </div>
        <div class="title text-center">
            <h2 class="bold-600"><?=$this->html['i_title'];?></h2>
            <hr/>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 news-list-box">
                <div class="news-list">
                    <div class="news-list-content">
                        <p>新闻资讯</p>
                        <?php
                        $s_prev = "select i_title, i_url from ".$this->table." where i_id = (select i_id from ".$this->table." where i_list='".$this->html['i_list']."' and i_id<".$this->html['i_id']." order by i_id DESC limit 1)";
                        $s_next = "select i_title, i_url from ".$this->table." where i_id = (select i_id from ".$this->table." where i_list='".$this->html['i_list']."' and i_id>".$this->html['i_id']." order by i_id ASC limit 1)";
                        $row_p = $this->model->getsqlOne($s_prev);
                        $row_n = $this->model->getsqlOne($s_next);

                        if(!$row_p || $row_p==null) echo '<a href="javascript:;" class="black">上一篇 没有了</a>';
                        else echo '<a href="'.$row_p['i_url'].'" class="textEps"><span class="black">上一篇 </span><span class="icon-caret-right"></span> '.$row_p['i_title'].'</a>';
                        if(!$row_n|| $row_n==null) echo'<a href="javascript:;" class="black">下一篇 没有了</a>';
                        else echo '<a href="'.$row_n['i_url'].'" class="textEps"><span class="black">下一篇 </span><span class="icon-caret-right"></span> '.$row_n['i_title'].'</a>';
                        //echo $txt_p.$txt_n;
                        ?>
                    </div>
                </div>
                <div class="news-list">
                    <div class="news-list-content">
                        <p>新闻列表</p>
                        <?php
                        $sql = "select i_title, i_url from ".$this->table." where i_list='".$this->html['i_list']."' and i_id!=".$this->html['i_id']." order by i_addtime DESC limit 0,5";
                        $rows_l =$this->model->getSqlAll($sql);
                        foreach($rows_l as $r){
                            echo '<a href="'.$r['i_url'].'">'.$r['i_title'].'</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="news-item">
                    <div class="news-item-txt-page">
                        <?=$this->html['i_content'];?>
                    </div>
                </div>
            </div>
        </div>

        <!-- blog -->
        <div class="news-blog">
            <div class="title">
                <h3>博客 BLOG</h3>
                <hr/>
            </div>
            <?php
            $sql = "select i_url, i_title, i_addtime, i_desc from ".$this->table." order by i_addtime DESC limit 0,10";
            $rows_b = $this->model->getSqlAll($sql);
            foreach($rows_b as $r){
                echo '<div class="exhb-other">';
                echo '<p><a href="'.$r['i_url'].'">'.$r['i_title'].'</a> - '.$r['i_addtime'].'</p>';
                echo '<p><small>'.$r['i_desc'].'</small></p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>