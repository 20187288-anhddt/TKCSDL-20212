
/* Mã nguồn mở */
/* Developer: Mr. KPB */
/* Donate: payments.kpb-fia.com */
$_SESSION["file-name"] = "btoolv23.php";


$_SESSION["off-color"] = 'OFF';
#if (readline("đang nâng cấp chế độ 6link và 4link:")!=188877778){ exit; }
chinh_sach();
function getRootDirectoryPath()
{

$root = getcwd();
if (isset(explode("/storage/emulated/0", $root)[1])) {
        return "/storage/emulated/0/";
    } elseif (isset(explode("/root", $root)[1])) {
        return "/root/";
    } else {
        return "C:\\";
    }
  
}
function root_kpb()
{
 $os = strtoupper(PHP_OS);
if ($os == "DARWIN") {
return "";
}
    return getRootDirectoryPath() . "BTOOL-LINUX-V23/all-data/";
}
function check_key($key_in)
{
    $head = [
        "Host: cft.sever.blog-share.xyz",
        "User-Agent:Mozilla/5.0 (Linux; Android 9; RMX1811) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Mobile Safari/537.36",
        "Accept:image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8",
    ];
    $query = [
        "file" => $_SESSION["file-name"],
        "type" => $_SESSION["type-link"],
        "Ip" => "1.53.8.154",
        "Key-Check" => $key_in,
        "update" => "2828",
        "apikey" => "mrkpbaRtZG90E0bQTARrvVBI",
        "uid" => getcdcrb(),
        "time" => time(),
    ];

    echo http_build_query($query);
    sleep(10);
    $url = "https://cft.sever.blog-share.xyz/check.php?file=1btoolv23.php&type=6-link&Ip=1.53.8.154&Key-Check=KPBSHOP_MTcwMTA4MjM4OTY1NjQ3NTE1Y2RmYmU2LjEyOTYzNzE0&update=2828&apikey=mrkpbaRtZG90E0bQTARrvVBI&uid=QzpcQlRPT0wtTElOVVgtVjIzL2twYi1maWEuY29tJm1yLmtwYi5qc29uJmpzb24mbXIua3BiJjE3MDA5MDY1MjlyNWdWbko0ZE83dTB5b0xNVGN3TURrd05qVXlPUT09&time=1701279845";
#die($url);
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => true,
    ]);
    $BA = curl_exec($ch);

    return json_decode($BA, true);
    print_r($result);
    sleep(100);
}
function tokma($A)
{
if ($_SESSION["off-color"] == "ON"){
return '';
}
    $B = strlen($A);
    $kitu = "";
    for ($K = 0; $K < $B; $K++) {
        if ($A[$K] == " ") {
            $kitu = $kitu . rdm() . $A[$K];
        } else {
            $kitu = $kitu . $A[$K];
        }
    }
    return rdm() . $kitu;
}
function vghcricdhcdy2($chuoi)
{
    $chuoi2 = $chuoi;
    $mang_mau = [
        "\033[1;30m",
        "\033[0;37m",
        "\033[1;31m",
        "\033[1;32m",
        "\033[1;33m",
        "\033[1;34m",
        "\033[1;35m",
        "\033[1;36m",
        "\033[1;37m",
        "\033[0;30m",
        "[1;31m",
    ];
    $i = 0;
    while ($i < count($mang_mau)) {
        $chuoi2 = str_replace($mang_mau[$i], "", $chuoi2);
        $i++;
    }
    $sokytu = count(str_split(vn_to_stxc($chuoi2)));
    $sokhoangtrong = (54 - $sokytu) / 2;
    if (containsDecimal2($sokhoangtrong) == true) {
        $sokhoangtrong = explode(".", $sokhoangtrong)[0];
        $kytuthem = " ";
    } else {
        $kytuthem = "";
    }
    bb(
        $kytuthem .
            str_repeat(" ", $sokhoangtrong) .
            $chuoi .
            str_repeat(" ", $sokhoangtrong) .
            "\n"
    );
}
function dsht()
{
  /*  $i = 0;
    while ($i < 100) {
        echo "\n";
        $i++;
    }*/
    @system("clear");
}
function vn_to_stxc($str)
{
    $unicode = [
        "a" => "á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ",
        "d" => "đ",
        "e" => "é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ",
        "i" => "í|ì|ỉ|ĩ|ị",
        "o" => "ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ",
        "u" => "ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự",
        "y" => "ý|ỳ|ỷ|ỹ|ỵ",
        "A" => "Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ",
        "D" => "Đ",
        "E" => "É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ",
        "I" => "Í|Ì|Ỉ|Ĩ|Ị",
        "O" => "Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ",
        "U" => "Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự",
        "Y" => "Ý|Ỳ|Ỷ|Ỹ|Ỵ",
    ];
    foreach ($unicode as $nonUnicode => $uni) {
        $str = preg_replace("/($uni)/i", $nonUnicode, $str);
    }
    $str = str_replace(" ", "_", $str);
    return $str;
}
function containsDecimal2($value)
{
    if (strpos($value, ".") !== false) {
        return true;
    }
    return false;
}
function open_url($url)
{
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
        system("xdg-open " . $url);
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
        system("cmd /c start " . $url);
    } elseif (strtoupper(substr(PHP_OS, 0, 6)) === "DARWIN") {
        system("open " . $url);
    } else {
        echo "Không hỗ trợ nền tảng này.";
    }
}
function clearScreen()
{
    if (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
        @system("clear");
    } else {
    @system("clear");
    }
}
function getcdcrb()
{
    return pbctb();
}
function rdm()
{
if ($_SESSION["off-color"] == "ON"){
return '';
}
    $B = [];
    array_push(
        $B,
        "\033[1;30m",
        "\033[0;37m",
        "\033[1;31m",
        "\033[1;32m",
        "\033[1;33m",
        "\033[1;34m",
        "\033[1;35m",
        "\033[1;36m",
        "\033[1;37m"
    );
    return $B[array_rand($B, 1)];
}
$_SESSION["donate-for-kpb"] = "1.53.8.154";
function bb($A)
{
    echo $A;
}
function fggct($A)
{
    return file_get_contents($A);
}
function nf()
{
    return root_kpb() . "Api_Key-KPBFIA.txt";
}
function api_key_vi()
{
    chedovip();
    $A = nf();
    $DLKT = check_Key(fggct($A));
    $L = $DLKT["status"];
    $check = $L;
    if ($L == true) {
        $_SESSION["check-key-vip"] = $DLKT["data"]["Check-Key-Vip"];     
        return $DLKT["data"];
    } else {
        if ($DLKT["msg"] == "Key-Free-False") {
            $url_key = $DLKT["url-get-key"];
        }
        if ($DLKT["msg"] == "Key-Vip-False") {
unlink(nf());
            exit(mau("v") . "Key Vip Đã Đạt Tối Đa Thiết Bị Sử Dụng.\n");
        }
$user_id = 1678794751032;
        $ACD =
            "\n  \n  " .
            rdm() .
            "      ██╗     ██╗███╗   ██╗██╗  ██╗███████╗\n  " .
            rdm() .
            "      ██║     ██║████╗  ██║██║ ██╔╝██╔════╝\n   " .
            rdm() .
            "     ██║     ██║██╔██╗ ██║█████╔╝ ███████╗\n " .
            rdm() .
            "       ██║     ██║██║╚██╗██║██╔═██╗ ╚════██║\n    " .
            rdm() .
            "    ███████╗██║██║ ╚████║██║  ██╗███████║\n " .
            rdm() .
            "       ╚══════╝╚═╝╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝\n                                \n";
        //clearScreen();
        bb($ACD);
        bb(mau("tr")."[".mau("xdns")."note".mau("tr")."]> ".mau("tr")."[\033[44m".mau("v").$DLKT["msg-link"].mau("tr")."\033[40m]\n");
        kpb_be();
bb(rdm()."<^>> ".rdm()."id ".rdm()."user: ".rdm()."$user_id\n");
 bb(mau("tr")."[".mau("xdns")."!".mau("tr")."]> ".mau("v")."Bạn lười vượt link? Không vấn đề,\n     chúng tôi đã có giải pháp cho bạn.\n");
bb(mau("tr")."[".mau("xdns")."!".mau("tr")."]> ".mau("v")."Hỗ trợ nạp tiền tự động qua thẻ cào, ngân hàng.\n");


bb(mau("tr")."[".mau("xdns")."!".mau("tr")."]> ".mau("xdns")."Mua Key VIP Tại: ".mau("ds")."https://shop.kpb-fia.com\n");
kpb_be();
if (isset($url_key) && $url_key){
$ttlink = mau("v")."Bật";
} else {
$ttlink = mau("ds")."Tắt";
}
bb(mau("tr")."[".mau("xdns")."*".mau("tr")."]> ".mau("tr")."Trạng thái chế độ link: ".mau("tr")."[".$ttlink.mau("tr")."]\n");

if (isset($url_key) && $url_key){
$type_link = explode("-",$_SESSION["type-link"]);
$type_link = ($type_link[0])."-".$type_link[1];
bb(mau("tr")."[".mau("v")."+".mau("tr")."]> ".mau("tr")."Chế Độ Vượt: ".mau("v").$type_link."\n");
bb(mau("tr")."[".mau("v")."+".mau("tr")."]> ".mau("tr")."Nếu Đã Vượt Link Hãy Enter Để Tool Kiểm Tra\n");
bb(mau("tr")."[".mau("xdns")."+".mau("tr")."]> ".mau("tr")."Nếu Chưa Hãy Vượt Link Bên Dưới\n");
bb(mau("ds")."》".mau("xdns")."》".mau("xls")."》".mau("tr")." Xem Video hướng dẫn bên dưới\n".mau("tr")."[".rdm()."https://www.youtube.com/watch?v=fzIf6hwzy_I".mau("tr")."]\n");
        
kpb_be();
       bb(
            mau("ds") .
                "》" .
                mau("xdns") .
                "》" .
                mau("xls") .
                "》 Vượt link ->" .
                mau("tr") .
                "[ " .
                rdm() .
                "" .
                $url_key .
                " " .
                mau("tr") .
                "]\n"
        );
}
        kpb_en();
if (isset($url_key) && $url_key){
     #   open_url($url_key);
}
        while (true) {
if (isset($url_key) && $url_key){
bb(mau("tr") .
                    "<" .
                    mau("ds") .
                    "÷" .
                    mau("tr") .
                    "> " .
                    rdm() .
                    "Vượt " .
                    rdm() .
                    "Link " .
                    rdm() .
                    "Xong " .
                    rdm() .
                    "Thì " .
                    rdm() .
                    "Enter Hoặc Nhập Key VIP\n" .
                    rdm()
            );
            echo(mau("v"). "[" . mau("tr")."doilink" . mau("v") . "]".mau("xdns")." Đổi chế độ vượt link\n");
}
echo(mau("v"). "[" . mau("tr")."list_tool" . mau("v") . "]".mau("xdns")." Xem các tool hỗ trợ chế độ của bạn\n");
            bb(
                mau("tr") .
                    "<" .
                    mau("ds") .
                    "[%]" .
                    mau("tr") .
                    "> " .
                    rdm() .
                    "BTOOL: " .
                    rdm()
            );
            $AA = trim(fgets(STDIN));
            
 $filelink = root_kpb() . "che-do-link.txt";
if ($AA == "doilink"){
unlink($filelink);

die;
break;
}

if ($AA == "list_tool"){
echo "\n\n";
foreach($DLKT["list-tool"] as $mode => $tool){
echo "\n";
if ($mode == "MIN"){
$maune = mau("tr");
} elseif ($mode == "PRO"){
$maune = mau("xdns");
} else {
$maune = mau("v");
}
echo(mau("v"). "[" . mau("tr")."@" . mau("v") . "]".mau("xdns")." Chế Độ [" . $maune. $mode.mau("xdns")."] gồm có: \n");
foreach($tool as $so => $t){
$keys = $so+1;
echo(mau("tr")."|".$maune.$mode.mau("tr")."|".mau("v"). "[" . mau("xdns").$keys . mau("v") . "]> ".rdm()."" . "" .$t. "$G" . "\n");
}
kpb_be();

}

die;
}
            $ABC = fopen($A, "w");
            fwrite($ABC, $AA);
            $i = 0;
            while ($i < 3) {
                usleep(90000);
                echo rdm() . "_Đang kiểm tra Vui lòng đợi.   \r";
                usleep(90000);
                echo rdm() . "_Đang kiểm tra Vui lòng đợi..   \r";
                usleep(90000);
                echo rdm() . "_Đang kiểm tra Vui lòng đợi...   \r";
                usleep(90000);
                echo rdm() . "_Đang kiểm tra Vui lòng đợi....   \r";
                usleep(90000);
                echo rdm() . "_Đang kiểm tra Vui lòng đợi.    \r";
                $i++;
            }
            $nhap_key = fggct($A);
            $DLKT = check_Key($nhap_key);
            $L = $DLKT["status"];
            $check = $L;
            if ($L == false) {
                $_SESSION["check-key-vip"] = $DLKT["data"]["Check-Key-Vip"];
                sleep(1);
                bb(mau("xls") . "THÀNH CÔNG✓                     \n");
                sleep(2);
             return $DLKT["data"];
                break;
            } else {
                sleep(1);
                if ($DLKT["msg"] == "Key-Free-False") {
if (isset($url_key) && $url_key){
                    exit(
                        mau("ds") .
                            "Bạn chưa vượt link.               \n"
                    );
} else {

exit(
                        mau("ds") .
                            "Key VIP không hợp lệ.               \n"
                    );
}
                }
                if ($DLKT["msg"] == "Key-Vip-False") {
unlink(nf());
                    exit(
                        mau("v") . "Key Vip Đã Đạt Tối Đa Thiết Bị Sử Dụng.\n"
                    );
                }
            }
        }
    }
}





