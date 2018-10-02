/**
 * Function that opens the mobile menu when clicking the hamburger
 */

export default function toggleMobileMenu () {
  const activeClass = 'is-active'
  const fixedMenuClass = 'no-scroll'
  const hamburger = document.querySelector('.o__header__hamburger')
  const menu = document.querySelector('.o__header__menu-subcontainer')

  if (!hamburger || !menu) {
    return
  }

  hamburger.addEventListener('click', toggle)

  /**
   * Function that is called every time the hamburger element is clicked.
   */
  function toggle () {
    if (hamburger.classList.contains(activeClass)) {
      hamburger.classList.remove(activeClass)
      menu.classList.remove(activeClass)
      document.body.classList.remove(fixedMenuClass)
    } else {
      hamburger.classList.add(activeClass)
      menu.classList.add(activeClass)
      document.body.classList.add(fixedMenuClass)
    }
  }
}
