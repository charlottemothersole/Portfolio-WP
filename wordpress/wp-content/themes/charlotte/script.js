document.addEventListener('DOMContentLoaded', function () {

  //NAVIGATION
  //defining variables
  let hoveredItems = document.querySelectorAll('.menu-item');
  
  //function to show sub-menu element on hover
  function identifyElement(e) {
    //identify hovered element id
    let testItem = e.target.id;
    //save hovered element
    let testItemId = document.getElementById(testItem);
    //search for closest sub-menu element
    let testClosest = testItemId.querySelector('.sub-menu');
    //if closest sub-menu is inactive, activate
    if(testClosest.classList != 'sub-menu-active') {
      testClosest.classList.remove('sub-menu');
      testClosest.classList.add('sub-menu-active');
    } 
  }

  //function to remove sub-menu element on hover
  function closeSubMenu(e) {
    //identify hovered element id
    let testItem = e.target.id;
    //save hovered element
    let testItemId = document.getElementById(testItem);
    //search for closest sub-menu element
    let testClosest = testItemId.querySelector('.sub-menu-active');
    //if closest sub-menu is active, remove
    if(testClosest.classList == 'sub-menu-active') {      
      testClosest.classList.add('sub-menu');
      testClosest.classList.remove('sub-menu-active');
    }
}

  //Event listener for hover on nav items
  for (i=0;i<hoveredItems.length;i++) {
  hoveredItems[i].addEventListener('mouseenter',identifyElement);  
  }
  
  //Event listener for end-hover on nav items
  for (i=0;i<hoveredItems.length;i++) {
  hoveredItems[i].addEventListener('mouseleave',closeSubMenu);
  }

  


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
  let clickClose = false;
  //define elements as variables
  const sidebar = document.getElementById('sidebar');
  const sidebarClose = document.getElementById('sidebar-exit');
  const itemsToHide = document.querySelectorAll('.js-hide-on-active');

  //function to auto hide sidebar on scroll unless tab was clicked
  window.onscroll = function() {handleSidebar()};

  function handleSidebar() {
    const sidebar = document.getElementById("sidebar");
    if(clickActive===false) {
      if (document.body.scrollTop > 50 && window.innerWidth >=799 || document.documentElement.scrollTop > 50 && window.innerWidth >=799) {      
        //change sidebar class to inactive 
        sidebar.className='sidebar-inactive';
        //hide elements when inactive        
        for(i=0;i<itemsToHide.length;i++) {
          itemsToHide[i].classList.add('hide');
        }
        //show 'dots' <p> element when inactive
        document.getElementById('sidebar-dots').classList.remove('hide');
        //reassign variable*/
        sidebarActive=false;
        //if sidebar inactive change to active
      } else if(sidebar.className ==='sidebar-inactive' && clickClose ===false){
        sidebar.className='sidebar-active'; 
        //show elements when active
        for(i=0;i<itemsToHide.length;i++) {
          itemsToHide[i].classList.remove('hide');
        } 
        //hide '...' <p> element when active        
        document.getElementById('sidebar-dots').classList.add('hide');
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
      //if sidebar is inactive, activate  
      sidebar.className ='sidebar-active';
      //hide '...' <p> element on opening sidebar
      document.getElementById('sidebar-dots').classList.add('hide');      
      //show elements when active   
      for(i=0;i<itemsToHide.length;i++){
        itemsToHide[i].classList.remove('hide');
      }
      //reassign statuses to true
      clickActive = true;
      sidebarActive=true;
    }
  }

  //function to close sidebar
  function closeSidebar() {
    //if sidebar is active, add inactive class to deactivate.    
    sidebar.className='sidebar-inactive';    
    //show '...' <p> element on closing
    document.getElementById('sidebar-dots').classList.remove('hide');
    //hide elements when inactive    
    for(i=0;i<itemsToHide.length;i++){
      itemsToHide[i].classList.add('hide');
    }
    //reassign statuses to false
    clickActive=false;
    sidebarActive=false;   
    //reassign status to true
    clickClose=true; 
  }      

  //toggle 'Posts By Category' sidebar link to expand/shrink
  let listActive = false;
  const category = document.querySelector('.sidebar-list');
  
  category.addEventListener('click', toggleList);

  function toggleList() { 
     
    const list = document.getElementById('category-links');
    
    if(listActive===false){
    list.style.display = 'flex';
    listActive = true;
    } else if(listActive ===true) {      
      list.style.display = 'none';
      listActive = false;
    }
  }




})

