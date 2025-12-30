<?php
ob_start();
define('API_KEY',"8218697538:AAEOdSvSLm_Y_OaIhKyo5LsRdlcPWE7y9Cg:");
$admin = "8031157043"; 
$folder = 'https://u4547.xvest5.ru/'; 
$bnn = "MegaBuilderBot"; 
define("DB_SERVER", "localhost"); 
define("DB_USERNAME", "Birnarsalar"); 
define("DB_PASSWORD", "kod"); 
define("DB_NAME", "yanabirnarsalar");
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

function addsql($id){
global $connect;
$result = mysqli_query($connect,"SELECT * FROM data WHERE user_id = $id");
$rew = mysqli_fetch_assoc($result);
if($rew){
}else{
mysqli_query($connect,"INSERT INTO data(`user_id`) VALUES ('$id')");
}
}

function rmdirPro($path){
    $scan = array_diff(scandir($path), ['.','..']);
    foreach($scan as $value){
        if(is_dir("{$path}/{$value}"))
            rmdirPro("{$path}/{$value}");
        else
            @unlink("{$path}/{$value}");
    }
    rmdir($path);
}

function edit($id,$mid,$tx,$m){
return bot('editMessageText',[
'chat_id'=>$id,
'message_id'=>$mid,
'text'=>$tx,
'parse_mode'=>"HTML",
'reply_markup'=>$m,
]);
}

$orqa=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀ Orqaga"]],
]
]);

function sms($id,$tx,$m){
return bot('sendMessage',[
'chat_id'=>$id,
'text'=>$tx,
'parse_mode'=>"HTML",
'reply_markup'=>$m,
]);
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
function del($id,$mid){
return bot('deleteMessage',[
'chat_id'=>$id,
'message_id'=>$mid,
]);
}
function get($h){
return file_get_contents($h);
}

function put($h,$r){
file_put_contents($h,$r);
}

function joinchat($id){
$res=bot('getChatMember',[
'chat_id'=>"@MegaBuilderi",
'user_id'=>$id,
])->result->status;
$res2=bot('getChatMember',[
'chat_id'=>"@MegaBuilderi",
'user_id'=>$id,
])->result->status;

if(($res=="creator" or $res=="member" or $res=="administrator") and ($res2=="creator" or $res2=="member" or $res2=="administrator")){
return true;
}else{
bot('sendMessage',[
'chat_id'=>$id,
"text"=>"🔒 Bot yangiliklaridan doim xabardor bolish uchun kanalga obuna bo'ling",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔥 Obuna bo'lish",'url'=>"https://t.me/abdrkhmnvv17"]],
[['text'=>"🔥 Obuna bo'lish",'url'=>"https://t.me/coder_fx17"]],
[['text'=>"✅ Tasdiqlash",'callback_data'=>"result"]],
]
]),
]);
return false;
}
}

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$edituz = $update->callback_query->message->from->id;
$mesuz = $update->callback_query->message->message_id;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$step = file_get_contents("step/$from_id.step");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$sd = $message->text;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$bio = $message->from->about;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$from_id = $message->from->id;
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$call = $update->callback_query;
$mes = $call->message;
$data = $call->data;
$qid = $call->id;
$callbackdata = $update->callback_query->data;
$callcid = $mes->chat->id;
$callmid = $mes->message_id;
$callfrid = $call->from->id;
$calluser = $mes->chat->username;
$callfname = $call->from->first_name;
$photo = $message->photo;
$gif = $message->animation;
$video = $message->video;
$music = $message->audio;
$voice = $message->voice;
$sticker = $message->sticker;
$document = $message->document;
$for = $message->forward_from;
$for_id=$for->id;
$contact = $message->contact;
$nomer_id = $contact->user_id;
$nomer_user = $contact->username;
$nomet_name = $contact->first_name;
$nomer_ph = $contact->phone_number;

function addstat($id){
    $check = file_get_contents("MegaBuilderBot.bot");
    $rd = explode("\n",$check);
    if(!in_array($id,$rd)){
        file_put_contents("MegaBuilderBot.bot","\n".$id,FILE_APPEND);
    }
}
/*
if(isset($message)){
sms($cid,"
🚫 Botimiz vaqtinchalik o'chirildi
♻️ Yangi botimiz: @GOBuilderBot",null);sms($admin,"sorov",null);
}

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
if(isset($update)){
exit();
}*/
$menu=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🖥 Botlarni boshqarish"]],
[['text'=>"👔 Kabinet"],['text'=>"🔖 Yordam"]],
[['text'=>"💎 Reklama"],['text'=>"🏪 Xaridlar"]],
/*[['text'=>"🤝 Hamkorlik"]]*/
]
]);
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
$xarid=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"💎 Mening statusim"]],
[['text'=>"📂 Mening imkonyatlarim"]],
[['text'=>"◀ Orqaga"]],
]
]);

if($text=="💎 Mening statusim" and joinchat($cid)==1 and $user_lang==null){
sms($cid,'
👉 Sizning statusingiz: '.get("uzb/$cid.status").'

⬇️ Statusni oshirish uchun "💎 Statusni oshirish" tugmasiga bosing',json_encode([
'inline_keyboard'=>[
[['text'=>"💎 Statusni oshirish",'callback_data'=>"xarid=status"]],
]
]));
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
if($text=="📂 Mening imkonyatlarim" and joinchat($cid)==1 and $user_lang==null){
$im=get("uzb/$cid.max");
if($im>200){
$m="cheksiz";
}else{
$m=$im;
}
sms($cid,'
📂 Sizdagi imkonyatlar: '.$m.'

⬇️ Imkonyatni oshirish uchun "📂 Imkonyatni oshirish" tugmasiga bosing',json_encode([
'inline_keyboard'=>[
[['text'=>"📂 Imkonyatni oshirish",'callback_data'=>"xarid=imkon"]],
]
]));
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
if(($text=="/extra_5" or $text=="/extra_10" or $text=="/extra_infinity" and joinchat($cid)==1 and $user_lang==null)){
$ex=explode("/extra_",$text)[1];
if($ex=="5") {
$narxi=190;
$vb=5;
}
if($ex=="10") {
$narxi=320;
$vb=10;
}
if($ex=="infinity"){
$narxi=400;
$vb=300;
}
sms($cid,"👉 <b>$ex</b> ta'rifi tanlandi narxi: <b>$narxi MUB</b>
⭐ Bu ta'rifni sotib olmoqchimisiz?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Sotib olish",'callback_data'=>"xarid=im=$ex=$narxi=$vb"]],
]
]));
}
if($text=="/extra_premium"){
sms($cid,"
👉 <b>Premium</b> statusi tanlandi narxi: <b>200 MUB</b>
⭐ Bu statusni sotib olmoqchimisiz?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Sotib olish",'callback_data'=>"xarid=st=Premium=200"]],
]
]));
}
if((mb_stripos($data,"xarid=")!==false and joinchat($chat_id)==1 and $user_lang1==null)){
$res=explode("=",$data)[1];
$ex=explode("=",$data)[2];
$narxi=explode("=",$data)[3];
$vb=explode("=",$data)[4];
if($res=="imkon"){
del($chat_id,$message_id);
sms($chat_id,"
📂 Imkonyatlar sotib olish uchun quyidagilarni tanlang:

<b>/extra_5</b>: = <b>1</b>-ta xisobga <b>5</b>-ta Imkonyatni qo’shadi.
💵 Narxi: <b>190 MUB</b>

<b>/extra_10</b>: = <b>1</b>-ta xisobga <b>10</b>-ta Imkonyatni qo’shadi.
💵 Narxi: <b>320 MUB</b>
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
<b>/extra_infinity</b>: = <b>1</b>-ta xisobga <b>cheksiz</b> Imkonyatni qo’shadi.
💵 Narxi: <b>400 MUB</b>",null);
}else if($res=="im"){
$pul=get("pul/$chat_id.txt");
if($pul>=$narxi){
edit($chat_id,$message_id,"✅ <b>$ex</b> ta'rifini muvaffaqiyatli sotib oldingiz.",null);
put("pul/$chat_id.txt",$pul-$narxi);
put("uzb/$chat_id.max",$vb);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Tarifni sotib olish uchun MUB yetarli emas",
'show_alert'=>true,
]);
}
}else if($res=="status"){
del($chat_id,$message_id);
sms($chat_id,"
💎 Statusni oshirish uchun quyidagilarni tanlang:

<b>/extra_premium</b>: <b>1</b>-ta xisobga ''🤖 PhpMakeribot (v0.1)'' ochish imkonini qo‘shadi.
💵 Narxi: <b>200 MUB</b>",null);
}else if($res=="st"){
$pul=get("pul/$chat_id.txt");
if($pul>=$narxi){
edit($chat_id,$message_id,"💎 <b>$ex</b> statusni muvaffaqiyatli sotib oldingiz.",null);
put("pul/$chat_id.txt",$pul-$narxi);
put("uzb/$chat_id.status",$ex);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Statusni sotib olish uchun MUB yetarli emas",
'show_alert'=>true,
]);
}
}
}


/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

if($text=="🏪 Xaridlar" and joinchat($cid)==1 and $user_lang==null){
sms($cid,"
👉 🏪 Xaridlar bo’limi

📂 Bu bo’limi orqali bot ochish imkonyatlarni sotib olishingiz, va o’z statusingizni oshirishingiz mumkin.

💱 Bot valyutasi: <b>MUB</b>

Valyutaning joriy narxi: <b>1 - MUB = 180 so‘m</b>",$xarid);
}

$ban=file_get_contents("bans.txt");
if((mb_stripos($ban,$cid)!==false)){
sms($cid,"🔒 Bloklangan foydalanuvchi",json_encode(['remove_keyboard'=>true,]));
}

if(file_get_contents("ads/$cid.pul")){
}else{
file_put_contents("ads/$cid.pul",0);
}

$rek_pul=file_get_contents("ads/$cid.pul");

if(file_get_contents("pul/$cid.txt")){
}else{
file_put_contents("pul/$cid.txt",0);
}

if(get("uzb/$cid.max")){
}else{
put("uzb/$cid.max","3");
}

if(get("uzb/$cid.status")){
}else{
put("uzb/$cid.status","Oddiy");
}

if(get("uzb/$cid.curr")){
}else{
put("uzb/$cid.curr","MUB");
}
$vals=get("uzb/$cid.curr");
if($vals=="MUB"){
$val="MUB";
}else{
$val="UZS";
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
$pul=file_get_contents("pul/$cid.txt");


mkdir("uzb");
mkdir("bonus");
mkdir("bonus/$cid");
mkdir("stat");
mkdir("ref");
mkdir("fayl");
mkdir("fayl/$cid");
mkdir("uzb/$cid");
mkdir("odam");
mkdir("pul");
mkdir("user");
mkdir("user/$cid");
mkdir("baza");
mkdir("baza/$cid");
mkdir("botlaruz");
mkdir("ref/$cid");
mkdir("sale");
mkdir("ads");
$user_lang=file_get_contents("user/$cid.lang");
$user_lang1=file_get_contents("user/$chat_id.lang");

if($text){
$id_e=glob("ads/*.json");
foreach($id_e as $id_f){
$id_d= str_replace(["ads/",".json"], ["",""], $id_f);
$rek = json_decode(file_get_contents("ads/$id_d.json"));
$rek_url=$rek->url;
$rek_id=$rek->id;
$ads_status=$rek->status;
if($ads_status=="faol"){
bot('forwardMessage',[
'chat_id'=>$cid,
'from_chat_id'=>$rek_url,
'message_id'=>$rek_id,
]);
}
}
}
if($text=="💎 Reklama" and joinchat($cid)==1 and $user_lang==null){
sms($cid,"🔥 Reklama bo’limi kerakli menuni tanlang",json_encode([
"inline_keyboard"=>[
[['text'=>"➕ Reklama qo’shish",'callback_data'=>"ads=plus"]],
[['text'=>"📂 Mening reklamam",'callback_data'=>"ads=my_rek"]],
]]));
}

if(mb_stripos($data,"ads=")!==false and joinchat($chat_id)==1 and $user_lang1==null){
$exp=explode ("=",$data)[1];
if($exp=="plus") {
edit($chat_id,$message_id,"📂 Sizga kerakli reklama turini tanlang:",json_encode([
"inline_keyboard"=>[
[['text'=>"⭐ Oddiy (matnli)",'callback_data'=>"ads=text"]],
[['text'=>"🔥 Premium (forward)",'callback_data'=>"ads=forward"]],
]
]));
}else{
if($exp=="my_rek") {
$g=file_get_contents("ads/".$chat_id.".json");
if($g==null){
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"⚠️ Sizda reklamalar topilmadi",
'show_alert'=>true,
]);
return false;
}
$rek = json_decode(file_get_contents("ads/$chat_id.json"));
$ads_type=$rek->type2;
$ads_dat=$rek->date;

if($ads_type=="Forward") {
bot('forwardMessage',[
'chat_id'=>$chat_id,
'message_id'=>$rek->id,
'from_chat_id'=>$rek->url,
]);
}else{
if($ads_type=="Matnli"){
sms($chat_id,$rek->text,null);
}
}
edit($chat_id,$message_id,"
✅ Sizda reklama topildi
📂 Malumotlar:

💾 Reklama turi: ".$ads_type." reklama
📆 Qolgan kunlar: ".$ads_dat." kun
📚 Reklama xolati: ".$rek->status."
",json_encode([
'inline_keyboard'=>[
	[['text'=>"🗑️ Reklamani o’chirish",'callback_data'=>"adsdel"]],
	[['text'=>"📆 Muddatni uzaytirish",'callback_data'=>"datePlus"]],
	]
	]));
	}else{
	if($exp=="text") {
	edit($chat_id,$message_id,"
	<b>⭐ Oddiy (matnli)</b>
	
	📂 Ma'lumotlar: 
	<i>Siz bu xizmatdan foydalansangiz faqatgina matnli xabarlarni reklama qilishingiz mumkin,
	sizning reklamangiz bizning botimizda buyruq berilgan payt bot javob qaytaruvchi matnlarda ko'rinadi.</i>
	
	📂 Bu xizmatdan foydalanishni xoxlaysizmi?",json_encode([
	'inline_keyboard'=>[
	[['text'=>"✅ Boshlash",'callback_data'=>"ads=startText"]],
	[['text'=>"◀️ Orqaga",'callback_data'=>"adsBack"]],
	]]));
	}else{
	if($exp=="forward"){
edit($chat_id,$message_id,"
<b>🔥 Premium (forward)</b>

📂 Ma'lumotlar: 
	<i>Premium xizmatida o'z kanalingizdan xoxlagan xabaringizni bizning botimizda reklama qilishingiz mumkin,
Premium xizmatidan foydalandangiz botimizga buyuruq berilsa sizning reklamangiz forward qilib foydalanuvchiga yuboriladi.</i>
	
	📂 Bu xizmatdan foydalanishni xoxlaysizmi?
",json_encode([
	'inline_keyboard'=>[
	[['text'=>"✅ Boshlash",'callback_data'=>"ads=startForward"]],
	[['text'=>"◀️ Orqaga",'callback_data'=>"adsBack"]],
	]]));
}
}
}
}
}

