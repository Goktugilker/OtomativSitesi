
// Fotoğraf listesini JavaScript'te sakla
const photos = [
    "../img/1.jpg",
    "../img/2.jpg",
    "../img/3.jpg",
    "../img/4.jpg",
    "../img/5.jpg",
    "../img/6.jpg",
    "../img/7.jpg",
    "../img/8.jpg",
    "../img/9.jpg",
    "../img/10.jpg",
    "../img/11.jpeg",
    "../img/f40.jpg",
    "../img/g63.jpg",
    "../img/peakpx.jpg",
    "../img/s90.jpg",
    "../img/s2000.jpg"
];

let currentIndex = 0;

// Modal açılırken ilgili fotoğrafı göster
$('#photoModal').on('show.bs.modal', function (e) {
    const index = $(e.relatedTarget).data('index');
    currentIndex = index;
    updateModalImage();
});

// Modal içindeki fotoğrafı güncelle
function updateModalImage() {
    $('#modalImage').attr('src', photos[currentIndex]);
}

// Önceki fotoğraf
$('#prevImage').on('click', function () {
    currentIndex = (currentIndex - 1 + photos.length) % photos.length;
    updateModalImage();
});

// Sonraki fotoğraf
$('#nextImage').on('click', function () {
    currentIndex = (currentIndex + 1) % photos.length;
    updateModalImage();
});