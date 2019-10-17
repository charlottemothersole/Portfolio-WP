//trigger fixed contact tab
document.addEventListener('DOMContentLoaded', function () {
window.onscroll = function() {handleContactTab()};

function handleContactTab() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("contact-tab").className = "contact_tab_active";
  } else {
    document.getElementById("contact-tab").className = "contact-tab";
  }
}

//defining sidebar tab clicked status
let clickActive = false;
let sidebarActive = true;
//auto hide sidebar on scroll unless tab was clicked
/*window.onscroll = function() {handleSidebar()};

function handleSidebar() {
  const sidebar = document.getElementById("sidebar");
  if(clickActive===false) {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {      
      
      sidebar.className='sidebar-inactive';
      document.getElementById('sidebar-exit').classList.add('hide');
    } else if(sidebar.className ==='sidebar-inactive'){
      sidebar.className='sidebar-active';
      
      document.getElementById('sidebar-exit').classList.remove('hide');
    }
  }
}
*/


  const sidebar = document.getElementById('sidebar');
  const sidebarClose = document.getElementById('sidebar-exit');
  

 
    //listen for click event on sidebar tab and call toggle function
    
    sidebar.addEventListener('click',triggerSidebar);
      console.log('sidebar click listener open');
      console.log(sidebarActive);
             
    sidebarClose.addEventListener('click',closeSidebar);
      console.log('sidebarExit click listener open');

    
      
   
      
           
    

    //toggle sidebar function
    function triggerSidebar(event) {
      console.log(event.target);
      if(sidebarActive===true || event.target.id ==='sidebar-exit') {
        return;
      } else {
      console.log('triggered');
      //if sidebar is inactive, deactivate and reassign sidebar tab clicked status to true      
        sidebar.className ='sidebar-active';
        console.log('active class added');
        sidebarClose.classList.remove('hide');
        clickActive = true;
        sidebarActive=true;
      }
    }

    function closeSidebar() {
      
      console.log('closing has activated');
      //if sidebar is active, deactivate.
        
        sidebar.className='sidebar-inactive';
        console.log('inactive class added');
        sidebarClose.classList.add('hide');
        clickActive=false;
        sidebarActive=false;
        console.log(sidebarActive);
        
    }    

    

})