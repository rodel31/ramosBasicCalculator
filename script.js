document.addEventListener("DOMContentLoaded", function () {
    const toggleLinks = document.querySelectorAll(".toggleContent");

    toggleLinks.forEach(function (toggleLink) {
        toggleLink.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = toggleLink.getAttribute("data-target");
            const targetContent = document.getElementById(targetId);

            // Hide all content sections
            const allContent = document.querySelectorAll("div[id$='Content']");
            allContent.forEach(function (content) {
                content.style.display = "none";
            });

            // Display the selected content section
            targetContent.style.display = "inline-block";
        });
    });
});
