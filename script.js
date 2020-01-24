let test = document.getElementById("test");
let xhr = new XMLHttpRequest();

xhr.onreadystatechange = function(){
    console.log(this);
    if(this.readyState == 4 && this.status == 200){
      test.innerHTML = this.response;
    }
};

xhr.open("GET" , "https://api.github.com/" , true);
xhr.responseType = "text";
xhr.send();