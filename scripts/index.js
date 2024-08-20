function prefillEditForm(username, email, role, id) {
  my_modal_4.showModal()
  document.querySelector('#edit_username').value = username
  document.querySelector('#edit_email').value = email
  document.querySelector('#edit_role').value = role
  document.querySelector('#edit_id').value = id
  document.querySelector('#initial_email').value = email
}

function prefillDeleteForm(id) {
  my_modal_5.showModal()
  document.querySelector('#id').value = id
}
