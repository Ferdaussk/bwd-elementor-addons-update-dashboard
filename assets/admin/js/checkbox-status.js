document.addEventListener('DOMContentLoaded', () => {
  const enableAllBtn = document.querySelector('.bwd-enable-btn');
  const disableAllBtn = document.querySelector('.bwd-disable-btn');
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  
  enableAllBtn.addEventListener('click', () => {
    checkboxes.forEach(checkbox => {
      checkbox.checked = true;
    });
  });
  
  disableAllBtn.addEventListener('click', () => {
    checkboxes.forEach(checkbox => {
      checkbox.checked = false;
    });
  });
});
