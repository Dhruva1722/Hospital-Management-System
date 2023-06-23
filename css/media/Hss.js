function addData() {
    var name = document.getElementById("inputName").value;
    var disease = document.getElementById("inputDisease").value;
    var address = document.getElementById("inputAddress").value;
    var age = document.getElementById("inputAge").value;
    var gender = document.getElementById("inputGender").value;
    var roomno = document.getElementById("inputRoomno").value;
  
    var patient = {
      name: name,
      disease: disease,
      address: address,
      age: age,
      gender: gender,
      roomno: roomno
    };
  
    // Convert patient object to JSON string
    var patientJSON = JSON.stringify(patient);
  
    // Store patient data in localStorage
    localStorage.setItem("patient", patientJSON);
  }
  