// Dạ thưa cô, đây chính là nơi mà em lưu
        //  trữ tất cả thông tin về các bộ truyện
        //  tranh của mình. Mỗi truyện là một mục với 
        // đầy đủ các thông tin như tên, thể loại, trạng thái, số lượt xem..
        // . Em sẽ dùng cái 'kho' dữ liệu này để thực hiện tìm kiếm và lọc ạ."
        const duLieuTruyen = [
            {
                id: 'item1',
                title: 'Hầm Ngục Mạnh Nhất',
                status: 'inProgress',
                genres: ['adventure', 'action', 'fantasy'],
                views: 192958,
                ratings: 1807,
                follows: 980,
                lastUpdated: '6 giờ trước',
                isNewStory: false,
                imageUrl: 'https://i.ytimg.com/vi/Rq6-14LQDgQ/maxresdefault.jpg'
            },
            {
                id: 'item2',
                title: 'Người Trở Về Từ Cõi Chết',
                status: 'inProgress',
                genres: ['reincarnation', 'action', 'mystery'],
                views: 165057,
                ratings: 593,
                follows: 120,
                lastUpdated: '5 giờ trước',
                isNewStory: false,
                imageUrl: 'https://static2.vieon.vn/vieplay-image/thumbnail_v4/2020/12/07/b1xxymmc_1920x1080nguoivetucoichet.jpg'
            },
            {
                id: 'item3',
                title: 'Trảm Long',
                status: 'finished',
                genres: ['fantasy', 'action', 'martialArts'],
                views: 642226,
                ratings: 3245,
                follows: 153,
                lastUpdated: '5 giờ trước',
                isNewStory: false,
                imageUrl: 'https://cdn0.fahasa.com/media/catalog/product/t/r/tram-long-1-b.jpg'
            },
            {
                id: 'item4',
                title: 'Võ Luyện Đỉnh Phong',
                status: 'inProgress',
                genres: ['action', 'martialArts', 'adventure'],
                views: 542212,
                ratings: 4617,
                follows: 3835,
                lastUpdated: '2 ngày trước',
                isNewStory: false,
                imageUrl: 'https://ligru.com/wp-content/uploads/2021/12/Vo-Luyen-Dinh-PHong-min.jpg'
            },
            {
                id: 'item5',
                title: 'Học Giả Kiếm Sĩ',
                status: 'inProgress',
                genres: ['martialArts', 'fantasy', 'adventure'],
                views: 857306,
                ratings: 9806,
                follows: 160,
                lastUpdated: '2 ngày trước',
                isNewStory: true, // This one is a new story
                imageUrl: 'https://image.voh.com.vn/voh/Image/2023/07/14/thu-sinh-di-mua-kiem-qo.jpg'
            },
            {
                id: 'item6',
title: 'Chỉ Có Ta Có Thể Sử Dụng Triệu Hoán Thuật',
                status: 'completed',
                genres: ['supernatural', 'action', 'fantasy'],
                views: 169241,
                ratings: 782,
                follows: 171,
                lastUpdated: '17 giờ trước',
                isNewStory: false,
                imageUrl: 'https://i.ytimg.com/vi/Lrt6aEaLiJs/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGGUgRyhaMA8=&rs=AOn4CLBGqubjjRclV-QfzD7VoIK2cTPtXA'
            },
            {
                id: 'item7',
                title: 'Bậc Thầy Gia Tộc Ma Pháp',
                status: 'inProgress',
                genres: ['fantasy', 'magic', 'adventure'],
                views: 234567,
                ratings: 1234,
                follows: 567,
                lastUpdated: '1 ngày trước',
                isNewStory: false,
                imageUrl: 'https://i.ytimg.com/vi/1z1tUCMIKfs/maxresdefault.jpg'
            },
            {
                id: 'item8',
                title: 'Đường Đến Thiên Đàng',
                status: 'notStarted',
                genres: ['fantasy', 'adventure', 'isekai'],
                views: 56789,
                ratings: 234,
                follows: 89,
                lastUpdated: '3 ngày trước',
                isNewStory: true,
                imageUrl: 'https://png.pngtree.com/background/20230525/original/pngtree-staircase-leads-to-the-heavens-above-the-clouds-picture-image_2734792.jpg'
            },
            {
                id: 'item9',
                title: 'Chúa Tể Thời Gian',
                status: 'paused',
                genres: ['fantasy', 'mystery', 'timeTravel'],
                views: 123456,
                ratings: 789,
                follows: 321,
                lastUpdated: '2 ngày trước',
                isNewStory: false,
                imageUrl: 'https://i.ytimg.com/vi/h1nL5yJvovA/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AH-CYAC0AWKAgwIABABGGUgVihVMA8=&rs=AOn4C...pINpMuA'
            },
            {
                id: 'item10',
                title: 'Kẻ Bất Tử Trở Lại',
                status: 'inProgress',
                genres: ['reincarnation', 'action', 'magic'],
                views: 345678,
                ratings: 2100,
                follows: 1500,
                lastUpdated: '10 giờ trước',
                isNewStory: false,
                imageUrl: 'https://i.ytimg.com/vi/V9q_qxRRvGU/maxresdefault.jpg'
            },
            {
                id: 'item11',
                title: 'Cơ Giáp Sư Vì Đam Mê',
                status: 'inProgress',
                genres: ['reincarnation', 'action', 'magic'],
                views: 345678,
                ratings: 2100,
follows: 1500,
                lastUpdated: '10 giờ trước',
                isNewStory: false,
                imageUrl: 'https://truyenhdt.com/wp-content/uploads/2025/04/toi-la-co-giap-su-vi-dam-me-abo-1745263145.jpg'
            },
             {
                id: 'item12',
                title: 'Hoa Kỉ Niệm',
                status: 'inProgress',
                genres: ['reincarnation', 'action', 'magic'],
                views: 345678,
                ratings: 2100,
                follows: 1500,
                lastUpdated: '10 giờ trước',
                isNewStory: false,
                imageUrl: 'https://1.bp.blogspot.com/-nh2O_ZgxIvo/X__VMkx7CiI/AAAAAAADL8g/OYl1DkhbYq8IzRMc-nxNvihHL3UWHyEvQCLcBGAsYHQ/s0/1.jpg'
            },
             {
                id: 'item13',
                title: 'Truyen Ma',
                status: 'inProgress',
                genres: ['reincarnation', 'action', 'magic'],
                views: 345678,
                ratings: 2100,
                follows: 1500,
                lastUpdated: '10 giờ trước',
                isNewStory: false,
                imageUrl: 'https://i.pinimg.com/736x/25/4f/ce/254fce1c5e80a56c904905b6e17d92e4.jpg'
            },
             {
                id: 'item14',
                title: 'Vụng Trộm Không Thể Giấu',
                status: 'inProgress',
                genres: ['reincarnation', 'action', 'magic'],
                views: 345678,
                ratings: 2100,
                follows: 1500,
                lastUpdated: '10 giờ trước',
                isNewStory: false,
                imageUrl: 'https://i0.wp.com/antentruyen.com/wp-content/uploads/2022/09/VTKTG-1.jpg'
                },
             {
                id: 'item15',
                title: 'Gửi Em Người Bất Tử công bố season 3!',
                status: 'inProgress',
                genres: ['reincarnation', 'action', 'magic'],
                views: 345678,
                ratings: 2100,
                follows: 1500,
                lastUpdated: '10 giờ trước',
                isNewStory: false,
                imageUrl: 'https://image.lag.vn/upload/news/23/03/13/anime-gui-em-nguoi-bat-tu-phan-3-2_AHOI.jpg'
                },
             {
                id: 'item16',
                title: 'Ichi-Pondo no Fukuin',
                status: 'inProgress',
                genres: ['reincarnation', 'action', 'magic'],
                views: 345678,
                ratings: 2100,
                follows: 1500,
                lastUpdated: '10 giờ trước',
                isNewStory: false,
                imageUrl: 'https://upload.wikimedia.org/wikipedia/en/c/cd/One-pound_Gospel_volume_1.jpg'
                },
             {
                id: 'item17',
                title: 'TaKaHaShe',
status: 'inProgress',
                genres: ['reincarnation', 'action', 'magic'],
                views: 345678,
                ratings: 2100,
                follows: 1500,
                lastUpdated: '10 giờ trước',
                isNewStory: false,
                imageUrl: 'https://m.media-amazon.com/images/I/71fuO2RswRL._AC_UF1000,1000_QL80_.jpg'
             },
             {
                id: 'item18',
                title: 'Doraemon: Nobita và binh đoàn người sắt',
                status: 'inProgress',
                genres: ['reincarnation', 'action', 'magic'],
                views: 345678,
                ratings: 2100,
                follows: 1500,
                lastUpdated: '10 giờ trước',
                isNewStory: false,
                imageUrl: 'https://upload.wikimedia.org/wikipedia/vi/c/c2/Cu%E1%BB%99c_x%C3%A2m_l%C6%B0%E1%BB%A3c_c%E1%BB%A7a_binh_%C4%91o%C3%A0n_robot.jpg'
             },
        ];

        const truyenMoiTrang = 6; // Số lượng truyện hiển thị trên mỗi trang
        let trangHienTai = 1;  //Biến này theo dõi bạn đang ở trang số mấy (ví dụ: đang xem trang 1, trang 2). Nó bắt đầu từ 1.
        let noiDungDaLocVaSapXep = []; // Đây là một biến rất quan trọng. Sau mỗi lần người dùng tìm kiếm hoặc lọc, kết quả cuối cùng (những bộ truyện đã được tìm thấy và sắp xếp) sẽ được lưu vào đây. hienThiTruyen 
        // và hienThiPhanTrang sẽ dùng dữ liệu từ biến này.
