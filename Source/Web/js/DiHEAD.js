const menuFade = () => {
  const cross = document.querySelector('.DiHEAD_menu')
  const nav = document.querySelector('.DiHEAD_links')
  const logo = document.querySelector('.DiHEAD_logo')

  cross.addEventListener('click', () => {
    cross.classList.toggle('DiHEAD_menu-transform')
    nav.classList.toggle('DiHEAD_menu-fadein')
    logo.classList.toggle('DiHEAD_menu-fadeout')
  })
}

menuFade();
