const projectButton = document.getElementsByClassName("projectButton")
const projectImage = document.getElementsByClassName("projectImage")


function addOpacity () {
    for(var i = 0; i < projectButton.length; i++) {
    projectImage[i].classList.add("opacity")
    }
}
function removeOpacity () {
    for(var i = 0; i < projectButton.length; i++) {
    projectImage[i].classList.remove("opacity")
    }
}
function addHidden () {
    for(var i = 0; i < projectButton.length; i++) {
    projectButton[i].classList.add("hidden")
    }
}
function removeHidden () {
    for(var i = 0; i < projectButton.length; i++) {
    projectButton[i].classList.remove("hidden")
    }
}

for(var i = 0; i < projectButton.length; i++) {
    projectImage[i].addEventListener("mouseenter", () => {
    addOpacity()
    removeHidden()
})
    projectImage[i].addEventListener("mouseleave", () => {
    removeOpacity()
    addHidden()
})
    projectButton[i].addEventListener("mouseenter", () => {
    addOpacity()
    removeHidden()
})
    projectButton[i].addEventListener("mouseleave", () => {
    removeOpacity()
})
}