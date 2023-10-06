
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

// Hide all content sections
function hideAllContent() {
    var contentDivs = document.querySelectorAll('div[id$="Content"]');
    contentDivs.forEach(function(div) {
        div.style.display = 'none';
    });
}    


function calcSum () {
    let frmId = document.getElementById("additionContent");
    let Num1 = document.getElementsByName("ramosAddNum1")[0].value;
    let Num2 = document.getElementsByName("ramosAddNum2")[0].value;
    let Sum = Number(Num1) + Number (Num2);
    document.getElementById("ramosSum").value = Sum;
}   
      
function calcDifference () {
    let Num1 = document.getElementsByName("ramosSubNum1")[0].value;
    let Num2 = document.getElementsByName("ramosSubNum2")[0].value;
    let Diff = Number(Num1) - Number (Num2);
    console.log("Difference: " + Diff);
    document.getElementById("ramosDifference").value = Diff;
}

function calcProduct () {
    let Num1 = document.getElementsByName("ramosProdNum1")[0].value;
    let Num2 = document.getElementsByName("ramosProdNum2")[0].value;
    let Product = Number(Num1) * Number (Num2);
    document.getElementById("ramosProduct").value = Product;
}

function calcQuotient () {
    let Num1 = document.getElementsByName("ramosDivNum1")[0].value;
    let Num2 = document.getElementsByName("ramosDivNum2")[0].value;
    let Quotient = Number(Num1) / Number (Num2);
    document.getElementById("ramosQuotient").value=Quotient;
}

 

function getFormId(form_Id){
    var form=document.getElementById(form_Id);

 console.log(form);

    form.addEventListener('submit',(e) => {
        e.preventDefault();

        const formData = new FormData(form);

        for(item of formData){
            console.log(item[0],item[1]);
        }

       const url = 'actions.php';

        // Fetch data from the PHP script
        fetch(url, {
            method: 'POST', // Set the HTTP method to POST
            body: formData,  // Set the form data as the request body
        })
        .then(response => {
            if (response.ok) {
                alert("success");
                return response.json();// Assuming the response is JSON
            } else {
                throw new Error('Network response was not ok');
            }
        })
        .then(data => {
            // Process the response data here (data sent from actions.php)
            console.log(data.message); // For example, log it to the console
        })
        .catch(error => {
            // Handle errors
            console.error('Fetch error:', error);
        });
    })
}
    
    


 
