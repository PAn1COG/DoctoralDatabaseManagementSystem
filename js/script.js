function validateInsertForm(){
    var stateAb = document.getElementById("stateAb").value.trim();
    var stateName = document.getElementById("stateName").value.trim();
    if(stateName === '' || stateAb === ''){
        alert("Please fill valid data");
        return false;
    }else{
        return true;
    }
}