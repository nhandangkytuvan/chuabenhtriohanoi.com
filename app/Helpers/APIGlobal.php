<?php 
namespace App\Helpers;
use Illuminate\Http\Request;
use DB,File,Auth,App,Session;
class APIGlobal {
    // get getRandomeName
    public static function getRandomeName(){
        // $benhs = ['Trĩ ngoại','Trĩ nội','Trĩ hỗn hợp',' Áp xe hậu môn','Ngứa rát hậu môn','Polyp hậu môn','Đau hậu môn','Hậu môn có vật thể','Rò hậu môn','  Nứt kẽ hậu môn','Sa hậu môn','Đi ngoài ra máu','Táo bón'];
        // $numbers = [0,1,2,3,4,5,6,7,8,9];
        // $names = [
        //     'An','Anh','Bách','Bảo','Công','Cường','Đức','Dũng','Dương','Đạt','Duy','Gia','Hải','Hiếu','Hoàng','Huy','Hùng','Khải','Khang','Khánh','Khoa','Khôi','Kiên','Lâm','Long','Lộc','Minh','Nam','Nghĩa','Ngọc','Nguyên','Nhân','Phi','Phong','Phúc','Quân','Quang','Quốc','Tâm','Thái','Thành','Thiên','Thịnh','Trung','Tuất','Tùng','Sơn','Việt','Vinh','Uy'];
        // $phones = ['098','097','096','0169','0168','0167','0166','0165','0164','0163','0162','091','094','0123','0124','0125','0127','0129','090','093','0120','0121','0122','0126','0128'];
        
        // $html = '<table>';
        // $name_rands = array_rand($names,6);
        // $phone_start_rands = array_rand($phones,1);
        // foreach ($name_rands as $key => $value) {
        //     $phone_start_rands = array_rand($phones,1);
        //     $phone_end_rands = implode('',array_rand($numbers,3));
        //     $benh_rands = array_rand($benhs,1);
        //     $html = $html.'<tr>
        //             <td>Anh '.$names[$name_rands[$key]].'</td>
        //             <td>: '.$phones[$phone_start_rands].'****'.$phone_end_rands.' </td>
        //             <td>: '.$benhs[$benh_rands].'</td>
        //         </tr>';
        // }
        // $html = $html.'</table>';
        // Session::put('random_names',$html);
        //return $html;
        return '<table>
                <tr>
                    <td>Chị Giang</td>
                    <td>: 0122****469 </td>
                    <td>: Trĩ hỗn hợp</td>
                </tr>
                <tr>
                    <td>Anh Gia</td>
                    <td>: 0163****478 </td>
                    <td>: Nứt kẽ hậu môn</td>
                </tr>
                <tr>
                    <td>Anh Khánh</td>
                    <td>: 097****679 </td>
                    <td>: Trĩ nội</td>
                </tr>
                <tr>
                    <td>Anh Nam</td>
                    <td>: 091****289 </td>
                    <td>: Rò hậu môn</td>
                </tr>
                <tr>
                    <td>Chị Cúc</td>
                    <td>: 0163****056 </td>
                    <td>: Hậu môn có vật thể</td>
                </tr>
                <tr>
                    <td>Anh Vinh</td>
                    <td>: 0168****026 </td>
                    <td>: Hậu môn có vật thể</td>
                </tr>
        </table>';
    }
}