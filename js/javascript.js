// var a = 10;
// var b = 20;
// var c = "hihi";
// // console.log(a + c)
// // alert(a)

// // document.getElementById("search").innerHTML = "Hello JavaScript";

// var nam = 2024;
// function kiemTraNamNhuan(nam){
//   if((nam %4 == 0) && (nam %100 != 0))
//     alert("đây là năm nhuận")
//   else
//     alert("Đây không phải năm nhuận")
// }

// kiemTraNamNhuan(nam)

const convert = (value) => {
  return Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(value)
}