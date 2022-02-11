/**
 * Définition des informations de base
 */

const slideContainer = document.querySelector(".slider")
const sliderText = document.querySelector(".slider--text")
const sliderTitle = document.querySelector(".slider--title")
const sliderButton = document.querySelector(".slider--link")
const btnLeft = document.querySelector(".slider__btn-left")
const btnRight = document.querySelector(".slider__btn-right")

const sliderImages = [
  {
    title: "Portfolio",
    src: "../assets/img/Project.jpg",
    text: "Découvrez mes projets",
    link: "projects.php",
  },
  {
    title: "Skills",
    src: "../assets/img/Skills.jpg",
    text: "Court résumé",
    link: "skills.php",
  },
  {
    title: "Contact",
    src: "../assets/img/Contact.jpg",
    text: "Formulaire de contact",
    link: "contact.php",
  },
]

let slideCounter = 0

// fonction d'ajout de la première image, assombrissement de celle-ci, ajout du texte adéquat

const startSlider = () => {
    slideContainer.style.backgroundImage = `linear-gradient(
        to right,
        rgba(34, 34, 34, 0.4),
        rgba(68, 68, 68, 0.4)
      ), url(${sliderImages[0].src})`
    sliderText.innerHTML = sliderImages[0].text
    sliderTitle.innerHTML = sliderImages[0].title
    sliderButton.setAttribute("href", sliderImages[0].link)
  }

//Ajout d'eventListener click au button de droite

btnRight.addEventListener("click", function() {
    //SI dernière image du slide, revient à la première
    if (slideCounter === sliderImages.length - 1) {
      slideContainer.style.backgroundImage = `linear-gradient(
        to right,
        rgba(34, 34, 34, 0.4),
        rgba(68, 68, 68, 0.4)
      ), url(${sliderImages[0].src})`
      sliderText.innerHTML = sliderImages[0].text
      sliderTitle.innerHTML = sliderImages[0].title
      sliderButton.setAttribute("href", sliderImages[0].link)
      slideCounter = -1
        //Attribution du style avec timeout
      slideContainer.classList.add("fadeIn")
      setTimeout(() => {
        slideContainer.classList.remove("fadeIn")
      }, 1000)
    }
    slideContainer.style.backgroundImage = `linear-gradient(
        to right,
        rgba(34, 34, 34, 0.4),
        rgba(68, 68, 68, 0.4)
        ),url(${sliderImages[slideCounter + 1].src})`
    sliderText.innerHTML = sliderImages[slideCounter + 1].text
    sliderTitle.innerHTML = sliderImages[slideCounter + 1].title
    sliderButton.setAttribute("href", sliderImages[slideCounter + 1].link)
    slideCounter++
    slideContainer.classList.add("fadeIn")
    setTimeout(() => {
      slideContainer.classList.remove("fadeIn")
    }, 1000)
  })

//Ajout d'evnetListener click pour le bouton gauche 

  btnLeft.addEventListener("click", function() {
      //SI première slide, revenir à la dernière
    if (slideCounter === 0) {
      slideContainer.style.backgroundImage = `linear-gradient(
        to right,
        rgba(34, 34, 34, 0.4),
        rgba(68, 68, 68, 0.4)
      ),url(${sliderImages[sliderImages.length - 1].src})`
      sliderText.innerHTML = sliderImages[sliderImages.length - 1].text
      sliderTitle.innerHTML = sliderImages[sliderImages.length - 1].title
      sliderButton.setAttribute("href", sliderImages[sliderImages.length - 1].link)
      slideCounter = sliderImages.length
      slideContainer.classList.add("fadeIn")
      setTimeout(() => {
        slideContainer.classList.remove("fadeIn")
      }, 1000)
    }
  
    slideContainer.style.backgroundImage = `linear-gradient(
        to right,
        rgba(34, 34, 34, 0.4),
        rgba(68, 68, 68, 0.4)
      ),url(${sliderImages[slideCounter - 1].src})`
    sliderText.innerHTML = sliderImages[slideCounter - 1].text
    sliderTitle.innerHTML = sliderImages[slideCounter - 1].title
    sliderButton.setAttribute("href", sliderImages[slideCounter - 1].link)
    slideCounter--
    slideContainer.classList.add("fadeIn")
    setTimeout(() => {
      slideContainer.classList.remove("fadeIn")
    }, 1000)
  })
  
  startSlider()
