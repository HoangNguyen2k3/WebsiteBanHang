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

function change_cost() {
    let opt1 = document.getElementById("btnradio1");
    let opt2 = document.getElementById("btnradio2");
    let opt3 = document.getElementById("btnradio3");
    let old_price = document.getElementById('old-price-opt');
    let new_price = document.getElementById('new-price-opt');
    if(opt1.checked){
        old_price.textContent = '40.000.000đ';
        new_price.textContent = '30.000.000đ';
    }
     else if(opt2.checked){
        old_price.textContent = '45.000.000đ';
        new_price.textContent = '35.000.000đ';
    }else{
        old_price.textContent = '50.000.000đ';
        new_price.textContent = '40.000.000đ';
    }


}
