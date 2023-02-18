// let passbtn = document.getElementById("pass-btn");
// let getpass;
// passbtn.addEventListener("click", ()=>
// {
// getpass = document.getElementById("pass").value;
// if(getpass == "1234")
// {
// let overallsec = document.getElementById("overall-sec");
// overallsec.classList.remove("d-none");
// let passwordsec = document.getElementById("password-sec");
// passwordsec.classList.add("d-none");

// }
// else if (getpass == "")
// {
//   let wrong = document.getElementById("wrong");
// wrong.innerText = "This Field is Required!!";
// }
// else
// {
// let wrong = document.getElementById("wrong");
// wrong.innerText = "Please Enter Correct Password!!";
// }
// })



const popupcontact = document.getElementById("popup-contact");
function popup() {
    popupcontact.classList.remove('d-none');
    setTimeout(() => {
        popupcontact.style.opacity = 1;
    }, 600);
}
const close = document.getElementById("close-popup");
close.addEventListener("click", () => {
    popupcontact.classList.add('d-none');
    setTimeout(() => {
        popupcontact.style.opacity = 0;
    }, 500);
})
