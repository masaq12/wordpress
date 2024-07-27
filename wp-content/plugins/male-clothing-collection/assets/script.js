<script >
jQuery(document).ready(function($) {
    $('.mcc-product-collection').sortable({
        placeholder: 'mcc-product-placeholder',
        update: function(event, ui) {
            var order = $(this).sortable('toArray');
            console.log(order);
        }
    });
});
</script>