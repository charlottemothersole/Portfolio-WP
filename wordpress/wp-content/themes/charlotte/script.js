window.onscroll = function() {handleContactTab()};

function handleContactTab() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("contact-tab").className = "contact_tab_active";
  } else {
    document.getElementById("contact-tab").className = "contact-tab";
  }
}