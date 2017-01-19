function response(obj)
{
  obj = obj.parentNode.children[1];
  obj.style.display = (obj.style.display == 'block') ? 'none' : 'block';
}

function testField()
{
  var name = $('#name').val().trim();
  var lastName = $('#lastname').val().trim();
  var email = $('#email').val().trim();
  var subject = $('#subject').val().trim();
  var msg = $('#msg').val().trim();

  var checkEmail = email.match(/^.+@.+\..{2,4}$/i);


  if(name == '' || lastName == '' || email == '' || subject == '' || msg == '' || !checkEmail)
  {
    $('#nameErr').html((name == '') ? '(Champ vide !)' : '');
    $('#lastnameErr').html((lastName == '') ? '(Champ vide !)' : '');
    $('#emailErr').html((email == '') ? '(Champ vide !)' : '');
    $('#subjectErr').html((subject == '') ? '(Champ vide !)' : '');
    $('#msgErr').html((msg == '') ? '(Champ vide !)' : '');

    if(email != '')
    $('#emailErr').html((!checkEmail) ? '(Format de l\'email incorrecte !)' : '');
  }
  else
  {
    $('#contactModal').modal('show');
    //$('form')[0].submit();
  }
}
