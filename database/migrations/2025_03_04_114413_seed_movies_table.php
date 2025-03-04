<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('movies')->insert([
            ['title' => 'Avengers: Endgame', 'genre' => 'Hành động, Khoa học viễn tưởng', 'release_date' => '2019-04-26', 'duration' => 181, 'poster' => 'avengers_endgame.jpg', 'description' => 'Avengers tập hợp lại để đảo ngược những hậu quả của cú búng tay của Thanos và khôi phục vũ trụ.'],
            ['title' => 'Spider-Man: No Way Home', 'genre' => 'Hành động, Phiêu lưu', 'release_date' => '2021-12-17', 'duration' => 148, 'poster' => 'spiderman_no_way_home.jpg', 'description' => 'Peter Parker đối mặt với hậu quả khi danh tính của mình bị lộ và nhờ đến Doctor Strange để giúp đỡ.'],
            ['title' => 'Doctor Strange 2', 'genre' => 'Hành động, Khoa học viễn tưởng', 'release_date' => '2022-05-06', 'duration' => 126, 'poster' => 'doctor_strange_2.jpg', 'description' => 'Doctor Strange bước vào đa vũ trụ nguy hiểm để đối đầu với những mối đe dọa chưa từng thấy.'],
            ['title' => 'Black Panther', 'genre' => 'Hành động, Phiêu lưu', 'release_date' => '2018-02-16', 'duration' => 134, 'poster' => 'black_panther.jpg', 'description' => 'T’Challa trở về Wakanda để kế vị ngai vàng và bảo vệ đất nước trước những kẻ thù nguy hiểm.'],
            ['title' => 'Iron Man', 'genre' => 'Hành động, Khoa học viễn tưởng', 'release_date' => '2008-05-02', 'duration' => 126, 'poster' => 'iron_man.jpg', 'description' => 'Tony Stark chế tạo bộ giáp Iron Man để thoát khỏi bọn khủng bố và trở thành siêu anh hùng.'],
            ['title' => 'Captain America: Civil War', 'genre' => 'Hành động, Phiêu lưu', 'release_date' => '2016-05-06', 'duration' => 147, 'poster' => 'captain_america_civil_war.jpg', 'description' => 'Nội bộ Avengers chia rẽ khi các siêu anh hùng đối đầu về đạo luật quản lý hành động của họ.'],
            ['title' => 'Thor: Ragnarok', 'genre' => 'Hành động, Phiêu lưu', 'release_date' => '2017-11-03', 'duration' => 130, 'poster' => 'thor_ragnarok.jpg', 'description' => 'Thor phải ngăn chặn Ragnarok và giải cứu Asgard khỏi Hela, nữ thần của cái chết.'],
            ['title' => 'Guardians of the Galaxy', 'genre' => 'Hành động, Khoa học viễn tưởng', 'release_date' => '2014-08-01', 'duration' => 121, 'poster' => 'guardians_of_the_galaxy.jpg', 'description' => 'Một nhóm dị nhân vũ trụ hợp lực để bảo vệ viên đá vô cực khỏi tay kẻ ác.'],
            ['title' => 'Ant-Man', 'genre' => 'Hành động, Phiêu lưu', 'release_date' => '2015-07-17', 'duration' => 117, 'poster' => 'ant_man.jpg', 'description' => 'Scott Lang sử dụng bộ giáp thu nhỏ để trở thành Ant-Man và thực hiện một phi vụ đặc biệt.'],
            ['title' => 'The Incredible Hulk', 'genre' => 'Hành động, Khoa học viễn tưởng', 'release_date' => '2008-06-13', 'duration' => 112, 'poster' => 'incredible_hulk.jpg', 'description' => 'Bruce Banner chạy trốn quân đội trong khi cố gắng kiểm soát cơn giận biến anh thành Hulk.'],
            ['title' => 'Captain Marvel', 'genre' => 'Hành động, Khoa học viễn tưởng', 'release_date' => '2019-03-08', 'duration' => 123, 'poster' => 'captain_marvel.jpg', 'description' => 'Carol Danvers trở thành Captain Marvel khi Trái Đất bị cuốn vào cuộc chiến thiên hà.'],
            ['title' => 'Shang-Chi and the Legend of the Ten Rings', 'genre' => 'Hành động, Phiêu lưu', 'release_date' => '2021-09-03', 'duration' => 132, 'poster' => 'shang_chi_and_the_legend_of_the_ten_rings.jpg', 'description' => 'Shang-Chi đối đầu với quá khứ của mình khi bị cuốn vào tổ chức Ten Rings.'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('movies')->delete();
    }
};
