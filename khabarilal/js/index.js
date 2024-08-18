function ajaxCall(method, url, data, destination, isHtml) {
    var xhttp = new XMLHttpRequest();
    // event
    xhttp.onload = function () {
        if (isHtml) {
            document.getElementById(destination).innerHTML = this.responseText;
        } else {
            document.getElementById(destination).value = this.responseText;
        }
    };

    xhttp.open(method, url, false);
    xhttp.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

    xhttp.send(data);
}

// navbar navigator
function newsChanger(pram) {
    ajaxCall('GET', 'news/newsContainer?process=' + pram, '', 'ajax', true);
}

// Login validation
function loginCheck() {
    var result = validation("email", "Username") && validation("password", "Password");
    if (result && passwordValidation("password")) {
            return true;
    }
    return false;
}

// admin navigator
function adminChanger(url) {
    ajaxCall('GET', '../admin/'+url, '', 'ajax', true);
}

// page navigator
function pageChanger(url) {
    ajaxCall('GET',url, '', 'ajax', true);
}


// user validation
function userValid(){
    var result = validation("email","Username")&& validation("password","Password");
    if(result && passwordValidation("password")){
        return true;
    }
    return false;
}

// addPost
function newsPost(){
    
    var result = validation("title","News Title") && validation("token","News Title")&& validation("text","Text") && validation("imagefile","Image")&&validation("imagealt","Image Alt")&&validation("categories","Categories");
    var select = document.getElementById("categories").value;
    var alt =document.getElementById("imagealt").value;
    if(result && select!=="select one" && alt.length < 20){
        const fi = document.getElementById('imagefile');

        var filePath = fi.value;
     
        // Allowing file type
        var allowedExtensions = 
                /(\.jpg|\.jpeg|\.png)$/i;
     if (!allowedExtensions.exec(filePath)) {
            alert('Invalid file type');
           
        } else{
// Check if any file is selected.
if (fi.files.length > 0) {
    for (const i = 0; i <= fi.files.length - 1; i++) {
        const fsize = fi.files.item(i).size;
        const file = Math.round((fsize / 1024));
       if(file>134218){
        alert("image size must be less then 128mb");
        return false;
       }else{
        return true;

       }

    }
}
        }
        
    
    }else{
        alert("Fill All Details");
    }
    return false;
}



// empty validation
function validation(id, name) {
    var ele = document.getElementById(id).value;
    if (ele == "") {
        alert(name + " is required!");
        return false;
    }
    return true;
}



//password validation 

function passwordValidation(pass) {
    var password = document.getElementById(pass);
    if (password.value.length > 8 || password.value.length < 8) {
        alert("Password is not Valid");
        password.focus();
        return false;
    }
    return true;
}

