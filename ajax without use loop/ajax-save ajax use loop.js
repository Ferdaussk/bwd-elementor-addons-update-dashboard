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
        var data = {
            action: 'bwdtsk_save_settings',
            security: bwdtsk_ajax_object.security
        };
        $('input[type="checkbox"]').each(function() {
            var checkboxName = $(this).attr('name');
            data[checkboxName] = $(this).is(':checked') ? 'on' : 'off';
        });

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