if($data=="adsBack" and joinchat($chat_id)==1 and $user_lang1==null){
edit($chat_id,$message_id,"🔥 Reklama bo’limi kerakli menuni tanlang",json_encode([
"inline_keyboard"=>[
[['text'=>"➕ Reklama qo’shish",'callback_data'=>"ads=plus"]],
[['text'=>"📂 Mening reklamam",'callback_data'=>"ads=my_rek"]],
]]));
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

$bot_type=file_get_contents("uzb/$chat_id/bot.dat");
include("til/en.php");
if($text == "/langen") {
sms($cid,"🇺🇸 Bot language switched to English", $menu_en);
file_put_contents("user/$cid.lang","en");
}
if($text == "/languz") {
sms($cid,"🇺🇿 Bot tili o’zbek tiliga o’zgardi.",$menu);
file_put_contents("user/$cid.lang","");
}


$step=file_get_contents("fayl/$cid/step.txt");

if(mb_stripos($text,"/start $from_id")!==false and $user_lang==null and $text!="/start"){
bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"❗Siz botga o'zingizni taklif qila olmaysiz!",
      'parse_mode'=>'html',
      'reply_markup'=>$menu,
      ]);
}else{
      $idref = "pul/$ex.db";
      $idref2 = file_get_contents($idref);
      $id = "$from_id\n";
      $handle = fopen($idref, 'a+');
      fwrite($handle, $id);
      fclose($handle);
if(mb_stripos($idref2,$cid) !== false ){
}else{
$pub=explode(" ",$text);
$ex=$pub[1];
file_put_contents("ref/$cid/keldi.txt","$ex");
if($ex!=null and is_numeric($ex)){
sms($cid,"🔥 Sizni $ex taklif etdi.",$m);
}
if(joinchat($cid)==1){
}
}
}



addstat($cid);
$panel=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"💵 Hisobni tekshirish"]],
[['text'=>"🔴 Bloklash"], ['text'=>"🟢 Blokdan olish"]],
[['text'=>"➕ MUB berish"],['text'=>"➖ MUB ayirish"]],
[['text'=>"📊 Statistika"], ['text'=>"📂  Xabar yuborish"]],
[['text'=>"/start"]],
]
]);

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
if($text=="/panel" and $cid==$admin){
sms($cid,$text,$panel);
}

$n=json_encode([
'inline_keyboard'=>[
[['text'=>"🚫 Bekor qilish",'callback_data'=>"bekor_qilish"]],
]
]);
if($text=="➕ MUB berish" and $cid==$admin){
sms($cid,"🆔 Foydalanuvchi ID raqamini kiriting:",$n);
file_put_contents("fayl/$cid/step.txt","sendMUB");
}

if($for){
$text=$for_id;
}
if($step=="sendMUB" and is_numeric($text) and $cid==$admin){
sms($cid,"
🆔 Foydalanuvchi ID: $text
💵 Qancha MUB berish kerak?:",$n);
file_put_contents("fayl/$cid/step.txt","sendMUB2");
file_put_contents("fayl/$cid/send.id","$text");
}
$sendID=file_get_contents("fayl/$cid/send.id");
if($step=="sendMUB2" and is_numeric($text)and $cid==$admin){
sms($cid,"
🆔 Foydalanuvchi ID: $sendID
💵 To’lov miqdori: $text MUB
🖥 Xolati: to’landi",$panel);
$se=file_get_contents("pul/$sendID.txt");
$se=$se+$text;
file_put_contents("pul/$sendID.txt",$se);
unlink("fayl/$cid/step.txt");
unlink("fayl/$cid/send.id");
}


if($text=="➖ MUB ayirish" and $cid==$admin){
sms($cid,"🆔 Foydalanuvchi ID raqamini kiriting:",$n);
file_put_contents("fayl/$cid/step.txt","outMUB");
}
if($for){
$text=$for_id;
}
if($step=="outMUB" and is_numeric($text) and $cid==$admin){
sms($cid,"
🆔 Foydalanuvchi ID: $text
💵 Qancha MUB ayirish kerak?:",$n);
file_put_contents("fayl/$cid/step.txt","outMUB2");
file_put_contents("fayl/$cid/send.id","$text");
}
$sendID=file_get_contents("fayl/$cid/send.id");
if($step=="outMUB2" and is_numeric($text)and $cid==$admin){
sms($cid,"
🆔 Foydalanuvchi ID: $sendID
💵 MUB miqdori: $text MUB
🖥 Xolati: ayirildi",$panel);
$se=file_get_contents("pul/$sendID.txt");
$se=$se-$text;
file_put_contents("pul/$sendID.txt",$se);
unlink("fayl/$cid/step.txt");
unlink("fayl/$cid/send.id");
}

$keys=get("keys.txt");

if((stripos($data,"del=")!==false and  $user_lang1==null and joinchat($chat_id)==1)){
$b_name=explode("=",$data)[1];
$bots=get("user/$chat_id/user.txt");
if(mb_stripos($bots,$b_name)!==false){
edit($chat_id,$message_id,"⚠️ Sizning @$b_name botingiz o’chirildi.",json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
$keys=get("keys.txt");
$_k=get("uzb/$chat_id/$b_name-token.txt");
$kp = str_replace("\n".$_k."","",$keys);
put("keys.txt","$kp");

$k = str_replace("\n".$b_name."","",$bots);
put("user/$chat_id/user.txt",$k);
rmdirPro("baza/$chat_id/$chat_id-$b_name");
$bcount=get("uzb/$chat_id/soni.txt");
put("uzb/$chat_id/soni.txt",$bcount-1);
unlink("uzb/$chat_id/$b_name-token.txt");
unlink("uzb/$chat_id/$b_name-bot.dat");
}
}

if($text=="🗑 Botni o’chirish" and $cid==$admin){
sms($cid,"$text uchun ID raqamini yuboring",$n);
file_put_contents("fayl/$cid/step.txt","bot_del");
}
if($step=="bot_del" and is_numeric($text)){
$eb=file_get_contents("user/$text/user.txt");
if($eb!=null){
sms($text,"⚠️ Sizning botingiz ochirib yuborildi.",null);
rmdirPro("baza/$text");
unlink("uzb/$text/bot.dat");
unlink("uzb/$text/soni.txt");
unlink("user/$text/bde.tcc");
unlink("user/$text/user.txt");
unlink("user/$text/editoken.txt");
unlink("fayl/$cid/kun.json");
sms($cid,"✅ O’chirildi",$panel);
unlink("fayl/$cid/step.txt");
}else{
sms($cid,"📂 Foydalanuvchi bot yaratmagan",$panel);
unlink("fayl/$cid/step.txt");
}
}

if($text=="💵 Hisobni tekshirish" and $cid==$admin){
sms($cid,"🆔 ID yuboring",$n);
put("fayl/$cid/step.txt","scaner");
}
if($step=="scaner" and is_numeric($text)){

$p=get("pul/$text.txt");
sms($cid,"$p MUB",$panel);
unlink("fayl/$cid/step.txt");
}

$bot_types=file_get_contents("uzb/$cid/bot.dat");

$hp=json_encode([
'inline_keyboard'=>[
[['text'=>"📚 Qoidalar",'callback_data'=>"qoida"]],
[['text'=>"🔥 Yangiliklar",'url'=>"https://t.me/MegaBuilderi"],['text'=>"👨‍💻 Dasturchi",'url'=>"https://t.me/WebWolfs"]],
[['text'=>"‼️ Texnik yordam",'url'=>"tg://user?id=$admin"]],
]
]);
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
if($data=="qoida" and  $user_lang1==null and joinchat($chat_id)==1){
edit($chat_id,$message_id,"📚 Qoidalar:

1. Ochgan botingizdan foydalanmasangiz botni ochmang,

2. Ochgan botingizdan firibgarlik (foydalanuvchilarni aldash tolovlarni vaqtida bajarmaslik va boshqalar) yo’lida foydalanmang,

3. Adminga murojaat etganingizda  muammoingizni tushunarli qilib yuboring (cheklanmagan miqdorda xabar yuborishingiz mumkin),

<b> Ushbu qoidalarni buzishga aslo xarakat qilmang aks xolda siz bot tomonidan bloklanasiz</b>",$hp);
}

if($text=="📋 Ma'lumotlar" and $user_lang==null and joinchat($cid)==1){
sms($cid,"👉 Quyidagilarni tanlang:",$hp);
}



$obunachibotlar=json_encode([
'inline_keyboard'=>[
[['text'=>"🤖 Obunachi bot (avto)",'callback_data'=>"create=obunachiPro=🤖 Obunachi bot (avto)"]],
[['text'=>"🔒 Пиар бот (UZ)",'callback_data'=>"create=piar_uz=🔒 Пиар бот (UZ)"]],
[['text'=>"🔒 Пиар бот (RU)",'callback_data'=>"create=piar_ru=🔒 Пиар бот (RU)"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]);

$konstruktorbot=json_encode([
'inline_keyboard'=>[
[['text'=>"🔒 MegaBuilderBot (v0.1)",'callback_data'=>"create=MegaBuilderBot"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]);

$biznesbotlar=json_encode([
'inline_keyboard'=>[
[['text'=>"🤖 PUL Bot",'callback_data'=>"create=pulbot=🤖 PUL Bot"]],
[['text'=>"🤖 RUBL Bot",'callback_data'=>"create=rubl=🤖 RUBL Bot"]],
[['text'=>"🤖 RUBL Bot 🇺🇿 (avto)",'callback_data'=>"create=rubl_uz=🤖 RUBL Bot 🇺🇿 (avto)"]],
[['text'=>"🤖 RUBL Bot 🇷🇺 (avto)",'callback_data'=>"create=rubl_ru=🤖 RUBL Bot 🇷🇺 (avto)"]],
[['text'=>"🤖 MB Bot",'callback_data'=>"create=mbbot=🤖 MB Bot"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]);

$gamebotlar=json_encode([
'inline_keyboard'=>[
[['text'=>"🤖 UC ishlash Bot",'callback_data'=>"create=ucbot=🤖 UC ishlash Bot"]],
[['text'=>"🤖 BC ishlash Bot",'callback_data'=>"create=bcbot=🤖 BC ishlash Bot"]],
[['text'=>"🔒 Donate Bot",'callback_data'=>"create=ucxaridbot=🔒 Donate Bot"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]);
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
$reklamabot=json_encode([
'inline_keyboard'=>[
[['text'=>"🤖 Reklama almashuv bot",'callback_data'=>"create=reklamabot=🤖 Reklama almashuv bot"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]);

$taklif=json_encode([
'inline_keyboard'=>[
[['text'=>"◀ Orqaga",'callback_data'=>"taklif"]],
]
]);

$managebots=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"➕ Bot ochish"],['text'=>"⚙️ Botlarni sozlash"]],
[['text'=>"◀ Orqaga"]],
]
]);

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
 
if((mb_stripos($data,"set=")!==false and $user_lang1==null and joinchat($chat_id)==1 and $userb!=null)){
$se=explode("=",$data)[1];
$ex=explode("=",$data)[2];
$bname=explode("=",$data)[3];
if($se=="del"){
edit($chat_id,$message_id,"
👉 Sizning botingiz: <b>@$bname</b>

🗑️ Botni o’chirmoqchimisiz?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Ha",'callback_data'=>"del=$bname"],['text'=>"❌ Yoq",'callback_data'=>"orqa1"]],
]
]));
}elseif($se=="kesh"){
$res=json_decode(file_get_contents("https://yovuz-coder.uz/bot-kesh?token=$ex"),1);
$ok=$res["webhook_kesh_info"][0];
bot('answerCallbackQuery', [
'callback_query_id'=>$cqid,
'text'=>"
🗑️ Joriy webhook: ".$ok["delete_webhook"]."
⚙️ Serverga yuklash: ".$ok["webhook_update"]."
⚙️ Webhook yangilash: ".$ok["set_webhook"]."",'show_alert'=>true,
]);
}
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

if((mb_stripos($data,"set=")!==false and $user_lang1==null and joinchat($chat_id)==1 and $userb!=null)){
$es=explode("=",$data)[1];
$bot_type=explode("=",$data)[2];
$userb=explode("=",$data)[3];
if($es=="upd" and $bot_type=="seen"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🔥 Kuting botingiz yangilanmoqda..",
'show_alert'=>true,
]);
sleep(2);
edit($chat_id,$message_id,"⭐ Botingiz muvaffaqiyatli yangilandi.",json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
mkdir("baza/$chat_id/$chat_id-$userb");
unlink("baza/$chat_id/$chat_id-$userb/seenbot.php");
$btoken = file_get_contents("uzb/$chat_id/$userb-token.txt");
$reg=file_get_contents("botlaruz/seenbot.php");
$reg = str_replace("[**TOKEN**]",$btoken,$reg);
$reg = str_replace("[*ADMIN*]",$chat_id,$reg);
$reg = str_replace("[**BUSER**]",$userb,$reg);
file_put_contents("baza/$chat_id/$chat_id-$userb/seenbot.php","$reg");
}else{
if($es=="upd" and $bot_type=="rubl"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🔥 Kuting botingiz yangilanmoqda..",
'show_alert'=>true,
]);
sleep(2);
edit($chat_id,$message_id,"⭐ Botingiz muvaffaqiyatli yangilandi.",json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
mkdir("baza/$chat_id/$chat_id-$userb");
unlink("baza/$chat_id/$chat_id-$userb/rublbot.php");
$btoken = file_get_contents("uzb/$chat_id/$userb-token.txt");
$reg=file_get_contents("botlaruz/rublbot.php");
$reg=str_replace("[**TOKEN**]",$btoken,$reg);
$reg=str_replace("[*ADMIN*]",$chat_id,$reg);
$reg=str_replace("[**USER**]",$calluser,$reg);
$reg=str_replace("[**BUSER**]",$userb,$reg);
file_put_contents("baza/$chat_id/$chat_id-$userb/rublbot.php","$reg");

}else{
if($es=="upd" and $bot_type=="ucbot"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🔥 Kuting botingiz yangilanmoqda..",
'show_alert'=>true,
]);
sleep(2);
edit($chat_id,$message_id,"⭐ Botingiz muvaffaqiyatli yangilandi.",json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
mkdir("baza/$chat_id/$chat_id-$userb");
unlink("baza/$chat_id/$chat_id-$userb/ucbot.php");
$btoken = file_get_contents("uzb/$chat_id/$userb-token.txt");
$reg=file_get_contents("botlaruz/ucbot.php");
$reg=str_replace("[**TOKEN**]",$btoken,$reg);
$reg=str_replace("[*ADMIN*]",$chat_id,$reg);
$reg=str_replace("[**USER**]",$calluser,$reg);
$reg=str_replace("[**BUSER**]",$userb,$reg);
file_put_contents("baza/$chat_id/$chat_id-$userb/ucbot.php","$reg");
}else{
if($es=="upd" and $bot_type=="bcbot"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🔥 Kuting botingiz yangilanmoqda..",
'show_alert'=>true,
]);
sleep(2);
edit($chat_id,$message_id,"⭐ Botingiz muvaffaqiyatli yangilandi.",json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
mkdir("baza/$chat_id/$chat_id-$userb");
unlink("baza/$chat_id/$chat_id-$userb/bcbot.php");
$btoken = file_get_contents("uzb/$chat_id/$userb-token.txt");
$reg=file_get_contents("botlaruz/bcbot.php");
$reg=str_replace("[**TOKEN**]",$btoken,$reg);
$reg=str_replace("[*ADMIN*]",$chat_id,$reg);
$reg=str_replace("[**USER**]",$calluser,$reg);
$reg=str_replace("[**BUSER**]",$userb,$reg);
file_put_contents("baza/$chat_id/$chat_id-$userb/bcbot.php","$reg");
}else{
if($es=="upd" and $bot_type=="mbbot"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🔥 Kuting botingiz yangilanmoqda..",
'show_alert'=>true,
]);
sleep(2);
edit($chat_id,$message_id,"⭐ Botingiz muvaffaqiyatli yangilandi.",json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
mkdir("baza/$chat_id/$chat_id-$userb");
unlink("baza/$chat_id/$chat_id-$userb/mbbot.php");
$btoken = file_get_contents("uzb/$chat_id/$userb-token.txt");
$reg=file_get_contents("botlaruz/mbbot.php");
$reg=str_replace("[**TOKEN**]",$btoken,$reg);
$reg=str_replace("[*ADMIN*]",$chat_id,$reg);
$reg=str_replace("[**USER**]",$calluser,$reg);
$reg=str_replace("[**BUSER**]",$userb,$reg);
file_put_contents("baza/$chat_id/$chat_id-$userb/mbbot.php","$reg");
}else{
if($es=="upd" and $bot_type=="savdo"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🔥 Kuting botingiz yangilanmoqda..",
'show_alert'=>true,
]);
sleep(2);
edit($chat_id,$message_id,"⭐ Botingiz muvaffaqiyatli yangilandi.",json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
mkdir("baza/$chat_id/$chat_id-$userb");
unlink("baza/$chat_id/$chat_id-$userb/pubg.php");
$btoken = file_get_contents("uzb/$chat_id/$userb-token.txt");
$kanal2 = file_get_contents("fayl/$chat_id/kanlim.txt");
$reg=file_get_contents("botlaruz/savdobot.php");
$reg=str_replace("[*TOKEN*]",$btoken,$reg);
$reg=str_replace("[*ADMIN*]",$chat_id,$reg);
$reg=str_replace("[**BOT**]",$userb,$reg);

file_put_contents("baza/$chat_id/$chat_id-$userb/savdobot.php","$reg");
}else{
if($es=="upd" and $bot_type=="pul"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🔥 Kuting botingiz yangilanmoqda..",
'show_alert'=>true,
]);
sleep(2);
edit($chat_id,$message_id,"⭐ Botingiz muvaffaqiyatli yangilandi.",json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
mkdir("baza/$chat_id/$chat_id-$userb");
unlink("baza/$chat_id/$chat_id-$userb/pulbot.php");
$btoken = file_get_contents("uzb/$chat_id/$userb-token.txt");
$reg=file_get_contents("botlaruz/pulbot.php");
$reg=str_replace("[**TOKEN**]",$btoken,$reg);
$reg=str_replace("[*ADMIN*]",$chat_id,$reg);
$reg=str_replace("[**USER**]",$calluser,$reg);
$reg=str_replace("[**BUSER**]",$userb,$reg);
file_put_contents("baza/$chat_id/$chat_id-$userb/pulbot.php","$reg");
}else{
if($es=="upd" and $bot_type=="usa"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🔥 Kuting botingiz yangilanmoqda..",
'show_alert'=>true,
]);
sleep(2);
edit($chat_id,$message_id,"⭐ Botingiz muvaffaqiyatli yangilandi.",json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
mkdir("baza/$chat_id/$chat_id-$userb");
unlink("baza/$chat_id/$chat_id-$userb/usabot.php");
$btoken = file_get_contents("uzb/$chat_id/$userb/token.txt");
$usaok=file_get_contents("fayl/$chat_id/usa.dd");
$reg=file_get_contents("botlaruz/usabot.php");
$reg=str_replace("[**TOKEN**]",$btoken,$reg);
$reg=str_replace("[*ADMIN*]",$chat_id,$reg);
$reg=str_replace("[**USER**]",$calluser,$reg);
$reg=str_replace("[**BUSER**]",$userb,$reg);
$reg = str_replace("[*RAQAM*]",$usaok,$reg);
file_put_contents("baza/$chat_id/$chat_id-$userb/usabot.php","$reg");
}else{
if($es=="upd" and $bot_type=="rus_avto"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🔥 Kuting botingiz yangilanmoqda..",
'show_alert'=>true,
]);
sleep(2);
edit($chat_id,$message_id,"⭐ Botingiz muvaffaqiyatli yangilandi.",json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
mkdir("baza/$chat_id/$chat_id-$userb");
unlink("baza/$chat_id/$chat_id-$userb/rusbot.php");
$btoken = file_get_contents("uzb/$chat_id/$userb-token.txt");
$reg=file_get_contents("botlaruz/rusbot.php");
$reg=str_replace("[**TOKEN**]",$btoken,$reg);
$reg=str_replace("[*ADMIN*]",$chat_id,$reg);
$reg=str_replace("[**USER**]",$calluser,$reg);
$reg=str_replace("[**BUSER**]",$userb,$reg);
file_put_contents("baza/$chat_id/$chat_id-$userb/rusbot.php","$reg");
}else{
if($es=="upd" and $bot_type=="uzb_avto"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🔥 Kuting botingiz yangilanmoqda..",
'show_alert'=>true,
]);
sleep(2);
edit($chat_id,$message_id,"⭐ Botingiz muvaffaqiyatli yangilandi.",json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
mkdir("baza/$chat_id/$chat_id-$userb");
unlink("baza/$chat_id/$chat_id-$userb/uzbrubl.php");
$btoken = file_get_contents("uzb/$chat_id/$userb-token.txt");
$reg=file_get_contents("botlaruz/uzbrubl.php");
$reg=str_replace("[**TOKEN**]",$btoken,$reg);
$reg=str_replace("[*ADMIN*]",$chat_id,$reg);
$reg=str_replace("[**USER**]",$calluser,$reg);
$reg=str_replace("[**BUSER**]",$userb,$reg);
file_put_contents("baza/$chat_id/$chat_id-$userb/uzbrubl.php","$reg");
}
}
}
}
}
}
}
}
}
}
}

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

if((mb_stripos($data,"settings=")!==false and $user_lang1==null and joinchat($chat_id)==1)){
$b_type=explode("=",$data)[1];
$b_name=explode("=",$data)[2];
if($b_type=="seen"){
$turi="🤖 Obunachi bot (avto)";
}
if($b_type=="seenV1"){
$turi="🤖 Obunachi bot (V0.1)";
}
if($b_type=="rubl"){
$turi="🤖 RUBL Bot";
}
if($b_type=="pul"){
$turi="🤖 PUL Bot";
}
if($b_type=="ucbot"){
$turi="🤖 UC Bot";
}
if($b_type=="bcbot"){
$turi="🤖 BC Bot";
}
if($b_type=="uzb_avto"){
$turi="🤖 RUBL Bot 🇺🇿";
}
if($b_type=="rus_avto"){
$turi="🤖 RUBL Bot 🇷🇺";
}
if($b_type=="usa"){
$turi="🤖 USA Bot";
}
if($b_type=="mbbot"){
$turi="🤖 MB Bot";
}
if($b_type=="savdo"){
$turi="🤖 SAVDO Bot";
}
if($b_type=="reklamabot"){
$turi="🤖 Reklama almashuv Bot";
}
$_k=get("uzb/$chat_id/$b_name-token.txt");
edit($chat_id,$message_id,"
🤖 <b>@$b_name</b> boti tanlandi

📂 Bot turi: <b>$turi</b>
⚙️ Bot tokeni: <code><b>$_k</b></code>

 📂 Kerakli tugmani tanlang:",json_encode([
'inline_keyboard'=>[
[['text'=>"📂 Keshni tozalash",'callback_data'=>"set=kesh=$_k"]],
[['text'=>"⬆️ Yangilash",'callback_data'=>"set=upd=$b_type=$b_name"],['text'=>"👤 O’tkazish",'callback_data'=>"set=send=$b_type=$b_name"]],
[['text'=>"🗑️ O'chirish",'callback_data'=>"set=del=$b_type=$b_name"]],
[['text'=>"⬅️ Orqaga",'callback_data'=>"orqa1"]],
]
]));
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

if($data=="orqa1" and $user_lang1==null and joinchat($chat_id)==1){
if($userb!=null){
$ids = explode("\n",$userb);
$soni = substr_count($userb,"\n");
$ids = explode("\n",$userb);
foreach($ids as $id){
$keyboards = [];
$k=[];
for ($for = 1; $for <= $soni; $for++) {
$bname=$ids[$for];
$bot_type=get("uzb/$chat_id/$bname-bot.dat");
$keyboards[]=["text"=>"⚙️$for. @$bname","callback_data"=>"settings=$bot_type=$bname"];
}
$keyboard2=array_chunk($keyboards, 1);
$keyboard=json_encode([
'inline_keyboard'=>$keyboard2,
]);
}
edit($chat_id,$message_id,"
🖥 Botlarni sozlash bo’limi

🤖 Kerakli botni tanlang:",$keyboard);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"📂 Sizda xechqanday bot topilmadi",'show_alert'=>true,
]);
edit($chat_id,$message_id,"📁 Sizda botlar mavjud emas:",json_encode([
'inline_keyboard'=>[
[['text'=>"➕ Bot qo‘shish",'callback_data'=>"orqa"]],
]]));
}
}

$servis=json_encode([
'inline_keyboard'=>[
//[['text'=>"📂 Konstruktor botlar (0/1)",'callback_data'=>"bots=konstruktorbot"]],
[['text'=>"👤 Nakrutka botlar (1/3)",'callback_data'=>"bots=obunachibotlar=👤 Nakrutka botlar"]],
[['text'=>"🤝 Reklama almashuv botlar (1/1)",'callback_data'=>"bots=reklamabotlar=🤝 Reklama almashuv botlar"]],
[['text'=>"💵 Biznes botlar (5/5)",'callback_data'=>"bots=biznesbotlar=💵 Biznes botlar"]],
[['text'=>"🎮 O'yinlar uchun botlar (2/3)",'callback_data'=>"bots=gamebotlar=🎮 O'yinlar uchun botlar"]],
[['text'=>"🛍 Buyurtma qilish",'callback_data'=>"bots=buyurtma"]],
]
]);

$yordam=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔥 Bot yangiliklari"],['text'=>"📋 Ma'lumotlar"]],
[['text'=>"👨‍💻 Dasturchilar"],['text'=>"📞 Murojaat"]],
[['text'=>"◀ Orqaga"]],
]
]);

