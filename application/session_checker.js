// session_checker.js
setInterval(function () {
    fetch('<?php echo base_url('login/session_status'); ?>')
        .then(response => response.json())
        .then(data => {
            if (!data.logged_in) {
                alert("Session expired. kamu dikembalikan ke form login.");
                window.location.href = "<?php echo base_url('login'); ?>";
            }
        });
}, 5000); // Cek setiap 5 detik
