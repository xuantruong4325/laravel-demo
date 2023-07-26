function submitForm() {
    var objFullname = document.querySelector('input[name="Name"]');
    var objPassword = document.querySelector('input[name="Password"]');
    var objEmail = document.querySelector('input[name="Email"]');
    var fullname = objFullname.value;
    var password = objPassword.value;
    var email = objEmail.value;
    var objFullnameError = document.getElementById('error_fullname');
    var objPasswordError = document.getElementById('error_password');
    var objEmailError = document.getElementById('error_email');
    if (fullname == '') {
        objFullnameError.innerHTML = 'Vui lòng nhập tên đăng nhập';
        objFullname.style.borderColor = 'red';
    } else {
        objFullname.style.borderColor = '#ccc';
    }
    if (email == '') {
        objEmailError.innerHTML = 'Vui lòng nhập email';
        objEmail.style.borderColor = 'red';
    } else {
        let regex = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');
        if (regex.test(email) == false) {
            objEmailError.innerHTML = 'Email ko hợp lệ';
            objError.style.borderColor = 'red';
        }
        else {
            objEmail.style.borderColor = '#ccc';
        }
    }
    if (password == '') {
        objPasswordError.innerHTML = 'Vui lòng nhập mật khẩu';
        objPassword.style.borderColor = 'red';
    } else {
        objPassword.style.borderColor = '#ccc';
    }
    
}
function keyup() {
    var objFullname = document.querySelector('input[name="Name"]');
    var objPassword = document.querySelector('input[name="Password"]');
    var objEmail = document.querySelector('input[name="Email"]');
    var fullname = objFullname.value;
    var password = objPassword.value;
    var email = objEmail.value;
    var objFullnameError = document.getElementById('error_fullname');
    var objPasswordError = document.getElementById('error_password');
    var objEmailError = document.getElementById('error_email');
    if (fullname == '') {
        objFullnameError.innerHTML = 'Vui lòng nhập tên đăng nhập';
        objFullname.style.borderColor = 'red';
    }
    else {
        objFullnameError.innerHTML = '';
        objFullname.style.borderColor = '#ccc';
    }
    if (email == '') {
        objEmailError.innerHTML = 'Vui lòng nhập email';
        objEmail.style.borderColor = 'red';
    }
    else {
        let regex = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');
        if (regex.test(email) == false) {
            objEmailError.innerHTML = 'Email ko hợp lệ';
            objError.style.borderColor = 'red';
        }
        else {
            objEmailError.innerHTML = '';
            objEmail.style.borderColor = '#ccc';
        }
    }
    if (password == '') {
        objPasswordError.innerHTML = 'Vui lòng nhập mật khẩu';
        objPassword.style.borderColor = 'red';
    } else {
        objPasswordError.innerHTML='';
        objPassword.style.borderColor = '#ccc';
    }
    
}