let inputs = document.querySelectorAll("input")
let textarea = document.querySelector("textarea")
inputs = Array.from(inputs)
//Pour chaque champ du formualaire, insérer unbe valeur vide si le bouton retour eçst cliqué
undo.addEventListener("click", () => {
    inputs.forEach(input => {
        input.value = ""
    })
    textarea.value = ""
    send.disabled = true
})

//Création des Regex formulaire
const nameRegex = /^[a-zA-ZÀ-ÖØ-öø-ÿ]*([\_\'\-]*[a-zA-ZÀ-ÖØ-öø-ÿ]*)?$/
const mailRegex = /^[a-z0-9]([a-z0-9\-\_\.]*)[@]([a-z0-9\.]+)[\.]([a-z]){2,5}/i
const phoneRegex = /^((([\+]([0-9])*[\.\-\s]?)[0-9]?)||(([0])[0-9]))([\.\-\s])?([0-9]{2}([\.\-\s])?){4}$/
const textRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s\-\'\.]+$/

//Messages d'erreur associés
const errorMessageName = "Merci d'entrer un nom uniquement en lettres, il est possible d'utiliser des tirets, des underscores et des apostrophes."
const errorMessageMail = "Merci d'entrer une adresse mail avec un format valide."
const errorMessagePhone = "Merci d'entrer un numéro de téléphone avec unnformat valide."
const errorMessageText = "Merci d'entrer un message au format valide, il est possible d'utiliser les caractères (-_') et des chiffres."

//Activer la fonction de test regex à l'insertion de caractères dans les champs
nameInput.addEventListener("input", function () {
    regexTest(this, nameRegex, errorMessageName)
})

emailInput.addEventListener("input", function () {
    regexTest(this, mailRegex, errorMessageMail)
})

phoneInput.addEventListener("input", function () {
    regexTest(this, phoneRegex, errorMessagePhone)
})

messageInput.addEventListener("input", function () {
    regexTest(this, textRegex, errorMessageText)
})

//Bouton envoyer désactivé par défaut
send.disabled = true

//Création d'un tableau booléen de vérification
let check = []

//Lors de chaque insertion, Vérifier si tous les champs sont bien renseignés et si les Regex sont valides
document.addEventListener("input", () => {
    checkValues = Object.values(check)
    if(checkValues.length == 4 && checkValues.includes(false) == false) {
        send.disabled = false
    } else {
        send.disabled = true
    }
})

//Création de la fonction qui vérifie la saisie utilisateur et qui affiche le message correspondant.
function regexTest(inputFull, regex, errorMessage) {
    //Création de la constante permettant de faire l'id du p
    const pId = "p" + inputFull.id
    let p = document.getElementById(pId)
    //On vérifie que le p existe. Si c'est le cas on le modifie. Sinon on le crée
    if (p == null) {
        //Création du paragraphe virtuel
        p = document.createElement("p")
        p.id = pId
    }
    //Création de la condition du test RegExp.
    if (!regex.test(inputFull.value) || inputFull.value == "") {
        //Création texte refus de validation.
        p.innerText = errorMessage
        //Changement de couleur.
        p.style.color = "red"
        check[inputFull.id] = false
    //Sinon vider le paragraphe d'erreur et modifier l'index du tableau de vérification
    } else {
        p.innerText = ""
        check[inputFull.id] = true
    }
    inputFull.insertAdjacentElement("afterend", p)
}