$earn=json_encode([
'inline_keyboard'=>[
[['text'=>"🔥 MUBEarnBot",'url'=>"https://t.me/MUBEarnBot"],['text'=>"⭐ Bonus 10 MUB",'callback_data'=>"client=bonus=10"]],
[['text'=>"💵 To‘lov qilish",'callback_data'=>"client=tolov"],['text'=>"📎 Taklifnoma",'callback_data'=>"client=ref"]],
[['text'=>"➡️ Orqaga",'callback_data'=>"client=kabinet"]],
]
]);
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
$client=json_encode([
'inline_keyboard'=>[
[['text'=>"➕ MUB ishlash",'callback_data'=>"client=add"],['text'=>"🔄 MUB o'tkazish",'callback_data'=>"client=send"]],
//[['text'=>"⚙ Sozlamalar",'callback_data'=>"client=setting"]],
]
]);

if((mb_stripos($data,"client=")!==false and $user_lang1==null and joinchat($chat_id)==1)){
$ed=explode("=",$data)[1];
if($ed=="add" and joinchat($chat_id)==1){
edit($chat_id,$message_id,"
➕ MUB ishlash bo’limi

📂 Qaysi usul orqali MUB ishlashni xoxlaysiz:",$earn);
}else{
if($ed=="ref"){
edit($chat_id,$message_id,"
📎 Taklifnoma orqali MUB ishlash:

📂 Sizning taklifnomangiz: https://t.me/MegaBuilderBot?start=$chat_id

👥 1 ta taklif uchun 15 MUB olasiz",$taklif);
}else{
if($ed=="bonus"){
date_default_timezone_set("Asia/Tashkent");
$t=date("d");
$d=file_get_contents("pul/$chat_id.date");
if($d!=$t){
$de=explode("=",$data)[2];
edit($chat_id,$message_id,"🔥 Sizga <b>$de</b> MUB berildi.",$taklif);
$e=file_get_contents("pul/$chat_id.txt");
$e=$e+$de;
file_put_contents("pul/$chat_id.txt",$e);
file_put_contents("pul/$chat_id.date",$t);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗Siz kunlik bonus olgansiz.",'show_alert'=>true,
]);
}
}else{
if($ed=="send"){
del($chat_id,$message_id);
sms($chat_id,"🔄 MUB ni o’tkazish uchun foydalanuvchining ID raqamini yuboring:",$orqa);
file_put_contents("fayl/$chat_id/step.txt","send_1");
}else{
if($ed=="kabinet"){
$e=file_get_contents("pul/$chat_id.txt");
$rek_pul=file_get_contents("ads/$chat_id.pul");
edit($chat_id,$message_id,"👔 Kabinetingizga xush kelibsiz
💵 Asosiy hisob: $e MUB

🔥 Reklama uchun hisob: $rek_pul so'm",$client);
}else{
if($ed=="tolov"){
edit($chat_id,$message_id,"
👉 Kerakli to‘lov turini tanlang:

Avtomatik tolov bor:▫️
Avtomatik tolov yoq:▪️",json_encode([
'inline_keyboard'=>[
[['text'=>"▫️ Payme [ HUMO ]",'callback_data'=>"tolov=HUMO"]],
[['text'=>"▫️ Payme [ VISA ]",'callback_data'=>"tolov=VISA"]],
//[['text'=>"▫️ Payme [ HAMYON ]",'callback_data'=>"tolov=HAMYON"]],
//[['text'=>"▫️ Qiwi [ HAMYON ]",'callback_data'=>"tolov=QIWI"]],
//[['text'=>"▪️ Payeer [ HAMYON ]",'callback_data'=>"tolov=PAYEER"]],
//[['text'=>"Kirish",'web_app'=>['url'=>"https://apiseen.uz/"]]],
[['text'=>"⬅️ Orqaga",'callback_data'=>"client=add"]],
]]));
}
}
}
}
}
}
}

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

