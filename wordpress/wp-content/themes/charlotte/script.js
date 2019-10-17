document.addEventListener('DOMContentLoaded', function () {

  //CONTACT TAB
  //trigger fixed contact tab on scrolling
  window.onscroll = function() {handleContactTab()};

  //function to add active class to tab on scroll
  function handleContactTab() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("contact-tab").className = "contact_tab_active";
    } else {
      document.getElementById("contact-tab").className = "contact-tab";
    }
  }

  //SIDEBAR
  //defining sidebar tab clicked status
  let clickActive = false;
  let sidebarActive = true;
  //define elements as variables
  const sidebar = document.getElementById('sidebar');
  const sidebarClose = document.getElementById('sidebar-exit');

  //function to auto hide sidebar on scroll unless tab was clicked
  window.onscroll = function() {handleSidebar()};

  function handleSidebar() {
    const sidebar = document.getElementById("sidebar");
    if(clickActive===false) {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {      
        //change sidebar class to inactive 
        sidebar.className='sidebar-inactive';
        //hide 'close' <p> element when inactive
        document.getElementById('sidebar-exit').classList.add('hide');
        //reassign variable
        sidebarActive=false;
      } else if(sidebar.className ==='sidebar-inactive'){
        sidebar.className='sidebar-active';      
        document.getElementById('sidebar-exit').classList.remove('hide');
      }
    }
  } 

  //listen for click event on sidebar tab and call triggerSidebar function to open it    
  sidebar.addEventListener('click',triggerSidebar);      
      
  //listen for click event on 'close' <p> element and call closeSidebar function to close it         
  sidebarClose.addEventListener('click',closeSidebar);
          

  //toggle sidebar function
  function triggerSidebar(event) {
    //if sidebar already open or if the click event was on 'close' <p> element don't trigger
    if(sidebarActive===true || event.target.id ==='sidebar-exit') {
      return;
    } else {  
      //if sidebar is inactive, deactivate  
      sidebar.className ='sidebar-active';
      //reenable 'close' <p> element on opening sidebar
      sidebarClose.classList.remove('hide');
      //reassign statuses to true
      clickActive = true;
      sidebarActive=true;
    }
  }

  //function to close sidebar
  function closeSidebar() {
    //if sidebar is active, add inactive class to deactivate.    
    sidebar.className='sidebar-inactive';
    //add 'hide' class to 'close' <p> element on closing
    sidebarClose.classList.add('hide');
    //reassign statuses to false
    clickActive=false;
    sidebarActive=false;    
  }        

})