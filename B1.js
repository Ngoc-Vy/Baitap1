const bannerImages = [
    "bia1.jpg",
    "bia2.jpg",
    "bia3.jpg",
    "bia4.jpg",
    "bia5.jpg"
];

let currentImageIndex = 0;
const bannerImg = document.querySelector('.banner-img');

function changeBannerImage() {
    currentImageIndex = (currentImageIndex + 1) % bannerImages.length;
    bannerImg.src = bannerImages[currentImageIndex];
}

setInterval(changeBannerImage, 2000); // Thay đổi ảnh mỗi 2 giây

document.getElementById('searchInput').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        const keyword = event.target.value;
        alert('Bạn đã tìm kiếm: ' + keyword + '. Chức năng tìm kiếm sẽ được thêm sau!');
    }
});