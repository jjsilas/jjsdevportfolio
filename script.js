
/* open mobile navigation*/
function openNav() {
    document.getElementById("myNav").style.width = "20%";
  }
  
  /* close mobile navigation*/
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

/* Added to work around a CSS scolling error */
  if (location.hash) {
    setTimeout(function() {
  
      window.scrollTo(0, 0);
    }, 1);
  }