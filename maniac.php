<?php
date_default_timezone_set('Asia/jakarta');
include "function.php";
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[37;1m*************** \e[93mJANGAN LUPA SUBSCRIBE\e[37;1m ***************   \n";
echo "\e[37;1m****************** \e[93mCHANNEL YOUTUBE\e[37;1m ******************\n";
echo "\e[37;1m********************* \e[93mDZAINVINA\e[37;1m *********************\n";
echo "\e[37;1m*************** \e[93minstagram : @dzainvina_\e[37;1m *************\n";
echo "\e[37;1m****** \e[93mBANTU SAYA MENGEMBANGKAN CHANNEL SAYA\e[37;1m ********\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[31;1m    || >>>>>>>>\e[1;33m".date('[d-m-Y] [H:i:s]')."\e[31;1m<<<<<<<< ||\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[31;1m*•*•*•*•*•*•*•*•*•*•\e[93mMERZA SAPUTRA\e[31;1m•*•*•*•*•*•*•*•*•*•*\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[31;1m Sudah Punya User Id (Y/N ?: ";	
$pilihy = trim(fgets(STDIN));
if($pilihy == "y" || $pilihy == "sudah")
echo "\e[96m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
	goto login;
login:
echo "\e[1;33m*~*~*~*~*~*~\e[32;1m tekan enter\e[1;33m*~*~*~*~*~*~\n";
$pass =  ( '║ User Login : ' );
echo "\033[30;40m";
$user = trim(fgets(STDIN));
echo "\033[0m";
if($user == "")
{
	echo "\e[1;32m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
	echo "\e[1;32m lanjut bro  ";
	$input = trim(fgets(STDIN));
	echo "\e[32;1m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
		goto ulang;
}
else
{
		echo "\e[32;1m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";	
		echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
		echo "\e[96m[🚫]        \e[91m.    HADEEEH         \e[96m [🚫]\n";
	        echo "\e[96m[🚫]       \e[91m IKUTIN YANG DI SURUH SIH       \e[96m [🚫]\n";
		echo "\e[96m[🚫]           \e[91mMASIH AJA NGEYEL LU      \e[96m [🚫]\n";
	        echo "\e[96m[🚫] \e[91mBELOM PERNAH DICIPOK KUFRA YA LO \e[96m [🚫]\n";
		echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
goto login;
}
	return rtrim( $input, "\n" );
ulang:
echo "\n";
echo "\e[1;37m shoot    \n";
echo "\e[32;1m▬▬▬▬▬▬▬▬▬▬\e[31;1m ( subscribe YouTube Dzainvina $input)\e[32;1m ▬▬▬▬▬▬▬▬▬\n";
// function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("green","📲▶️ Nomor : ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("white","📶▶️ OTP MELUNCUR ")."\n";
        otp:
        echo color("green","💬▶️ OTPNYA COY : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("Purple","✔️ SUCCESS \n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("white","+] TOKEN ID : ".$token."\n\n");
        save("token.txt",$token);
        echo color("red","\n▬▬▬▬▬▬▬▬▬▬▬▬* JANGAN LUPA BASMALAH *▬▬▬▬▬▬▬▬▬▬▬▬");
       echo "\n".color("purple","# CLAIM VOUCHER JANDA MUDA");
        echo "\n".color("blue","# SEGER BANGET ");
        for($a=1;$a<=3;$a++){
        echo color("purple",".");
        sleep(30);
        }
       $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD2107"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("blue","🔓▶️ Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","🔐▶️ Message: ".$message);
	      gocar:
        echo "\n".color("green","# CLAIM VOUCHER ISTRI PERTAMA");
        echo "\n".color("white","# LAGI DI GOYANG ");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(20);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD2107"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("blue","🔓▶️ Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","🔐▶️ Message: ".$message);
        gofood:
        echo "\n".color("white","# CLAIM VOUCHER ISTRI KEDUA");
        echo "\n".color("green","#LAGI ENAK COY");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD2107"}');
        $message = fetch_value($code1,'"message":"','"');
        echo "\n".color("white","🔓▶️ Message: ".$message);
        echo "\n".color("yellow","# CLAIM VOUCHER ISTRI KETIGA");
        echo "\n".color("white","# JANGAN GANGGU LAGI ENAK");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(5);
        }
        sleep(15);
        $boba09 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD2107"}');
        $messageboba09 = fetch_value($boba09,'"message":"','"');
        echo "\n".color("blue","# Message: ".$messageboba09);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        echo "\n".color("blue","🎫▶️ Total voucher ".$total." : ");
        echo "\n".color("yellow","                     1. ".$voucher1);
        echo "\n".color("yellow","                     2. ".$voucher2);
        echo "\n".color("yellow","                     3. ".$voucher3);
        echo "\n".color("yellow","                     4. ".$voucher4);
        echo "\n".color("yellow","                     5. ".$voucher5);
        echo "\n".color("yellow","                     6. ".$voucher6);
        echo "\n".color("yellow","                     7. ".$voucher7);
        echo "\n".color("yellow","                     8. ".$voucher8);
        echo "\n".color("yellow","                     9. ".$voucher9);
        echo "\n".color("yellow","                     10. ".$voucher10);
      	echo "\n".color("yellow","                     11. ".$voucher11);
        echo "\n".color("yellow","                     12. ".$voucher12);
        echo "\n".color("yellow","                     13. ".$voucher13);
        echo"\n";
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
        
         setpin:
         echo "\n".color("white","🔧▶️ SET PIN GOPAY SEKALIAN ? !!!: Y/N ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("Blue","▬▬▬▬▬▬▬▬▬▬▬▬▬▬🔧 PIN GOPAY = 121212 🔧▬▬▬▬▬▬▬▬▬▬▬▬")."\n";
         $data2 = '{"pin":"121212"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "OTP PIN 6 digit : ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] GAGAL!!!\n");
         }
         }
         }
         }else{
         echo color("red","-] OTP SALAH ");
         echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
         echo color("purple","!] MASUKIN NOMER ULANG\n");
         goto ulang;
         }
         }else{
         echo color("red","-] Nomor udah kena colok.");
         echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
         echo color("red","!] Coba Nomer yang perawan \n");
         goto ulang;
         }
//  }

// echo change()."\n";
