
document.addEventListener('DOMContentLoaded', function () {
var widgetWrappers = document.querySelectorAll('.bwd-sk-wrapper');
widgetWrappers.forEach(function(wrapper, index) {
    var widgetCount = wrapper.querySelectorAll('.bwd-sk-cmn').length;
    wrapper.querySelector('.widgetCount').textContent = widgetCount;
});
});