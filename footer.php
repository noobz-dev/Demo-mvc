<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

    function checkDelete(object) {
        let data = object.getAttribute('data-id');
        let confirm = document.getElementById('confirm-delete');
        confirm.href = '?action=delete&id='+data;
    }


</script>