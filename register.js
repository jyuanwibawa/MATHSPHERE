$(document).ready(function() {
    $("#registerForm").submit(function(event) {
        event.preventDefault();

        var username = $("#username").val();
        var email = $("#email").val();
        var password = $("#password").val();

     
        if (username && email && password) {
        
            $.ajax({
                url: 'register.php',
                type: 'POST',
                data: {
                    username: username,
                    email: email,
                    password: password
                },
                success: function(response) {
                 
                    if (response === 'success') {
                        window.location.href = 'Slide Login.html'; 
                    } else {
                        alert(response); 
                    }
                },
                error: function() {
                    alert('Terjadi kesalahan saat mengirim data.');
                }
            });
        } else {
            alert('Semua field harus diisi.');
        }
    });
});