//cần trình bày: Các biến này giúp em quản lý việc phân trang và lưu trữ tạm thời danh sách truyện sau khi đã tìm kiếm hoặc lọc. Ví dụ, truyenMoiTrang cho phép em quy định mỗi trang sẽ hiển thị 6 bộ truyện, giúp trang không bị quá dài và dễ đọc hơn."//
        // Hàm để chuyển đổi hiển thị các phần
        function anHienPhan(idPhan) {
            const phan = document.getElementById(idPhan);
            const muiTen = document.getElementById(idPhan.replace('-phan', '-mui-ten'));//"Hàm này giúp em tạo hiệu ứng ẩn/hiện cho các phần lọc như 'Trạng Thái', 'Thể Loại'. Khi người dùng nhấp vào tiêu đề, phần nội dung sẽ mở ra hoặc đóng lại, giúp giao diện gọn gàng hơn và tiết kiệm không gian màn hình ạ."//
            if (phan.style.display === 'none' || phan.style.display === '') {
                phan.style.display = 'grid'; // Thay đổi từ block sang grid để phù hợp với layout
                muiTen.style.transform = 'rotate(0deg)';
            } else {
                phan.style.display = 'none';
                muiTen.style.transform = 'rotate(-90deg)';
            }
        }
// Đây là hàm chịu trách nhiệm chính trong việc 'vẽ' các bộ truyện lên trang. Mỗi khi người dùng tìm kiếm, lọc, hoặc chuyển trang, hàm này sẽ được gọi để dọn sạch các truyện cũ và chỉ hiển thị đúng những bộ truyện mà người dùng muốn thấy, kèm theo các thông tin chi tiết và ảnh bìa ạ."
        function hienThiTruyen(cacMuc) {
            const hienThiNoiDung = document.getElementById('hien-thi-noi-dung');
            hienThiNoiDung.innerHTML = ''; // Xóa nội dung hiện có

            const chiSoBatDau = (trangHienTai - 1) * truyenMoiTrang;
            const chiSoKetThuc = chiSoBatDau + truyenMoiTrang;
            const cacMucDeHienThi = cacMuc.slice(chiSoBatDau, chiSoKetThuc);

            if (cacMucDeHienThi.length === 0) {
                hienThiNoiDung.innerHTML = '<p class="text-center text-gray-400 col-span-full">Không tìm thấy nội dung nào.</p>';
                return;
            }

            cacMucDeHienThi.forEach(muc => {
                const phanTuMuc = document.createElement('div');
                phanTuMuc.className = 'muc-noi-dung';
                phanTuMuc.innerHTML = `
                    <img src="${muc.imageUrl}" alt="${muc.title}" onerror="this.onerror=null;this.src='https://placehold.co/200x280/3a3a3a/f0f0f0?text=Image+Not+Found';">
                    <div class="chi-tiet-noi-dung">
                        <h3>${muc.title}</h3>
                        <div class="thong-tin-phu">
                            <span>
                                <svg class="icon" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                                ${muc.views.toLocaleString()} lượt xem
                            </span>
                            <span>
                                <svg class="icon" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15H9v-6h2v6zm4 0h-2V7h2v10z"/>
                                </svg>
                                ${muc.ratings.toLocaleString()} đánh giá
                            </span>
                             <span>
                                <svg class="icon" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-4 0c1.66 0 2.99-1.34 2.99-3S13.66 5 12 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-4 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm8 4H8c-2.76 0-5 2.24-5 5v2h18v-2c0-2.76-2.24-5-5-5z"/>
                                </svg>
                                ${muc.follows.toLocaleString()} theo dõi
                            </span>
                            <span>
                                <svg class="icon" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/>
                                </svg>
                                ${muc.lastUpdated}
                            </span>
                        </div>
                    </div>
                `;
                hienThiNoiDung.appendChild(phanTuMuc);
            });

            hienThiPhanTrang(cacMuc.length);
        }

        // Hàm để hiển thị các nút phân trang
        //Hàm này giúp em tạo ra các nút phân trang thông minh. Tùy thuộc vào số lượng truyện được tìm thấy, nó sẽ tự động tạo ra số trang phù hợp. Người dùng có thể dễ dàng
        //  chuyển giữa các trang bằng các nút 'Trước', 'Sau' hoặc nhấp trực tiếp vào số trang ạ
        function hienThiPhanTrang(tongSoMuc) {
            const dieuKhienPhanTrang = document.getElementById('dieu-khien-phan-trang');
            dieuKhienPhanTrang.innerHTML = ''; // Xóa phân trang hiện có

            const tongSoTrang = Math.ceil(tongSoMuc / truyenMoiTrang);

            if (tongSoTrang <= 1) return; // Không cần phân trang nếu có 1 hoặc ít hơn trang

            // Nút "Trước"
            const nutTruoc = document.createElement('button');
            nutTruoc.textContent = 'Trước';
            nutTruoc.disabled = trangHienTai === 1;
            nutTruoc.onclick = () => {
                if (trangHienTai > 1) {
                    trangHienTai--;
                    hienThiTruyen(noiDungDaLocVaSapXep); // Hiển thị lại nội dung cho trang trước
                }
            };
            dieuKhienPhanTrang.appendChild(nutTruoc);

            // Các nút số trang
            for (let i = 1; i <= tongSoTrang; i++) {
                const nutTrang = document.createElement('button');
                nutTrang.textContent = i;
                nutTrang.className = trangHienTai === i ? 'active' : '';
                nutTrang.onclick = () => {
                    trangHienTai = i;
                    hienThiTruyen(noiDungDaLocVaSapXep); // Hiển thị lại nội dung cho trang đã chọn
                };
dieuKhienPhanTrang.appendChild(nutTrang);
            }

            // Nút "Sau"
            const nutSau = document.createElement('button');
            nutSau.textContent = 'Sau';
            nutSau.disabled = trangHienTai === tongSoTrang;
            nutSau.onclick = () => {
                if (trangHienTai < tongSoTrang) {
                    trangHienTai++;
                    hienThiTruyen(noiDungDaLocVaSapXep); // Hiển thị lại nội dung cho trang tiếp theo
                }
            };
            dieuKhienPhanTrang.appendChild(nutSau);
        }

        // Hàm để cập nhật kiểu hiển thị của mục checkbox dựa trên trạng thái được chọn
        //Hàm này giúp tăng trải nghiệm người dùng bằng cách thay đổi màu sắc hoặc kiểu dáng của
        //  ô lựa chọn (checkbox) khi người dùng chọn hoặc bỏ chọn, giúp họ dễ dàng nhận biết được những tiêu chí lọc mà họ đã áp dụng ạ.
        function capNhatKieuCheckbox(checkbox) {
            const mucCheckbox = checkbox.closest('.muc-checkbox');
            if (checkbox.checked) {
                mucCheckbox.classList.add('da-chon');
            } else {
                mucCheckbox.classList.remove('da-chon');
            }
        }

        // Hàm thực hiện tìm kiếm và lọc
        function thucHienTimKiem() {
            const tuKhoaTimKiem = oTimKiem.value.toLowerCase().trim();

            // Lấy các bộ lọc trạng thái đã chọn
            const trangThaiDaChon = Array.from(document.querySelectorAll('input[name="status"]:checked'))
                                          .map(checkbox => checkbox.value);

            // Lấy các bộ lọc thể loại đã chọn
            const theLoaiDaChon = Array.from(document.querySelectorAll('input[name="genre"]:checked'))
                                        .map(checkbox => checkbox.value);

            // Lấy tùy chọn sắp xếp đã chọn (giả sử chỉ một tùy chọn được chọn)
            const sapXepDaChon = Array.from(document.querySelectorAll('input[name="sort"]:checked'))
                                      .map(checkbox => checkbox.value)[0]; // Lấy tùy chọn sắp xếp đầu tiên (hoặc duy nhất) đã chọn

            let noiDungTamThoi = duLieuTruyen.filter(muc => {
                const tieuDeKhop = muc.title.toLowerCase().includes(tuKhoaTimKiem);

                const trangThaiKhop = trangThaiDaChon.length === 0 || trangThaiDaChon.includes(muc.status);

                // Kiểm tra xem truyện có ít nhất một thể loại đã chọn không, hoặc không có thể loại nào được chọn
                const theLoaiKhop = theLoaiDaChon.length === 0 || muc.genres.some(theLoai => theLoaiDaChon.includes(theLoai));

                return tieuDeKhop && trangThaiKhop && theLoaiKhop;
            });

            // Áp dụng sắp xếp
if (sapXepDaChon) {
                noiDungTamThoi.sort((a, b) => {
                    switch (sapXepDaChon) {
                        case 'mostViewed':
                            return b.views - a.views;
                        case 'mostRated':
                            return b.ratings - a.ratings;
                        case 'mostFollowed':
                            return b.follows - a.follows;
                        case 'newestUpdate':
                            // Để sắp xếp theo ngày cập nhật, lý tưởng nhất là bạn nên chuyển 'lastUpdated' thành đối tượng Date
                            // Hiện tại, chúng ta sẽ thực hiện sắp xếp đơn giản hoặc giữ nguyên thứ tự nếu không có logic ngày cụ thể.
                            // Để demo, tôi sẽ sử dụng so sánh tiêu đề làm phần giữ chỗ.
                            // Trong ứng dụng thực tế, bạn cần chuyển đổi 'lastUpdated' thành Date để so sánh chính xác.
                            return a.title.localeCompare(b.title); // Phần giữ chỗ, thay thế bằng so sánh ngày thực tế
                        case 'newStory':
                            return b.isNewStory - a.isNewStory; // True sẽ đứng trước False
                        default:
                            return 0;
                    }
                });
            }

            // Cập nhật biến toàn cục
            noiDungDaLocVaSapXep = noiDungTamThoi;

            // Đặt lại trang hiện tại về 1 mỗi khi các bộ lọc thay đổi
            trangHienTai = 1;
            hienThiTruyen(noiDungDaLocVaSapXep);
        }

        window.onload = function() {
            // Đảm bảo các mũi tên ban đầu chỉ xuống nếu các phần hiển thị
            const cacPhan = ['phan-trang-thai', 'phan-the-loai', 'phan-sap-xep'];
            cacPhan.forEach(idPhan => {
                const phan = document.getElementById(idPhan);
                const muiTen = document.getElementById(idPhan.replace('-phan', '-mui-ten'));
                if (phan.style.display !== 'none') {
                    muiTen.style.transform = 'rotate(0deg)';
                } else {
                    muiTen.style.transform = 'rotate(-90deg)';
                }
            });

            // Lấy tham chiếu đến nút tìm kiếm và trường nhập liệu
            const nutTimKiem = document.getElementById('nutTimKiem');
            const oTimKiem = document.getElementById('oTimKiem');

            // Thêm trình lắng nghe sự kiện cho nút tìm kiếm và trường nhập liệu
            nutTimKiem.addEventListener('click', thucHienTimKiem);
            oTimKiem.addEventListener('input', thucHienTimKiem);
            oTimKiem.addEventListener('keypress', function(event) {
                if (event.key === 'Enter') {
                    thucHienTimKiem();
}
            });

            // Thêm trình lắng nghe sự kiện cho tất cả các checkbox để kích hoạt lọc khi thay đổi
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    capNhatKieuCheckbox(this); // Cập nhật kiểu khi thay đổi
                    thucHienTimKiem();
                });
                // Cập nhật kiểu ban đầu khi tải trang
                capNhatKieuCheckbox(checkbox);
            });

            // Hiển thị tất cả nội dung ban đầu khi trang tải
            thucHienTimKiem();
        };
