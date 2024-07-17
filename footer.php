<!-- Vendor JS Files -->
<script>
    function previewImage(event) {
        const preview = document.getElementById('profilePreview');
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    function removeImage() {
        const preview = document.getElementById('profilePreview');
        preview.src = 'assets/img/profile-img.jpg'; // Reset to default image
        document.getElementById('profileImage').value = ''; // Clear file input
    }
</script>

<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>