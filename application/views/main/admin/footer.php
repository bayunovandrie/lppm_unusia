<footer class="footer text-center">
    <p>© 2023 LPPM UNUSIA. All rights reserved</p>
</footer>

</div>

<div class="chat-windows"></div>

<script src="<?= BASEURL ?>assets2/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= BASEURL ?>assets2/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= BASEURL ?>assets2/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="<?= BASEURL ?>assets2/dist/js/app.min.js"></script>
<script src="<?= BASEURL ?>assets2/dist/js/app.init.horizontal.js"></script>
<script src="<?= BASEURL ?>assets2/dist/js/app-style-switcher.horizontal.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= BASEURL ?>assets2/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= BASEURL ?>assets2/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?= BASEURL ?>assets2/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= BASEURL ?>assets2/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= BASEURL ?>assets2/dist/js/custom.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->

<!--c3 charts -->
<script src="<?= BASEURL ?>assets2/extra-libs/c3/d3.min.js"></script>
<script src="<?= BASEURL ?>assets2/extra-libs/c3/c3.min.js"></script>
<script src="<?= BASEURL ?>assets2/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?= BASEURL ?>assets2/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= BASEURL ?>assets2/dist/js/pages/dashboards/dashboard1.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="<?= BASEURL ?>assets/DataTables/dataTables.min.js"></script>
<!-- Menggunakan Bootstrap JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Tambahkan script JavaScript untuk Summernote dari CDN -->

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
    $('#summernote').summernote({
        height: 300 // Tentukan tinggi editor
    });
});
</script>





<script>
$(document).ready(function() {
    $('#example').DataTable();
});

$(document).ready(function() {
    $('#example2').DataTable();
});

$(document).ready(function() {
    $('#example3').DataTable();
});
$(document).ready(function() {
    $('#example4').DataTable();
});

$(document).ready(function() {
    $('#example5').DataTable();
});
</script>

<script>
// Fungsi untuk membuka modal
function openModal() {
    $('#myModal').modal('show');
}

// Menambahkan event listener untuk tombol membuka modal
// document.getElementById('openModalBtn').addEventListener('click', openModal);
// document.getElementById('openModalBtn').addEventListener('click', openModal);
</script>




</body>

</html>