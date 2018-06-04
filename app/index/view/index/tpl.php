{extend name="layout" /}

{block name="title"}首页{/block}

{block name="body"}
<?php
/**
 * Created by lobtao.
 * Date: 2018/5/28
 * Time: 上午10:44
 */

$name = '远思软件';
echo 'hello<hr>';
echo '<pre>';
var_dump($data);
?>
哈哈
<hr>
{//$data|JSON}
<?=$name;?>
{/block}