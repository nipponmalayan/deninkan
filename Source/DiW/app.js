const menuFade = () => {
  const cross = document.querySelector('.DiNAV_menu')
  const nav = document.querySelector('.DiNAV_links')
  const logo = document.querySelector('.DiNAV_logo')

  cross.addEventListener('click', () => {
    cross.classList.toggle('DiNAV_menu-transform')
    nav.classList.toggle('DiNAV_menu-fadein')
    logo.classList.toggle('DiNAV_menu-fadeout')
  })
}
menuFade()
