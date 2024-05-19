function generateQR() {
    const inputData = document.getElementById("qrData").value;

    if (inputData.trim() === "") {
        alert("Please enter data");
        return;
    }

    const qrcode = new QRCode(document.getElementById("qrcode"), {
        text: inputData,
        width: 128,
        height: 128
    });

    saveToDatabase(inputData);
}

function saveToDatabase(dataToStore) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save.php", true);
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText); // Response from the server
        }
    };

    const postData = JSON.stringify({ data: dataToStore });
    xhr.send(postData);
}