if((mb_stripos($data,"tolov=")!==false and $user_lang1==null and joinchat($chat_id)==1)){
$ed=explode("=",$data)[1];
if($ed=="HUMO"){
del($chat_id,$message_id);
sms($chat_id,"
🔑 To‘lov tizimi: <b>▫️ Payme [HUMO]</b>

🔽 Minimal: 1'000 so‘m
🔼 Maksimal: 3'000'000 so‘m
💵 To‘lov miqdorini kiriting:",$orqa);
file_put_contents("fayl/$chat_id/step.txt","humo");
}elseif($ed=="VISA"){
del($chat_id,$message_id);
sms($chat_id,"
🔑 To‘lov tizimi: <b>▫️ Payme [VISA]</b>

🔽 Minimal: 1'000 so‘m
🔼 Maksimal: 3'000'000 so‘m
💵 To‘lov miqdorini kiriting:",$orqa);
file_put_contents("fayl/$chat_id/step.txt","visa");
}elseif($ed=="HAMYON"){
del($chat_id,$message_id);
sms($chat_id,"
🔑 To‘lov tizimi: <b> ▫️ Payme [HAMYON]</b>

🔽 Minimal: 1'000 so‘m
🔼 Maksimal: 3'000'000 so‘m
💵 To‘lov miqdorini kiriting:",$orqa);
file_put_contents("fayl/$chat_id/step.txt","hamyon");
}elseif($ed=="QIWI"){
del($chat_id,$message_id);
sms($chat_id,"
🔑 To‘lov tizimi: <b>▫️ Qiwi [HAMYON]</b>

🔽 Minimal:  5₽
🔼 Maksimal: 60'000₽
💵 To‘lov miqdorini kiriting:",$orqa);
file_put_contents("fayl/$chat_id/step.txt","qiwi");
}elseif($ed=="PAYEER"){
del($chat_id,$message_id);
sms($chat_id,"
🔑 To‘lov tizimi: <b>▪️ Payeer [HAMYON]</b>

🔽 Minimal: 5₽
🔼 Maksimal:   1'345'000₽
💵 To‘lov miqdorini kiriting:",$orqa);
file_put_contents("fayl/$chat_id/step.txt","payeer");
}
}

if($text=="◀ Orqaga" and $user_lang==null and joinchat($cid)==1 and ($step=="humo" or $step=="visa" or $step=="qiwi" or $step=="payeer" or $step=="hamyon" or $step=="send_2")){
sms($cid,"👉 Kerakli menuni tanlang:",$menu);
unlink("fayl/$cid/step.txt");
exit;
}


if($step=="humo"){
if($text>=1000 and $text<=3000000){
$check=$text/180;
$checkout=json_decode(file_get_contents("https://makerbot.uz/payme?action=create&card=62fc3df2cad1c751634b6173&sum=$text&back=https://t.me/MegaBuilderBot?start=&desc=@MegaBuilderBot"),true);
$checkout=$checkout['_result']['_details']['_pay_url'];  
$checkid=str_replace("https://checkout.paycom.uz/",'',$checkout);
$check=floor($check);
sms($cid,"
💵 To‘lov miqdori: $text so‘m 
📦 Qabul qilinadi: $check MUB",json_encode([
'inline_keyboard'=>[
[['text'=>"💵 To‘lovga o‘tish",'url'=>"$checkout"]],
[['text'=>"💵 Shuyerda to‘lash",'web_app'=>['url'=>"$checkout"]]],
[['text'=>"✅ To‘lov qilindi",'callback_data'=>"checkout=$checkid=$check"]],
]]));
}else{
sms($cid,"
🔽 Minimal: 1'000 so‘m
🔼 Maksimal: 3'000'000 so‘m 

⚠️ Qaytadan urinib koring",$ort);
}
}elseif($step=="visa"){
if($text>=1000 and $text<=3000000){
$check=$text/180;
$checkout=json_decode(file_get_contents("https://makerbot.uz/payme?action=create&card=62fbfc05cad1c751636ccbc6&sum=$text&back=https://t.me/MegaBuilderBot?start=&desc=@MegaBuilderBot"),true);
$checkout=$checkout['_result']['_details']['_pay_url'];  
$checkid=str_replace("https://checkout.paycom.uz/",'',$checkout);
$check=floor($check);
sms($cid,"
💵 To‘lov miqdori: $text so‘m 
📦 Qabul qilinadi: $check MUB",json_encode([
'inline_keyboard'=>[
[['text'=>"💵 To‘lovga o‘tish",'url'=>"$checkout"]],
[['text'=>"💵 Shuyerda to‘lash",'web_app'=>['url'=>"$checkout"]]],
[['text'=>"✅ To‘lov qilindi",'callback_data'=>"checkout=$checkid=$check"]],
]]));
}else{
sms($cid,"
🔽 Minimal: 1'000 so‘m
🔼 Maksimal: 3'000'000 so‘m 

⚠️ Qaytadan urinib koring",$ort);
}
}elseif($step=="hamyon"){
if($text>=1000 and $text<=3000000){
$check=$text/180;
$checkout=json_decode(file_get_contents("https://makerbot.uz/payme?action=create&card=62fbcb77cad1c7516372b617&sum=$text&back=https://t.me/MegaBuilderBot?start=&desc=@MegaBuilderBot"),true);
$checkout=$checkout['_result']['_details']['_pay_url'];  
$checkid=str_replace("https://checkout.paycom.uz/",'',$checkout);
$check=floor($check);
sms($cid,"
💵 To‘lov miqdori: $text so‘m
📦 Qabul qilinadi: $check MUB",json_encode([
'inline_keyboard'=>[
[['text'=>"💵 To‘lovga o‘tish",'url'=>"$checkout"]],
[['text'=>"💵 Shuyerda to‘lash",'web_app'=>['url'=>"$checkout"]]],
[['text'=>"✅ To‘lov qilindi",'callback_data'=>"checkout=$checkid=$check"]],
]]));
}else{
sms($cid,"
🔽 Minimal: 1'000 so‘m
🔼 Maksimal: 3'000'000 so‘m 

⚠️ Qaytadan urinib koring",$ort);
}
}

if((mb_stripos($data,"checkout=")!==false and $user_lang1==null and joinchat($chat_id)==1)){
$checkid=explode("=",$data)[1];
$plus=explode("=",$data)[2];
$checkids=file_get_contents("payments.txt");
if(mb_stripos($checkids,$checkid)!==false){
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"⚠️ To‘lov bajarilgan.",
'show_alert'=>true,
]);
exit();
}else{
$js=json_decode(file_get_contents("https://makerbot.uz/payme?id=$checkid&action=info"),true);
$pay_time=$js['mess'];
if(empty($pay_time)){
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"⚠️ To‘lov bajarilmagan.",
'show_alert'=>true,
]);
}else{
del($chat_id,$message_id);
sms($chat_id,"
✅ To‘lov qabul qilindi 
💰 Hisobingizga +$plus MUB qo‘shildi",json_encode([
'inline_keyboard'=>[
[['text'=>"➡️ Orqaga",'callback_data'=>"client=add"]],
]
]));
$p=file_get_contents("pul/$chat_id.txt");
$p=$p+$plus;
file_put_contents("pul/$chat_id.txt",$p);
file_put_contents("payments.txt","\n".$checkid,FILE_APPEND);
exit();
}
}
}

if($step=="send_1"){
if($text=="◀ Orqaga" and $step=="send_1") {
sms($cid,"
👔 Kabinetingizga xush kelibsiz
💵 Asosiy hisob: $pul MUB

🔥 Reklama uchun hisob: $rek_pul so'm",$client);
unlink("fayl/$cid/step.txt");
return false;
}
if(is_numeric($text)){
if(file_exists("pul/".$text.".txt")){
sms($cid,"
🆔 Foydalanuvchi ID: $text
🔄 Qancha MUB o’tkazmoqchisiz?

🔽 Minimal: 15 MUB
🔼 Maksimal: 1000000 MUB 
",$orqa);
file_put_contents("fayl/$cid/step.txt","send_2");
file_put_contents("fayl/$cid/fiid.txt","$text");
}else{
sms($cid,"
❗ Foydalanuvchi topilmadi

⚠️ Qaytadan urinib koring",$orqa);
}
}else{
sms($cid,"❗ Raqamlar kiriting",$orqa);
}
}

if($step=="send_2" and is_numeric($text)){
$text=floor($text);
if($text>=15 and $text<=1000000){
$pul=file_get_contents("pul/$cid.txt");
if($pul>=$text){
$fiid=file_get_contents("fayl/$cid/fiid.txt");
sms($cid,"
🔄 O‘tkazma miqdori: $text MUB
📦 Qabul qilinadi: $text MUB

🆔 Foydalanuvchi ID: $fiid
",json_encode([
'inline_keyboard'=>[
[['text'=>"🔄 O‘tkazmani bajarish",'callback_data'=>"perevod=$text=$fiid"]],
]]));
}else{
sms($cid,"
❗O‘tkazmani bajarib bo‘lmadi

⚠️ Qaytadan urinib koring",$orqa);
}
}else{
sms($cid,"
🔽 Minimal: 15 MUB
🔼 Maksimal: 10000000 MUB 

⚠️ Qaytadan urinib koring",$orqa);
}
}

if((mb_stripos($data,"perevod=")!==false and $user_lang1==null and joinchat($chat_id)==1)){
$ed=explode("=",$data)[1];
$feed=explode("=",$data)[2];
$ed=floor($ed);
if($ed>=15 and $ed<=1000000){
$pul=file_get_contents("pul/$chat_id.txt");
if($pul>=$ed){
del($chat_id,$message_id);
sms($chat_id,"⭐ O'tkazma jarayoni tugadi.",json_encode([
'inline_keyboard'=>[
[['text'=>"➡️ Orqaga",'callback_data'=>"client=add"]],
]
]));
$ism=bot('getChat',['chat_id'=>$chat_id])->result->first_name;
sms($feed,"🎯 Sizga <b>$ism</b> foydalanuvchi $ed MUB o‘tkazdi",$menu);
$fepul=file_get_contents("pul/".$feed.".txt");
$fepul=$ed+$fepul;
file_put_contents("pul/".$feed.".txt",$fepul);

$fpul=file_get_contents("pul/".$chat_id.".txt");
$ffpul=$fpul-$ed;
file_put_contents("pul/".$chat_id.".txt",$ffpul);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"
❗O‘tkazmani bajarib bo‘lmadi

⚠️ Qaytadan urinib koring",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"
🔽 Minimal: 15 MUB
🔼 Maksimal: 10000000 MUB 

⚠️ Qaytadan urinib koring",'show_alert'=>true,
]);
}
}

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

if($data=="taklif" and $user_lang1==null and joinchat($chat_id)==1){
edit($chat_id,$message_id,"
➕ MUB ishlash bo’limi

⬇️ Quyidagilarni tanlang:",$earn);
}

if($text=="🔖 Yordam" and joinchat($cid)==1){
sms($cid,"
🔖 Yordam bo’limi

🖥 Bot xaqida nimalarni bilmoqchisiz:",$yordam);
}

if($text=="🔥 Bot yangiliklari" and  $user_lang==null and joinchat($cid)==1){
sms($cid,"
🔥 Bot yangiliklari

📂  Bot yangiliklari: <b>@MegaBuilderi</> kanalida kuzatib boring.",$yordam);
}


if($text=="📞 Murojaat"and  $user_lang==null and joinchat($cid)==1){
sms($cid,"
⭐ Bizga savol va takliflar uchun murojaat etishingiz mumkin

👥 Qo’llab quvvatlash guruximiz: <b>@MegaBuilderi</>
👨‍💻 Dasturchi bilan bog’lanish <b>@MrDevUz</b>",json_encode([
'inline_keyboard'=>[
[['text'=>"📞 Murojaat qoldirish",'callback_data'=>"murojaat"]],
]
]));
}

if($data=="murojaat" and joinchat($chat_id)==1){
$phone=file_get_contents("fayl/$chat_id/phone.txt");
if($phone==null){
del($chat_id,$message_id);
sms($chat_id,"
📞 Murojaat yo’llash uchun bizga telifon raqamingizni yuborishingiz zarur.",json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📞 Raqamni yuborish",'request_contact'=>true]],
[['text'=>"◀ Orqaga"]],
]
]));
file_put_contents("fayl/$chat_id/step.txt","murojaat");
}else{
sms($chat_id,"
⭐ Xabar yuborishingiz mumkin

✅ Yuborishingiz mumkin (Rasm/Matn/Video)",$orqa);
put("fayl/$chat_id.step","murojaat_2");
}
}

if($step=="murojaat" and joinchat($cid)==1){
if($text=="◀ Orqaga" and $step=="murojaat"){
sms($cid,"
⭐ Bizga savol va takliflar uchun murojaat etishingiz mumkin

👥 Qo’llab quvvatlash guruximiz: @MegaBuilderi 
👨‍💻 Dasturchi bilan bog’lanish @MrDevUz",json_encode([
'inline_keyboard'=>[
[['text'=>"📞 Murojaat qoldirish",'callback_data'=>"murojaat"]],
]
]));
unlink("fayl/$cid/step.txt");
return false;
}
if($uid==$nomer_id){
if(mb_stripos($nomer_ph,"998")!==false){
}else{
sms($cid,"🇺🇿 O’zbekistondagi xisob raqamdan foydalaning",null);
return false;
}
sms($cid,"
⭐ Xabar yuborishingiz mumkin

✅ Yuborishingiz mumkin (Rasm/Matn/Video)",$orqa);
put("fayl/$cid/step.txt","murojaat_2");
put("fayl/$cid/phone.txt",$nomer_ph);
}else{
sms($cid,"❗ Faqat o’zingizning raqamingizni kiriting",json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📞 Raqamni yuborish",'request_contact'=>true]],
[['text'=>"◀ Orqaga"]],
]
]));
}
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
if($step=="murojaat_2" and (isset($text)) or (isset($message->photo)) or (isset($message->video))){
bot('forwardMessage',[
'chat_id'=>$admin,
'message_id'=>$message->message_id,
'from_chat_id'=>$cid,
]);
sms($cid,"✅ Murojaat adminga yetkazildi javob kuting",$menu);
unlink("fayl/$cid/step.txt");
}

if($data=="result" and  $user_lang1==null and joinchat($chat_id)==1){
$ref=file_get_contents("ref/$chat_id/keldi.txt");
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
sms($chat_id,"👋 @MegaBuilderBot konstruktor botiga xush kelibsiz botning menularini tanlang",$menu);
sms($ref,"🔥 Sizda 1 ta taklif bor va sizga 15 MUB taqdim etildi.",$menu);
$p=file_get_contents("pul/$ref.txt");
$p=$p+15;
file_put_contents("pul/$ref.txt",$p);
unlink("ref/$chat_id/keldi.txt");
}

if($text=="👔 Kabinet" and  $user_lang==null and joinchat($cid)==1){
sms($cid,"
👔 Kabinetingizga xush kelibsiz
💵  Asosiy hisob: $pul MUB

🔥 Reklama uchun hisob: $rek_pul so'm",$client);
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

if($text=="/start" and  $user_lang==null and joinchat($cid)==1 and (!mb_stripos($text,"/start ")!==false)){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
👋 @MegaBuilderBot konstruktor botiga xush kelibsiz botning menularini tanlang",
'reply_markup'=>$menu,
]);
}

if($text=="⚙️ Botlarni sozlash" and $user_lang==null and joinchat($cid)==1){
$userb=get("user/$cid/user.txt");
if($userb!=null){
$ids = explode("\n",$userb);
$soni = substr_count($userb,"\n");
$ids = explode("\n",$userb);
foreach($ids as $id){
$keyboards = [];
$k=[];
for ($for = 1; $for <= $soni; $for++) {
$bname=$ids[$for];
$bot_type=get("uzb/$cid/$bname-bot.dat");
$keyboards[]=["text"=>"⚙️$for. @$bname","callback_data"=>"settings=$bot_type=$bname"];
}
$keyboard2=array_chunk($keyboards, 1);
$keyboard=json_encode([
'inline_keyboard'=>$keyboard2,
]);
}
sms($cid,"
🖥 Botlarni sozlash bo’limi

🤖 Kerakli botni tanlang:",$keyboard);
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📂 Sizda xechqanday bot topilmadi",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"➕ Bot qo‘shish",'callback_data'=>"orqa"]],
]
])
]);
}
}

if($text=="🖥 Botlarni boshqarish" and  $user_lang==null and joinchat($cid)==1){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$text bo'limi 

🗄 Kerakli bolimni tanlang",
'reply_markup'=>$managebots,
]);
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
if($text=="◀ Orqaga" and  $user_lang==null and $step==null and joinchat($cid)==1){
sms($cid,"👉 Kerakli bo’limni tanlang:",$menu);
unlink("promokod/$cid.step");
unlink("fayl/$cid/usa1.txt");
unlink("fayl/$cid/usa2.txt");
unlink("fayl/$cid/step.txt");
unlink("user/$cid/bde.tcc");
unlink("user/$cid/ude.off");
unlink("sendadmin.txt");
unlink("user/$cid/editadm.txt");
unlink("user/$cid/editoken.txt");
unlink("user/$cid/bde.tcc");
unlink("user/$cid/ude.off");
unlink("sendadmin.txt");
unlink("user/$cid/editadm.txt");
unlink("user/$cid/editoken.txt");
return false;
}


if($data=="orqa" and  $user_lang1==null and joinchat($chat_id)==1){
edit($chat_id,$message_id,"📂 Kerakli bo'limni tanlang:",$servis);
}


if($text=="➕ Bot ochish" and  $user_lang==null and joinchat($cid)==1){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
📂 Sizga kerakli bo'limni tanlang.",
'reply_markup'=>$servis,
]);
}

