document.getElementById('toggle-button').addEventListener('click', function() {
    let textContent = document.getElementById('promotion');
    let button = document.getElementById('toggle-button');

    if(textContent.style.display === 'none'){
        textContent.style.display = 'block';
        button.innerHTML = `<i class="fa-solid fa-caret-up"></i> Thu gọn`;
    }else{
        textContent.style.display = 'none';
        button.innerHTML = `<i class="fa-solid fa-caret-down"></i> 3 Khuyến mãi`;
    }
});
document.getElementById('toggle-button1').addEventListener('click', function() {
    let textContent = document.getElementById('promotion1');
    let button = document.getElementById('toggle-button1');

    if(textContent.style.display === 'none'){
        textContent.style.display = 'block';
        button.innerHTML = `<i class="fa-solid fa-caret-up"></i> Thu gọn`;
    }else{
        textContent.style.display = 'none';
        button.innerHTML = `<i class="fa-solid fa-caret-down"></i> 3 Khuyến mãi`;
    }
});

function showText() {
    let text1 = document.getElementById('giao-tan-noi-info');
    let text2 = document.getElementById('nhan-hang-tai-sieu-thi-info');
    let radio1 = document.getElementById('flexRadioDefault3');
    let radio2 = document.getElementById('flexRadioDefault4');
    
    if(radio1.checked){
        text1.style.display = 'block';
        text2.style.display = 'none';
    } else if(radio2.checked){
        text1.style.display = 'none';
        text2.style.display = 'block';
    }
}

function checkedGoiNguoiKhacNhanHang() {
    let text = document.getElementById('text-goi-nguoi-khac-nhan-hang');
    let check = document.getElementById('flexCheckDefault');
    
    if(check.checked) {
        text.style.display = 'block';
    } else{
        text.style.display = 'none';
    }
}

function checkedXuatHoaDon() {
    let text = document.getElementById('text-xuat-hoa-don');
    let check = document.getElementById('flexCheckDefault2');
    
    if(check.checked) {
        text.style.display = 'block';
    } else{
        text.style.display = 'none';
    }
}


