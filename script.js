document.addEventListener("DOMContentLoaded", function () {
    const toggleLinks = document.querySelectorAll(".toggleContent");   
        // Display the selected content section
    document.getElementById('additionLink').addEventListener('click', function() {
        hideAllContent();
        document.getElementById('additionContent').style.display = 'inline-block';
    });

    document.getElementById('subtractionLink').addEventListener('click', function() {
        hideAllContent();
        document.getElementById('subtractionContent').style.display = 'inline-block';
    });

    document.getElementById('multiplicationLink').addEventListener('click', function() {
        hideAllContent();
        document.getElementById('multiplicationContent').style.display = 'inline-block';
    });

    document.getElementById('divisionLink').addEventListener('click', function() {
        hideAllContent();
        document.getElementById('divisionContent').style.display = 'inline-block';
    });
});

// Hide all content sections
function hideAllContent() {
    var contentDivs = document.querySelectorAll('div[id$="Content"]');
    contentDivs.forEach(function(div) {
        div.style.display = 'none';
    });
}    
function calcSum () {
    document.getElementById('frm_add').submit();
    let Num1 = document.getElementsByName("ramosAddNum1")[0].value;
    let Num2 = document.getElementsByName("ramosAddNum2")[0].value;
    let Sum = Number(Num1) + Number (Num2);
    document.getElementsByName("ramosSum")[0].value=Sum;
}

function calcDifference () {
    let Num1 = document.getElementsByName("ramosSubNum1")[0].value;
    let Num2 = document.getElementsByName("ramosSubNum2")[0].value;
    let Diff = Number(Num1) - Number (Num2);
    document.getElementsByName("ramosDifference")[0].value=Diff;
}

function calcProduct () {
    let Num1 = document.getElementsByName("ramosProdNum1")[0].value;
    let Num2 = document.getElementsByName("ramosProdNum2")[0].value;
    let Product = Number(Num1) * Number (Num2);
    document.getElementsByName("ramosProduct")[0].value=Product;
}

function calcQuotient () {
    let Num1 = document.getElementsByName("ramosDivNum1")[0].value;
    let Num2 = document.getElementsByName("ramosDivNum2")[0].value;
    let Quotient = Number(Num1) / Number (Num2);
    document.getElementsByName("ramosQuotient")[0].value=Quotient;
}
    function submitForm(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Get the form data
        const formData = new FormData(document.getElementById('frm_add'));

        // Make an AJAX request to the server (you can use vanilla JavaScript or a library like jQuery)
        fetch('actions.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.text())
        .then(data => {
            // Append the response from the server to the result element
            document.getElementById('msg').innerHTML += data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
      
