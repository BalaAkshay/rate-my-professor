function validateRate() {
    var prof = document.getElementById('prof').value;
    var rating = document.getElementById('rating').value;
    if (prof === '' || rating === '') {
      alert('Select professor and rating');
      return false;
    }
    return true;
  }
  function validateLogin() {
    var u = document.getElementById('username').value;
    var p = document.getElementById('password').value;
    if (!u || !p) {
      alert('Enter both username & password');
      return false;
    }
    return true;
  }
  