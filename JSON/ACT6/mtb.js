$(document).ready(function() {
    $(document).on('change','#cama', function() {
        var cama_id = $(this).val();
            $.ajax({
                url:"get_data.php",
                type:'POST',
                data:{cama_id:cama_id},
            });

    });

});