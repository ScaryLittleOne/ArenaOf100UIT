<?php

use Illuminate\Database\Seeder;

class SampleQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// regex to grep all questions: ^[0-9].*\n(^[^A].*\n)*
        /// replace with: $id = DB::table('questions')->insertGetId(['content' => '$1']);\n
        
        /// regex to grep all answers: ((^[A-D]).*)
        /// replace with DB::table('questions_answers')->insert(['abcd' => '$2','content' => '$1', 'correct' => false, 'question_id' => $id]);\n

        $id = DB::table('questions')->insertGetId(['content' => '1. Đầu năm 1968, lúc này ở nước Mỹ đang có sự kiện chính trị, xã hội quan trọng nào, tác động đến chiến tranh Việt Nam?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Bầu cử tổng thống', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Khủng hoảng kinh tế', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Tổng thống nhậm chức', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Cả 3 đáp án đều sai', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '2. Điền từ còn thiếu vào chỗ trống sau:
Đảng lao động Việt Nam tại hội nghị BCH TW lần thứ 13 (tháng  1/1967) đã đề ra chủ trương “Trên cơ sở nắm vững phương châm đánh …….., cần phải  …… và tập trung lực lượng của cả nước, cố gắng tập trung cao độ, đập tan âm mưu của địch”
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Chắc, huy động', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Lâu dài, động viên', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Lâu dài, huy động', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Nhanh gọn, kêu gọi ', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '3. Trung ương đã dùng cách đánh mới chưa từng thực hiện trên chiến  trường, giáng một đòn bất ngờ thật mạnh vào ý chí xâm lược của Mỹ, kéo Mỹ xuống thang, trong đó, thể hiện ở lĩnh vực Mục tiêu tấn công là:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Cơ quan đầu não của Mỹ', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Chế độ Sài Gòn', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Các trung tâm chỉ huy, hậu cứ, phương tiện chiến tranh của địch', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Cả 3 đáp án trên', 'correct' => true, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '4. Trận chiến tại chiến trường Đường 9 – Khe Sanh được ghi nhận là:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Nơi thực hiện tổng khởi nghĩa', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Nơi thu hút, giam chân lực lượng chiến lược của địch', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Cả 2 đáp án đều đúng', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Cả 2 đáp án đều sai', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '5. Theo yêu cầu nhiệm vụ của chiến trường, ngày 25/10/1967, Trung ương Cục quyết định giải thể Quân khu I miền Đông và Quân khu IV Sài Gòn – Gia Định, thành lập “Khu trọng điểm” và chia chiến trường khu thành bao nhiêu phân khu:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 4', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 5', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 6', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. 7', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '6. Điền từ còn thiếu vào Thư chúc tết mà Chủ tịch Hồ Chí Minh gửi cho đồng bào, chiến sĩ cả nước:
“Xuân này hơn hẳn mấy xuân qua
……….tin vui khắp nước nhà
Nam – Bắc ………đánh giặc Mỹ
Tiến lên! Toàn thắng ắt về ta”
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Thắng trận, vùng lên', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Thắng lợi, vùng lên', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Thắng trận, thi đua', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Thắng lợi, thi đua', 'correct' => true, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '7. Ngày 08/12/1967, địch bắt đầu mở hành quân, mở màn cho cuộc phản công chiến lược lần thứ 3. Cuộc hành quân này lấy tên gọi là:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Hành quân xanh', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Hòn đá vàng', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Hành quân vàng', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Giết nhầm còn hơn bỏ sót', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '8. Thành Đoàn TP.HCM đã tổ chức đêm văn nghệ mừng tết Quang Trung vào thời gian nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 26/1/1968', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B.  27/1/1968', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 28/1/1968', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. 29/1/1968', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '9. Ngày 25/3/1968, tổng thống Mỹ triệu tập Hội đồng an ninh Quốc gia để xem xét lại toàn bộ cuộc chiến tranh Việt Nam. Tổng thống Johnson đã thay đổi chiến lược như thế nào:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Ngừng ném bom miền Bắc Việt Nam từ vĩ tuyến 20 trở ra', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Từ bỏ chiến lược “Tìm và Diệt”, thay thành chiến lược “Quyét và Giữ”', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Từng bước thực hiện “Phi Mỹ hóa chiến chanh”', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Cả 3 đáp án trên đều đúng.', 'correct' => true, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '10. Thời kỳ 1960-1968, Mỹ đưa ra học thuyết “Phản ứng linh hoạt” (flexible Response) với loại chiến tranh nào:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Chiến tranh đặc biệt', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Chiến tranh cục bộ', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Chiến tranh tiêu hao', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Cả 3 loại chiến tranh trên', 'correct' => true, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '11. Ngày 31/3/1968, tổng thống Johnson nói trước quốc hội Mỹ về vấn đề Việt Nam, ông đã tuyên bố điều gì:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Tuyên bố ngừng leo thang quân sự', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Đẩy mạnh thương lượng với Việt Nam', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Không ra tranh cử tổng thống', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Cả 3 đáp án trên đều đúng.', 'correct' => true, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '12. Điền từ còn thiếu vào chỗ trống:
Robert Thompson, cha đẻ của mô hình “Ấp chiến lược” đã nhận xét về thất bại chiến lược của Mỹ trong chiến tranh Việt Nam như sau: “Chính sách của Mỹ ở Việt Nam là ngu đần. Nó…… hỏa lực và làm ……..sai lầm. Mỗi viên đạn mà Mỹ bắn vào Việt Nam có thể giết được một Việt Cộng, nhưng chắc chắn sẽ làm cho nông dân Việt Nam xa lánh họ”
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Nhân đôi, phình to', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Tiêu hao, giảm', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Gia tăng, lún sau', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Suy giảm, nhân đôi', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '13.  Sau thắng lợi của cuộc tổng tiến công và nổi dậy Mậu Thân 1968, Chính phủ  Cách mạng lâm thời Cộng hòa miền Nam được thành lập, do đồng chí nào làm chủ tịch?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Trịnh Đình Thảo', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Huỳnh Tấn Phát', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Nguyễn Hữu Thọ', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D.  Phùng Văn Cung', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '14. Thất bại của cuộc chiến Mậu Thân 1968 đã buộc Mỹ ngồi vào bàn đàm phánvà ký kết hiệp định:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Sơ bộ', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Pari', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Giơ Ne Vơ', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Ngoại giao', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '15. Nghệ thuật lãnh đạo của Đảng ta trong cuộc chiến Mậu Thân 1968 là 
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Đánh nhanh thắng nhanh', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Đánh chắc tiến chắc', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Vừa đánh vừa đàm', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Dân quân du kích', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '16. “Nhà kiến trúc” chính của cuộc tổng tiến công và nổi dậy Xuân Mậu Thân 1968 là:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Lê Duẩn', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Võ Nguyên Giáp', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Huỳnh Tấn Phát', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Trịnh Đình Thảo', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '17. Trung ương Cục miền Nam là một bộ phận của Ban Chấp hành Trung ương Đảng Cộng sản Việt Nam đặt dưới sự lãnh đạo của Ban Chấp hành Trung ương, thường xuyên do Bộ Chính trị thay mặt lãnh đạo trực tiếp lãnh đạo cách mạng Nam Bộ trong thời kỳ 1951-1954 và miền Nam Việt Nam thời kỳ 1961-1975, có địa điểm ở đâu:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Tp.Hồ Chí Minh', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Tây Ninh', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Lâm Đồng', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Tây Nguyên', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '18. Chi phí chiến tranh của Mỹ tính tới năm 1968 tại chính trường Việt Nam theo Viện lịch sử quân sự Việt Nam thống kê là:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 50 tỷ đô la', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 60 tỷ đô la', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 70 tỷ đô la', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. 80 tỷ đô la', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '19. Sự thất bại của Mỹ sau chiến dịch Mậu Thân 1968 đã làm bùng nổ sự bất bình và khủng hoảng trong nội bộ nước Mỹ, trong đó, có một trường Đại học, sinh viên đã phản đối ban lãnh đạo trường nhận tiền tài trợ của Bộ Quốc phòng để nghiên cứu các đề tài quân sự, đó là trường nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Trường Đại học Michigan', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Trường Đại học Columbia', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Trường Đại học Chicago', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. Trường Đại học Washington', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '20. Mùa hè năm 1967, các trường Đại học ở Hoa Kỳ biểu tình phản đối chiến tranh của Mỹ tại Việt Nam, con số được truyền thông Mỹ ghi nhận là:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 50 trường', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 100 trường', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 130 trường', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'D','content' => 'D. 150 trương', 'correct' => false, 'question_id' => $id]);
$id = DB::table('questions')->insertGetId(['content' => '21.  Khi Bộ trưởng bộ quốc phòng Mỹ Robert Mc Namara đã đề nghị tìm giải pháp mới về vấn đề Việt Nam và xuống thang chiến tranh, nhưng không được Johnson chấp thuận; ông đã quyết định điều gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Nghe theo Johnson', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Từ chức', 'correct' => true, 'question_id' => $id]);

    }
}
