// document.addEventListener("DOMContentLoaded", function () {
//     const loginTab = document.getElementById("login-tab");
//     const signupTab = document.getElementById("signup-tab");
//     const loginForm = document.getElementById("login-form");
//     const signupForm = document.getElementById("signup-form");

//     // Add event listeners to tabs
//     loginTab.addEventListener("click", () => {
//         loginTab.classList.add("active");
//         signupTab.classList.remove("active");
//         loginForm.style.display = "block";
//         signupForm.style.display = "none";
//     });

//     signupTab.addEventListener("click", () => {
//         signupTab.classList.add("active");
//         loginTab.classList.remove("active");
//         signupForm.style.display = "block";
//         loginForm.style.display = "none";
//     });
// });

// JavaScript for toggling between the forms
$(document).ready(function () {
    $('#toggle').change(function () {
        if (this.checked) {
            $('.signin').hide();
            $('.signup').show();
        } else {
            $('.signin').show();
            $('.signup').hide();
        }
    });
});