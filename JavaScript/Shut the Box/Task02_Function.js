var Die1;
var Die2;
function Rand() {
    Die1 = Math.floor(Math.random() * 6 + 1);
    Die2 = Math.floor(Math.random() * 6 + 1);
}
function Remaining() {
    var count = 0;
    var boxes = document.getElementsByClassName("shut");
    for (const box of boxes) {
        if (box.disabled == false) {
            count = count + parseInt(box.value);
        }
    }
    if (count <= 6) {
        return true;
    }
    else {
        return false;
    }
}

function rollDice() {
    Rand();
    if (!Remaining()) {
        document.getElementById("result").innerText = "Result=" + Die1 + "," + Die2;
    }
    else {
        document.getElementById("result").innerText = "Result=" + Die1;
        Die2 = 0;
    }
    document.getElementById("submit").disabled = false;
    document.getElementById("rollBtn").disabled = true;
    if (!checkRemaining()) {
        endGame();
    }
}

function Check() {
    var sum = 0;
    var boxes = document.getElementsByClassName("shut");
    for (const box of boxes) {
        if (box.checked == true) {
            sum = sum + parseInt(box.value);
        }
    }
    if (sum != Die1 + Die2) {
        alert("Wrong Move Made");

    }
    else {
        for (const box of boxes) {
            if (box.checked == true) {
                box.checked = false;
                box.disabled = true;
            }
        }
        document.getElementById("submit").disabled = true;
        document.getElementById("rollBtn").disabled = false;
        if (AllChecked()) {
            endGame();
        }
    }
}

function startGame() {
    var boxes = document.getElementsByClassName("shut");
    for (const box of boxes) {
        box.checked = false;
    }
    document.getElementById("submit").disabled = true;
}
document.getElementById("roll").onload = startGame();

function endGame() {
    var count = 0;
    var boxes = document.getElementsByClassName("shut");
    for (const box of boxes) {
        if (box.disabled == true) {
            count = count + parseInt(box.value);
        }
    }
    startGame();
    alert("GAME OVER\nYour Score is:" + count)
}

function checkRemaining() {
    var sum = 0;
    var i = 0;
    var count = 0;
    var arr = new Array();
    var boxes = document.getElementsByClassName("shut");
    for (const box1 of boxes) {
        if (box1.disabled == false) {
            count = parseInt(box1.value);
            arr[i] = count;
            i++;
        }
    }
    return SubsetSumCheck(arr, arr.length, Die1 + Die2);
}
function SubsetSumCheck(arr) {
    var sub = new Array(Math.pow(2, arr.length));
    var bin = new Array(Math.pow(2, arr.length));
    for (var i = 0; i < Math.pow(2, arr.length); i++) {
        sub[i] = new Array(arr.length);
    }
    for (var i = 0; i < Math.pow(2, arr.length); i++) {
        bin[i] = new Array(arr.length);
    }
    for (var i = 0; i < Math.pow(2, arr.length); i++) {
        for (var j = 0; j < arr.length; j++) {
            sub[i][j] = arr[j];
        }
    }
    console.log(sub);
    var count = 0;
    for (var i = 0; i < Math.pow(2, arr.length); i++) {
        for (var j = 0; j < arr.length; j++) {
            bin[i][j] = 0;
        }
    }
    for (var i = 0; i < Math.pow(2, arr.length); i++) {
        var ch = false;
        var x = 0;
        var s = (count >>> 0).toString(2);
        var temp = new Array(arr.length);
        for (let k = 0; k < arr.length; k++) {
            if (k == temp.length - s.length) {
                temp[k] = s[x];
                x++;
                ch = true;
            }
            else {
                if (ch == false) {
                    temp[k] = 0;
                }
                else {
                    temp[k] = s[x];
                    x++;
                }
            }
        }
        for (var j = 0; j < arr.length; j++) {
            bin[i][j] = temp[j];
        }
        count++;
    }
    console.log(bin);
    for (var i = 0; i < Math.pow(2, arr.length); i++) {
        var sum = 0;
        for (var j = 0; j < arr.length; j++) {
            if (bin[i][j] == "1") {
                sum = sum + sub[i][j];
                console.log(sub[i][j]);
                console.log(sum);
            }
        }
        if (sum == Die1 + Die2) {
            return true;
        }
    }
    return false;
}

function AllChecked() {
    var boxes = document.getElementsByClassName("shut");
    var check = true;
    for (const box1 of boxes) {
        if (box1.disabled == false) {
            check = false;
        }
    }
    return check;
}