if((mb_stripos($data,"bots=")!==false and  $user_lang1==null and joinchat($chat_id)==1)){
$serv=explode("=",$data)[1];
$title=explode("=",$data)[2];
if($serv=="obunachibotlar"){
edit($chat_id,$message_id,"<b>$title</b> bo'limi kerakli botni tanlang:",$obunachibotlar);
}else{
if($serv=="biznesbotlar"){
edit($chat_id,$message_id,"<b>$title</b> bo'limi kerakli botni tanlang:",$biznesbotlar);
}else{
if($serv=="gamebotlar"){
edit($chat_id,$message_id,"<b>$title</b> bo'limi kerakli botni tanlang:",$gamebotlar);
}else{
if($serv=="buyurtma"){
edit($chat_id,$message_id,"
🔥 Siz mavjud bo’lmagan botni buyurtma asosida yasatishingiz mumkin:

💵 Narxlar qanday bo’ladi?

- Narxlar botning vazifasi nima ish bajarishi va ketgan resurslarga qarab belgilanadi

🗄 Kim bilan bog’lanish kerak?

- Bot buyurtma berish uchun dasturchiga murojaat eting",json_encode([
'inline_keyboard'=>[
[['text'=>"🗄 Bot buyurtma berish",'url'=>"tg://user?id=$admin"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
])); 
}else{
if($serv=="konstruktorbot"){
edit($chat_id,$message_id,"<b>$title</b> bo’limi kerakli botni tanlang",$konstruktorbot);
}else{
if($serv=="reklamabotlar"){
edit($chat_id,$message_id,"<b>$title</b> bo’limi kerakli botni tanlang",$reklamabot);
}
}
}
}
}
}
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
if((mb_stripos($data,"create=")!==false and  $user_lang1==null and joinchat($chat_id)==1)){
$edi=explode("=",$data)[1];
$title=explode("=",$data)[2];
if(mb_stripos($title,"🔒")!==false){
bot("answerCallbackQuery",[
'callback_query_id'=>$cqid,
'text'=>"🔒 Bu bot faol xolatda emas.",'show_alert'=>true,
]);
exit();
}else{
if($edi=="obunachiPro"){//✅
edit($chat_id,$message_id,"
📋 Bot turi: $title

🖥 Bot tili: <b>Oʻzbek</b>
💵 Narxi: 110 MUB
💎 Status: Oddiy yoki Premium

🗄 Bu botni ochishni xoxlaysizmi?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Tasdiqlash",'callback_data'=>"obunachiPro"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]));
}else{
if($edi=="pulbot"){//✅
edit($chat_id,$message_id,"
📋 Bot turi: $title

🖥 Bot tili: <b>Oʻzbek</b>
💵 Narxi: 80 MUB
💎 Status: Oddiy yoki Premium

🗄 Bu botni ochishni xoxlaysizmi?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Tasdiqlash",'callback_data'=>"pulbot"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]));
}else{
if($edi=="rubl"){//✅
edit($chat_id,$message_id,"
📋 Bot turi: $title

🖥 Bot tili: <b>Oʻzbek</b>
💵 Narxi: 50 MUB 
💎 Status: Oddiy yoki Premium

🗄 Bu botni ochishni xoxlaysizmi?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Tasdiqlash",'callback_data'=>"rubl"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]));
}else{
if($edi=="ucbot"){//✅
edit($chat_id,$message_id,"
📋 Bot turi: $title

🖥 Bot tili: <b>Oʻzbek</b>
💵 Narxi: 100 MUB
💎 Status: Oddiy yoki Premium

🗄 Bu botni ochishni xoxlaysizmi?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Tasdiqlash",'callback_data'=>"ucbot"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]));
}else{
if($edi=="bcbot"){//✅
edit($chat_id,$message_id,"
📋 Bot turi: $title

🖥 Bot tili: <b>Oʻzbek</b>
💵 Narxi: 100 MUB
💎 Status: Oddiy yoki Premium

🗄 Bu botni ochishni xoxlaysizmi?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Tasdiqlash",'callback_data'=>"bcbot"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]));
}else{
if($edi=="mbbot"){//✅
edit($chat_id,$message_id,"
📋 Bot turi: $title

🖥 Bot tili: <b>Oʻzbek</b>
💵 Narxi: 70 MUB
💎 Status: Oddiy yoki Premium

🗄 Bu botni ochishni xoxlaysizmi?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Tasdiqlash",'callback_data'=>"mbbot"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]));
}else{
if($edi=="usabot"){
edit($chat_id,$message_id,"
📋 Bot turi: $title

🖥 Bot tili: <b>Oʻzbek</b>
💵 Narxi: 100 MUB
💎 Status: Oddiy yoki Premium

🗄 Bu botni ochishni xoxlaysizmi?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Tasdiqlash",'callback_data'=>"usabot"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]));
}else{
if($edi=="reklamabot"){
edit($chat_id,$message_id,"
📋 Bot turi: $title

🖥 Bot tili: <b>Oʻzbek</b>
💵 Narxi: 175 MUB
💎 Status: Oddiy yoki Premium

📂 Malumot: Ushbu bot yordamida reklama almashinuvini bajarishingiz mumkin
Admin panelida majburiy obunalar adminlar qo‘shishingiz va bot ichida xaridlarni amalga oshirishingiz mumkin 
Bu bot aynan siz uchun 

🗄 Bu botni ochishni xoxlaysizmi?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Tasdiqlash",'callback_data'=>"reklamabot"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]));
}else{
if($edi=="rubl_uz"){//✅
edit($chat_id,$message_id,"
📋 Bot turi: $title

🖥 Bot tili: <b>Oʻzbek</b>
💵 Narxi: 100 MUB
💎 Status: Oddiy yoki Premium

🗄 Bu botni ochishni xoxlaysizmi?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Tasdiqlash",'callback_data'=>"rubl_uz"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]));
}else{
if($edi=="rubl_ru"){//✅
edit($chat_id,$message_id,"
📋 Bot turi: $title

🖥 Bot tili: <b>Rus</b>
💵 Narxi: 150 MUB
💎 Status: Oddiy yoki Premium

🗄 Bu botni ochishni xoxlaysizmi?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Tasdiqlash",'callback_data'=>"rubl_ru"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]));
}else{
if($edi=="raqam_avto"){
edit($chat_id,$message_id,"
📋 Bot turi: $title

🖥 Bot tili: <b>Oʻzbek</b>
💵 Narxi: 210 MUB
💎 Status: Oddiy yoki Premium

📂 Malumotlar: Ushbu bot orqali Ijtimoiy tarmoqlarga vertual raqam sotib olasiz 

❗ Diqqat ushbu bot API yordamida ishlaydi API kalitni @UzSim_Bot dan olasiz.

🗄 Bu botni ochishni xoxlaysizmi?",json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Tasdiqlash",'callback_data'=>"raqam_avto"]],
[['text'=>"◀ Orqaga",'callback_data'=>"orqa"]],
]
]));
}
}
}
}
}
}
}
}
}
}
}
}
}
//reklama bot boshlandi
if($data=="reklamabot" and  $user_lang1==null and joinchat($chat_id)==1){
$status=get("uzb/$chat_id.status");
if($status=="Oddiy" or $status=="Premium"){
if($calluser!=null){
$botsoni = file_get_contents("uzb/$chat_id/soni.txt");
$max=get("uzb/$chat_id.max");
if($botsoni!=$max){
$pul = file_get_contents("pul/$chat_id.txt");
if($pul>=175){
$statusbot="o&ff";
if($statusbot=="off"){
bot("answerCallbackQuery",[
'callback_query_id'=>$cqid,
'text'=>"🔒 Bu botni ochish yopib qoyilgan.",'show_alert'=>true,
]);
}else{
file_put_contents("fayl/$chat_id/step.txt", "rekbot");
del($chat_id,$message_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
ℹ️ Yangi [🤖 Reklama bot]ni yaratish uchun quyidagilarni bajaring:

1⃣ @BotFather-ga kiring;
2⃣ START bosing va Bot Fatherning qo'llanmalariga amal qilib, botni NOM va USERNAME bilan ta'minlang va yangi Bot yarating;
3⃣ Bajarilganidan so'ng, Bot Father sizning botingizning Tokenini yuboradi;
4⃣ Tokenni ustiga bosib nusxalab oling;
5⃣ Bu yerga qayting va o'sha Tokenni bizga YUBORING.",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀ Orqaga"],],
]
]),
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗Ushbu Botni yaratish uchun hisobingizda yetarli mablagʻ mavjud emas!

💵 Ushbu Botni yaratish uchun hisobingizni toʻldiring!

💾 MB Bot narxi 175 MUB",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda $max ta bot mavjud.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗ Sizda username mavjud emas username o’rnatib qayta urining.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Bu botni ochish uchun sizning statusingiz Oddiy yoki Premium bo‘lishi shart",'show_alert'=>true,
]);
}
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
if($step=="rekbot" and  $user_lang==null){
$getme1 = json_decode(file_get_contents("http://api.telegram.org/bot".$text."/getme"));
$buser = $getme1->result->username;
$bid = $getme1->result->id;
$bname = $getme1->result->first_name;
if($text=="◀ Orqaga" and $step!=null){
sms($cid,"📂 Kerakli bo’limni tanlang:",$servis);
unlink("fayl/$cid/step.txt");
return false;
}
if(mb_stripos($keys,$text)!==false){
sms($cid,"🔑 Bu token bilan bizning botdan bot ochib bo’lingan Iltimos, boshqa token kiriting",null);
return false;
}
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$text .'/getme'));
function objectToArrays( $object )
{if( !is_object( $object ) && !is_array( $object ) )
{return $object;}
if( is_object( $object ) )
{$object = get_object_vars( $object );}
return array_map( "objectToArrays", $object );
}
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 100){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"❗TOKEN notoʻgʻri kiritildi!",
]);
unlink("fayl/$cid/step.txt");
}else{
file_put_contents("uzb/$cid/$buser-bot.dat","reklamabot");
file_put_contents("uzb/$cid/$buser-token.txt", "$text");
$btoken = file_get_contents("uzb/$cid/$buser-token.txt");
$pul = file_get_contents("pul/$cid.txt");
mkdir("baza/$cid/$cid-$buser");
$odam = file_get_contents("odam/$cid.dat");
$bpul=file_get_contents("botlaruz/reklamabot.php");
$bpul = str_replace("[**TOKEN**]",$btoken,$bpul);
$bpul = str_replace("[*ADMIN*]",$cid,$bpul);
$bpul = str_replace("[**USER**]",$username,$bpul);
$bpul = str_replace("[**BUSER**]",$buser,$bpul);
file_put_contents("baza/$uid/$cid-$buser/reklamabot.php","$bpul");
file_get_contents("https://api.telegram.org/bot".$btoken."/setwebhook?url=$folder/baza/$cid/$cid-$buser/reklamabot.php");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-175;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"
<b>✅ Botingiz muvaffaqiyatli yaratildi:
🤖 Bot: @$buser
?? Bot  ID raqami: $bid
💾 Bot nomi: $bname</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🤖 Reklama bot", "url"=>"https://t.me/$buser"]],
]
]),
]);
sms($cid,"🖥 Bosh menu",$menu);
bot('sendMessage',[
'chat_id'=>"$admin",
'text'=>"🎯 [Foydalanuvchi](tg://user?id=$cid) Bot yaratdi!

🗄 Bot turi: 🤖 Reklama bot

🆔 Foydalanuvchi  ID raqami: $cid
🤖 Bot: @$buser",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Botga kirish",'url'=>"https://t.me/$buser"],],
]]),
]);
unlink("fayl/$cid/step.txt");
unlink("fayl/$cid/step.txt");
$s=get("uzb/$cid/soni.txt");
file_put_contents("uzb/$cid/soni.txt",$s+1);
$keys=get("keys.txt");
put("keys.txt","$keys\n$text");
$b=get("user/$cid/user.txt");
file_put_contents("user/$cid/user.txt","$b\n$buser");
}
}
//reklamabot tugadi

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

//mb bot boshlandi
if($data=="mbbot" and  $user_lang1==null and joinchat($chat_id)==1){
$status=get("uzb/$chat_id.status");
if($status=="Oddiy" or $status=="Premium"){
if($calluser!=null){
$botsoni = file_get_contents("uzb/$chat_id/soni.txt");
$max=get("uzb/$chat_id.max");
if($botsoni!=$max){
$pul = file_get_contents("pul/$chat_id.txt");
if($pul>=70){
$statusbot="o&ff";
if($statusbot=="off"){
bot("answerCallbackQuery",[
'callback_query_id'=>$cqid,
'text'=>"🔒 Bu botni ochish yopib qoyilgan.",'show_alert'=>true,
]);
}else{
file_put_contents("fayl/$chat_id/step.txt", "mbbot");
del($chat_id,$message_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
ℹ️ Yangi [💾 MB Bot]ni yaratish uchun quyidagilarni bajaring:

1⃣ @BotFather-ga kiring;
2⃣ START bosing va Bot Fatherning qo'llanmalariga amal qilib, botni NOM va USERNAME bilan ta'minlang va yangi Bot yarating;
3⃣ Bajarilganidan so'ng, Bot Father sizning botingizning Tokenini yuboradi;
4⃣ Tokenni ustiga bosib nusxalab oling;
5⃣ Bu yerga qayting va o'sha Tokenni bizga YUBORING.",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀ Orqaga"],],
]
]),
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗Ushbu Botni yaratish uchun hisobingizda yetarli mablagʻ mavjud emas!

💵 Ushbu Botni yaratish uchun hisobingizni toʻldiring!

💾 MB Bot narxi 70 MUB",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda $max ta bot mavjud.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗ Sizda username mavjud emas username o’rnatib qayta urining.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Bu botni ochish uchun sizning statusingiz Oddiy yoki Premium bo‘lishi shart",'show_alert'=>true,
]);
}
}
/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */
if($step=="mbbot" and  $user_lang==null){
$getme1 = json_decode(file_get_contents("http://api.telegram.org/bot".$text."/getme"));
$buser = $getme1->result->username;
$bid = $getme1->result->id;
$bname = $getme1->result->first_name;
if($text=="◀ Orqaga" and $step!=null){
sms($cid,"📂 Kerakli bo’limni tanlang:",$servis);
unlink("fayl/$cid/step.txt");
return false;
}
if(mb_stripos($keys,$text)!==false){
sms($cid,"🔑 Bu token bilan bizning botdan bot ochib bo’lingan Iltimos, boshqa token kiriting",null);
return false;
}
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$text .'/getme'));
function objectToArrays( $object )
{if( !is_object( $object ) && !is_array( $object ) )
{return $object;}
if( is_object( $object ) )
{$object = get_object_vars( $object );}
return array_map( "objectToArrays", $object );
}
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 100){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"❗TOKEN notoʻgʻri kiritildi!",
]);
unlink("fayl/$cid/step.txt");
}else{
file_put_contents("uzb/$cid/$buser-bot.dat","mbbot");
file_put_contents("uzb/$cid/$buser-token.txt", "$text");
$btoken = file_get_contents("uzb/$cid/$buser-token.txt");
$pul = file_get_contents("pul/$cid.txt");
mkdir("baza/$cid/$cid-$buser");
$odam = file_get_contents("odam/$cid.dat");
$bpul=file_get_contents("botlaruz/mbbot.php");
$bpul = str_replace("[**TOKEN**]",$btoken,$bpul);
$bpul = str_replace("[*ADMIN*]",$cid,$bpul);
$bpul = str_replace("[**USER**]",$username,$bpul);
$bpul = str_replace("[**BUSER**]",$buser,$bpul);
file_put_contents("baza/$uid/$cid-$buser/mbbot.php","$bpul");
file_get_contents("https://api.telegram.org/bot".$btoken."/setwebhook?url=$folder/baza/$cid/$cid-$buser/mbbot.php");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-70;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Botingiz muvaffaqiyatli yaratildi:
🤖 Bot: @$buser
🆔 Bot  ID raqami: $bid
💾 Bot nomi: $bname
🗄 Botingizning boshqaruv paneliga oʻtish uchun botingizga oʻting va «/admin» buyrugʻini bering.</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💾 MB Bot", "url"=>"https://t.me/$buser"]],
]
]),
]);
sms($cid,"🖥 Bosh menu",$menu);
bot('sendMessage',[
'chat_id'=>"$admin",
'text'=>"🎯 [Foydalanuvchi](tg://user?id=$cid) Bot yaratdi!

🗄 Bot turi: 💾 MB Bot

🆔 Foydalanuvchi  ID raqami: $cid
🤖 Bot: @$buser",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Botga kirish",'url'=>"https://t.me/$buser"],],
]]),
]);
unlink("fayl/$cid/step.txt");
unlink("fayl/$cid/step.txt");
$s=get("uzb/$cid/soni.txt");
file_put_contents("uzb/$cid/soni.txt",$s+1);
$keys=get("keys.txt");
put("keys.txt","$keys\n$text");
$b=get("user/$cid/user.txt");
file_put_contents("user/$cid/user.txt","$b\n$buser");
}
}
//mb bot tugadi

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

