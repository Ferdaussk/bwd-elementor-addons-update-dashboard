// This ready function for successfully saved toster message
function showSuccessToast(message) {
    var toast = jQuery('<div class="success-toast"></div>').text(message);
    jQuery('.save-toast-message').html(toast);
    toast.css({
        'right': '-450px',
        'position': 'fixed',
        'top': '40px',
        'background-color': '#4CAF50',
        'color': '#fff',
        'padding': '20px 50px',
        'border-radius': '5px',
        'box-shadow': '0 4px 8px rgba(0,0,0,0.2)',
        'transition': 'right 0.5s ease-in-out',
        'font-size': '25px'
    });
    toast.animate({
        'right': '20px' 
    }, 500);
    setTimeout(function() {
        toast.animate({
            'right': '-300px'
        }, 500, function() {
            toast.remove();
        });
    }, 5000);
}

jQuery(document).ready(function($) {
    $('#bwdtsk-save-settings').on('click', function() {
        $('.bwdtsk-save-loader').show();
        console.log('Ferdaus loaded'); console.log(bwdtsk_ajax_object);
        var switchValue = $('#bwdeb-plugin-meet-the-team').is(':checked') ? 1 : 0;
        var data = {
            'action': 'bwdtsk_save_settings',
            'security': bwdtsk_ajax_object.security,
            'bwdeb_plugin_meet_the_team': switchValue
        };
        jQuery.ajax({
            url: bwdtsk_ajax_object.ajax_url,
            type: 'POST',
            data: data,
            success: function(response) {
                $('.bwdtsk-save-loader').hide();
                if (response.success) {
                    showSuccessToast('Settings saved successfully!');
                } else {
                    alert('Error: ' + response.data.message);
                }
            },
            error: function(error) {
                $('.bwdtsk-save-loader').hide();
                console.log(error);
                alert('Error: Failed to save settings.');
            }
        });
    });
});
