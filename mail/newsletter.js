// mail/newsletter.js
$(function() {
    $("#newsletterForm").submit(function(event) {
        event.preventDefault(); // Evita que el formulario se envíe de la forma tradicional

        var email = $("#newsletterEmail").val();
        var $button = $("#newsletterSubmitButton");
        var $successDiv = $("#newsletterSuccess");

        // Validar que el campo no esté vacío
        if (email.length === 0) {
            $successDiv.html("<div class='alert alert-danger'>Por favor, ingresa un correo.</div>");
            return;
        }

        $button.prop("disabled", true);
        $successDiv.html("<div class='alert alert-info'>Enviando...</div>");

        $.ajax({
            url: "mail/newsletter.php",
            type: "POST",
            data: {
                email: email
            },
            cache: false,
            success: function() {
                // Éxito
                $successDiv.html("<div class='alert alert-success'>¡Gracias por suscribirte!</div>");
                $('#newsletterForm').trigger("reset");
            },
            error: function() {
                // Error
                $successDiv.html("<div class='alert alert-danger'>Lo sentimos, hubo un error. Inténtalo de nuevo.</div>");
            },
            complete: function() {
                setTimeout(function() {
                    $button.prop("disabled", false);
                    $successDiv.html(""); // Limpia el mensaje después de unos segundos
                }, 5000);
            }
        });
    });
});