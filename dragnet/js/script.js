function save_data() 
{
    var form_element = document.getElementsByClassName('form_data');

    var form_data = new FormData();

    for(var count = 0; count < form_element.length; count++)
    {
        form_data.append(form_element[count].name, form_element[count].value);
    }
    document.getElementById('submit').disabled = true;

    var ajax_request = new XMLHttpRequest();

    ajax_request.open('POST', 'config/process_data.php'); 

    ajax_request.send(form_data);

    ajax_request.onreadystatechange = function()
    {
        if(ajax_request.readyState == 4 && ajax_request.status == 200)
        {
            document.getElementById('submit').disabled = false;

            document.getElementById('sample_form').reset();

            document.getElementById('message').innerHTML = ajax_request.responseText;

            setTimeout(function(){
                document.getElementById('message').innerHTML = "";
            }, 2000);
        }
    }
}




































// function myFunction() {
//     var conBx = document.getElementById("contactBox");
//     if (conBx.style.display === "none") {
//       conBx.style.display = "block";
//       conBx.style.top = "100px";
//       conBx.style.right = "0";
//     } else {
//       conBx.style.display = "none";
//       conBx.style.top = "-100px";
//       conBx.style.right = "0";
//     }
//   }

  
//     function doSubscribe() {
//         var subscriberName = document.getElementById("name").value;
//         var subscriberEmail = document.getElementById("email").value;
         
//         var ajax = new XMLHttpRequest();
//         ajax.open("POST", "index.php", true);
//         ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         
//         ajax.onreadystatechange = function () {
//             if (this.readyState == 4 && this.status == 200) {
//                 document.getElementById("subscribe-message").innerHTML = "You have been subscribed to our newsletter.";
//             }
//         };
 
//         ajax.send("name=" + subscriberName);
//         ajax.send("email=" + subscriberEmail);
//         return false;
//     }

