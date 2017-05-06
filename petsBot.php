<?php
$json_string = file_get_contents('php://input');
$jsonObj = json_decode($json_string);
$to = $jsonObj->{"result"}[0]->{"content"}->{"from"};
$text = $jsonObj->{"result"}[0]->{"content"}->{"text"};



if($text == 'doge') {
    $response_format_image = ['contentType'=>2,"toType"=>1,'originalContentUrl'=>"http://ww.daliulian.net/imgs/image/40/4058403.jpg","previewImageUrl"=>"http://ww.daliulian.net/imgs/image/40/4058403.jpg"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_image];
    
}else if($text=="哇") {
    $response_format_text = ['contentType'=>1,"toType"=>1,"text"=>"甚麼?"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_text];
}
else if ($text == '怎麼') {
    $response_format_text = ['contentType'=>1,"toType"=>1,"text"=>"沒事"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_text];
}
else if ($text == '你是') {
    $response_format_text = ['contentType'=>1,"toType"=>1,"text"=>"施浩宇"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_text];
}
else if ($text == '喔') {
    $response_format_text = ['contentType'=>1,"toType"=>1,"text"=>"恩"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_text];
}
else if ($text == '指令') {
    $response_format_text = ['contentType'=>1,"toType"=>1,"text"=>"
    1.doge
    2.哇
    3.怎麼
    4.你是
    5.喔
    6.坐下
    7.饅頭
    8.蠻牛
    9.白癡狗
    10.握手
    11.賣萌
    12.john
    12.cena賣萌
    "];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_text];
}


else if($text=="坐下") {
    $response_format_image = ['contentType'=>2,"toType"=>1,'originalContentUrl'=>"http://www.ohwonews.com/wp-content/uploads/2015/08/14384893977336.jpg","previewImageUrl"=>"http://www.ohwonews.com/wp-content/uploads/2015/08/14384893977336.jpg"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_image];
    
}

else if($text=="看這邊") {
    $response_format_image = ['contentType'=>2,"toType"=>1,'originalContentUrl'=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/picasion.com_2836f7a63c291a9671f1bedb747fdc6e.gif","previewImageUrl"=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/picasion.com_2836f7a63c291a9671f1bedb747fdc6e.gif"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_image];
}
else if($text=="饅頭") {
    $response_format_image = ['contentType'=>2,"toType"=>1,'originalContentUrl'=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/look2.jpg","previewImageUrl"=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/look2.jpg"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_image];
}
else if($text=="蠻牛") {
    $response_format_image = ['contentType'=>2,"toType"=>1,'originalContentUrl'=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/87.jpg","previewImageUrl"=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/87.jpg"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_image];
}
else if($text=="白癡狗") {
    $response_format_image = ['contentType'=>2,"toType"=>1,'originalContentUrl'=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/lookwhat.jpg","previewImageUrl"=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/lookwhat.jpg"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_image];
}
else if($text=="john") {
    $response_format_image = ['contentType'=>2,"toType"=>1,'originalContentUrl'=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/cana2.jpg","previewImageUrl"=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/cana2.jpg"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_image];
}
else if($text=="cena賣萌") {
    $response_format_image = ['contentType'=>2,"toType"=>1,'originalContentUrl'=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/cena.jpg","previewImageUrl"=>"http://fs.mis.kuas.edu.tw/~s1103137222/dog/cena.jpg"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_image];
}

else if($text=="握手") {
    $response_format_image = ['contentType'=>2,"toType"=>1,'originalContentUrl'=>"http://6.share.photo.xuite.net/nippo/1688db7/7999581/314731610_m.jpg","previewImageUrl"=>"http://6.share.photo.xuite.net/nippo/1688db7/7999581/314731610_m.jpg"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_image];
    
}else if($text=="賣萌") {
    $response_format_image = ['contentType'=>2,"toType"=>1,'originalContentUrl'=>"http://s2.buzzhand.net/uploads/9f/7/719030/14335513421351.jpg","previewImageUrl"=>"http://s2.buzzhand.net/uploads/9f/7/719030/14335513421351.jpg"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_image];
    
    }else {
    $response_format_image = ['contentType'=>2,"toType"=>1,'originalContentUrl'=>"http://imglife.gmw.cn/attachement/jpg/site2/20140703/002564966e00151eefcb0d.jpg","previewImageUrl"=>"http://imglife.gmw.cn/attachement/jpg/site2/20140703/002564966e00151eefcb0d.jpg"];
    $post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_image];
};

// toChannelとeventTypeは固定値なので、変更不要。
//$post_data = ["to"=>[$to],"toChannel"=>"1383378250","eventType"=>"138311608800106203","content"=>$response_format_text];







$ch = curl_init("https://trialbot-api.line.me/v1/events");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json; charser=UTF-8',
    'X-Line-ChannelID: ID',
    'X-Line-ChannelSecret: CS',
    'X-Line-Trusted-User-With-ACL: TUWA'
    ));
$result = curl_exec($ch);
echo  $result;
curl_close($ch);

?>
