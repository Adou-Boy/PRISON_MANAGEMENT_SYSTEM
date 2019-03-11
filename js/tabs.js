function openTab(e, tabId) {
  var i, tabcontent, tablink;
  //Hide all tabcontent when tab button is clicked
  tabcontent = document.getElementsByClassName('tabContent');
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove active for the tabs link if its active
  tablink = document.getElementsByClassName('tablink');
  for (i = 0; i < tablink.length; i++) {
    tablink[i].className  = tablink[i].className.replace('active', "");
  }

  document.getElementById(tabId).style.display = "block";
  e.currentTarget.className += ' active';
}
