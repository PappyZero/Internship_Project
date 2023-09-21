// Frequently Asked Questions start here
const faqQuestions = document.querySelectorAll(".faq_row_ques");
const faqAnswers = document.querySelectorAll(".faq_row_ans");

faqQuestions.forEach((question, index) => {
    question.addEventListener("click", () => {
        // Hide all answers
        faqAnswers.forEach((answer) => {
            answer.style.display = "none";
        });

        // Toggle the display of the clicked answer
        faqAnswers[index].style.display = "block";
    });
});

// Show the default-open answer on page load
document.addEventListener("DOMContentLoaded", () => {
    const defaultOpenAnswer = document.querySelector(".default-open");
    if (defaultOpenAnswer) {
        defaultOpenAnswer.style.display = "block";
    }
});
// Frequently Asked Questions ends here