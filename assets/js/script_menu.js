
window.addEventListener('load', function (){


  console.log('ok');
  
  const hamburgerToggler = document.querySelector(".hamburger")
  const navLinksContainer = document.querySelector(".navlinks-container");
  
  const toggleNav = () => {
    hamburgerToggler.classList.toggle("open")
  
    const ariaToggle = hamburgerToggler.getAttribute("aria-expanded") === "true" ?  "false" : "true";
    hamburgerToggler.setAttribute("aria-expanded", ariaToggle)
  
    navLinksContainer.classList.toggle("open")
  }
  hamburgerToggler.addEventListener("click", toggleNav)
  
  new ResizeObserver(entries => {
    if(entries[0].contentRect.width <= 900){
      navLinksContainer.style.transition = "transform 0.3s ease-out"
    } else {
      navLinksContainer.style.transition = "none"
    }
  }).observe(document.body)
  
  
  function menuToggle(){
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active')
  }
  
  const profile = document.querySelector('.profile')
  profile.addEventListener('click', ()=>{
    console.log("l'event fonctionne");
    menuToggle()
  })
  
  })