<?php
//mysql
$host='localhost';
$user='root';
$pass='';
$db='budang';

//要模仿的浏览器
$ua='netdisk;4.6.1.0;PC;PC-Windows;6.2.9200;WindowsBaiduYunGuanJia';

//后台显示的跳转地址
$jumper = 'http://acgfx.tk/wp-admin/index.php';

//高速下载链接的开关，这些链接只能供（和服务器IP是）同一个国家的IP使用
$enable_high_speed_link = true;

//直链功能的开关
$enable_direct_link = true;

//直接播放视频功能的开关【跳转页需要使用HTTPS方可播放】
$enable_direct_video_play = false;

//应用户要求：强制只开启直链、禁用提取的开关，会覆盖enable_direct_link
$force_direct_link = false;

//生成新文件名，不含扩展名
function generateNewName() {
	return '[GalACG]EX' . str_pad((time() - 1402761600),9,'0',STR_PAD_LEFT);
}
