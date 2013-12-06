<?php if(!defined('HDPHP_PATH'))exit;
return array (
  0 => 
  array (
    'nid' => '26',
    'title' => '我的面板',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '0',
    'list_order' => '10',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 1,
    'html' => '',
    '_pre' => true,
    '_end' => true,
    'name' => '我的面板',
  ),
  1 => 
  array (
    'nid' => '29',
    'title' => '个人信息',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '26',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 2,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '├─个人信息',
  ),
  2 => 
  array (
    'nid' => '27',
    'title' => '修改个人信息',
    'app' => 'Admin',
    'control' => 'AdminManage',
    'method' => 'edit_info',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '29',
    'list_order' => '1',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => true,
    '_end' => true,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─修改个人信息',
  ),
  3 => 
  array (
    'nid' => '1',
    'title' => '内容',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '0',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 1,
    'html' => '',
    '_pre' => true,
    '_end' => true,
    'name' => '内容',
  ),
  4 => 
  array (
    'nid' => '2',
    'title' => '内容管理',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '1',
    'list_order' => '6',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 2,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '├─内容管理',
  ),
  5 => 
  array (
    'nid' => '4',
    'title' => '管理内容',
    'app' => 'Content',
    'control' => 'Content',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '2',
    'list_order' => '1',
    'is_system' => '1',
    'favorite' => '1',
    'level' => 3,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─管理内容',
  ),
  6 => 
  array (
    'nid' => '3',
    'title' => '附件管理',
    'app' => 'Upload',
    'control' => 'Index',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '2',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─附件管理',
  ),
  7 => 
  array (
    'nid' => '28',
    'title' => '修改密码',
    'app' => 'Admin',
    'control' => 'AdminManage',
    'method' => 'edit_password',
    'param' => '&',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '2',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => true,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─修改密码',
  ),
  8 => 
  array (
    'nid' => '5',
    'title' => '生成静态',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '1',
    'list_order' => '5',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 2,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '├─生成静态',
  ),
  9 => 
  array (
    'nid' => '8',
    'title' => '生成首页',
    'app' => 'Html',
    'control' => 'Html',
    'method' => 'create_index',
    'param' => '&',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '5',
    'list_order' => '5',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─生成首页',
  ),
  10 => 
  array (
    'nid' => '6',
    'title' => '批量更新栏目页',
    'app' => 'Html',
    'control' => 'Html',
    'method' => 'batch_category',
    'param' => '&',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '5',
    'list_order' => '4',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─批量更新栏目页',
  ),
  11 => 
  array (
    'nid' => '9',
    'title' => '批量更新内容页',
    'app' => 'Html',
    'control' => 'Html',
    'method' => 'batch_content',
    'param' => '&',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '5',
    'list_order' => '3',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => true,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─批量更新内容页',
  ),
  12 => 
  array (
    'nid' => '10',
    'title' => '内容相关管理',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '1',
    'list_order' => '4',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 2,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '├─内容相关管理',
  ),
  13 => 
  array (
    'nid' => '12',
    'title' => '数据备份',
    'app' => 'Backup',
    'control' => 'Backup',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '10',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '1',
    'level' => 3,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─数据备份',
  ),
  14 => 
  array (
    'nid' => '13',
    'title' => '栏目管理',
    'app' => 'Category',
    'control' => 'Category',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '10',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '1',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─栏目管理',
  ),
  15 => 
  array (
    'nid' => '14',
    'title' => '模型管理',
    'app' => 'Model',
    'control' => 'Model',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '10',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─模型管理',
  ),
  16 => 
  array (
    'nid' => '15',
    'title' => '推荐位管理',
    'app' => 'Content',
    'control' => 'Flag',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '10',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => true,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─推荐位管理',
  ),
  17 => 
  array (
    'nid' => '16',
    'title' => '系统',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '0',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 1,
    'html' => '',
    '_pre' => true,
    '_end' => true,
    'name' => '系统',
  ),
  18 => 
  array (
    'nid' => '19',
    'title' => '系统设置',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '16',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 2,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '├─系统设置',
  ),
  19 => 
  array (
    'nid' => '20',
    'title' => '网站配置',
    'app' => 'Hdcms',
    'control' => 'Config',
    'method' => 'edit',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '19',
    'list_order' => '5',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─网站配置',
  ),
  20 => 
  array (
    'nid' => '21',
    'title' => '后台菜单管理',
    'app' => 'Hdcms',
    'control' => 'Node',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '19',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => true,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─后台菜单管理',
  ),
  21 => 
  array (
    'nid' => '11',
    'title' => '管理员设置',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '16',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 2,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '├─管理员设置',
  ),
  22 => 
  array (
    'nid' => '17',
    'title' => '管理员管理',
    'app' => 'Admin',
    'control' => 'Admin',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '11',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─管理员管理',
  ),
  23 => 
  array (
    'nid' => '18',
    'title' => '角色管理',
    'app' => 'Admin',
    'control' => 'Role',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '11',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => true,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─角色管理',
  ),
  24 => 
  array (
    'nid' => '30',
    'title' => '会员',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '0',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 1,
    'html' => '',
    '_pre' => true,
    '_end' => true,
    'name' => '会员',
  ),
  25 => 
  array (
    'nid' => '31',
    'title' => '会员管理',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '30',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 2,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '├─会员管理',
  ),
  26 => 
  array (
    'nid' => '32',
    'title' => '会员管理',
    'app' => 'Member',
    'control' => 'Member',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '31',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─会员管理',
  ),
  27 => 
  array (
    'nid' => '33',
    'title' => '审核会员',
    'app' => 'Member',
    'control' => 'Member',
    'method' => 'verify',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '31',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => true,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─审核会员',
  ),
  28 => 
  array (
    'nid' => '34',
    'title' => '会员组管理',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '30',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 2,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '├─会员组管理',
  ),
  29 => 
  array (
    'nid' => '35',
    'title' => '管理会员组',
    'app' => 'Member',
    'control' => 'Group',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '34',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => true,
    '_end' => true,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─管理会员组',
  ),
  30 => 
  array (
    'nid' => '36',
    'title' => '模板',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '0',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 1,
    'html' => '',
    '_pre' => true,
    '_end' => true,
    'name' => '模板',
  ),
  31 => 
  array (
    'nid' => '37',
    'title' => '模板管理',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '36',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 2,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '├─模板管理',
  ),
  32 => 
  array (
    'nid' => '40',
    'title' => '标签管理',
    'app' => 'Template',
    'control' => 'Tag',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '37',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => true,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─标签管理',
  ),
  33 => 
  array (
    'nid' => '38',
    'title' => '模板风格',
    'app' => 'Template',
    'control' => 'Style',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '37',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─模板风格',
  ),
  34 => 
  array (
    'nid' => '39',
    'title' => '模板文件',
    'app' => 'Template',
    'control' => 'Style',
    'method' => 'show_dir',
    'param' => '',
    'comment' => '',
    'status' => '1',
    'menu_type' => '1',
    'pid' => '37',
    'list_order' => '0',
    'is_system' => '1',
    'favorite' => '0',
    'level' => 3,
    'html' => '',
    '_pre' => false,
    '_end' => false,
    'name' => '│&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─模板文件',
  ),
);
?>