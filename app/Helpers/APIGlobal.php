<?php 
namespace App\Helpers;
use Illuminate\Http\Request;
use DB,File,Auth,App,Session;
class APIGlobal {
    // get getRandomeName
    public static function getRandomeName(){
        $benhs = ['Trĩ ngoại','Trĩ nội','Trĩ hỗn hợp',' Áp xe hậu môn','Ngứa rát hậu môn','Polyp hậu môn','Đau hậu môn','Hậu môn có vật thể','Rò hậu môn','  Nứt kẽ hậu môn','Sa hậu môn','Đi ngoài ra máu','Táo bón'];
        $numbers = [0,1,2,3,4,5,6,7,8,9];
        $names = [
            'Anh Quân','Anh Quang','Anh Quốc','Anh Tâm','Anh Thái','Anh Thành','Anh Thiên','Anh Thịnh','Anh Trung','Anh Tuất','Anh Tùng','Anh Sơn','Anh Việt','Anh Vinh','Anh Uy',

                'Chị Dung','Chị Linh','Chị Loan','Chị Nga','Chị Ngân','Anh An','Anh Anh','Anh Bách','Anh Bảo','Anh Công','Chị Ngọc','Chị Nhung','Chị Oanh','Chị Quyên','Chị Quỳnh','Anh Cường','Anh Đức','Anh Dũng','Anh Dương','Anh Đạt','Chị Thảo','Chị Thu','Chị Thủy','Chị Trang','Chị Uyên','Anh Duy','Anh Gia','Anh Hải','Anh Hiếu','Anh Hoàng','Chị Vân','Chị Vy','Chị Yến','Chị Hà','Chị Hằng','Chị Hồng','Chị Nguyệt','Anh Huy','Anh Hùng','Anh Khải','Anh Khang','Anh Khánh','Anh Khoa','Anh Khôi','Chị Trân','Chị Xuân','Chị Quế','Chị Phương','Chị Phượng','Chị Huyền','Chị Liễu','Anh Kiên','Anh Lâm','Anh Long','Anh Lộc','Anh Minh','Anh Nam','Anh Nghĩa','Chị Hạnh','Chị Tô','Chị Mỹ','Chị Chuyên','Chị Khanh','Chị Ánh','Anh Ngọc','Anh Nguyên','Anh Nhân','Anh Phi','Anh Phong','Anh Phúc','Chị Lý'];
        $phones = ['098','097','096','0169','0168','0167','0166','0165','0164','0163','0162','091','094','0123','0124','0125','0127','0129','090','093','0120','0121','0122','0126','0128'];
        
        $html = '<table>';
        $name_rands = array_rand($names,9);
        foreach ($name_rands as $key => $value) {
            $phone_start_rands = array_rand($phones,1);
            $phone_end_rands = implode('',array_rand($numbers,3));
            $benh_rands = array_rand($benhs,1);
            $html = $html.'<tr>
                    <td>'.$names[$name_rands[$key]].'</td>
                    <td>: '.$phones[$phone_start_rands].'****'.$phone_end_rands.' </td>
                    <td>: '.$benhs[$benh_rands].'</td>
                </tr>';
        }
        $html = $html.'</table>';
        Session::put('random_names',$html);
        return $html;
    }
}