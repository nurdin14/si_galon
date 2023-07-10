<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2022 Ulvi Mardiah Informatika Fakultas Teknik Universitas Majalengka</a>
    </div>
    <div class="footer-right">

    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="<?= base_url() ?>assets/modules/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/modules/popper.js"></script>
<script src="<?= base_url() ?>assets/modules/tooltip.js"></script>
<script src="<?= base_url() ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?= base_url() ?>assets/modules/moment.min.js"></script>
<script src="<?= base_url() ?>assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="<?= base_url() ?>assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="<?= base_url() ?>assets/modules/chart.min.js"></script>
<script src="<?= base_url() ?>assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?= base_url() ?>assets/modules/summernote/summernote-bs4.js"></script>
<script src="<?= base_url() ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="<?= base_url() ?>assets/modules/datatables/datatables.min.js"></script>
<script src="<?= base_url() ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?= base_url() ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
<script src="<?= base_url() ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url() ?>assets/js/page/index-0.js"></script>
<script src="<?= base_url() ?>assets/js/page/modules-datatables.js"></script>

<!-- Template JS File -->
<script src="<?= base_url() ?>assets/js/scripts.js"></script>
<script src="<?= base_url() ?>assets/js/custom.js"></script>

<!-- Custom JS -->
<script>
    function showForm() {
            var paymentMethod = document.getElementById("paymentMethod").value;
            var transferForm = document.getElementById("transferForm");
            var codForm = document.getElementById("codForm");

            if (paymentMethod === "Transfer") {
                transferForm.style.display = "block";
                bankText.style.display = "block";
                codForm.style.display = "none";
            } else if (paymentMethod === "Cod") {
                transferForm.style.display = "none";
                bankText.style.display = "none";
                codForm.style.display = "block";
            } else {
                transferForm.style.display = "none";
                bankText.style.display = "none";
                codForm.style.display = "none";
            }
        }

        document.getElementById("paymentForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent form submission

            var paymentMethod = document.getElementById("paymentMethod").value;
            var accountNumber = document.getElementById("accountNumber").value;
            var description = document.getElementById("description").value;

            document.getElementById("paymentForm").reset();
            document.getElementById("transferForm").style.display = "none";
            document.getElementById("bankText").style.display = "none";
            document.getElementById("codForm").style.display = "none";
        });
</script>
</body>

</html>