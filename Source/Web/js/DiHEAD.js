/*+.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.
.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++
+++.                                        +++.
.+++                                        .+++
+++.        DDD.    NNN.    NNN.    AAA.    +++.
.+++        DDD.    NNN.    NNN.    AAA.    .+++
+++.    DDD.    NNN.    NNN.    AAA.        +++.
.+++    DDD.    NNN.    NNN.    AAA.        .+++
+++.        DDD.NNN.NNN.NNN.NNN.            +++.
.+++        DDD.NNN.NNN.NNN.NNN.            .+++
+++.            NNN.    NNN.        AAA.    +++.
.+++            NNN.    NNN.        AAA.    .+++
+++.        EEE.    III.    KKK.    NNN.    +++.
.+++        EEE.    III.    KKK.    NNN.    .+++
+++.    EEE.    III.    KKK.    NNN.        +++.
.+++    EEE.    III.    KKK.    NNN.        .+++
+++.        EEE.III.    KKK.    NNN.NNN.    +++.
.+++        EEE.III.    KKK.    NNN.NNN.    .+++
+++.        EEE.    III.KKK.KKK.NNN.        +++.
.+++        EEE.    III.KKK.KKK.NNN.        .+++
+++.                                        +++.
.+++                                        .+++
+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.
.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+++.+*/

/* Licensed under the EUPL-1.2-or-later */

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