//bc bot boshlandi
if($data=="bcbot" and  $user_lang1==null and joinchat($chat_id)==1){
$status=get("uzb/$chat_id.status");
if($status=="Oddiy" or $status=="Premium"){
if($calluser!=null){
$botsoni = file_get_contents("uzb/$chat_id/soni.txt");
$max=get("uzb/$chat_id.max");
if($botsoni!=$max){
$pul = file_get_contents("pul/$chat_id.txt");
if($pul>=100){
$statusbot="o&ff";
if($statusbot=="off"){
bot("answerCallbackQuery",[
'callback_query_id'=>$cqid,
'text'=>"🔒 Bu botni ochish yopib qoyilgan.",'show_alert'=>true,
]);
}else{
file_put_contents("fayl/$chat_id/step.txt", "bcbot");
del($chat_id,$message_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
ℹ️ Yangi [📦 BC Bot]ni yaratish uchun quyidagilarni bajaring:

1⃣ @BotFather-ga kiring;
2⃣ START bosing va Bot Fatherning qo'llanmalariga amal qilib, botni NOM va USERNAME bilan ta'minlang va yangi Bot yarating;
3⃣ Bajarilganidan so'ng, Bot Father sizning botingizning Tokenini yuboradi;
4⃣ Tokenni ustiga bosib nusxalab oling;
5⃣ Bu yerga qayting va o'sha Tokenni bizga YUBORING.",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀ Orqaga"],],
]
]),
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗Ushbu Botni yaratish uchun hisobingizda yetarli mablagʻ mavjud emas!

💵 Ushbu Botni yaratish uchun hisobingizni toʻldiring!

📦 UC Bot narxi 100 MUB",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda $max ta bot mavjud.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗ Sizda username mavjud emas username o’rnatib qayta urining.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Bu botni ochish uchun sizning statusingiz Oddiy yoki Premium bo‘lishi shart",'show_alert'=>true,
]);
}
}

if($step=="bcbot" and  $user_lang==null){
$getme1 = json_decode(file_get_contents("http://api.telegram.org/bot".$text."/getme"));
$buser = $getme1->result->username;
$bid = $getme1->result->id;
$bname = $getme1->result->first_name;
if($text=="◀ Orqaga" and $step!=null){
sms($cid,"📂 Kerakli bo’limni tanlang:",$servis);
unlink("fayl/$cid/step.txt");
return false;
}
if(mb_stripos($keys,$text)!==false){
sms($cid,"🔑 Bu token bilan bizning botdan bot ochib bo’lingan Iltimos, boshqa token kiriting",null);
return false;
}
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$text .'/getme'));
function objectToArrays( $object )
{if( !is_object( $object ) && !is_array( $object ) )
{return $object;}
if( is_object( $object ) )
{$object = get_object_vars( $object );}
return array_map( "objectToArrays", $object );
}
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 100){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"❗TOKEN notoʻgʻri kiritildi!",
]);
unlink("fayl/$cid/step.txt");
}else{
file_put_contents("uzb/$cid/$buser-bot.dat","bcbot");
file_put_contents("uzb/$cid/$buser-token.txt", "$text");
$btoken = file_get_contents("uzb/$cid/$buser-token.txt");
$pul = file_get_contents("pul/$cid.txt");
mkdir("baza/$cid/$cid-$buser");
$odam = file_get_contents("odam/$cid.dat");
$bpul=file_get_contents("botlaruz/bcbot.php");
$bpul = str_replace("[**TOKEN**]",$btoken,$bpul);
$bpul = str_replace("[*ADMIN*]",$cid,$bpul);
$bpul = str_replace("[**USER**]",$username,$bpul);
$bpul = str_replace("[**BUSER**]",$buser,$bpul);
file_put_contents("baza/$uid/$cid-$buser/bcbot.php","$bpul");
file_get_contents("https://api.telegram.org/bot".$btoken."/setwebhook?url=$folder/baza/$cid/$cid-$buser/bcbot.php");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-100;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Botingiz muvaffaqiyatli yaratildi:
🤖 Bot: @$buser
🆔 Bot  ID raqami: $bid
💾 Bot nomi: $bname
🗄 Botingizning boshqaruv paneliga oʻtish uchun botingizga oʻting va «/admin» buyrugʻini bering.</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📦 BC Bot", "url"=>"https://t.me/$buser"]],
]
]),
]);
sms($cid,"🖥 Bosh menu",$menu);
bot('sendMessage',[
'chat_id'=>"$admin",
'text'=>"🎯 [Foydalanuvchi](tg://user?id=$cid) Bot yaratdi!

🗄 Bot turi: 📦 BC Bot

🆔 Foydalanuvchi  ID raqami: $cid
🤖 Bot: @$buser",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Botga kirish",'url'=>"https://t.me/$buser"],],
]]),
]);
unlink("fayl/$cid/step.txt");
unlink("fayl/$cid/step.txt");
$s=get("uzb/$cid/soni.txt");
$keys=get("keys.txt");
put("keys.txt","$keys\n$text");
file_put_contents("uzb/$cid/soni.txt",$s+1);
$b=get("user/$cid/user.txt");
file_put_contents("user/$cid/user.txt","$b\n$buser");
}
}

//bc bot tugadi

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

//rus avto tolov boshlandi
if($data=="rubl_ru" and  $user_lang1==null and joinchat($chat_id)==1){
$status=get("uzb/$chat_id.status");
if($status=="Oddiy" or $status=="Premium"){
if($calluser!=null){
$botsoni = file_get_contents("uzb/$chat_id/soni.txt");
$max=get("uzb/$chat_id.max");
if($botsoni!=$max){
$pul = file_get_contents("pul/$chat_id.txt");
if($pul>=100){
$statusbot="o&ff";
if($statusbot=="off"){
bot("answerCallbackQuery",[
'callback_query_id'=>$cqid,
'text'=>"🔒 Bu botni ochish yopib qoyilgan.",'show_alert'=>true,
]);
}else{
file_put_contents("fayl/$chat_id/step.txt", "rus_avto");
del($chat_id,$message_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
ℹ️ Yangi [🇷🇺 Rubl Bot (avto)]ni yaratish uchun quyidagilarni bajaring:

1⃣ @BotFather-ga kiring;
2⃣ START bosing va Bot Fatherning qo'llanmalariga amal qilib, botni NOM va USERNAME bilan ta'minlang va yangi Bot yarating;
3⃣ Bajarilganidan so'ng, Bot Father sizning botingizning Tokenini yuboradi;
4⃣ Tokenni ustiga bosib nusxalab oling;
5⃣ Bu yerga qayting va o'sha Tokenni bizga YUBORING.",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀ Orqaga"],],
]
]),
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗Ushbu Botni yaratish uchun hisobingizda yetarli mablagʻ mavjud emas!

💵 Ushbu Botni yaratish uchun hisobingizni toʻldiring!

🇷🇺 Rubl Bot (avto) narxi 150 MUB",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda $max ta bot mavjud.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗ Sizda username mavjud emas username o’rnatib qayta urining.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Bu botni ochish uchun sizning statusingiz Oddiy yoki Premium bo‘lishi shart",'show_alert'=>true,
]);
}
}

if($step=="rus_avto" and  $user_lang==null){
$getme1 = json_decode(file_get_contents("http://api.telegram.org/bot".$text."/getme"));
$buser = $getme1->result->username;
$bid = $getme1->result->id;
$bname = $getme1->result->first_name;
if($text=="◀ Orqaga" and $step!=null){
sms($cid,"📂 Kerakli bo’limni tanlang:",$servis);
unlink("fayl/$cid/step.txt");
return false;
}
if(mb_stripos($keys,$text)!==false){
sms($cid,"🔑 Bu token bilan bizning botdan bot ochib bo’lingan Iltimos, boshqa token kiriting",null);
return false;
}
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$text .'/getme'));
function objectToArrays( $object )
{if( !is_object( $object ) && !is_array( $object ) )
{return $object;}
if( is_object( $object ) )
{$object = get_object_vars( $object );}
return array_map( "objectToArrays", $object );
}
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 100){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"❗TOKEN notoʻgʻri kiritildi!",
]);
unlink("fayl/$cid/step.txt");
}else{
file_put_contents("uzb/$cid/$buser-bot.dat","rus_avto");
file_put_contents("uzb/$cid/$buser-token.txt", "$text");
$btoken = file_get_contents("uzb/$cid/$buser-token.txt");
$pul = file_get_contents("pul/$cid.txt");
mkdir("baza/$cid/$cid-$buser");
$odam = file_get_contents("odam/$cid.dat");
$bpul=file_get_contents("botlaruz/rusbot.php");
$bpul = str_replace("[**TOKEN**]",$btoken,$bpul);
$bpul = str_replace("[*ADMIN*]",$cid,$bpul);
$bpul = str_replace("[**USER**]",$username,$bpul);
$bpul = str_replace("[**BUSER**]",$buser,$bpul);
file_put_contents("baza/$uid/$cid-$buser/rusbot.php","$bpul");
file_get_contents("https://api.telegram.org/bot".$btoken."/setwebhook?url=$folder/baza/$cid/$cid-$buser/rusbot.php");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-150;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Botingiz muvaffaqiyatli yaratildi:
🤖 Bot: @$buser
🆔 Bot  ID raqami: $bid
💾 Bot nomi: $bname
🗄 Botingizning boshqaruv paneliga oʻtish uchun botingizga oʻting va «/admin» buyrugʻini bering.</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🇷🇺 Rubl Bot (Avto)", "url"=>"https://t.me/$buser"]],
]
]),
]);
sms($cid,"🖥 Bosh menu",$menu);
bot('sendMessage',[
'chat_id'=>"$admin",
'text'=>"🎯 [Foydalanuvchi](tg://user?id=$cid) Bot yaratdi!

🗄 Bot turi: 🇷🇺 Rubl Bot (Avto)

🆔 Foydalanuvchi  ID raqami: $cid
🤖 Bot: @$buser",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Botga kirish",'url'=>"https://t.me/$buser"],],
]]),
]);
unlink("fayl/$cid/step.txt");
unlink("fayl/$cid/step.txt");
$s=get("uzb/$cid/soni.txt");
$keys=get("keys.txt");
put("keys.txt","$keys\n$text");
file_put_contents("uzb/$cid/soni.txt",$s+1);
$b=get("user/$cid/user.txt");
file_put_contents("user/$cid/user.txt","$b\n$buser");
}
}

//rus avto tolov tugadi

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

//uzb avto tolov boshlandi

if($data=="rubl_uz" and  $user_lang1==null and joinchat($chat_id)==1){
$status=get("uzb/$chat_id.status");
if($status=="Oddiy" or $status=="Premium"){
if($calluser!=null){
$botsoni = file_get_contents("uzb/$chat_id/soni.txt");
$max=get("uzb/$chat_id.max");
if($botsoni!=$max){
$pul = file_get_contents("pul/$chat_id.txt");
if($pul>=100){
$statusbot="o&ff";
if($statusbot=="off"){
bot("answerCallbackQuery",[
'callback_query_id'=>$cqid,
'text'=>"🔒 Bu botni ochish yopib qoyilgan.",'show_alert'=>true,
]);
}else{
file_put_contents("fayl/$chat_id/step.txt", "uzb_avto");
del($chat_id,$message_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
ℹ️ Yangi [🇺🇿 Rubl Bot (avto)]ni yaratish uchun quyidagilarni bajaring:

1⃣ @BotFather-ga kiring;
2⃣ START bosing va Bot Fatherning qo'llanmalariga amal qilib, botni NOM va USERNAME bilan ta'minlang va yangi Bot yarating;
3⃣ Bajarilganidan so'ng, Bot Father sizning botingizning Tokenini yuboradi;
4⃣ Tokenni ustiga bosib nusxalab oling;
5⃣ Bu yerga qayting va o'sha Tokenni bizga YUBORING.",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀ Orqaga"],],
]
]),
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗Ushbu Botni yaratish uchun hisobingizda yetarli mablagʻ mavjud emas!

💵 Ushbu Botni yaratish uchun hisobingizni toʻldiring!

🇺🇿 Rubl Bot (avto) narxi 100 MUB",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda $max ta bot mavjud.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗ Sizda username mavjud emas username o’rnatib qayta urining.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Bu botni ochish uchun sizning statusingiz Oddiy yoki Premium bo‘lishi shart",'show_alert'=>true,
]);
}
}

if($step=="uzb_avto" and  $user_lang==null){
$getme1 = json_decode(file_get_contents("http://api.telegram.org/bot".$text."/getme"));
$buser = $getme1->result->username;
$bid = $getme1->result->id;
$bname = $getme1->result->first_name;
if($text=="◀ Orqaga" and $step!=null){
sms($cid,"📂 Kerakli bo’limni tanlang:",$servis);
unlink("fayl/$cid/step.txt");
return false;
}
if(mb_stripos($keys,$text)!==false){
sms($cid,"🔑 Bu token bilan bizning botdan bot ochib bo’lingan Iltimos, boshqa token kiriting",null);
return false;
}
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$text .'/getme'));
function objectToArrays( $object )
{if( !is_object( $object ) && !is_array( $object ) )
{return $object;}
if( is_object( $object ) )
{$object = get_object_vars( $object );}
return array_map( "objectToArrays", $object );
}
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 100){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"❗TOKEN notoʻgʻri kiritildi!",
]);
unlink("fayl/$cid/step.txt");
}else{
file_put_contents("uzb/$cid/$buser-bot.dat","uzb_avto");
file_put_contents("uzb/$cid/$buser-token.txt", "$text");
$btoken = file_get_contents("uzb/$cid/$buser-token.txt");
$pul = file_get_contents("pul/$cid.txt");
mkdir("baza/$cid/$cid-$buser");
$odam = file_get_contents("odam/$cid.dat");
$bpul=file_get_contents("botlaruz/uzbrubl.php");
$bpul = str_replace("[**TOKEN**]",$btoken,$bpul);
$bpul = str_replace("[*ADMIN*]",$cid,$bpul);
$bpul = str_replace("[**USER**]",$username,$bpul);
$bpul = str_replace("[**BUSER**]",$buser,$bpul);
file_put_contents("baza/$uid/$cid-$buser/uzbrubl.php","$bpul");
file_get_contents("https://api.telegram.org/bot".$btoken."/setwebhook?url=$folder/baza/$cid/$cid-$buser/uzbrubl.php");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-150;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Botingiz muvaffaqiyatli yaratildi:
🤖 Bot: @$buser
🆔 Bot  ID raqami: $bid
💾 Bot nomi: $bname
🗄 Botingizning boshqaruv paneliga oʻtish uchun botingizga oʻting va «/admin» buyrugʻini bering.</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🇺🇿 Rubl Bot (Avto)", "url"=>"https://t.me/$buser"]],
]
]),
]);
sms($cid,"🖥 Bosh menu",$menu);
bot('sendMessage',[
'chat_id'=>"$admin",
'text'=>"🎯 [Foydalanuvchi](tg://user?id=$cid) Bot yaratdi!

🗄 Bot turi: 🇺🇿 Rubl Bot (Avto)

🆔 Foydalanuvchi  ID raqami: $cid
🤖 Bot: @$buser",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Botga kirish",'url'=>"https://t.me/$buser"],],
]]),
]);
unlink("fayl/$cid/step.txt");
unlink("fayl/$cid/step.txt");
$s=get("uzb/$cid/soni.txt");
$keys=get("keys.txt");
put("keys.txt","$keys\n$text");
file_put_contents("uzb/$cid/soni.txt",$s+1);
$b=get("user/$cid/user.txt");
file_put_contents("user/$cid/user.txt","$b\n$buser");
}
}

//uzb avto tolov tugadi

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

