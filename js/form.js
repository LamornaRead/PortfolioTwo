// character counter vars 
let textArea = document.getElementById('message');
let characterCounter = document.getElementById('char-count');

//form vars

const emailFormat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
const email = document.getElementById('email');

//counter function 

const countCharacters = () => {
    let numberOfEnteredChars = textArea.value.length;
    let counter = numberOfEnteredChars;
    if(numberOfEnteredChars <= 40) {
        characterCounter.textContent = counter + '/40';
        characterCounter.style.color = 'red';
    } else {
        characterCounter.textContent = counter + '/40';
        characterCounter.style.color = '#24d36e';
    }
    (this).addEventListener("submit", function(){
        characterCounter.textContent = '';
    });
};

textArea.addEventListener("input", countCharacters);

// form function 

function validateForm() {
    let fields = [document.getElementById('fname'), 
                    document.getElementById('lname'),
                    document.getElementById('email'),
                    document.getElementById('subject'),
                    document.getElementById('message')
                    ];
    const errMessage = new Array();

    let err = 0;
    for (var i = 0; i < fields.length; i++) {
        if(fields[i].value == "") {
            err++
            fields[i].style.border = '1px solid red';
            fields[i].style.boxShadow = '0 0 20px red';
        } else {
            fields[i].style.boxShadow = '';
            fields[i].style.border = '';
        }
    }

    
    if(!emailFormat.test(email.value)) {
        err + 1;
        fields[2].style.border = '1px solid red';
        fields[2].style.boxShadow = '0 0 20px red';
        return false;
    } else {
        fields[2].style.border = '';
        fields[2].style.boxShadow = '';
    }

    if (err === 0) {
        // success.innerHTML = 'Submit Successful';
        success.style.color = '#24d36e';
        console.log('form success');
    } else {
        success.innerHTML = 'Fill Out Form Correctly';
        success.style.color = 'red';
        console.log('form failed');
        return false;
    }

    return true;
}


