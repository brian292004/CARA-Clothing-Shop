// window.addEventListener('DOMContentLoaded', (event) => {
//     const rawPriceInput = document.getElementById('price');
//     const formattedPriceInput = document.getElementById('formattedPrice');

//     formattedPriceInput.addEventListener('input', () => {
//         const formattedPrice = formattedPriceInput.value;
//         const rawPrice = formattedPrice.replace(/[^\d.]/g, ''); // Loại bỏ tất cả các ký tự không phải số và dấu chấm

//         rawPriceInput.value = rawPrice;
//         formattedPriceInput.value = formatPrice(rawPrice);
//     });

//     function formatPrice(price) {
//         const number = parseFloat(price);
//         if (isNaN(number)) {
//             return ''; // Trường hợp không phải số hợp lệ, trả về chuỗi rỗng
//         }

//         const formatter = new Intl.NumberFormat('vi-VN');
//         return formatter.format(number);
//     }
// });