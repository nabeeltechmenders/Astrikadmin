<!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/jquery.min.js" type="text/javascript"></script>

<!-- Bootstrap Core JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<!-- Feather Icon JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/feather.min.js" type="text/javascript"></script>

<!-- Slimscroll JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>

<!-- Summernote JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/summernote-lite.min.js" type="text/javascript"></script>

<!-- Color Picker JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/plyr-js.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/pickr.es5.min.js" type="text/javascript"></script>

<!-- Datatable JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>	

<!-- Bootstrap Tagsinput JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/bootstrap-tagsinput.js" type="text/javascript"></script>

<!-- Owl Carousel -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/owl.carousel.min.js" type="text/javascript"></script>

<!-- Daterangepikcer JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/moment.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/daterangepicker.js" type="text/javascript"></script>


<!-- Fullcalendar JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/index.global.min.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/calendar-data.js" type="text/javascript"></script>

<!-- Datetimepicker JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

<!-- Select2 JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/select2.min.js" type="text/javascript"></script>

<!-- Theiastickysidebar JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/theia-sticky-sidebar.min.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/ResizeSensor.min.js" type="text/javascript"></script>

<!-- Owl Carousel JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/owl.carousel.min.js" type="text/javascript"></script>


<!-- Chart JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/apexcharts.min.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/chart-data.js" type="text/javascript"></script>

<!-- Chart JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/chart.min.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/chart-data.js" type="text/javascript"></script>

<!-- Slimscroll JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>

<!-- Sticky Sidebar JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/ResizeSensor.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/theia-sticky-sidebar.js" type="text/javascript"></script>

<!-- Fancybox JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/jquery.fancybox.min.js" type="text/javascript"></script>

<!-- Chart JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/chart.min.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/chart-data.js" type="text/javascript"></script>

<!-- Flatpicker JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/flatpickr.min.js" type="text/javascript"></script>



<script src="https://clienttestlinks.com/astrikhr/assets/js/email.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/kanban.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/invoice.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/projects.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/add-comments.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/file-manager.js" type="text/javascript"></script>


<!-- Custom JS -->
<script src="https://clienttestlinks.com/astrikhr/assets/js/todo.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/theme-colorpicker.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/script.js" type="text/javascript"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/rocket-loader.min.js"></script>
<script src="https://clienttestlinks.com/astrikhr/assets/js/beacon.min.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the current page URL
        let currentPage = window.location.pathname.split("/").pop();
       // Select all sidebar links
        let menuItems = document.querySelectorAll("#sidebar-menu a");
        menuItems.forEach(item => {
            // Get the href of each menu item
            let menuItemHref = item.getAttribute("href");
            // Compare the current page with menu href
            if (menuItemHref === currentPage) {
                item.classList.add("active");
                // Optionally highlight the parent li
                item.closest("li").classList.add("active");
            }
        });
    });
</script>
<script>
	/* Date Picker Function Start */
	flatpickr("#flat", {
  mode: 'range',
  showMonths: 2,
});
/* Date Picker Function End */
</script>

