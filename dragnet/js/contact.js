const form = document.querySelector("contactForm"),
statusTxt = form.querySelector(".contactSubmit span");

form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting
    statusTxt.style.display = "block";
    let xhr = new XMLHttpRequest(); //creating new xml object
    xhr.open("POST", "message.php", true); //sending post request to message.php file
    xhr.onload = ()=> {  //once ajax loaded
        if(xhr.readyState == 4 && xhr.status == 200){
            let response = xhr.response; //storing ajax response in a response variable
            console.log(response);
        }

    }
    xhr.send();
}