//uc bot boshlandi//
if($data=="ucbot" and  $user_lang1==null and joinchat($chat_id)==1){
$status=get("uzb/$chat_id.status");
if($status=="Oddiy" or $status=="Premium"){
if($calluser!=null){
$botsoni = file_get_contents("uzb/$chat_id/soni.txt");
$max=get("uzb/$chat_id.max");
if($botsoni!=$max){
$pul = file_get_contents("pul/$chat_id.txt");
if($pul>=100){
$statusbot="o&ff";
if($statusbot=="off"){
bot("answerCallbackQuery",[
'callback_query_id'=>$cqid,
'text'=>"🔒 Bu botni ochish yopib qoyilgan.",'show_alert'=>true,
]);
}else{
file_put_contents("fayl/$chat_id/step.txt", "UCBOT");
del($chat_id,$message_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
ℹ️ Yangi [📦 UC Bot]ni yaratish uchun quyidagilarni bajaring:

1⃣ @BotFather-ga kiring;
2⃣ START bosing va Bot Fatherning qo'llanmalariga amal qilib, botni NOM va USERNAME bilan ta'minlang va yangi Bot yarating;
3⃣ Bajarilganidan so'ng, Bot Father sizning botingizning Tokenini yuboradi;
4⃣ Tokenni ustiga bosib nusxalab oling;
5⃣ Bu yerga qayting va o'sha Tokenni bizga YUBORING.",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀ Orqaga"],],
]
]),
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗Ushbu Botni yaratish uchun hisobingizda yetarli mablagʻ mavjud emas!

💵 Ushbu Botni yaratish uchun hisobingizni toʻldiring!

📦 UC Bot narxi 100 MUB",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda $max ta bot mavjud.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda username mavjud emas username o’rnatib qayta urining.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Bu botni ochish uchun sizning statusingiz Oddiy yoki Premium bo‘lishi shart",'show_alert'=>true,
]);
}
}

if($step=="UCBOT" and  $user_lang==null){
$getme1 = json_decode(file_get_contents("http://api.telegram.org/bot".$text."/getme"));
$buser = $getme1->result->username;
$bid = $getme1->result->id;
$bname = $getme1->result->first_name;
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$text .'/getme'));
function objectToArrays( $object )
{if( !is_object( $object ) && !is_array( $object ) )
{return $object;}
if( is_object( $object ) )
{$object = get_object_vars( $object );}
return array_map( "objectToArrays", $object );
}
if(mb_stripos($keys,$text)!==false){
sms($cid,"🔑 Bu token bilan bizning botdan bot ochib bo’lingan Iltimos, boshqa token kiriting",null);
return false;
}
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 100){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"❗TOKEN notoʻgʻri kiritildi!",
]);
unlink("fayl/$cid/step.txt");
}else{
file_put_contents("uzb/$cid/$buser-bot.dat","ucbot");
file_put_contents("uzb/$cid/$buser-token.txt", "$text");
$btoken = file_get_contents("uzb/$cid/$buser-token.txt");
$pul = file_get_contents("pul/$cid.txt");
mkdir("baza/$cid/$cid-$buser");
$odam = file_get_contents("odam/$cid.dat");
$bpul=file_get_contents("botlaruz/ucbot.php");
$bpul = str_replace("[**TOKEN**]",$btoken,$bpul);
$bpul = str_replace("[*ADMIN*]",$cid,$bpul);
$bpul = str_replace("[**USER**]",$username,$bpul);
$bpul = str_replace("[**BUSER**]",$buser,$bpul);
file_put_contents("baza/$uid/$cid-$buser/ucbot.php","$bpul");
file_get_contents("https://api.telegram.org/bot".$btoken."/setwebhook?url=$folder/baza/$cid/$cid-$buser/ucbot.php");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-110;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Botingiz muvaffaqiyatli yaratildi:
🤖 Bot: @$buser
🆔 Bot  ID raqami: $bid
💾 Bot nomi: $bname

🗄 Botingizning boshqaruv paneliga oʻtish uchun botingizga oʻting va «/admin» buyrugʻini bering.</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📦 UC Bot", "url"=>"https://t.me/$buser"]],
]
]),
]);
sms($cid,"🖥 Bosh menu",$menu);
bot('sendMessage',[
'chat_id'=>"$admin",
'text'=>"🎯 [Foydalanuvchi](tg://user?id=$cid) Bot yaratdi!

🆔 Foydalanuvchi  ID raqami: $cid

🗄 Bot turi: UC Bot
🤖 Bot: @$buser",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Botga kirish",'url'=>"https://t.me/$buser"],],
]]),
]);
unlink("fayl/$cid/step.txt");
unlink("fayl/$cid/step.txt");
$s=get("uzb/$cid/soni.txt");
$keys=get("keys.txt");
put("keys.txt","$keys\n$text");
file_put_contents("uzb/$cid/soni.txt",$s+1);
$b=get("user/$cid/user.txt");
file_put_contents("user/$cid/user.txt","$b\n$buser");
}
}
//uc bot tugadi//


//rubl bot boshlandi//
if($data=="rubl" and  $user_lang1==null and joinchat($chat_id)==1){
$status=get("uzb/$chat_id.status");
if($status=="Oddiy" or $status=="Premium"){
if($calluser!=null){
$botsoni = file_get_contents("uzb/$chat_id/soni.txt");
$max=get("uzb/$chat_id.max");
if($botsoni!=$max){
$pul = file_get_contents("pul/$chat_id.txt");
if($pul>=50){
$statusbot="o&ff";
if($statusbot=="off"){
bot("answerCallbackQuery",[
'callback_query_id'=>$cqid,
'text'=>"🔒 Bu botni ochish yopib qoyilgan.",'show_alert'=>true,
]);
}else{
file_put_contents("fayl/$chat_id/step.txt", "RUBLBOT");
del($chat_id,$message_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
ℹ️ Yangi [💵 RUBL Bot]ni yaratish uchun quyidagilarni bajaring:

1⃣ @BotFather-ga kiring;
2⃣ START bosing va Bot Fatherning qo'llanmalariga amal qilib, botni NOM va USERNAME bilan ta'minlang va yangi Bot yarating;
3⃣ Bajarilganidan so'ng, Bot Father sizning botingizning Tokenini yuboradi;
4⃣ Tokenni ustiga bosib nusxalab oling;
5⃣ Bu yerga qayting va o'sha Tokenni bizga YUBORING.",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀ Orqaga"],],
]
]),
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗Ushbu Botni yaratish uchun hisobingizda yetarli mablagʻ mavjud emas!

💵 Ushbu Botni yaratish uchun hisobingizni toʻldiring!

💵 RUBL Bot narxi 50 MUB",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda $max ta bot mavjud.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda username mavjud emas username o’rnatib qayta urining.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Bu botni ochish uchun sizning statusingiz Oddiy yoki Premium bo‘lishi shart",'show_alert'=>true,
]);
}
}
if($step=="RUBLBOT" and  $user_lang==null){
$getme1 = json_decode(file_get_contents("http://api.telegram.org/bot".$text."/getme"));
$buser = $getme1->result->username;
$bid = $getme1->result->id;
$bname = $getme1->result->first_name;
if($text=="◀ Orqaga" and $step!=null){
sms($cid,"📂 Kerakli bo’limni tanlang:",$servis);
unlink("fayl/$cid/step.txt");
return false;
}
if(mb_stripos($keys,$text)!==false){
sms($cid,"🔑 Bu token bilan bizning botdan bot ochib bo’lingan Iltimos, boshqa token kiriting",null);
return false;
}
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$text .'/getme'));
function objectToArrays( $object )
{if( !is_object( $object ) && !is_array( $object ) )
{return $object;}
if( is_object( $object ) )
{$object = get_object_vars( $object );}
return array_map( "objectToArrays", $object );
}
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 100){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"❗TOKEN notoʻgʻri kiritildi!",
]);
unlink("fayl/$cid/step.txt");
}else{
file_put_contents("uzb/$cid/$buser-bot.dat","rubl");
file_put_contents("uzb/$cid/$buser-token.txt", "$text");
$btoken = file_get_contents("uzb/$cid/$buser-token.txt");
$pul = file_get_contents("pul/$cid.txt");
mkdir("baza/$cid/$cid-$buser");
$odam = file_get_contents("odam/$cid.dat");
$bpul=file_get_contents("botlaruz/rublbot.php");
$bpul = str_replace("[**TOKEN**]",$btoken,$bpul);
$bpul = str_replace("[*ADMIN*]",$cid,$bpul);
$bpul = str_replace("[**USER**]",$username,$bpul);
$bpul = str_replace("[**BUSER**]",$buser,$bpul);
file_put_contents("baza/$uid/$cid-$buser/rublbot.php","$bpul");
file_get_contents("https://api.telegram.org/bot".$btoken."/setwebhook?url=$folder/baza/$cid/$cid-$buser/rublbot.php");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-50;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Botingiz muvaffaqiyatli yaratildi:
🤖 Bot: @$buser
🆔 Bot  ID raqami: $bid
💾 Bot nomi: $bname

🗄 Botingizning boshqaruv paneliga oʻtish uchun botingizga oʻting va «/admin» buyrugʻini bering.</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💶 RUBL Bot", "url"=>"https://t.me/$buser"]],
]
]),
]);
sms($cid,"🖥 Bosh menu",$menu);
bot('sendMessage',[
'chat_id'=>"$admin",
'text'=>"🎯 [Foydalanuvchi](tg://user?id=$cid) Bot yaratdi!

🆔 Foydalanuvchi  ID raqami: $cid

🗄 Bot turi: RUBL Bot (Oʻzbek)
🤖 Bot: @$buser",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Botga kirish",'url'=>"https://t.me/$buser"],],
]]),
]);
unlink("fayl/$cid/step.txt");
unlink("fayl/$cid/step.txt");
$s=get("uzb/$cid/soni.txt");
$keys=get("keys.txt");
put("keys.txt","$keys\n$text");
file_put_contents("uzb/$cid/soni.txt",$s+1);
$b=get("user/$cid/user.txt");
file_put_contents("user/$cid/user.txt","$b\n$buser");
}
}
//rubl bot tugadi//

//pul bot boshlandi//
if($data=="pulbot" and  $user_lang1==null and joinchat($chat_id)==1){
$status=get("uzb/$chat_id.status");
if($status=="Oddiy" or $status=="Premium"){
if($calluser!=null){
$botsoni = file_get_contents("uzb/$chat_id/soni.txt");
$max=get("uzb/$chat_id.max");
if($botsoni!=$max){
$pul = file_get_contents("pul/$chat_id.txt");
if($pul>=80){
$statusbot="o&ff";
if($statusbot=="off"){
bot("answerCallbackQuery",[
'callback_query_id'=>$cqid,
'text'=>"🔒 Bu botni ochish yopib qoyilgan.",'show_alert'=>true,
]);
}else{
file_put_contents("fayl/$chat_id/step.txt", "PULBOT");
del($chat_id,$message_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
ℹ️ Yangi [💵 PUL Bot]ni yaratish uchun quyidagilarni bajaring:

1⃣ @BotFather-ga kiring;
2⃣ START bosing va Bot Fatherning qo'llanmalariga amal qilib, botni NOM va USERNAME bilan ta'minlang va yangi Bot yarating;
3⃣ Bajarilganidan so'ng, Bot Father sizning botingizning Tokenini yuboradi;
4⃣ Tokenni ustiga bosib nusxalab oling;
5⃣ Bu yerga qayting va o'sha Tokenni bizga YUBORING.",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀ Orqaga"],],
]
]),
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗Ushbu Botni yaratish uchun hisobingizda yetarli mablagʻ mavjud emas!

💵 Ushbu Botni yaratish uchun hisobingizni toʻldiring!

💵 PUL Bot narxi 80 MUB",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda $max ta bot mavjud.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda username mavjud emas username o’rnatib qayta urining.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Bu botni ochish uchun sizning statusingiz Oddiy yoki Premium bo‘lishi shart",'show_alert'=>true,
]);
}
}

if($step=="PULBOT" and  $user_lang==null){
$getme1 = json_decode(file_get_contents("http://api.telegram.org/bot".$text."/getme"));
$buser = $getme1->result->username;
$bid = $getme1->result->id;
$bname = $getme1->result->first_name;
if($text=="◀ Orqaga" and $step!=null){
sms($cid,"📂 Kerakli bo’limni tanlang:",$servis);
unlink("fayl/$cid/step.txt");
return false;
}
if(mb_stripos($keys,$text)!==false){
sms($cid,"🔑 Bu token bilan bizning botdan bot ochib bo’lingan Iltimos, boshqa token kiriting",null);
return false;
}
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$text .'/getme'));
function objectToArrays( $object )
{if( !is_object( $object ) && !is_array( $object ) )
{return $object;}
if( is_object( $object ) )
{$object = get_object_vars( $object );}
return array_map( "objectToArrays", $object );
}
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 100){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"❗TOKEN notoʻgʻri kiritildi!",
]);
unlink("fayl/$cid/step.txt");
}else{
file_put_contents("uzb/$cid/$buser-bot.dat","pul");
file_put_contents("uzb/$cid/$buser-token.txt", "$text");
unlink("baza/$cid/$cid-$userb/pulbot.php");
$btoken = file_get_contents("uzb/$cid/$buser-token.txt");
$pul = file_get_contents("pul/$cid.txt");
mkdir("baza/$cid/$cid-$buser");
$odam = file_get_contents("odam/$cid.dat");
$bpul=file_get_contents("botlaruz/pulbot.php");
$bpul = str_replace("[**TOKEN**]",$btoken,$bpul);
$bpul = str_replace("[*ADMIN*]",$cid,$bpul);
$bpul = str_replace("[**USER**]",$username,$bpul);
$bpul = str_replace("[**BUSER**]",$buser,$bpul);
file_put_contents("baza/$uid/$cid-$buser/pulbot.php","$bpul");
file_get_contents("https://api.telegram.org/bot".$btoken."/setwebhook?url=$folder/baza/$cid/$cid-$buser/pulbot.php");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-80;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Botingiz muvaffaqiyatli yaratildi:
🤖 Bot: @$buser
🆔 Bot  ID raqami: $bid
💾 Bot nomi: $bname

🗄 Botingizning boshqaruv paneliga oʻtish uchun botingizga oʻting va «/admin» buyrugʻini bering.</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💵 PUL Bot", "url"=>"https://t.me/$buser"]],
]
]),
]);
sms($cid,"🖥 Bosh menu",$menu);
bot('sendMessage',[
'chat_id'=>"$admin",
'text'=>"🎯 [Foydalanuvchi](tg://user?id=$cid) Bot yaratdi!

🆔 Foydalanuvchi  ID raqami: $cid

🗄 Bot turi: PUL Bot
🤖 Bot: @$buser",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Botga kirish",'url'=>"https://t.me/$buser"],],
]]),
]);
unlink("fayl/$cid/step.txt");
unlink("fayl/$cid/step.txt");
$s=get("uzb/$cid/soni.txt");
$keys=get("keys.txt");
put("keys.txt","$keys\n$text");
file_put_contents("uzb/$cid/soni.txt",$s+1);
$b=get("user/$cid/user.txt");
file_put_contents("user/$cid/user.txt","$b\n$buser");
}
}
//pul bot tugadi//

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

//obunachi bot boshlandi//
if($data=="obunachiPro" and  $user_lang1==null and joinchat($chat_id)==1){
$status=get("uzb/$chat_id.status");
if($status=="Oddiy" or $status=="Premium"){
if($calluser!=null){
$botsoni = file_get_contents("uzb/$chat_id/soni.txt");
$max=get("uzb/$chat_id.max");
if($botsoni!=$max){
$pul = file_get_contents("pul/$chat_id.txt");
if($pul>=110){
$statusbot="o&f";
if($statusbot=="off"){
bot("answerCallbackQuery",[
'callback_query_id'=>$cqid,
'text'=>"🔄 Bu botda tamirlash ishlari bo’lmoqda...",'show_alert'=>true,
]);
}else{
file_put_contents("fayl/$chat_id/step.txt", "SEENBot");
del($chat_id,$message_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ℹ️ Yangi [👥 Obunachi Bot]ni yaratish uchun quyidagilarni bajaring:

1⃣ @BotFather-ga kiring;
2⃣ START bosing va Bot Fatherning qo'llanmalariga amal qilib, botni NOM va USERNAME bilan ta'minlang va yangi Bot yarating;
3⃣ Bajarilganidan so'ng, Bot Father sizning botingizning Tokenini yuboradi;
4⃣ Tokenni ustiga bosib nusxalab oling;
5⃣ Bu yerga qayting va o'sha Tokenni bizga YUBORING.",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀ Orqaga"],],
]
]),
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"
❗Ushbu Botni yaratish uchun hisobingizda yetarli mablagʻ mavjud emas!

💵 Ushbu Botni yaratish uchun hisobingizni toʻldiring!

👥 Obunachi Bot narxi 110 MUB",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda $max ta bot mavjud.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Sizda username mavjud emas username o’rnatib qayta urining.",'show_alert'=>true,
]);
}
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❗ Bu botni ochish uchun sizning statusingiz Oddiy yoki Premium bo‘lishi shart",'show_alert'=>true,
]);
}
}

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

