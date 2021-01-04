var exampleModal = document.getElementById('exampleModaladm')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModaladm.querySelector('.modal-title')
  var modalBodyInput = exampleModaladm.querySelector('.modal-body input')

  modalTitle.textContent = 'Administrador ' + recipient
  modalBodyInput.value = recipient
})