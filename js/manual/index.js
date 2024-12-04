$(document).ready(function() {
  $(".preloader").fadeOut();
})

// Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
document.addEventListener("DOMContentLoaded", function() {
  const sections = document.querySelectorAll("section");
  const navLinks = document.getElementsByClassName("dropdown-item");
  let activeLink = "";

  const handleScroll = () => {
      let scrollPosition = window.scrollY;

      sections.forEach((section) => {
          if (section.offsetTop <= scrollPosition && section.offsetTop + section.offsetHeight > scrollPosition) {
              activeLink = section.getAttribute("id");
              navLinks.forEach(link => {
                  link.classList.remove("active");
                  if (link.getAttribute("href") === `#${activeLink}`) {
                      link.classList.add("active");
                  }
              });
          }
      });
  };

  window.addEventListener("scroll", handleScroll);
});

// Login
