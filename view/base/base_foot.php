</body>
</html>
<?php if(PLATEFORM == "admin" && TABLE== "login"):?>
    <!-- private javascript -->
    <script src="/application/common/js/<?=PLATEFORM;?>/modal.js"></script>
    <script src="/application/common/js/<?=PLATEFORM;?>/placeholder.js"></script>
<?php endif;?>
<?php if($this->html['h_js']):?>
    <!-- private javascript -->
    <script src="/application/common/js/<?=PLATEFORM."/".$this->html['h_js'];?>"></script>
<?php endif;?>