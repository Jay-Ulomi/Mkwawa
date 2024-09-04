<script>
    window.onload = function() {
        setTimeout(function() {
            document.getElementById('popupModal').style.display = 'block';
        }, 3000); // 3 seconds delay
    }

    function closePopup() {
        document.getElementById('popupModal').style.display = 'none';
    }
</script>
