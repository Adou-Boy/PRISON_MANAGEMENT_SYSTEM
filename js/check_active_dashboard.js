function checkStatus() {
  status = document.getElementById('link');
  for (var i = 0; i < status.length; i++) {
    status[i].className = status[i].className.replace('links', "active");
  }
}
