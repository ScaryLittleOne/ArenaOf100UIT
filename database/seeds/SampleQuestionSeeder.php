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
// nguoi choi 1
//
$id = DB::table('questions')->insertGetId(['content' => '1  Đoàn TNCS Hồ Chí Minh được thành lập vào ngày tháng năm nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 09/01/1931', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 26/3/1932', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 26/3/1931', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '2  Pháp nổ súng tấn công nước ta lần đầu tiên vào năm 1858 tại đâu?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Khánh Hòa', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Đà Nẵng', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Phú Yên', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '3  HDI là chỉ số gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Hạnh phúc', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Phát triển con người', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Thu nhập bình quân', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '4  Người thầy đầu tiên của Bác Hồ là ai?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Nguyễn Sinh Sắc', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Vương Thúc Mậu', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Vương Thúc Quý', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '5  Vận động viên Ánh Viên lập kỳ tích tại SEA Games 28 với bao nhiêu Huy Chương Vàng?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 7', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 8', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 9', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '6  Theo Các Mác, tiền tệ có mấy chức năng
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 3', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 4', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 5', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '7  “Làm việc phải đến đúng giờ, chớ đến trễ về sớm…Ai lười biếng tức là gạt dân”. Bác Hồ muốn nhắc nhở người công chức phải trau dồi đức tính gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Cần', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Kiệm', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Liêm', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '8  Tháng 3 được chọn là tháng thanh niên hàng năm, bắt đầu vào năm nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 2003', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B.  2004', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 2005', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '9  Người sáng lập ra phái Thiền Trúc Lâm là ai?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Lý Thánh Tông', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Trần Nhân Tông', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Lê Thánh Tôn', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '10  Ai là người đưa ra phạm trù vật chất quyết định ý thức
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Các Mác', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Ăng ghen', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Lênin', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '11  “Còn non, còn nước, còn người. Thắng giặc Mỹ ta sẽ xây dựng hơn mười ngày nay”. Hai câu thơ này được viết trong tác phẩm nào
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Nhật ký trong tù', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Đời sống mới', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Di chúc', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '12 Ai là tác giả câu nói nổi tiềng “Con đường của thanh niên chỉ có thể là con đường cách mạng chứ không thể là con đường nào khác”
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Lý Tự Trọng', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Cù Chính Lan', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Bế Văn Đàn', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '13  Mác, Ăng ghen coi đào tạo một “đội ngũ trí thức vô sản” là nhiệm vụ bức thiết để chuẩn bị cho công cuộc xây dựng xã hội tương lai”. Đội ngũ này được hình thành từ đối tượng?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Công nhân', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Sinh viên', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Nông dân', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '14 Trong kinh tế chính trị “c” là ký hiệu của khái niệm nào 
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Tư bản bất biến', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Giá trị thặng dư', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Tư bản khả biến', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '15 Tri thức của con người phù hợp với hiện thực khách quan đã được thực tiễn kiểm nghiệm gọi là gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Lý tưởng', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Chân lý', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Thực tế', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '16 Nói về sự nghiệp giáo dục, chủ tịch Hồ Chí Minh đã viết “Nay chúng ta đã giành được quyền độc lập. Một trong những công việc phải thực hiện cấp tốc trong lúc này là “ ?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Bình dân học vụ', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Nâng cao dân trí', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Dạy tốt, học tốt', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '17 Năm 1905, khi đang theo học tại lớp dự bị trường tiểu học Pháp- Bản xứ ở TP Vinh, khi đó người có tên là
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Văn Ba', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Nguyễn Tất Thành', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Trần Lực', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '18 Chủ nghĩa Mác Lênin được cấu thành từ mấy bộ phận
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 3', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 4', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 5', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '19 Bút danh trong tác phẩm Đời sống mới của Bác là ?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. T.L', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Tân Sinh', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Hồ Chí Minh', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '20  Ai là người đưa ra quan điểm “Dân vi quý, xã tắc thứ chi, quân vi khinh”?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Tuân Tử', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Khổng Tử', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Mạnh Tử', 'correct' => true, 'question_id' => $id]);
//nguoi choi 2
//

$id = DB::table('questions')->insertGetId(['content' => '1  Ai là tổng bí thư đầu tiên của Đảng cộng sản Việt Nam?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Lê Hồng Phong', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Trần Phú', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Hà Huy Tập', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '2  Xạ thủ Hoàng Xuân Vinh đã dành huy chương vàng bắn súng tại SEA Games 26 với cự ly bao nhiêu?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 10m', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 15m', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 25m', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '3  Bia khắc tên tiến sĩ ở Văn Miếu (Hà Nội) bắt đầu thực hiện dưới triều đại nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Tiền Lê', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Lê', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Hậu Lê', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '4  Toàn bộ những quan hệ sản xuất hợp thành cơ cấu kinh tế của một hình thái kinh tế- Xã hội nhất định được gọi là gì ?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Cơ sở hạ tầng', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Quan hệ sản xuất', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Tư liệu sản xuất', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '5  Gia đình trong quá trình quá độ lên Chủ nghĩa Xã hội có mấy chức năng?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 3', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 4', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 5', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '6  Lực lượng nào được coi là chủ thể của tiến trình lịch sử
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Quần chúng nhân dân', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Công nhân', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Giai cấp vô sản', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '7  Vị anh hùng nào đã dũng cảm lấy thân mình lấp lỗ châu mai trong chiến dịch Điện Biên Phủ
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Bế Văn Đàn', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Phan Đình Giót', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Tô Vĩnh Diện', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '8  Cảm giác, tri giác, biểu tượng là các hình thức biểu hiện của?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Nhận thức lý tính', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B.  Nhận thức cảm tính', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Tri thức', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '9  Chiều 24/11/2017, Quốc hội đã thông qua Nghị quyết cơ chế thí điểm, chính sách đặc thù cho TP.HCM gồm bao nhiêu nhóm cơ chế?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 4', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 5', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 6', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '10  Bộ phận nào là hạt nhân quan trọng và là phương thức tồn tại của ý thức?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Tri thức', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Thế giới quan', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Bộ não con người', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '11  Đầu năm 1931, Bác Hồ về Hồng Kông hoạt động, khi ấy người mang bí danh là gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Lý Thụy', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Lin', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Tống Văn Sơ', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '12  Giải thưởng Hồ Hảo Hớn được Thành Đoàn TP.HCM trao tặng cho Chương trình Máy tính cũ, Tri thức mới của trường ĐH CNTT vào năm nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 2013', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 2014', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 2015', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '13  Thất bại của cuộc chiến Mậu Thân 1968 đã buộc Mỹ ngồi vào bàn đàm phánvà ký kết hiệp định gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Pari', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Gionever', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Sơ bộ', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '14 “Phải giữ gìn sự đoàn kết nhất trí trong Đảng như giữ gìn con ngươi của mắt mình”. Chủ tịch Hồ Chí Minh đã căn dặn điều này trong tác phẩm nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Đạo đức cách mạng ', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Di chúc', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Nhật ký trong tù', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '15 Xếp theo thứ tự từ trước đến sau của các nền văn hóa người Việt cổ?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Bắ Sơn- Đông Sơn- Hòa Bình', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Đông Sơn- Hòa Bình- Bắc Sơn', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Hòa Bình- Bắc Sơn- Đông Sơn', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '16 Chủ nghĩa Duy tâm có mấyloại?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 2', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 3', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 4', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '17 “Thành phố soi thấy tương lai rất sáng của mình trên vầng trán các em” là câu nói nổi tiếng của
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Đỗ Mười', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Võ Văn Kiệt', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Phan Văn Khải', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '18 Lý luận nào được xem là viên đá tảng trong học thuyết kinh tế của Mác
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Kiến trúc thượng tầng', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Quan hệ sản xuất', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Giá trị thặng dư', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '19 Tác giả đầu tiên của danh từ “Kinh tế chính trị”  là ai?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Mông-crê-chiên', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Phơ-bách
', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Leon Walras', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '20  Trong giai đoạn chuẩn bị cho chiến dịch Mậu Thân 1968, Thành Đoàn đã xuất bản báo công khai và báo bí mật. Trong đó, tờ báo công khai là ?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Lửa Thiêng', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Suối Thép', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Hồn Trẻ', 'correct' => true, 'question_id' => $id]);
// nguoi choi 3
//
$id = DB::table('questions')->insertGetId(['content' => '1  Sinh viên nhập học năm 2017 thuộc khóa thứ mấy của trường ?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 10', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 11', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 12', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '2 Năm 2015 kỷ niệm 84 năm ngày thành lập Đoàn, Vậy năm 2018 kỷ niệm bao nhiêu năm thành lập Đoàn?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 85', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 86', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 87', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '3  Lực lượng cơ bản nhất trong quần chúng nhân dân là lực lượng nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Trí thức', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Người lao động', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Sinh viên', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '4  Bác Hồ có bao nhiêu anh chị em ruột?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 2', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 3', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 4', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '5  “Gieo gió, gặt bão” phù hợp với nội dung cặp phạm trù nào của Triết học?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Bản chất- hiện tượng', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Nội dung – hình thức', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Nguyên nhân – kết quả', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '6  Trong lịch sử dựng nước của dân tộc ta, nhà nước đầu tiên được thành lập là nhà nước nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Văn Lang', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Âu Lạc', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Lạc Việt', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '7  Theo Hồ Chí Minh, là công việc gì: Là bổn phận của mỗi người yêu nước, không khó khăn, tốn kém gì, được thực hiện mỗi buổi sáng?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Tuần lễ vàng', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Hũ gạo cứu đói', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Tập thể dục', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '8  “Nhằm thẳng quân thù mà bắn” là câu nói nổi tiếng của ai?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Tô Vĩnh Diện', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B.  Nguyễn Viết Xuân', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Bế Văn Đàn', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '9  Màu áo truyền thống của  Đoàn thanh niên là màu gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Trắng', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Đỏ', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Xanh', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '10  Một phong trào của giai cấp công nhân được thực hiện ngay sau ngày đất nước độc lập để chống giặc dốt
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Nha bình dân học vụ', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Bình dân học vụ', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Dạy tốt học tốt', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '11  Phòng làm việc của Văn phòng Đoàn nằm ở tòa nhà nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. A', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. E', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. D', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '12 Hàng hóa có bao nhiêu thuộc tính
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 2', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 3', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 4', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '13  Công trình thanh niên tình nguyện nổi bật của tuổi trẻ cả nước năm 1976 là gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Góp đá xây Trường Sa', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Đường sắt Thống nhất', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Xuân biên giới', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '14 Mặt sau của tờ tiền 1000 đồng là hình ảnh gì? 
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Chùa Cầu Hội An', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Văn Miếu', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Voi khai thác gỗ', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '15 Theo định nghĩa giai cấp của Lênin về giai cấp thì sự khác nhau cơ bản giữa các giai cấp là gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Quyền cai trị', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Quyền sở hữu tư liệu sản xuất', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Số tiền nắm giữ', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '16 Nguyễn Ái Quốc đã lựa chọn những thanh niên để lập ra cộng sản đoàn từ tổ chức nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Tâm tâm xã', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Hội VN cách mạng Thanh niên', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Tân Việt cách mạng Đảng', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '17 Chàng trai Việt Nam đi khắp thế giới bằng xe máy được trao giải we choice award 2017 là ai?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Trần Đăng Khoa', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Trần Đặng Đăng Khoa Thành', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Sơn Tùng', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '18 Giá trị sử dụng của hàng hóa sức lao động khi sử dụng sẽ tạo ra giá trị mới như thế nào?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Lớn hơn giá trị bản thân nó', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Bé hơn giá trị bản thân nó', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Bằng giá trị bản thân nó', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '19 Câu nói “Khi lửa trong lò đã nóng thì củi tươi cũng phải cháy” là của ai?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Phạm Bình Minh', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Nguyễn Thị Kim Ngân', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Nguyễn Phú Trọng', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '20  Xét cho đến cùng, nhân tố quan trọng nhất quyết định sự thắng lợi của 1 trật tự xã hội mới là:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Luật Pháp', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Hệ thống chính trị', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Năng suất lao động', 'correct' => true, 'question_id' => $id]);
//nguoi choi 4
//

$id = DB::table('questions')->insertGetId(['content' => '1  Đại học Quốc gia TP.HCM có bao nhiêu trường đại học?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 5', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 6', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 7', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '2  Trường ĐH CNTT có bao nhiêu bộ môn trực thuộc?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 1', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 3', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 6', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '3  Chương trình Góp đá xây Trường Sa do đơn vị nào phát động?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Báo Tuổi trẻ', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Báo Thanh niên', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Trung ương Đoàn', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '4  Theo Bác Hồ, muốn làm thầy học của dân thì phải làm gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Phải làm học trò của dân', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Phải sâu sát với dân', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Phải nghe dân', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '5  “Một cây làm chẳng nên non, hai cây chụm lại nên hòn núi cao”, phù hợp với nội dung quy luật nào của Triết học?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Quy luật mâu thuẫn', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Quy luật lượng chất', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Quy định phủ định của phủ định', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '6  Sau khi lên ngôi hoàng đế, Lí Bí đặt tên nước ta là gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Đại Việt
', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Đại Cồ Việt', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Vạn Xuân', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '7  Việt Nam là nước thứ mấy trong khu vực Đông Nam Á ra tuyên bố về vùng đặc quyền kinh tế biển 200 hải lý?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Đầu tiên', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Thứ ba', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Thứ tư', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '8  Động cơ chủ yếu thúc đẩy tích lũy tư bản là gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Vàng', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B.  Quyền lực', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Giá trị thặng dư', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '9  Màu áo truyền thống của chiến dịch xuân tình nguyện là gì
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Vàng', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Trắng ', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Xanh', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '10  Hiện vật tiêu biểu cho tài năng và kỹ thuật tinh xảo của nghề đúc đồng của người Việt xưa là gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Trống đồng', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Trang sức đồng', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Vũ khí bằng đồng', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '11  Hiện nay trường ĐH CNTT có bao nhiêu cụm nhà chính ?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 5', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 6', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 7', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '12  Quá trình sản xuất được lặp đi lặp lại thường xuyên và phục hồi không ngừng gọi là?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Tái sản xuất', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Quy luật kinh tế', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Giá trị thặng dư', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '13  Tên phong trào tình nguyện của thanh niên miền bắc trong những năm 1964-1973 là gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Năm xung phong', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Ba sẵn sàng', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Thi đua kiến quốc', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '14 Mặt sau của tờ tiền 200.000đ là hình ảnh gì?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Vịnh Hạ Long ', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Mỏ dầu Bạch Hổ', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Làng Sen', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '15 Quá trình lịch sử tự nhiên của sự phát triển các hình thái lịch sử xã hội tuân theo?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Quy luật tự nhiên', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Quy luật xã hội', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Quy luật lượng chất', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '16 Năm 1925, tại Quảng Châu TQ, Nguyễn Ái Quốc đã sáng lập tổ chức CM nào của thanh niên VN?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Mặt Trận Việt Minh', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Hội Việt Nam cách mạng thanh niên', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Hội liên hiệp thanh niên Việt Nam', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '17 Năm 2018 kỷ niệm bao nhiêu năm chiến dịch Giờ trái đất Năm 2018 kỷ niệm bao nhiêu năm chiến dịch Giờ trái đất ?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. 5 năm', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. 11 năm', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. 15 năm', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '18 Nhân tố quyết định xu hướng phát triển của các hình thái kinh tế xã hội do đâu mà có?
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A.Quy luật tự nhiên', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Quy luật xã hội', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Quy luật khách quan', 'correct' => true, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '19 Câu nói “Mỗi thanh niên hãy sống những ngày đẹp nhất, hãy bắt tay vào những công việc bình
thường nhưng có ích cho đời” là của:

']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Nguyễn Văn Linh', 'correct' => true, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Đỗ Mười
', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Lê Khả Phiêu', 'correct' => false, 'question_id' => $id]);

$id = DB::table('questions')->insertGetId(['content' => '20  Quy luật giá trị là:
']);
DB::table('questions_answers')->insert(['abcd' => 'A','content' => 'A. Quy luật kinh tế cơ bản của sản xuất và trao đổi hàng hóa', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'B','content' => 'B. Quy luật kinh tế riêng có của chủ nghĩa tư bản', 'correct' => false, 'question_id' => $id]);
DB::table('questions_answers')->insert(['abcd' => 'C','content' => 'C. Quy luật kinh tế chung của mọi nền kinh tế', 'correct' => true, 'question_id' => $id]);

}}