<?php
/*
关键词均支持正则表达式，过多的过滤会影响性能


'fuck' => 'f**k',
以上规则表示发表含fuck的内容，会被过滤为f**k

'董先生连任兹瓷不兹瓷？？？' => array(false, 0),

'蛤总' => array(false, 30),
以上规则禁止发布含“蛤总”的内容，并且尝试发表该内容的用户会被续(jin)掉(yan)30秒生命


'包子' => array('维尼', 30),
以上规则表示发表含'包子'的内容，会被过滤为'维尼'，并且在内容发表成功后，需要再等30秒才能发言
*/
return array(
	'麻醉枪|迷魂药' => '***',
	'fuck' => 'f**k',
	'蛤总' => array(false, 30),
	'包子' => array('维尼', 30),
);