// character counter vars 
let textArea = document.getElementById('message');
let characterCounter = document.getElementById('char-count');

//counter function 

const countCharacters = () => {
    let numberOfEnteredChars = textArea.value.length;
    let counter = numberOfEnteredChars;
    if(numberOfEnteredChars <= 140) {
        characterCounter.textContent = counter + '/140';
        characterCounter.style.color = 'red';
    } else {
        characterCounter.textContent = counter + '/140';
        characterCounter.style.color = '#24d36e';
    }
    (this).addEventListener("submit", function(){
        characterCounter.textContent = '';
    });
};

textArea.addEventListener("input", countCharacters);

// form function 

function validateForm() {
    var fields = new Array(); 
    var fields = [document.getElementById('fname'), 
                    document.getElementById('lname'),
                    document.getElementById('email'),
                    document.getElementById('subject'),
                    document.getElementById('message')
                    ];
    var errMessage = new Array();
    var errMessage = [document.getElementById('fnameErr'),
                        document.getElementById('lnameErr'), 
                        document.getElementById('emailErr'), 
                        document.getElementById('subjectErr'),
                        document.getElementById('messageErr')
                    ];
    var err = 0;
    for (var i = 0; i < fields.length; i++) {
        if(fields[i].value == "") {
            err++
            fields[i].style.border = '1px solid red';
            fields[i].style.boxShadow = '0 0 20px red';
            errMessage[i].innerHTML = `Please fill in ${fields[i].name}`;
        } else {
            fields[i].style.boxShadow = '';
            fields[i].style.border = '';
            errMessage[i].innerHTML = '';
        }
    }

    if (err === 0) {
        success.innerHTML = 'Submit Successful';
        success.style.color = '#24d36e';
        console.log('form success');
    } else {
        success.innerHTML = 'Fill Out Form Correctly';
        success.style.color = 'red';
        console.log('form failed');
        return false;
    }

    // document.addEventListener('submit', function(event) {
    //     event.preventDefault();
    //     event.target.reset();
    // });
    return true;
}


