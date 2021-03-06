<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>备份数据库</title>
    <hdui bootstrap="true"/>
    <js file="__GROUP__/static/js/js.js"/>
    <js file="__CONTROL_TPL__/js/js.js"/>
    <css file="__CONTROL_TPL__/css/css.css"/>
</head>
<body>
<div class="wrap">
    <div class="menu_list">
        <ul>
            <li><a href="{|U:'Backup/index'}">备份列表</a></li>
            <li><a href="javascript:;"  class="action">备份数据</a></li>
        </ul>
    </div>
<form action="{|U:'backup'}" target="dialog_iframe" method="post" class="form-inline hd-form">
    <table class="table2">
        <thead>
        <tr>
            <td width="50">数据备份</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td width="50">
                <table class="table">
                    <tr>
                        <td class="w100">分卷大小</td>
                        <td>
                            <input type="text" class="w150" name="size" value="200"/> KB
                        </td>
                    </tr>
                    <tr>
                        <td class="w100"></td>
                        <td>
                            <label><input type="checkbox" name="structure" value="1" checked="checked"> 备份表结构</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="w100">&nbsp;</td>
                        <td>
                            <input type="submit" class="btn btn-primary" id="backup" value="开始备份"/>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <table class="table2">
        <thead>
        <tr>
            <td width="50">
                <label><input type="checkbox" class="s_all_ck"/> 全选</label>
            </td>
            <td>表名</td>
            <td>类型</td>
            <td>编码</td>
            <td>记录数</td>
            <td>使用空间</td>
            <td>碎片</td>
            <td width="200">操作</td>
        </tr>
        </thead>
        <tbody>
        <list from="$table.table" name="t">
            <tr>
                <td>
                    <input type="checkbox" name="table[]" value="{$t.tablename}"/>
                </td>
                <td>{$t.tablename}</td>
                <td>{$t.engine}</td>
                <td>{$t.charset}</td>
                <td>{$t.rows}</td>
                <td>{$t.size}</td>
                <td>{$t.data_free|default:0}</td>
                <td>
                    <a href="{|U:'optimize',array('table[]'=>$t['tablename'])}">优化</a> |
                    <a href="{|U:'repair',array('table'=>$t['tablename'])}">修复</a>
                </td>
            </tr>
        </list>
        </tbody>
    </table>
</form>
</div>
<div class="btn_wrap">
    <input type="button" class="btn s_all" value="全选"/>
    <input type="button" class="btn r_select" value="反选"/>
    <input type="button" class="btn" id="optimize" value="批量优化"/>
    <input type="button" class="btn" id="repair" value="批量修复"/>
</div>
</body>
</html>