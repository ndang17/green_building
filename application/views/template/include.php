
<script>

    window.base_url_js = "<?php echo base_url(); ?>";

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
</script>