$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        name: $("#name").val(),
        email: $("#email").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "subscribe_process.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);

        
      if (!data.success) {
        if (data.errors.name) {
          $("#name-error").addClass("has-error");
          $("#name-error").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }

        if (data.errors.email) {
          $("#email-error").addClass("has-error");
          $("#email-error").append(
            '<div class="help-block">' + data.errors.email + "</div>"
          );
        }
      } else {
        $("form").html(
          '<div class="alert alert-success">' + data.message + "</div>"
        );
      }
      });
  
      event.preventDefault();
    });
  });