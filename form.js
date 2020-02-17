function formData () {
    let firstName = document.getElementById('name'.value);

    if (name === '') {
        alert('Please fill in');
        document.getElementById('firstName').focus();
    }
    return false
    }

    function getDealers () {
        let selection = document.getElementById('province');
        let userInput = selection.options[selection.selectedIndex].value;
        if(userInput == 'kwazulunatal') {
            document.getElementById('durban');
        }else {
            document.getElementById('select');
        }
        return false;
    }
