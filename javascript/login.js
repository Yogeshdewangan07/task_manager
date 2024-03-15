const form = document.querySelector(".login form");
const continueBtn = form.querySelector("button");
const errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
    e.preventDefault(); // Preventing form from submitting
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
            if (data === "success") {
                location.href = "home.php";
              }
              else {
                errorText.style.display = "block";
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}