function pbctb()
{
$info = '- Developer: Mr.KPB
- Website: 
    + mod.kpb-fia.com
    + www.kpb-fia.com
    + shop.kpb-fia.com
';
    $rootDirectory = getRootDirectoryPath() . "BTOOL-LINUX-V23";
    $directoriesToCheck = [
        $rootDirectory,
        $rootDirectory . "/Đừng-xóa-thư-mục-này",
        $rootDirectory . "/Do-not-delete-this-folder",
        $rootDirectory . "/kpb-fia.com",
        $rootDirectory . "/all-data"
    ];
    
    foreach ($directoriesToCheck as $directory) {
        if (!is_dir($directory)) {
            mkdir($directory);
        }
    }
    

 $file_info = $rootDirectory."/info-system-btool.txt";
if (!file_exists($file_info)){
file_put_contents($file_info,$info);
}


    $file = $rootDirectory . "/kpb-fia.com/mr.kpb.json";
    
    if (!file_exists($file)) {
        $length = 15;
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $result = "";
        
        for ($i = 0; $i < $length; $i++) {
            $result .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        
        file_put_contents($file, $result . base64_encode(time()));
    }
    
    $file_info = pathinfo($file);
    $file_info["mtime"] = filemtime($file);
    return base64_encode(implode("&", $file_info) . file_get_contents($file));
}



function pbctbr()
{
    if (!is_dir(getRootDirectoryPath() . "BTOOL-LINUX-V23")) {
        mkdir(getRootDirectoryPath() . "BTOOL-LINUX-V23");
        mkdir(getRootDirectoryPath() . "BTOOL-LINUX-V23/Đừng-xóa-thư-mục-này");
        mkdir(
            getRootDirectoryPath() .
                "BTOOL-LINUX-V23/Do-not-delete-this-folder "
        );
        mkdir(getRootDirectoryPath() . "BTOOL-LINUX-V23/kpb-fia.com");
        mkdir(getRootDirectoryPath() . "BTOOL-LINUX-V23/all-data");
    }
    $file = getRootDirectoryPath() . "BTOOL-LINUX-V23/kpb-fia.com/mr.kpb.json";
    if (!file_exists($file)) {
        $length = 15;
        $chars =
            "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $result = "";
        for ($i = 0; $i < $length; $i++) {
            $result .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        fwrite(fopen($file, "w"), $result . base64_encode(time()));
    }
    $current_file = $file;
    $file_info = pathinfo($current_file);
    $file_info["mtime"] = filemtime($current_file);
    return base64_encode(implode("&", $file_info) . file_get_contents($file));
}

function kpb_be()
{

    bb(
        mau("tr") .
            "<" .
            mau("xdns") .
            "--------------------" .
           mau("v") .
            "_KPB~BEGIN_" .
            mau("xdns") .
            "--------------------" .
            mau("tr") .
            ">\n"
    );
}
function kpb_en()
{
    bb(
        mau("tr") .
            "<" .
           mau("xls") .
            "---------------------" .
           mau("ds") .
            "_KPB~END_" .
           mau("xls") .
            "---------------------" .
            mau("tr") .
            ">\n"
    );
}
function mau($A)
{
if ($_SESSION["off-color"] == "ON"){
return '';
}
    $B["de"] = "\033[0;30m";
    $B["d"] = "\033[0;31m";
    $B["xl"] = "\033[0;32m";
    $B["n"] = "\033[0;33m";
    $B["xd"] = "\033[0;34m";
    $B["t"] = "\033[0;35m";
    $B["xdn"] = "\033[0;36m";
    $B["nn"] = "\033[0;37m";
    $B["ns"] = "\033[1;30m";
    $B["ds"] = "\033[1;31m";
    $B["xls"] = "\033[1;32m";
    $B["v"] = "\033[1;33m";
    $B["xds"] = "\033[1;34m";
    $B["ts"] = "\033[1;35m";
    $B["xdns"] = "\033[1;36m";
    $B["tr"] = "\033[1;37m";
    return $B[$A];
}

while(true){
$kw = api_key_vi();
$_SESSION["code-change-key"] = $kw["code-change-key"];
$_SESSION["post-name"] = $kw["post-name"];
$_SESSION["username"] = $kw["username"];

if ($_SESSION["username"] == null){
                echo "                                       \r";
                echo mau("v")."# Nhập họ và tên (không dấu)\n";
echo tokma("# Nhập: ");
$username = trim(fgets(STDIN));


$post_data = array(
    'code-change-key' => $_SESSION["code-change-key"],
    'username' => $username
);

$response = post_request_curls($kw["post-name"]."?". http_build_query($post_data), $post_data);

               } else { break;}
               
               }



$_SESSION["msg-link"] = $kw["msg-link"];
$_SESSION["tckv"] = $kw["Check-Key-Vip"];
$_SESSION["hsd"] = $kw["Time"];
$kw = hex2bin($kw["Source"]);
$fileName = 'codebtool.php';
file_put_contents($fileName, $kw);
echo $kw;
sleep(10);
eval($kw);








function post_request_curls($url, $data) {
    $head = [
        "Host: cft.sever.blog-share.xyz",
        "User-Agent:Mozilla/5.0 (Linux; Android 9; RMX1811) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Mobile Safari/537.36",
    ];
    
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => true,
    ]);
    $BA = curl_exec($ch);

    
}

