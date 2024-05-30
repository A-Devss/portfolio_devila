</main>

<script>
         $(document).ready(function() {
            // Retrieve the active link href from local storage
            var activeLink = localStorage.getItem('activeLink');

            if (activeLink) {
                $('.nav-link').removeClass('active');
                $('.nav-link[href="' + activeLink + '"]').addClass('active');
            }

            $('.nav-link').click(function() {
                // Remove 'active' class from all nav links
                $('.nav-link').removeClass('active');

                // Add 'active' class to the clicked nav link
                $(this).addClass('active');

                // Save the clicked link's href to local storage
                var href = $(this).attr('href');
                localStorage.setItem('activeLink', href);
            });
        });
    </script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>

</script>
</body>
</html>