if($step=="SEENBot" and  $user_lang==null){
$getme1 = json_decode(file_get_contents("http://api.telegram.org/bot".$text."/getme"));
$buser = $getme1->result->username;
$bid = $getme1->result->id;
$bname = $getme1->result->first_name;
if($text=="◀ Orqaga" and $step!=null){
sms($cid,"📂 Kerakli bo’limni tanlang:",$servis);
unlink("fayl/$cid/step.txt");
return false;
}
if(mb_stripos($keys,$text)!==false){
sms($cid,"🔑 Bu token bilan bizning botdan bot ochib bo’lingan Iltimos, boshqa token kiriting",null);
return false;
}
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$text .'/getme'));
function objectToArrays( $object )
{if( !is_object( $object ) && !is_array( $object ) )
{return $object;}
if( is_object( $object ) )
{$object = get_object_vars( $object );}
return array_map( "objectToArrays", $object );
}
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 100){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"❗TOKEN notoʻgʻri kiritildi!",
]);
unlink("fayl/$cid/step.txt");
}else{
file_put_contents("uzb/$cid/$buser-bot.dat","seen");
file_put_contents("uzb/$cid/$buser-token.txt", "$text");
$btoken = file_get_contents("uzb/$cid/$buser-token.txt");
$pul = file_get_contents("pul/$cid.txt");
mkdir("baza/$cid/$cid-$buser");
$odam = file_get_contents("odam/$cid.dat");
$bpul=file_get_contents("botlaruz/seenbot.php");
$bpul = str_replace("[**TOKEN**]",$btoken,$bpul);
$bpul = str_replace("[*ADMIN*]",$cid,$bpul);
$bpul = str_replace("[**USER**]",$username,$bpul);
$bpul = str_replace("[**BUSER**]",$buser,$bpul);
file_put_contents("baza/$uid/$cid-$buser/seenbot.php","$bpul");
$bcode=file_get_contents("botlaruz/code.php");
file_put_contents("baza/$uid/$cid-$buser/code.php","$bcode");
file_get_contents("https://api.telegram.org/bot".$btoken."/setwebhook?url=$folder/baza/$cid/$cid-$buser/seenbot.php");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-110;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"
<b>✅ Botingiz muvaffaqiyatli yaratildi:
🤖 Bot: @$buser
🆔 Bot  ID raqami: $bid
💾 Bot nomi: $bname

🗄 Botingizning boshqaruv paneliga oʻtish uchun botingizga oʻting va «/panel» buyrugʻini bering.</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👥 Obunachi Bot", "url"=>"https://t.me/$buser"]],
]
]),
]);
sms($cid,"🖥 Bosh menu",$menu);
bot('sendMessage',[
'chat_id'=>"$admin",
'text'=>"🎯 [Foydalanuvchi](tg://user?id=$cid) Bot yaratdi!

🆔 Foydalanuvchi  ID raqami: $cid

🗄 Bot turi: Obunachi Bot
🤖 Bot: @$buser",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Botga kirish",'url'=>"https://t.me/$buser"],],
]]),
]);
unlink("fayl/$cid/step.txt");
$s=get("uzb/$cid/soni.txt");
file_put_contents("uzb/$cid/soni.txt",$s+1);
$b=get("user/$cid/user.txt");
file_put_contents("user/$cid/user.txt","$b\n$buser");
$keys=get("keys.txt");
put("keys.txt","$keys\n$text");
}
}


/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

//obunachi bot tugadi//
if($message) {
addsql($cid);
}

if($text=="📊 Statistika"){
$res = mysqli_query($connect, "SELECT * FROM `data`");
$stat = mysqli_num_rows($res);
sms($cid," ⭐ Bot obunachilari: $stat ta",null);
}

mkdir("tek");
$tekk = file_get_contents("tek/$cid.tek");
if($text=="📂  Xabar yuborish" and $cid==$admin){
bot('sendMessage',[
  'chat_id'=>$cid,
  'text'=>"Post raqamini yuboring...",
 'parse_mode'=>'html',
        ]);
file_put_contents("tek/$cid.tek","send");
exit();
}

if($tekk=="send"){
$res = mysqli_query($connect,"SELECT * FROM `data` ORDER BY `user_id` DESC LIMIT 1");
$row = mysqli_fetch_assoc($res);
$user_id = $row['user_id'];

$time1 = date('H:i', strtotime('+1 minutes'));
$time2 = date('H:i', strtotime('+2 minutes'));
unlink("tek/$cid.tek");    
file_put_contents("tek/idd.txt",$user_id);
file_put_contents("tek/time.txt",$time1);  
file_put_contents("tek/time2.txt",$time2); 
file_put_contents("tek/type.txt","forward"); 
file_put_contents("tek/t.txt",0); 
file_put_contents("tek/message_id.txt",$text); 
bot('sendMessage',[
  'chat_id'=>$cid,
  'text'=>"Saqlandi ! $user_id yuborishni boshlaydi",
 'parse_mode'=>'html',
        ]);       
exit();
}


$botdel = $update->my_chat_member->new_chat_member;
$botdelid = $update->my_chat_member->from->id;
$userstatus= $botdel->status;

if($botdel){
if($userstatus=="kicked"){
mysqli_query($connect, "DELETE FROM data WHERE user_id = '$botdelid'");
rmdirPro("fayl/$botdelid");
rmdirPro("user/$botdelid");
rmdirPro("uzb/$botdelid");
rmdirPro("baza/$botdelid");
rmdirPro("ref/$botdelid");
unlink("pul/$botdelid.txt");
sms($admin,
"👥 Foydalanuvchi: $botdelid
🤖 Botni blokladi.",null);
$btoken = file_get_contents("uzb/$botdelid/token.txt");
file_get_contents("https://api.telegram.org/bot".$btoken."/sendMessage?chat_id=$botdelid&text=⚠️ Sizning botingiz o’chirib yuborildi");
rmdirPro("baza/$botdelid");
} 
}

date_default_timezone_set('Asia/Tashkent');
$t=date("d");
$wsid=glob("ads/*.json");
foreach($wsid as $widi){
$wid = str_replace(["ads/",".json"], ["",""], $widi);
$wbaza = json_decode(file_get_contents("ads/$wid.json"));
$wkun = $wbaza->date;
$status=$wbaza->status;
if($status=="faol" and $wkun==1 and is_numeric($wkun)){
sms($wid,"
⚠️ Reklama faolsizlantirildi.
📆 Reklama muddati tugadi
",$menu);
$sv["status"]="faol emas";
$sv["url"]=$wbaza->url;
$sv["id"]=$wbaza->id;
$sv["type2"]=$wbaza->type2;
$sv["date"]=0;
$sv["sana"]=$t;
$sv["text"]=$wbaza->text;
file_put_contents("ads/$wid.json", json_encode($sv,JSON_PRETTY_PRINT));
}
}


date_default_timezone_set('Asia/Tashkent');
$t=date("d");
$glob=glob("ads/*.json");
foreach($glob as $globe){
$adsid = str_replace(["ads/",".json"], ["",""], $globe);
$base = json_decode(file_get_contents("ads/$adsid.json"));
$sana=$base->sana;
$status=$base->status;
if($sana!=$t and $status=="faol"){
$savea["url"]=$base->url;
$savea["id"]=$base->id;
$savea["status"]=$base->status;
$savea["type2"]=$base->type2;
$savea["date"]=$base->date-1;
$savea["sana"]=$t;
$savea["text"]=$base->text;
file_put_contents("ads/$adsid.json",json_encode($savea));
$adsPul=file_get_contents("ads/$adsid.pul");
$base = json_decode(file_get_contents("ads/$adsid.json"));
$status=$base->status;
if($adsPul>=500 and $status=="faol"){
file_put_contents("ads/$adsid.pul",$adsPul-500);
sms($adsid,"🎯 sizdan 500 so’m miqdorda pul yechildi\n 🔥 Reklama uchun",null);
}else{
sms($adsid,"
⚠️ Reklama faolsizlantirildi
💵 Mablag’ yetarli emas
",null);
$savea["url"]=$base->url;
$savea["id"]=$base->id;
$savea["status"]="faol emas";
$savea["type2"]=$base->type2;
$savea["date"]=$base->date;
$savea["sana"]=$t;
$savea["text"]=$base->text;
file_put_contents("ads/$adsid.json",json_encode($savea));
}
}
}

if($text=="/dat") {
sms($cid," ok ".json_encode($datas)."",null);
}

$spet=get("admin.txt");
if($text=="🎉 Bonus yuborish" and $cid==$admin){
sms($cid,"📊 Foydalanuvchilar sonini yuboring",null);
put("admin.txt","1");
}

if($spet=="1" and is_numeric($text) and $cid==$admin){
$mesid=sms("@MegaBuilderi","
🎉 Bonuslar yom‘giri

📊 Ishtirokchilar: 0/$text ta
💰 Barcha yutuqlar: 0 MUB

🎉 Bonusga ega bo'ling",json_encode([
'inline_keyboard'=>[
[['text'=>"🎉 Bonus olish","url"=>"https://t.me/MegaBuilderBot?start=bonus"]],
]
]))->result->message_id;
put("member.txt",$text);
put("olindi.txt","");
put("yutuq.txt","");
sms($cid,"🎉 Bonus yuborildi ko‘rish uchun bosing:",json_encode([
'inline_keyboard'=>[
[['text'=>"🎉 Xabarni ko‘rish",'url'=>"https://t.me/MakerUzNews/".$mesid]],
]
]));
put("mesid.txt",$mesid);
put("admin.txt","");
}

if($text=="/start bonus"){
$s=get("yutuq.txt");
if(mb_stripos($s,$cid)!==false){
sms($cid,"⚠️ Bu o‘yinda ishtirok etgansiz",null);
}else{
$r=["uzum","olma","banan","gilos"];
$nom=$r[rand(0,3)];
if($nom=="uzum"){
$tur="uzum";
$arr=json_encode([
'inline_keyboard'=>[
[['text'=>"🍏",'callback_data'=>"yutuq=".rand(5,13)."=null"],['text'=>"🍇",'callback_data'=>"yutuq=".rand(5,9)."=$tur"],['text'=>"🍒",'callback_data'=>"yutuq=".rand(5,14)."=null"],['text'=>"🍌",'callback_data'=>"yutuq=".rand(5,15)."=null"]],
]
]);
}
if($nom=="olma"){
$tur="olma";
$arr=json_encode([
'inline_keyboard'=>[
[['text'=>"🍇",'callback_data'=>"yutuq=".rand(5,13)."=null"],['text'=>"🍌",'callback_data'=>"yutuq=".rand(5,9)."=null"],['text'=>"🍏",'callback_data'=>"yutuq=".rand(5,14)."=$tur"],['text'=>"🍒",'callback_data'=>"yutuq=".rand(5,15)."=null"]],
]
]);
}
if($nom=="gilos"){
$tur="gilos";
$arr=json_encode([
'inline_keyboard'=>[
[['text'=>"🍌",'callback_data'=>"yutuq=".rand(5,13)."=null"],['text'=>"🍇",'callback_data'=>"yutuq=".rand(5,9)."=null"],['text'=>"🍒",'callback_data'=>"yutuq=".rand(5,15)."=$tur"],['text'=>"🍏",'callback_data'=>"yutuq=".rand(5,11)."=null"]],
]
]);
}
if($nom=="banan"){
$tur="banan";
$arr=json_encode([
'inline_keyboard'=>[
[['text'=>"🍒",'callback_data'=>"yutuq=".rand(5,13)."=null"],['text'=>"🍌",'callback_data'=>"yutuq=".rand(5,14)."=$tur"],['text'=>"🍏",'callback_data'=>"yutuq=".rand(5,15)."=null"],['text'=>"🍇",'callback_data'=>"yutuq=".rand(5,11)."=null"]],
]
]);
}
sms($cid,"Mevalar ichida <b>$nom</b>ni toping:",$arr);
put("fayl/$cid.code",$tur);
}
}
if((stripos($data,"yutuq=")!==false)){
$mub=explode("=",$data)[1];
$t=explode("=",$data)[2];
$s=get("yutuq.txt");
$frid= $update->callback_query->from->id;
if(mb_stripos($s,$frid)!==false){
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"⚠️ Bu o‘yinda ishtirok etgansiz!",
'show_alert'=>true,
]);
del($frid,$callmid);
}else{
$yt=get("fayl/$frid.code");
if($t==$yt){
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"➕ Sizga $mub MUB taqdim etildi",'show_alert'=>true,
]);
del($frid,$callmid);
$os=get("olindi.txt");
put("olindi.txt",$os+$mub);
$so=get("olindi.txt");
$p=get("pul/$frid.txt");
put("pul/$frid.txt",$p+$mub);
$s=get("yutuq.txt");
put("yutuq.txt",$s."\n".$frid);
$c=substr_count(get("yutuq.txt"),"\n");
edit("@MegaBuilderi",get("mesid.txt"),"
🎉 Bonuslar yom‘giri

📊 Ishtirokchilar: $c/".get("member.txt")." ta
💰 Barcha yutuqlar: $so MUB

🎉 Bonusga ega bo'ling",json_encode([
'inline_keyboard'=>[
[['text'=>"🎉 Bonus olish","url"=>"https://t.me/MegaBuilderbot?start=bonus"]],
]
]));
}else{
bot('answerCallbackQuery', [
'callback_query_id'=>$qid,
'text'=>"
⚠️ Boshqa meva tandladingiz!

📂 Qaytadan xarakat qiling",'show_alert'=>true,
]);
del($frid,$callmid);
}
}
}

if($text=="/c"){
$data = json_decode(file_get_contents("https://prm4u.com/api/v2?key=4658afd9bf3a87883d5161aa15314784&action=services"),1);
$values=[];
$new_arr = [];
foreach($data as $value){
if(!in_array($value['category'], $new_arr)){
$new_arr[] = $value['category'];
$values[] =['text'=>$value['category']];
}else{
continue;
}
}
$key=array_chunk($values,2);
$kb= json_encode([
'resize_keyboard'=>true,
'keyboard'=>$key
]);
sms($cid,"Category",$kb);
file_put_contents("fayl/$cid/step.txt","ss");
}

if($step=="ss" and $text){
$j=json_decode(file_get_contents("https://prm4u.com/api/v2?key=4658afd9bf3a87883d5161aa15314784&action=services"),1);

foreach($j as $jb){
if($jb['category']==$text){
$k[]=['text'=>$jb['name']." ".$jb['rate']." $"];
$kb=array_chunk($k,1);
}
$m= json_encode([
'resize_keyboard'=>true,
'keyboard'=>$kb
]);

}
sms($cid,"$text uchun qidirlgan xizmatlar:",$m);
unlink("fayl/$cid/step.txt");
}

if($text=="/code"){
bot('senddocument',[
'chat_id'=>$admin,
'document'=>new CURLfile("makerbot.php"),
]);
}

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */

/*Ushbu kodi Avazbek Abdullayev (@MrDevUz) tarqatdi iltimos manba bilan olish
kanalim @MarsBuilder */