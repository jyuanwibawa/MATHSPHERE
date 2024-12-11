$(document).ready(function() {
    $('#loginForm').submit(function(e) {
        e.preventDefault();

        var username = $('#username').val();
        var password = $('#password').val();

        
        $.ajax({
            url: 'login.php', 
            type: 'POST',
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                if (response === 'success') {
                    window.location.href = 'Slide Home.php'; 
                } else {
                    alert(response); 
                }
            },
            error: function() {
                alert('Terjadi kesalahan, silakan coba lagi!');
            }
        });
    });
});
