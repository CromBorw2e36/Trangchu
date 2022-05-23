let cards = document.querySelector('#cards');
for (i = 0; i < 10; i++) {
    cards.innerHTML +=
        '<div class="col mb-3">' +
        '<div class="card" style="width: 18rem;">' +
        '<img class="card-img-top" src="https://www.dthu.edu.vn/mainpage/EventNews/ma973.jpg" alt="">' +
        '<div class="card-body">' +
        '<h5 class="card-title">Card title</h5>' +
        '<div class="d-flex justify-content-around">' +
        '<a href="#" class="btn btn-success">Hiển thị</a>' +
        '<a href="#" class="btn btn-danger">Xóa</a>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>';
}