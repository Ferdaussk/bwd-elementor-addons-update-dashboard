// Function to show success toast
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
    $(document).on('click', '#bwdtsk-save-settings', function(e) {
        e.preventDefault();
        var switchValues = {
            bwdeb_plugin_meet_the_team: $('#bwdeb-plugin-meet-the-team').is(':checked') ? 'on' : 'off',
            bwdeb_plugin_another_option: $('#bwdeb-plugin-another-option').is(':checked') ? 'on' : 'off',
            bwdeb_plugin_another_option2: $('#bwdeb-plugin-another-option2').is(':checked') ? 'on' : 'off'
        };
        var data = {
            action: 'bwdtsk_save_settings',
            security: bwdtsk_ajax_object.security,
            bwdeb_plugin_meet_the_team: switchValues.bwdeb_plugin_meet_the_team,
            bwdeb_plugin_another_option: switchValues.bwdeb_plugin_another_option,
            bwdeb_plugin_another_option2: switchValues.bwdeb_plugin_another_option2
        };

        $.ajax({
            url: bwdtsk_ajax_object.ajax_url,
            type: 'POST',
            data: data,
            success: function(response) {
                if (response.success) {
                    showSuccessToast('Settings saved successfully!');
                } else {
                    alert('Error: ' + response.data.message);
                }
            },
            error: function(error) {
                console.log(error);
                alert('Error: Failed to save settings.');
            }
        });
    });
});
// hrdtuybhy8om8967ujhyg54ctwefy6gwhjruffil0p0k9of4ed3xwqlplplplplplplpwd;j76g5c4fwq09786jhywsx09999999999999s