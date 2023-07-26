function submitForm() {
    var objFullname = document.querySelector('input[name="email"]');
    var objPassword = document.querySelector('input[name="password"]');
    var fullname = objFullname.value;
    var password = objPassword.value;
    var objFullnameError = document.getElementById('error_fullname');
    var objPasswordError = document.getElementById('error_password');
    if (fullname == '') {
        objFullnameError.innerHTML = 'Vui lòng nhập tên đăng nhập';
        objFullname.style.borderColor = 'red';
    } else {
        objFullname.style.borderColor = '#ccc';
    }
    if (password == '') {
        objPasswordError.innerHTML = 'Vui lòng nhập mật khẩu';
        objPassword.style.borderColor = 'red';
    } else {
        objPassword.style.borderColor = '#ccc';
    }
}
function keyup() {
    var objFullname = document.querySelector('input[name="email"]');
    var objPassword = document.querySelector('input[name="password"]');
    var fullname = objFullname.value;
    var password = objPassword.value;
    var objFullnameError = document.getElementById('error_fullname');
    var objPasswordError = document.getElementById('error_password');
    if (fullname == '') {
        objFullnameError.innerHTML = 'Vui lòng nhập tên đăng nhập';
        objFullname.style.borderColor = 'red';
    }
    else {
        objFullnameError.innerHTML = '';
        objFullname.style.borderColor = '#ccc';
    }
    if (password == '') {
        objPasswordError.innerHTML = 'Vui lòng nhập mật khẩu';
        objPassword.style.borderColor = 'red';
    } else {
        objPasswordError.innerHTML='';
        objPassword.style.borderColor = '#ccc';
    }
}