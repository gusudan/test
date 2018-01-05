</div> <!-- /container -->


</body>
<script>
    $('[data-toggle=confirmation]').confirmation({
        rootSelector: '[data-toggle=confirmation]',
        title: 'Stergi evenimentul?',
        singleton: true,
        btnOkLabel: 'Sterge',
        btnCancelLabel: 'Anuleaza',
        btnOkClass: 'btn-xs btn-danger',
        btnCancelClass: 'btn-xs btn-primary'
                // other options
    });
</script>
</html>