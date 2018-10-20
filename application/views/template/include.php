
<script>

    window.base_url_js = "<?php echo base_url(); ?>";

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    function dateTimeNow() {
        return moment().format('YYYY-MM-DD H:mm:ss');
    }

    function getSelectOptionTitle(element,selected) {
        var url = base_url_js+'api/__getTitle';
        $.getJSON(url,function (jsonResult) {
            console.log(jsonResult);
            for(var i=0;i<jsonResult.length;i++){
                var d = jsonResult[i];
                $(element).append('<option value="'+d.ID+'">'+d.Code+' - '+d.Title+'</option>');

            }

        });
    }
    
    function g() {
        
    }
</script>