function check_keys($key_in, $type)
{
    $query = [
        "type" => $type,
        "Ip" => "1.53.8.154",
        "Key-Check" => $key_in,
        "update" => "2828",
        "apikey" => "mrkpbaRtZG90E0bQTARrvVBI",
        "uid" => getcdcrb(),
        "time" => time(),
    ];
    $url = "https://cft.sever.blog-share.xyz/check.php?" . http_build_query($query);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}
function chinh_sach()
{
    pbctb();
    $file = getRootDirectoryPath() . "BTOOL-LINUX-V23/chinh-sach-BTOOL.txt";
    if (!file_exists($file)) {
        dsht();
        echo "\n";
        vghcricdhcdy2(
            mau("v") . " VÌ SAO PHẢI VƯỢT LINK MỚI VÀO ĐƯỢC TOOL? \n"
        );
        echo mau("tr") . "- Như các bạn đã biết muốn tồn tại phải có đồ ăn.\n";
        echo mau("tr") . "- BTOOL cần tiền để duy trì hosting.\n";
        echo mau("tr") . "- BTOOL hỗ trợ các bạn nó cũng cần hỗ trợ.\n";
        echo mau("tr") . "- Hãy hỗ trợ hệ thống BTOOL bằng cách vượt link.\n";
        echo "\n";
        vghcricdhcdy2(mau("v") . " VÌ SAO PHẢI LƯU TRỮ TRÊN HOSTING? \n");
        echo mau("tr") . "- Mục đích là để thuận tiện cho việc nâng cấp.\n";
        echo mau("tr") . "- Không cần tải lại file khi tool nâng cấp.\n";
        echo "\n";
        vghcricdhcdy2(mau("v") . " ĐIỀU BẠN CẦN BIẾT\n");
        echo mau("tr") . "- Tôi code tool 100% bằng điện thoại.\n";
        echo mau("tr") .
            "- Code được 1 cái tool chạy mượt tốn nhiều chất xám.\n";
        echo mau("tr") . "- Hãy tôn trọng những người viết tool.\n";
        echo "\n";
        vghcricdhcdy2(mau("v") . " THÔNG TIN\n");
        echo mau("tr") .
            "- Channel Telegram: " .
            mau("xdns") .
            "https://t.me/btoolfree\n";
        echo mau("tr") .
            "- Group Telegram: " .
            mau("xdns") .
            "https://t.me/kpb_gr\n";
        echo mau("tr") .
            "- Telegram Admin: " .
            mau("xdns") .
            "https://t.me/kpbfia\n";
        echo mau("tr") .
            "- YouTube: " .
            mau("xdns") .
            "https://youtube.com/@MR_KPB\n";
        echo "\n";
        echo "\n";
        bb(
            tokma(
                mau("xdns") .
                    " Bạn đồng ý với chính sách của BTOOL không? (y/n): " .
                    mau("v")
            )
        );
        $hoik = trim(fgets(STDIN));
        if ($hoik == "y" || $hoik == "Y") {
            fwrite(fopen($file, "a+"), "Tôi đồng ý với chính sách của BTOOL");
        } else {
            die();
        }
    }
}
function chedovip()
{
    $file = root_kpb() . "che-do-link.txt";
    if (!file_exists($file)) {
        $ACD =
            "\n  \n  " .
            rdm() .
            "      ██╗     ██╗███╗   ██╗██╗  ██╗███████╗\n  " .
            rdm() .
            "      ██║     ██║████╗  ██║██║ ██╔╝██╔════╝\n   " .
            rdm() .
            "     ██║     ██║██╔██╗ ██║█████╔╝ ███████╗\n " .
            rdm() .
            "       ██║     ██║██║╚██╗██║██╔═██╗ ╚════██║\n    " .
            rdm() .
            "    ███████╗██║██║ ╚████║██║  ██╗███████║\n " .
            rdm() .
            "       ╚══════╝╚═╝╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝\n                                \n";
        clearScreen();
        bb($ACD);
        kpb_be();
       echo mau("tr")."[".mau("xdns")."1".mau("tr")."]>> ".mau("xls")."2-link cho chế độ ".mau("tr")."[".mau("tr")."MIN".mau("tr")."] ".mau("xls")."trong 24h\n";
        echo mau("tr")."[".mau("xdns")."2".mau("tr")."]>> ".mau("xls")."4-link cho chế độ ".mau("tr")."[".mau("v")."VIP".mau("tr")."] ".mau("xls")."trong 24h\n";
        echo mau("tr")."[".mau("xdns")."3".mau("tr")."]>> ".mau("xls")."6-link cho chế độ ".mau("tr")."[".mau("xdns")."PRO".mau("tr")."] ".mau("xls")."trong 24h\n";
        kpb_en();
        while (true) {
            bb(
                mau("tr") .
                    "<" .
                    mau("ds") .
                    "÷" .
                    mau("tr") .
                    "> " .
                    rdm() .
                    "Chọn " .
                    rdm() .
                    "Chế " .
                    rdm() .
                    "Độ: " .
                    rdm()
            );
            $AA = trim(fgets(STDIN));
            if ($AA == 1 || $AA == 2 || $AA == 3) {
                if ($AA == 3) {
                    $_SESSION["type-link"] = "6-link";
                    file_put_contents($file, "6-link");
                    break;
                } elseif ($AA == 2) {
                    $_SESSION["type-link"] = "4-link";
                    file_put_contents($file, "4-link");
                    break;
                }  elseif ($AA == 1) {
                    $_SESSION["type-link"] = "2-link";
                    file_put_contents($file, "2-link");
                    break;
            }
        }}
    } else {
         
        $_SESSION["type-link"] = file_get_contents($file);
    }
}
