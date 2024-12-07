// Lấy phần tử thông báo
var alertBox = document.getElementById('alert-box');

// Đóng thông báo sau 3 giây
setTimeout(function() {
    alertBox.style.display = 'none';
}, 3000);